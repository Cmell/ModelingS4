<?php
require_once('../Resources/Util.php');
require_once('../Resources/include/fg_membersite.php');
session_start();
?>

<html>
<head>
  <meta charset="utf-8"/>
</head>
<title>Study Control Login</title>
  <body>
    <p>
      Type the password.
    </p>
      <form method="post" action="<?php echo htmlspecialchars('StudyCtrlVerify.php'); ?>">
        ID Number: <br />
        <input type="text" name="ID" value="" autofocus><br>
        <br>
        <input type="submit" value="Submit">
      </form>
  </body>
</html>
