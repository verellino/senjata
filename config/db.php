
<?php

try {
  $conn = new mysqli('localhost', 'root', '', 'senjata');
} catch (Exception $e) {
  echo $e->getMessage();
}

?>