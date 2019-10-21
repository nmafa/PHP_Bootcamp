<?php

if ($_GET["action"] == "set") {
	setcookie($_GET["name"], $_GET[$value], time() + (86400 * 30), "/");
}
if ($_GET["action"] == "del") {
	setcookie("name", $_GET[$value], time() - 3600);
}
if ($_GET["action"] == "get") {
	echo $_GET["value"] . "\n";
}
