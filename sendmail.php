<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> <title>Untitled Document</title> </head>

<body> <?php

mail("igor23102002@gmail.com", "Message from your website!", $_REQUEST[message], "<br> From: $_REQUEST[email]", " <br> -f".$_REQUEST[email]);

header( "Location: http://lilyrenwick.co.uk" );

?>

</body> </html>