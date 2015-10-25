<?php
require_once("./sdk/lib/Simplify.php");
///Get Info From Above
$userObjectId = $_POST['user'];
$merchObjectId = $_POST['merchProduct'];
//Payment

Simplify::$publicKey = 'sbpb_ZTUwYTZmNzYtZmZkYS00YWMzLTk4MTMtZTAxNzhjMTA5NmYx';
Simplify::$privateKey = 'BtrbxNobGWuGvTAJLOvwg+E/r2Y11iciHYIBb8fZRIB5YFFQL0ODSXAOkNtXTToq';
$token = $_POST['simplifyToken'];





$payment = Simplify_Payment::createPayment(array(
    'amount' => '1000',
    'token' => $token,
    'description' => 'prod description',
    'currency' => 'USD'
));
if ($payment->paymentStatus == 'APPROVED') {
    echo "Payment approved\n";
}
?>