<?php
include_once "base.php";

$mids=$Type->all(['parent'=>0]);
foreach($bigs as $big){
    echo "<option value='{$big['id']}'>{$big['name']}</option>";
}