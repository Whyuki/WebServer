<?php
require('Personnage.class.php');
$perso = new Personnage(Personnage::FORCE_MOYENNE);

$perso->parler();


Personnage::parler();

$perso3 = new Personnage(Personnage::FORCE_GRANDE);
$perso3->parler();
