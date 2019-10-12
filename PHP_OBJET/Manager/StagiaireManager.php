<?php
include 'autoload.php';

class StagiaireManager
{

public function create(Stagiaire $stagiaire) {

    $stagiaires =[];
    $stagiaire = new Stagiaire();
    $stagiaire->setName('Adeline');
    $stagiaire->setBirthday(18 - 06 - 1985);
    $stagiaire->setPhone('0612345678');
    $stagiaire->setCreatedAt(new DateTime());



$stagiaires[] = $stagiaire;
}


}


