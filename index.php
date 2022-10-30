<?php
ob_start();
session_start();

include 'iyzico/buyer.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>İyzico Ödeme Sayfası</title>
</head>
<body>

<div class="tab-pane fade active in" id="desc">
    <div class="row">
        <div id="iyzipay-checkout-form" class="responsive"></div>
    </div>
</div>
</body>
</html>
