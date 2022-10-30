<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("Apikeyiniz");
        $options->setSecretKey("Secretkeyiniz");
        $options->setBaseUrl('https://sandbox-api.iyzipay.com'); //Produciton ortamda güncelleyiniz
        return $options;
    }
}


