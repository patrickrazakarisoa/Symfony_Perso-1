<?php

namespace App\Entity;

class Arme {
     public $nom;
     public $description;
     public $degat;

     public static $armes=[];

     public function __construct($nom, $description, $degat)
     {
          $this->nom = $nom;
          $this->description = $description;
          $this->degat = $degat;
          self::$armes[] = $this;

     }

     public static function creerArmes() {
          $a1 = new Arme("epee", "Une superbe épée tranchante", 50); 
          $a2 = new Arme("hache", "Parfait pour couper une tronche", 90);          
          $a3 = new Arme("arc", "Idéal pour les attaques à distance", 20);       
     }

     public static function getArmeParNom($nom){
          foreach(self::$armes as $arme){
               if (strtolower($arme->nom) === $nom){
                    return $arme;
               }
          }
     }
}