<?php
require_once("tacks.php");
try{
$task=new Task(1, "title here","Description here","01/01/2019 12:00","N");
header("content-type: applixation/json; charset=UTF-8");
echo json_encode($task->returnTaskAsArray());
}
catch(TaskException $ex){
echo "error:".$ex->getMessage();
}
?>