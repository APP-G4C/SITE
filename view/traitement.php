<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'\SITE\fn_session.php');
?>
<!DOCTYPE html>
<html lang="fr">

<body>



Welcome  <?php echo htmlspecialchars($_POST["fname"]); ?>  <?php echo htmlspecialchars($_POST["lname"]);?> , votre adresse mail est <?php echo $_POST["email"]; ?>  <br>
Votre question est : <br>
<?php echo $_POST["message"]; ?>


</body>
</html>
