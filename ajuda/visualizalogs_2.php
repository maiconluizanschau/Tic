



<?php
$usuario=get_current_user();
$caminho="/home/www/$usuario/usrdocs";
$logs="/tmp/error.log";

if (file_exists($logs)) {
        exec("grep ".$caminho." ".$logs, $resultado );
        }

echo "$usuario";
exec("cat ".$logs, $resultado);
#echo '<pre>'; print_r($resultado); echo '</pre>';
$fp = fopen($logs,'r');

//lemos o arquivo
$texto = fread($fp, filesize($logs));

//transformamos as quebras de linha em etiquetas <br>
$texto = nl2br($texto);

echo $texto;

?>

