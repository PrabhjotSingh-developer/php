
<?php
session_start();
?>
<html>
<head>
<title>
session 
</title>
</head>
<body>
<h1>Encoding session variables</h1>
<?php
$_SESSION["Title"]="Web Application Development using php";
$_SESSION["Author"]="Tarsem Singh";
$session_encd=session_encode();
echo"<br><b>Session Encoded data:<br><br></b>";
echo $session_encd;
echo"<br><b>Decoding session data:<br><br></b>";
session_decode($session_encd);
echo"<pre>";
print_r($_SESSION);
echo"</pre>";

?>
</body>
</html>