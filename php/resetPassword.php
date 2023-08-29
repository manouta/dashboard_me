   <?php
   if (isset($_POST["reset-request-submit"])) {
      
 $selector=bin2hex(random_bytes(8));

 $token=random_bytes(32);

 $expires=date("U")+1800;

 require 'connecter.php';

 $userEmail=$_POST["email"];

 $sql="DELETE FROM pwdreset WHERE pwdRestEmail=?";

$stmt=mysqli_stmt_init($bd);

if (!mysqli_stmt_prepare($stmt,$sql)) {

    echo "there was an error !";
    exit();

}else{

    mysqli_stmt_bind_param($stmt,"s",$userEmail);
    mysqli_stmt_execute($stmt);

}
$sql="INSERT INTO pwdreset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires)VALUES(?,?,?,?);";

$stmt=mysqli_stmt_init($bd);

if (!mysqli_stmt_prepare($stmt,$sql)) {

    echo "there was an error !";
    exit();

}else{

$hashedToken=password_hash($token,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
mysqli_stmt_execute($stmt);

}


mysqli_stmt_close($stmt);
mysqli_close();

$to=$userEmail;
$subject='reset your pzssword for mumts';
$message='<p>We received a password request.the password is </p>';

mail($to, $subject, $message);

header("location:password.php?reset=success");


   }else{
    echo"<script>alert('session expired ! ')</script>";
    header("location:login.html");
   }
   ?>