<?php
require __DIR__ . '/vendor/autoload.php';
// require_once('./../vendor/autoload.php');
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

$nome = $_POST["nome"];
$congome = $_POST["cognome"];
$email = $_POST["email"];
$PRN = $_POST["PRN"];
$IND = $_POST["indirizzo"];

var_dump($_POST);
$options = new QROptions(
    [
        'eccLevel' => QRCode::ECC_L,
        'outputType' => QRCode::OUTPUT_IMAGE_PNG,
        'version' => 5,
    ]
);
$data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';


$string = 'It works ? Or not it works ?';
$pass = '1234';
$method = 'aes128';
// file_put_contents ('./file.encrypted', openssl_encrypt ($string, $method, $pass));
$infoPrenotazione = "nome: " . $nome . "\n" . "cognome: " . $congome . "\n" . "Email: " . $email . "\n" . "PRN: " . $PRN . "\n" . "Indi:" . $IND;
$snnk = openssl_encrypt($infoPrenotazione, $method, $pass);
echo $snnk;
$converto = openssl_decrypt($snnk, $method, $pass);
echo $converto;
// quick and simple:
// echo '<img src="'.(new QRCode($options))->render($snnk).'" alt="QR Code" />';

$simonme = openssl_encrypt($infoPrenotazione, $method, $pass);
$qrcode = (new QRCode($options))->render($simonme);
