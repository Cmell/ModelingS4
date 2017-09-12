<?php
ob_start();
session_start();
require_once("../Resources/include/membersite_config.php");
require_once("../Resources/include/fg_membersite.php");

$id = $_POST['ID'];

$validIds = array(
  'mellinger',
  'dierker'
);

$valid = in_array($id, $validIds);

if ($valid) {
  // set a session variable.
  $_SESSION[$fgmembersite->GetLoginSessionVar()] = $id;
  $fgmembersite->RedirectToURL("StudyCtrl.php");
} else {
  // Should redirect to login.
  $fgmembersite->RedirectToURL("./StudyCtrlLogin.php");
}
ob_end_flush();
?><br />
