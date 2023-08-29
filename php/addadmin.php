<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

      <form action="test.php" class="login-form" method="POST">
        <h1>LogUp</h1>

        <div class="txtb">
          <input placeholder="username" type="text" name="name" id="name">
        </div>

        <div class="txtb">
          <input placeholder="userpassword" type="password" name="password" id="password">
        </div>
        <div class="txtb">
          <input placeholder="userfullname" type="text" name="fullname" id="fullname" >
        </div>
        <div class="txtb">
          <input placeholder="usermail" type="mail" name="mail" id="mail">
        </div>
        
        <input type="submit" class="logbtn" value="Logup" name="Logup" >

        

      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
 <?php
 require 'test.php';
 logup();
?> 
    

 </script>
</div>
  </body>
</html>
