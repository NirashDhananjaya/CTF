
<?php
include("seed.php");

for ($i = 0; $i < 5; $i++) {

   echo 'hello ';
   '\n';
   echo mt_srand($seed % 99999);

   echo mt_rand(0, 99999);
}
?>

