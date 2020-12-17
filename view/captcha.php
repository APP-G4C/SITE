<!--> Captcha <!-->
<?php
 require_once('C:\MAMP\htdocs\SITE\recaptcha\autoload.php');
 if(isset($_POST['submitpost'])) {

  if(isset($_POST['g-recaptcha-response'])) {

  $recaptcha = new \ReCaptcha\ReCaptcha('6LdMGwoaAAAAAJAGzOCHVP6ItY5hzuY4eth05Ryr');
  $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
  if ($resp->isSuccess()) {
    var_dump('Captcha Valide');
      // Verified!
  } else {
      $errors = $resp->getErrorCodes();
      var_dump('Captcha Invalide');
      var_dump($errors);
    }

  } else {
    var_dump('Captcha non rempli');
  }

}
?>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Captcha</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<form class="captcha" method="POST">
  <div class="g-recaptcha" data-sitekey="6LdMGwoaAAAAAOqYJWaAojY925eCz8iwZFa3g7hm"></div>
  <br/>
  <input type="submit" value="Valider" name="submitpost">
</form>
</body>
<!--><!-->
