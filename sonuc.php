<?php
ob_start();
session_start();
require_once('config.php');

$request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, Config::options());

echo $odeme_durum = $checkoutForm->getPaymentStatus();
echo "<br>";
$orderid = $checkoutForm->getbasketId();

if ($odeme_durum == "FAILURE") {
    echo "tamamlanamadı";
} elseif ($odeme_durum == "SUCCESS") {
    echo "Tamamlandı :";
}
?>
