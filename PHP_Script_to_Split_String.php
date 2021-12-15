
<?php
$str = '092007'; 
echo substr(chunk_split($str, 2, ':'), 0, -1)."\n";
?>


