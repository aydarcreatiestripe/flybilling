<?php

//localhost:64449/system/API/sms_async_response.php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS . '..' );
require_once (ROOT . DS . 'core' . DS . 'core.php');

$sms = new SMS_async_response;
$sms->processAsyncResponse();
