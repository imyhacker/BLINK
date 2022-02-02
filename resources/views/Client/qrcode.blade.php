<!DOCTYPE html>
<html>
<head>
    <title>How to Generate QR Code in Laravel 6? - Pakainfo.com</title>
</head>
<body>
    
<div class="visible-print text-center">
    <h2>Laravel 6/7 - QR Code Generator Example - www.pakainfo.com</h2>
     
    {!! QrCode::size(250)->generate('Pakainfo.com'); !!}
     
    <p>example by Pakainfo.com.</p>
</div>
    
</body>
</html>