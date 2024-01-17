<?php
require_once('db.php');
require_once('../model/Response.php');


try{
    $writeDB=DB::connecterWriteDB();
    $writeDB=DB::connecterWriteDB();
}
catch (PDOException $e){
$response=new Response();
$response->setHttpStatusCode(500);
$response->setS(false);
$response->setHttpStatusCode("Database Connection error");
$response->send();
exit;
}
?>