<?php
$chave = md5("$_POST['email']" . date("Y/m/d"));
echo "http://$_SERVER[HTTP_HOST]" . "?chave=" . $chave;
?>