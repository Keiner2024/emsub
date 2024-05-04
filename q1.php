<?php
include('phpqrcode/phpqrcode/qrlib.php');

// URL of the web page you want to encode in the QR code

$url = 'https://www.example.com/';

// Generate the QR code and save it as a PNG image
QRcode::png($url, 'img/qrcode.png', QR_ECLEVEL_L, 4);

// Output the image in the HTML
echo '<img src="qrcode.png" alt="QR Code">';
?>