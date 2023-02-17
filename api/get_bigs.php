<?php
include_once "base.php";

$bigs=$Type->all(['parent'=>$_POST['big']]);
foreach($mids as $mid){
    echo "<option value='{$mid['id']}'>{$mid['name']}</option>";
}