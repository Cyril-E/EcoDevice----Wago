<?php

// Script par Cyril   http://www.ituilerie.com
// Synthaxe: http://IPSERVEUR/ecodevice.php?HCHC=$T15&HCHP=$T16&IINST=$T118&PPAP=$T127     a corriger suivant votre serveur 
// Script a faire executer depuis l'EcoDevice


$IPWago="xxx.xxx.xxx.xx";  // Adresse IP du Wago
$WORD1="MW230";  // Valeur du mot dans laquelle sera transféré la valeur compteur heure creuse
$WORD2="MW231";  // Valeur du mot dans laquelle sera transféré la valeur compteur heure pleine
$WORD3="MW232";  // Valeur du mot dans laquelle sera transféré la valeur de l'intensité instantané
$WORD4="MW233";  // Valeur du mot dans laquelle sera transféré la valeur de la puissance instantané


$T1HCHC=$_GET['HCHC']; 	// Valeur compteur heure creuse
$T1HCHP=$_GET['HCHP'];	// Valeur compteur heure pleine
$T1INST=$_GET['IINST']; // Valeur intensité instantané
$T1PPAP=$_GET['PPAP']; 	// Valeur puissance instantané

$floatval=floatval($T1HCHC); // Conversion de la valeur en flottant (string a l'origine)
$HCHC=$floatval/1000; // Division par 1000 pour avoir la valeur en Kw

$floatval2=floatval($T1HCHP); // Conversion de la valeur en flottant (string a l'origine)
$HCHP=$floatval2/1000; // Division par 1000 pour avoir la valeur en Kw


// Tranfert des valeurs du compteur EcoDevice vers Wago

$ch = curl_init(); // Création de cURL
// Creation de l'URL
curl_setopt($ch, CURLOPT_URL, "http://".$IPWago."/WRITEPI?ADR1=".$WORD1."&VALUE1=". $HCHC ."&FORMAT1=%d&ADR2=".$WORD2."&VALUE2=". $HCHP ."&FORMAT2=%d&ADR3=".$WORD3."&VALUE3=". $IINST ."&FORMAT3=%d&ADR4=".$WORD4."&VALUE4=". $</code><code>T1PPAP</code>."&FORMAT4=%d"); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_exec($ch); 
curl_close($ch);// Fermeture de cURL 
 ?></pre>
<p>
