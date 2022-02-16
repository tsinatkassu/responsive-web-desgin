<?php
$name=$_POST["name"];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$code=$_POST['code'];

if(!empty($name)||!empty($age)||
!empty($phone)||!empty($email)
||!empty($address)||!empty($code))

{


//shift

//connection
//shift here
 $host= "localhost";
$dbUsername= "root";
$dbPassword= "";
$dbname= "registration form";

   
//connection here
$conn=new mysqli.connect($host, $dbUsername,  $dbPassword,$dbname);


if(mysqli-connect-error()){
    die('connect Error('.mysqli-connect-error().')'.mysqli-connect-error());
}else{
    $SELECT="SELECT email from register where email=?limit 1";
    $INSERT="INSERT INto register(name,age,phone,email,
    address,code) values(?,?,?,?,?,?,)";
    //prepare stm
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;

   

    if($num==0){
        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("sssiii",$name,$age,$phone,$email,$address,$code);
        $stmt->execute();
        echo"new record inserted successfully";
    }else{
        echo"someone already register using this email";

    }
    $stmt->close();
    $stmt->close();
}



}
else {
    echo "all filed are required";
 }

?>



