<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Requête POST, la page a été actualisée
  header("Location: index.html");
  exit();
}
?>