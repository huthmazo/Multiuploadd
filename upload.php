<?php

require('clases/upload.php');
echo '<br>';
$archivo = new Upload($_FILES['file']);
