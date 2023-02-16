<?php include_once "base.php";

unset($_SESSION[$_GET['table']]);

// switch($_GET['table']){
//     case 'mem':
//         unset($_SESSION['mem']);
//     break;
//     case 'admin':
//         unset($_SESSION['admin']);
//     break;
// }

to('../index.php');