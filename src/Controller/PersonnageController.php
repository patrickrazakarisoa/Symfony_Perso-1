<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/personnages", name="personnages")
     */
    public function persos()
    {
        Personnage::creerPersonnages();
        return $this->render('personnage/persos.html.twig', [
            "players" => Personnage::$personnages,
        ]);
    }

    /**
     * @Route("/personnages/{nom}", name="afficher_personnage")
     */
    public function afficherPerso($nom)
    {
        Personnage::creerPersonnages();
        $perso = Personnage::getPersonnageParNom($nom); 
        return $this->render('personnage/perso.html.twig', [
            "perso" => $perso,
        ]);
    }
    

    
}
