<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{
   
    /**
     * @Route("/armes", name="armes")
     */
    public function armes()
    {
        Arme::creerArmes();
        return $this->render('arme/armes.html.twig', [
            "armes" => Arme::$armes,
        ]);
    }

    /**
     * @Route("/armes/{nom}", name="afficher_arme")
     */
    public function afficherPerso($nom)
    {
        Arme::creerArmes();
        $arme = Arme::getArmeParNom($nom); 
        return $this->render('arme/arme.html.twig', [
            "arme" => $arme,
        ]);
    }
}
