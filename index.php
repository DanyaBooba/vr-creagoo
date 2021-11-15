<?php
if (empty($_GET["q"])) header("Location: /?q=1");
else header("Location: /server__" . $_GET["q"] . "/");
