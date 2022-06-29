<?php 
require_once '/Applications/MAMP/htdocs/ecommerce/settings.php';
$page_name = htmlspecialchars(basename($_SERVER["PHP_SELF"], '.php'), ENT_QUOTES, "utf-8");

mi_logout();
if(isset($_COOKIE['miadmin_login']) && $_COOKIE['miadmin_login'] != '') {
  header("Location: ".ADMIN_URL);
}
if(isset($_POST['submit'])){

if(empty($_POST['log']) || empty($_POST['pwd'])){
$error = '
<div id="login_error"> <strong>Error</strong>: The username field is empty.<br>
<strong>Error</strong>: The password field is empty.<br>
</div>';
}
if(empty($_POST['log'])){
$error = '
<div id="login_error"> <strong>Error</strong>: The username field is empty.<br>
</div>';
}
 if(empty($_POST['pwd'])){
    $error = '
    <div id="login_error"><strong>Error</strong>: The password field is empty.<br>
    </div>';
    }

    $query = "SELECT * FROM  users WHERE user_login =? AND user_pass =?";
   
    $statement =  $db->prepare($query);
    $statement->execute(array($_POST['log'],md5($_POST['pwd'])));
    // print_r($statement->execute(array($_POST['log'],$_POST['pwd'])));
    
    $count = $statement->rowCount();
    $fetch = $statement->fetch();
    $redirect = $_POST['redirect_to'];
    // echo $count;
    // die();
    if($count > 0){
      $id = sha1(mt_rand(1, 90000) . 'SALT');
      // $id = "login_cookie";
      setcookie('miadmin_login', $id, time() + (86400 * 1), "/");
      header("Location: ".$redirect);
    }else{
      $error = '
    <div id="login_error">The username <strong>'.$_POST['log'].'</strong> is not registered on this site. If you are unsure of your username, try your email address instead.<br>
    </div>';
    }
    // [':name'=>$name,':email'=>$email]
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <base href="<?php echo ADMIN_URL;?>">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body class="login">
<div id="login">
<h1><a href="<?php echo BASE_URL; ?>">Powered by MI ADMIN</a></h1>
<?php if(isset($error)){
      echo $error;
  } ?>
  <!-- <p class="error"> You are now logged out.<br>
</p> -->
  <form id="loginform" name="loginform" method="POST" <?php echo ((isset($error))?'class="shake"':''); ?>>
<p>
<label for="user_login">Username or Email Address</label>
<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
</p>
<p class="user-pass-wrap">
<label for="user_login">Password</label>
<div class="pwd">
<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
</div>
</p>
<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> 
<label for="rememberme">Remember Me</label></p>
<p class="submit">
<input type="submit" name="submit" id="mi-submit" class="button" value="Log In">
<input type="hidden" name="redirect_to" value="<?php echo BASE_URL; ?>admin">
</p>
  </form>
  <p id="nav">
<a href="<?php echo BASE_URL; ?>lost-password/">Lost your password?</a>
</p>
  </div>  
</body>
</html>