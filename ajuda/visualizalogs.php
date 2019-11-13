



<?php
$usuario=get_current_user();
$caminho="/home/www/$usuario/usrdocs";
$logs="/tmp/error.log";

if (file_exists($logs)) {
        exec("grep ".$caminho." ".$logs, $resultado );
        }
echo '<pre>'; print_r($resultado); echo '</pre>';
?>

