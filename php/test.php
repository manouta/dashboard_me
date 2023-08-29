<?php
session_start();
 function login_verify($usermail,$userpass){
if (isset($_SESSION['email']))         //////session test
{ 
//stay home page   
}elseif (isset($_POST['Login'])) {        ///////login test
      
            if($_POST['email']==$usermail AND $_POST['password']==$userpass){
             $_SESSION['email']=$usermail;
           
            }else{

            echo"<script>alert('email or password incorrect !')</script>";
            echo"<script>location.href='../login.html'</script>";
                  }

     }else{ 
   
                  echo"<script>alert('session expired !')</script>";
                  echo"<script>location.href='../login.html'</script>";
         

      }
}

 
function session_verify(){

	
 if (isset($_SESSION['email'])) 
 {
     
 }else{

            echo"<script>alert('session expired !')</script>";
            echo"<script>location.href='../login.html'</script>";
      }


}

function logup(){
      require 'connecter.php';
      if (isset($_POST['Logup'])) { 
      $req=$bd->prepare('INSERT INTO admins(admin_username,admin_email,admin_fullname,admin_password) VALUES(:username,:email,:fullname,:psw)');
      $req->execute(array( 'username'=> $_POST['name'], 'email'=> $_POST['mail'], 'fullname'=> $_POST['fullname'],'psw'=> $_POST['password']));
    
      echo"<script>alert('acount readdy,try it !')</script>";
      echo"<script>location.href='../login.html'</script>";
} 
}
?>