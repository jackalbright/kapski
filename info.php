<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Kap info</title>
</head>

<body>
<?php
$dir = dirname(__FILE__);
echo "<p>Full path to this dir: " . $dir . "</p>";
error_reporting(E_ALL);
ini_set('display_errors', 1);

phpinfo();
?>
</body>
</html>
