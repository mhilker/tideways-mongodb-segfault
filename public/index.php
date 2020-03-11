<?php

ob_start();
require __DIR__ . '/../src/mongo-creator.php';
$out = ob_get_clean();

echo nl2br($out);
