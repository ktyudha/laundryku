<?php
session_start();
error_reporting(0);
if ($_SESSION['username'] === null) {
  echo "<script>location.href='../signin/';</script>";
} else {
    echo "<script>location.href='../admin/';</script>";
}
?>