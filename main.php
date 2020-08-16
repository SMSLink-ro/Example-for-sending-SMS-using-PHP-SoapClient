<?php

ini_set("soap.wsdl_cache_enabled", "0");

/*

  HTTPS API Endpoint: https://secure.smslink.ro/sms/gateway/schemas/service.soap.wsdl
  HTTP API Endpoint: http://www.smslink.ro/sms/gateway/schemas/service.soap.wsdl

*/

$Client = new SoapClient("https://secure.smslink.ro/sms/gateway/schemas/service.secure.soap.wsdl");

/*

  Get your SMSLink / SMS Gateway Connection ID and Password from 
  https://www.smslink.ro/get-api-key/

*/

$Response = $Client->SendSMS(
    '... My Connection ID ...', 
    '... My Connection Password ...', 
    '07xyzzzzzz', 
    'Test Message'
  );

var_export($Response);

?>