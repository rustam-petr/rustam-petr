<?php
//$arr=[1,2,3,4,5];
//echo json_encode($arr);
//$arr=[7=>1,2,3,4,5];
//echo json_encode($arr);
$guestBook=[
    ["msg"=>"Привет", "name"=>"Вася"],
    ["msg"=>"Давай до свидания", "name"=>"Петя"]
];
echo json_encode($guestBook);