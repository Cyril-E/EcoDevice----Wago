EcoDevice----Wago
=================

Transfert des données entre un EcoDevice et un automate Wago

il va vous falloir l’adapter a votre installation, tout d’abord sur la ligne $IPWago il vous faut remplacer les XXX par l’adresse IP de votre automate
Ensuite les mots sur lequel les données sont écrite, moi j’utilise de 230 a 233 donc remplacer par les vôtres


Sur votre EcoDevice la requette sera du type

http://IPSERVEUR/EcoDeviceToWago.php?HCHC=$T15&HCHP=$T16&IINST=$T118&PPAP=$T127

avec actualisation a chaque changement de valeur
