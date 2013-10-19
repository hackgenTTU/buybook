<?php
    class Book{
        private $db;
        public function __construct($db){
            $this->db = $db;
        }
        public function showBookList($num){
            $sth = $this->db->prepare('select * from `booklist` order by `created_at` desc LIMIT :num');
            $sth->bindValue(':num', $num, PDO::PARAM_INT);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }
        public function getBookListByUID($uid){
            $sth = $this->db->prepare('select * from `booklist` where `uid`=:uid');
            $sth->execute(array(':uid'=>$uid));
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getBookListInfo($blid){
            $sth = $this->db->prepare('select * from `booklist` where `blid`=:blid');
            $sth->execute(array(':blid'=>$blid));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getBookListDetail($blid){
            $sth = $this->db->prepare('select * from `books` where `blid`=:blid');
            $sth->execute(array(':blid'=>$blid));
            $result = $sth->fetchALl(PDO::FETCH_ASSOC);
            return $result;
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
        public function addBookList($bl_name, $bl_desc, $uid, $deadline, $book_data = array()){
            
            if($this->checkUidExist($uid)){
                $sth = $this->db->prepare('insert into `booklist`(`blist_name`,`blist_desc`,`uid`,`created_at`, `status`, `deadline`)values(:bl_name, :bl_desc, :uid, :created_at, "open", :deadline)');
                $sth->execute(array(
                    ':bl_name'=>trim($bl_name),
                    ':bl_desc'=>trim($bl_desc),
                    ':uid'=>$uid,
                    ':created_at'=>date('Y-m-d G:i:s',time()),
                    ':deadline'=>$deadline
                ));
                $blid = $this->db->lastInsertId();
                $bid_array = array();
                foreach ($book_data as $book) {
                    $sth = $this->db->prepare('insert into `books`(`blid`, `book_name`, `book_author`, `isbn`, `price`, `publisher`) values (:blid, :book_name, :book_author, :isbn, :price, :publisher)');
                    $sth->execute(array(
                        ':blid'=>$blid,
                        ':book_name'=>$book['name'],
                        ':book_author'=>$book['author'],
                        ':isbn'=>$book['isbn'],
                        ':price'=>$book['price'],
                        ':publisher'=>$book['publisher']
                    ));
                    array_push($bid_array, $this->db->lastInsertId());
                }
                return $bid_array;
            }else{
                throw new Exception("此用戶不存在");
                return 0;  
            }
            
        }
        public function editBookList(){

        }
        public function getBookListStatus($blid){
            $sth = $this->db->prepare('select `status` from `booklist` where `blid`=:blid');
            $sth->execute(array(':blid'=>$blid));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            return $result['status'];
        }
        public function setBookListStatus($blid,$status){
            $sth = $this->db->prepare('update `booklist` set `status`=:status where `blid`=:blid');
            if($this->isBookListExist($blid)){
                $sth->execute(array(
                    ':blid'=>$blid,
                    ':status'=>$status
                ));
                
                return 1;
            }else{
                throw new Exception('此書單不存在');
                return 0;
            }
            
        }
        public function reserveBook($uid, $bid, $blid, $num){
            
            if($this->checkUidExist($uid)){
                if($this->isBookListExist($blid)){
                    $sth = $this->db->prepare('select count(`book_name`) from `books` where `bid` = :bid and `blid` = :blid');
                    $sth->execute(array(
                        ':bid'=>$bid,
                        ':blid'=>$blid
                    ));
                    $result = $sth->fetch(PDO::FETCH_ASSOC);
                    if((int)$result['count(`book_name`)'] == 1){
                        $sth = $this->db->prepare('insert into `book_reserve`(`uid`, `bid`, `blid`, `num`, `price`,`total_price`) values (:uid, :bid, :blid, :num, :price, :total_price)');        
                        $sth->execute(array(
                            ':uid'=>$uid,
                            ':bid'=>$bid,
                            ':blid'=>$blid,
                            ':num'=>$num,
                            ':price'=>$this->getPrice($bid),
                            ':total_price'=>($num * $this->getPrice($bid))
                        ));
                        return 1;
                    }else{
                        throw new Exception('此書籍不存在');
                        return 0;    
                    }
                    
                }else{
                    throw new Exception('此書單不存在');
                    return 0;    
                }
                
            }else{
                throw new Exception('此用戶不存在');
                return 0;
            }
        }
        public function getPrice($bid){
            $sth = $this->db->prepare('select `price` from `books` where `bid` = :bid');
            $sth->execute(array(':bid'=> $bid));
            $result = $sth->fetch(PDO::FETCH_ASSOC);

            return $result['price'];
        }
        public function getName($uid){
            $sth = $this->db->prepare('select `realname` from `users` where `uid` = :uid');
            $sth->execute(array(':uid'=> $uid));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            return $result['realname'];
        }
        public function getBooksInfo($bid){
            $sth = $this->db->prepare('select * from `books` where `bid` = :bid');
            $sth->execute(array(':bid'=>$bid));
            return $sth->fetch(PDO::FETCH_ASSOC);
        }
        public function getReserveList($blid){
            if($this->isBookListExist($blid)){
                $sth = $this->db->prepare('select * from `book_reserve` where `blid` = :blid');
                $sth->execute(array(':blid'=>$blid));
                
                $temp = $sth->fetchAll(PDO::FETCH_ASSOC);
                $result = array();
                foreach ($temp as $row) {

                    $bl_name = $this->getBookListInfo($blid);
                    $bl_name = $bl_name['blist_name'];
                    $book_name = $this->getBooksInfo($row['bid']);
                    $book_name = $book_name['book_name'];
                    array_push($result, array(
                        'rid'=>$row['rid'],
                        'uid'=>$row['uid'],
                        'realname'=>$this->getName($row['uid']),
                        'book_name'=>$book_name,
                        'booklist_name'=>$bl_name,
                        'num'=>$row['num'],
                        'price'=>$row['price'],
                        'total_price'=>$row['total_price'],
                        'paid_money'=>$row['paid_money']
                    ));
                }
                return $result;
            }else{
                throw new Exception('此書單不存在');
                return 0;
            }
            

        }
        public function exportReserveListXLS(){

        }
        public function paid_money($rid, $paid){
            $sth = $this->db->prepare('update `book_reserve` SET `paid_money` = :paid where `rid` = :rid');
            $reserveInfo = $this->getReserveInfo($rid);
            if(!$reserveInfo){
                throw new Exception("無此項目存在");
                return 0;
            }else{
                $sth->execute(array(
                    ':rid'=>$rid,
                    ':paid'=> $paid
                ));
                return 1;
            }
            
        }
        public function getReserveInfo($rid){
            $sth = $this->db->prepare('select * from `book_reserve` where `rid` = :rid');
            $sth->execute(array(':rid'=>$rid));
            return $sth->fetch(PDO::FETCH_ASSOC);
        }
        public function isBookListExist($blid){
            $sth = $this->db->prepare('select count(`blid`) from `booklist` where `blid` = :blid');
            $sth->execute(array(':blid'=>$blid));
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if((int)$result['count(`blid`)'] == 0){
                return 0;
            }else{
                return 1;
            }
            
        }
        
    }
?>