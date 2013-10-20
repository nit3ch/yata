<html>
<head>
<?php require_once("facebook.php"); ?>
	<title>
	Twitter profile
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<div class=col-xs-container>
<div class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> Simple Twitter Profile</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="redirect.php">SignIn with twitter</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      <div class=container>
<form role='form' action="tweets.php" method="get">
	<div=form-group>
		<label for='twitterusername'>Twitter username : </label>
		<input class='form-control' type="text" name="username">
	</div>
	<input type="submit" value="submit">
</form><br>
<?php 
require_once("facebook.php");
$config = array();
  $config['appId'] = '449189661827284';
  $config['secret'] = '4f7a96ea42fbe10a2641a1d23d5ccd2b';
  $config['fileUpload'] = false; // optional
  $facebook = new Facebook($config);
  $ret = $facebook->api('nit3ch');
  $user_id = $facebook->getUser();
  print_r($user_id);
  $login_url = $facebook->getLoginUrl();
      echo 'Please <a href="' . $login_url . '">login.</a>';
?>
</div>
</div>
</html>