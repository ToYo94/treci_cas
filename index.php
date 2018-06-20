<?php
	$ime = "Mladen";

	# zamena strina unutar reci
	$rezultat = str_replace("a", "4", "Ja sam programer");
	echo $rezultat;

	$drugaRec = str_replace(["a", "e"], ["4", "3"], "Ja sam programer");
	echo $drugaRec;

	# velika u mala slova. promenljive se mogu koristiti isto, ne mora se pisati tekst u zagradama
	$malaSlova = "OVO BI TREBALO DA BUDE MALIM SLOVIMA";
	$malaSlova = strtolower($malaSlova);
	echo $malaSlova;
	#mala u velika slova
	#strtoupper()

	#vezba 1: zameniti slova sa brojevima unutar recenice.
	$vezba = str_replace(["a", "e", "i", "I", "o"], ["4", "3", "1", "1", "0"], "Ideja nije moja, smislili su je neki kreativni nastavnici");
	echo $vezba;
	#vezba 2: promeniti promenljivu u velika slova
	$vezba = strtoupper($vezba);
	echo $vezba;
?>