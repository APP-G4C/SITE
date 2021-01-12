session_start():
<html>
<body>



Welcome  <?php echo htmlspecialchars($_POST["fname"]); ?>  <?php echo htmlspecialchars($_POST["lname"]);?> , votre adresse mail est <?php echo $_POST["email"]; ?>  <br>
Votre question est : <br>
<?php echo $_POST["message"]; ?>


</body>
</html>
