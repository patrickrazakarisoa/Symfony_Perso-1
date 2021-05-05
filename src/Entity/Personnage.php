<?php

namespace App\Entity;

class Personnage {

     private $nom;
     private $age;
     private $sexe;
     private $carac = [];

     public static $personnages=[];

     public function __construct($nom, $age, $sexe, $carac)
     {
          $this->nom = $nom;
          $this->age = $age;
          $this->sexe = $sexe;
          $this->carac = $carac;
          self::$personnages[] = $this;

     }

     public function getNom(){
          return $this->nom;
     }
     public function getAge(){
          return $this->age;
     }
     public function getSexe(){
          return $this->sexe;
     }
     public function getCarac(){
          return $this->carac;
     }

     public function SetNom($nom){
          $this->nom = $nom;
          return $this;
     }
     public function setAge($age){
          $this->age = $age;
          return $this;
     }
     public function setSexe($sexe){
          $this->sexe = $sexe;
          return $this;
     }
     public function setCarac($carac){
          $this->carac = $carac;
          return $this;
     }
 

     public static function creerPersonnages() {
          new Personnage("Marc", 25, true, [
               "force" => 30,
               "agi" => 2,
               "intel" => 33,         
          ]);

          new Personnage("Milo", 30, true, [
               "force" => 8,
               "agi" => 86,
               "intel" => 3,         
          ]);

          new Personnage("Tya", 20, false, [
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