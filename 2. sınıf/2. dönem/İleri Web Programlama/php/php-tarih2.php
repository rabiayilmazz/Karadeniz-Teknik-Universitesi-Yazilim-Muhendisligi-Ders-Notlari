<?php

# strtotime()

//$unix2 = time() - (60 * 60 * 24 * 2);
$unix = strtotime('+10 minute');

echo date('Y-m-d H:i:s', $unix);

?>