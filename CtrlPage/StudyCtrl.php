<?php
require_once('../Resources/Util.php');
require_once("../Resources/include/membersite_config.php");
?>

<html>
<title>Study Control</title>
<meta charset="UTF-8">
<body>
  <p>
    Pressing the  button will randomly generate a new condition, and set it for the session.
  </p>
  <form action="./GenerateNewCondition.php">
    <input type="submit" value="Generate and Set New Condition" />
  </form>
  <form action="./ViewCondition.php">
    <input type="submit" value="View Current Condition" />
  </form>
</body>
</html>
