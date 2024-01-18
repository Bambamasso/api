<?php
class Response{
    private $_success;
    private $_httpStatusCode;
    private $_messages;
    private $_data;
    private $_toCache=false;
    private $_responseData=array();

public function setSuccess($success){
    $this->_seccess=$success;
}
public function sethttpStatusCode($httpStatusCode){
    $this->_httpStatusCode=$httpStatusCode;
}
public function setMessage($messages){
    $this->_messages[]=$messages;
}
public function setData($success){
    $this->_data=$data;
}
public function toCache($toCache){
    $this->_toCache=$toCache;
}
public function send(){
   header('content-type: application/json;charset=utf-8');
   if($this->_toCache==true){
    header('cache-control:max-age=60');
   }else{
header('Cache-control:no-cache, no store');
   }

   if(($this->_success !==false && $this->_success!==true) || is_numeric($this->_httpStatusCode)){
http_response_code(500);
$this->_responseData['statusCode']=500;
$this->_responseData['success']=false;
$this->_responseData['statusCode']=500;
$this->_addMessage['Response creation error']=500;
$this->_responseData['message']=$this->_messages;
   }else{
    http_response_code($this->_httpStatusCode);
    $this->_responseData['statusCode']=$this->httpStatusCode;
    $this->_responseData['success']=$this->_success;
    $this->_responseData['message']=$this->_messages;
    $this->_responseData['data']=$this->data;
   }
   echo json_encode($this->_responseData);
}



}

?>