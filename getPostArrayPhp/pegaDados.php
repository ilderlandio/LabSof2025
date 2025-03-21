<style type="text/css">
	li{
		color: blueviolet;
		font-size: large;
		text-decoration: none;
		list-style: none;
	}
</style>
<?php
$filhosPessoa = $_GET['filhos']; 
$bonusPessoa = $_GET['bonus']; 

echo "<li> $filhosPessoa </li> <li> $bonusPessoa </li>"; 
?>