<?php
//host database info
//rsrokiin_munem -database
//user named- “rsrokiin_userName”
//password- AaBbCc1234##$$


$host="localhost";
$dbUser="rsrokiin_userName";
$dbPwd="AaBbCc1234##$$";
$dbName="rsrokiin_munem";



$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);

if($connect==false){
    echo "<font color='red'>Error Established Database Connection</font>";
}

?>