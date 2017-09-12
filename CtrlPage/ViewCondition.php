<?php
session_start();
require_once("../Resources/include/membersite_config.php");
require_once("../Resources/Util.php");

if (!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("StudyCtrlLogin.php");
    exit;
} else {
  $id = $_SESSION[$fgmembersite->GetLoginSessionVar()];
}

$condition = getCurrentCondition();
session_destroy();
?>

<html>
<title>New Condition</title>
<meta charset="UTF-8">
<body>
  <h1 id="condinfo">
    Error.
  </h1>
</body>
<script>
  var condition = <?php echo json_encode($condition);?>;

  var par = document.getElementById('condinfo');
  par.innerHTML = "Condition: " + condition;
</script>
</html>
