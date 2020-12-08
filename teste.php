<?php
$chave = md5("cicrano@email.com" . date("Y/m/d"));
echo "http://$_SERVER[HTTP_HOST]" . "?chave=" . $chave;
?>