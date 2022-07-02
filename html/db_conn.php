<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data inserted</title>
</head>
<body>
    <center>
        <?php
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = '3"vE6ÞøÐi{§l|#SUãuû~H)Ig4¬¬5¼Y0ð·ØáhÇiÏOûÌ}µ§",s©ÏmõÊ|ý;Îõíe';
            $db = "lajmi_new";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            
            // Taking all 5 values from the form data(input)
            $nam = $_REQUEST['nam'];
            $gen = $_REQUEST['gen'];
            $cat = $_REQUEST['cat'];
            $des = $_REQUEST['des'];
            $fwl = $_REQUEST['fwl'];
            $sit = $_REQUEST['sit'];
            $dat = date('Y-m-d',strtotime($_REQUEST['dat']));
            $req = array($nam,$gen,$cat,$des,$sit,$dat);

            $err = false;

            foreach ($req as $field) {
                if (empty($field)) {
                    $err = true;
                    break;
                }
            }
            if ($err) {
                echo "<h2>FILL REQUIRED FIELDS</h2>";
            }  
            else {
                $sql = "INSERT INTO $cat VALUES ('$nam','$des','$gen','$fwl')";
                        
                if (mysqli_query($conn, $sql)) {
                    echo "<h3>data stored in a database successfully.";
                } 
                else {
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
            }

            echo $dat;
            // Close connection
            mysqli_close($conn)
        ?>
    </center>
</body>
</html>