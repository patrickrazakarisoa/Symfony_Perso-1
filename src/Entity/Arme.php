<?php

namespace App\Entity;

class Arme {
     private $nom;
     private $description;
     private $degat;

     public static $armes=[];

     public function __construct($nom, $description, $degat)
     {
          $this->nom = $nom;
          $this->description = $description;
          $this->degat = $degat;
          self::$armes[] = $this;

     }

     public function getNom(){
          return $this->nom;
     }
     public function getDescription(){
          return $this->description;
     }
     public function Degat(){
          return $this->degat;
     }

     public function setNom($nom){
          $this->nom = $nom;
          return $this;
     }
     public function setDescription($description){
          $this->description = $description;
          return $this;
     }
     public function setDegat($degat){
          $this->degat = $degat;
          return $this;
     }



     public static function creerArmes() {
          new Arme("épée", "Une superbe épée tranchante", 50); 
          new Arme("hache", "Parfait pour couper une tronche", 90);          
          new Arme("arc", "Idéal pour les attaques à distance", 20);       
     }

     public static function getArmeParNom($nom){
          foreach(self::$armes as $arme){
               if (strtolower(str_replace("é","e",$arme->nom)) === $nom){
                    return $arme;
               }
          }
     }
}