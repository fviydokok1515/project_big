<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://webs.rmutl.ac.th/assets/upload/files/2018/11/20181114113020_50956.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form class="email-login" action="login_chek.php" method="POST">
      <input  type="text" id="login" class="fadeIn second" name="Username" placeholder="Username">
      <input  type="text" id="password" class="fadeIn third" name="Password" placeholder="password">
      <input  type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <!-- onclick="window.location.href = 'index.php?act=login_chek';" -->
    <form class="email-signup" >
      <input type="text" id="login" class="fadeIn second" name="เลขบัตรประจำตัวประชาชน" placeholder="เลขบัตรประจำตัวประชาชน">
      <input type="text" id="password" class="fadeIn third" name="คำนำหน้าชื่อ" placeholder="คำนำหน้าชื่อ">
      <input type="text" id="login" class="fadeIn second" name="ชื่อ" placeholder="ชื่อ">
      <input type="text" id="password" class="fadeIn third" name="นามสกุล" placeholder="นามสกุล">
      <input type="text" id="login" class="fadeIn second" name="" placeholder="รหัสผ่าน">
      <input type="text" id="password" class="fadeIn third" name="" placeholder="รหัสผ่านยืนยัน">
      <input type="text" id="password" class="fadeIn third" name="" placeholder="สาขา">
      <input type="text" id="password" class="fadeIn third" name="" placeholder="ตำแหน่ง">
      <input type="text" id="password" class="fadeIn third" name="" placeholder="ตำแหน่งพิเศษ">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="./../component/index.php">Forgot Password?</a>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
      <script >
    // $('.email-signup').hide();

    $('#login-box-link').add(function(){
    $('.email-login').delay(100).fadeIn(100);
    $('.email-signup').fadeOut(100);
    $('#login-box-link').addClass('active');
    $('#signup-box-link').removeClass('active');
  });
$(document).ready( function (){
  $('#signup-box-link').click(function(){
    $(".email-login").fadeOut(100);
    $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
  });
   
});
$(document).ready( function(){
  $('#login-box-link').click(function(){
    $('.email-login').delay(100).fadeIn(100);
    $('.email-signup').fadeOut(100);
    $('#login-box-link').addClass('active');
    $('#signup-box-link').removeClass('active');
  });
   
});

      </script>
</body>
</html>