<?php
session_start();
session_destroy();

echo"<script>alert('session destroyed !')</script>";
echo"<script>location.href='../login.html'</script>";
?>