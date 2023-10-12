<?php
$file_info = ioncube_read_file_info('C:\xampp\htdocs\painelactive\login.php');

if ($file_info) {
    echo 'Versão do ionCube Loader: ' . $file_info['Loader Version'];
} else {
    echo 'Não foi possível obter informações sobre a versão do ionCube Loader.';
}
?>
