<?php
    function OpenCon($dbName)
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = '3"vE6ÞøÐi{§l|#SUãuû~H)Ig4¬¬5¼Y0ð·ØáhÇiÏOûÌ}µ§",s©ÏmõÊ|ý;Îõíe';
            $db = $dbName;
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
            
            return $conn;
        }
        
    function CloseCon($conn)
        {
            $conn -> close();
        }
        
?>