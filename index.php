<?php
if (!isset($_GET["q"])) header("Location: /?q=0");
else header("Location: /server__" . $_GET["q"] . "/");
