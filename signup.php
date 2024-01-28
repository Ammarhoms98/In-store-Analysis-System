<?php
ob_start();
require("conf/insertuser.php");

?>

<!DOCTYPE html>
 <html>
    <head>
     <title>SIGNUP Form</title>
      <style> 
      body { background-color: #1a1c20; }
      .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    margin: 20px auto;
    transform: translate(-50%, -55%);
    background: rgba(0,0,0,.9);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
  }

  .login-box p:first-child {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .login-box .user-box {
    position: relative;
  }

  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }

  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #fff;
    font-size: 12px;
  }

  .login-box button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    font-weight: bold;
    color: #fff;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 3px;
    background: transparent;
    border: none;
    cursor: pointer;
  }

  .login-box button:hover {
    background: #fff;
    color: #272727;
    border-radius: 5px;
  }

  .login-box button span {
    position: absolute;
    display: block;
  }

  .login-box button span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #fff);
    animation: btn-anim1 1.5s linear infinite;
  }

  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }

    50%,100% {
      left: 100%;
    }
  }

  .login-box button span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #fff);
    animation: btn-anim2 1.5s linear infinite;
    animation-delay: .375s;
  }

  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }

    50%,100% {
      top: 100%;
    }
  }

  .login-box button span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #fff);
    animation: btn-anim3 1.5s linear infinite;
    animation-delay: .75s;
  }

  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }

    50%,100% {
      right: 100%;
    }
  }

  .login-box button span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #fff);
    animation: btn-anim4 1.5s linear infinite;
</style>

</head>
<body>

<div class="login-box">
    <p>SIGNUP</p>
    <form method="post">
    <div class="user-box">
        <input required name="nam" type="text">
        <label>Name</label>
      </div>

      <div class="user-box">
        <input required name="email" type="text">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input required name="password" type="password">
        <label>Password</label>
      </div>
      <div class="user-box">
        <input required name="departmentname" type="text">
        <label>DEPARTMENT name</label>
      </div>
      <div class="user-box">
        <input required name="departmentid" type="text">
        <label>department id</label>
      </div>
      <button type="submit" name="valider" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        SIGNUP
      </button>
    </form>
    <!--<p color='red'>Have an account? Log in <a href="login.php" class="a2">Sign in!</a></p>-->
  </div>
</body>
  </html>





  <?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['nam']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['departmentid']) AND isset($_POST['departmentname']))
    {
    if(!empty($_POST['nam']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['departmentid'])AND !empty($_POST['departmentname']))
	    {
	    	$name = htmlspecialchars(strip_tags($_POST['nam']));
	    	$email = htmlspecialchars(strip_tags($_POST['email']));
	    	$pass= htmlspecialchars(strip_tags($_POST['password']));
        $depid = ($_POST['departmentid']);
        $depname= htmlspecialchars(strip_tags($_POST['departmentname']));
        
          try 
          {
            insertuser($name, $email, $pass,$depid,$depname);
           // insertemp($name,$depname,$depid);

            header("location:conf/viewemp.php");
            ob_end_flush();
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>