<?php

function con(){
    return $conn = mysqli_connect("localhost","root","","blog");
}

$info = array(
    "name" => "Sample Blog",
    "short" => "SB",
    "description" => "ကျောင်းသားများအတွက် Sample Project"
);

$role = ["Admin","Editor","User"];

$url = "http://{$_SERVER['HTTP_HOST']}/";

date_default_timezone_set('Asia/Yangon');