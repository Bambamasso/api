<?php
 require_once('response.php');
 $response=new  Response();
 $response->setScuccesst(true);
 $response->addMessage('Test Message');
 $response->setHttpStatusCode(200);
 $response->addMessage('Test message 2');
 $response->sent();


?>