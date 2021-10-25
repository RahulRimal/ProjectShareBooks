<?php

class Response
{
    private $httpStatusCode;
    private $success;
    private $toCache;
    private $message = array();
    private $data;
    private $responseData;


    public function setHttpStatusCode($statusCode)
    {
        $this->httpStatusCode = $statusCode;
    }

    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function toCache($toCache)
    {
        $this->toCache = $toCache;
    }

    public function addMessage($message)
    {
        $this->message[] = $message;
    }












}

?>