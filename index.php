<html>
<head>
    <title>PHP https test</title>
</head>
<body>
$_SERVER['HTTPS']: <?=empty($_SERVER['HTTPS']) ? 'empty' : $_SERVER['HTTPS']; ?><br />
Valid: On or 1<br />
<br />
<br />
$_SERVER['SERVER_PORT']: <?=$_SERVER['SERVER_PORT'];?><br />
Default ports:<br />
http: 80<br />
https: 443<br />
<br />
<a href="https://github.com/vvmspace/php-https-test">PHP https test</a> © Vladimir V. Myagdeev
</body>
</html>
