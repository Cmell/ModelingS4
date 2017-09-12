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

$possibleConditions = array('SetA', 'SetB');
if (mt_rand(0,1)) {
  $condition = "SetA ";
} else {
  $condition = "SetB ";
}

setCurrentCondition($condition);

$fgmembersite->RedirectToURL("./ViewCondition.php");
?>
