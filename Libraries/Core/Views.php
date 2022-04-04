<?php 
class Views {
	function getView($url, $data="", $titulo) {
		require_once "Views/Templates/header.php";
		require_once "Views/".$url.".php";
		require_once "Views/Templates/footer.php";
	}
}
?>