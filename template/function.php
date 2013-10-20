<?php
    function post($target,$data){
        $curl=curl_init();
        $options = array(
                CURLOPT_URL=>'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . (substr(trim($target),1,1)=='/'?'':'/') . $target,
                CURLOPT_HEADER=>0,
                CURLOPT_VERBOSE=>0,
                CURLOPT_RETURNTRANSFER=>true,
                CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
                CURLOPT_POST=>true,
                CURLOPT_POSTFIELDS=>http_build_query($data),
        );
        curl_setopt_array($curl,$options);
        $result=curl_exec($curl);
        curl_close($curl);
        return $result;
    }
    function key_gen(){
        return md5(floor(date('i',time())/10) . date('G',time()) . '5Lz9w8xZGEmfxafN');
    }
?>