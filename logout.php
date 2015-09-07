<?php
session_start();

if (!isset($_SESSION['userID']))
{
    //$_SESSION['userID'] = $_SESSION['userID'];
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.location.href='index.php'
            </SCRIPT>");
    exit();
}else if(isset($_SESSION['userID'])!=""){
    header("Location: home.php");
}

$_SESSION = array();
if(isset($_COOKIE[session_name()]))
{
  setCookie(session_name(),'',time()-3600,'/');
}
session_destroy();
 echo "<script>window.location.href='index.php'</script>";
?>
