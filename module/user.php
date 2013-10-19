<?php
    class User{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }
        public function checkUsernmExist($usernm){
            $sth = $this->db->prepare('select count(`usernm`) from `users` where `usernm`=:usernm');
            
            $sth->execute(array(':usernm'=>$usernm));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if($result['count(`usernm`)']=='0'){
                return 0;
            }else{
                return 1;
            }
            
        }
        public function checkUidExist($uid){
            $sth = $this->db->prepare('select count(`uid`) from `users` where `uid`=:uid');
            
            $sth->execute(array(':uid'=>$uid));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if($result['count(`uid`)']=='0'){
                return 0;
            }else{
                return 1;
            }
            
        }
        public function hash($str){
            return md5(sha1($str));
        }
        public function addUser($usernm, $passwd, $re_passwd, $realname){
            $usernm = trim($usernm);
            $realname = trim($realname);

            if(!$this->checkStrLen($passwd,6,40)){
                return '密碼太短，需要6~40字';
            }
            if(!$this->checkStrLen($usernm,4,100)){
                return '帳號太短，請至少輸入4字元';
            }
            if($usernm == '' OR $realname == '' OR $passwd == ''){
                return '帳號、密碼或真實姓名其中一項未輸入';
            }else{
                if(!$this->checkUsernmExist($usernm)){
                    if($passwd == $re_passwd){
                        $sth = $this->db->prepare('insert into `users`(`usernm`,`password`,`realname`,`created_at`) values (:usernm,:password,:realname,:created_at)');
                        $sth->execute(array(
                            ':usernm'=>$usernm,
                            ':password'=>$this->hash($passwd),
                            ':realname'=>$realname,
                            ':created_at'=>date('Y/m/d G:i',time()),
                        ));
                        $sth = $this->db->prepare('select `uid` from `users` where `usernm`=:usernm');
                        $sth->execute(array(':usernm'=>$usernm));
                        $result = $sth->fetch(PDO::FETCH_ASSOC);
                        return $result['uid'];
                    }else{
                        return '兩次密碼輸入不同';
                    }
                }else{
                    return '此用戶名稱已存在';
                }
            }
        }
        public function checkStrLen($str, $min, $max){
            if(strlen($str) >= $min){
                if(strlen($str) <= $max){
                    return 1;
                }else{
                    return '字數超過';
                }
            }else{
                return '字數不足';
            }
        }
        public function sendEmail($uid, $email){
            $sth = $this->db->prepare('insert into `email_verification`(`uid`,`email`,`verification_code`,`created_at`) values(:uid,:email,:code,:created_at)');

            if($this->checkUidExist($uid)){
                if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $code = md5(date('Y/m/d G:i:s',time()) . $uid . $email);
                    $sth->execute(array(
                        ':uid'=>$uid,
                        ':email'=>$email,
                        ':code'=>$code,
                        ':created_at'=>date('Y/m/d G:i:s',time())
                    ));    
                    return '已寄出信件，請輸入驗證碼';    
                }else{
                    return '信箱格式錯誤';
                }

            }else{
                return '不存在此用戶';
            }
            
        }
        public function checkEmail($verification_code){
            $sth = $this->db->prepare('select * from `email_verification` where `verification_code`=:code');
            $sth->execute(array(':code'=>$verification_code));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if(!$result){
                return '驗證碼錯誤';
            }else{
                try{
                    $this->db->beginTransaction();

                    $sth = $this->db->prepare('update `users` set `email`=:email where `uid`=:uid');
                    $sth->execute(array(
                        ':email'=>$result['email'],
                        ':uid'=>$result['uid']
                    ));
                    $sth = $this->db->prepare('delete from `email_verification` where `verification_code`=:code');
                    $sth->execute(array(':code'=>$verification_code));

                    $this->db->commit();
                    return '已認證信箱';
                }catch(Exception $e){
                    $this->db->rollback();
                    return 'error';
                }
                
            }

        }
        public function sendSchoolEmail(){

        }
        public function checkSchoolEmail(){

        }
        
        public function getUserData($uid){
            $sth = $this->db->prepare('select * from `users` where `uid`=:uid');
            $sth->execute(array(
                ':uid'=>$uid
            ));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if(!$result){
                return '不存在此用戶';
            }else{
                return json_encode($result);    
            }
            
        }
        public function setUserData(){

        }
        public function delUser(){

        }

        public function getUserPwd($usernm){
            $sth = $this->db->prepare('select `password` from `users` where `usernm`=:usernm');
            $sth->execute(array(
                ':usernm'=>$usernm
            ));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if(!$result){
                return 0;
            }else{
                return $result['password'];    
            }
            
        }

        public function setUserPwd(){

        }
        public function login($usernm, $passwd){
            $cur_passwd = $this->getUserPwd($usernm);
            if(!$cur_passwd){
                return '不存在此用戶';
            }else{
                if($this->hash($passwd) != $cur_passwd){
                    return '密碼錯誤';
                }else{
                    return 1;
                }
            }

        }
        public function logout(){
            $_SESSION = null;
        }
    }
?>