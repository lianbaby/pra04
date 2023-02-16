<?php
include_once "base.php";

//echo $_GET['cert']==$_SESSION['cert'];
if($_GET['cert']==$_SESSION['cert']){
    echo 1;
}else{
    echo 0;
}

