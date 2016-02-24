<?php
		error_reporting(0);
		ini_set(“display_errors”, 0 );
		echo "<html xmlns=http://www.w3.org/1999/xhtml lang=pt-br xml:lang=pt-br>";
		echo "<meta http-equiv=Content-Type content=text/html; charset=utf-8 />";
		$host = "127.10.163.130";
		$banco = "valemobi";
		$user = "adminLzGE3k9";
		$senha = "Q2g3ceTmDe63";

		$con = mysql_connect($host, $user, $senha) or die("Erro conexão");

		mysql_select_db($banco, $con) or die("Erro BD");

	?>