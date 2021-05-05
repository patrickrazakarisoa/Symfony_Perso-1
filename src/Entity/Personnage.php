<?php

namespace App\Entity;

class Personnage {

     public $nom;
     public $age;
     public $sexe;
     public $carac = [];

     public static $personnages=[];

     public function __construct($nom, $age, $sexe, $carac)
     {
          $this->nom = $nom;
          $this->age = $age;
          $this->sexe = $sexe;
          $this->carac = $carac;
          self::$personnages[] = $this;

     }

     public static function creerPersonnages() {
          $p1 = new Personnage("Marc", 25, true, [
               "force" => 30,
               "agi" => 2,
               "intel" => 33,         
          ]);

          $p2 = new Personnage("Milo", 30, true, [
               "force" => 8,
               "agi" => 86,
               "intel" => 3,         
          ]);

          $p3 = new Personnage("Tya", 20, false, [
               "force" => 22,
               "agi" => 12,
               "intel" => 51,         
          ]);
          
     }

     public static function getPersonnageParNom($nom){
          foreach(self::$personnages as $perso){
               if (strtolower($perso->nom) === $nom){
                    return $perso;
               }
          }
     }
}