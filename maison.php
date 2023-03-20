<?php
     class Maison{
        public $nom;
        public $longueur;
        public $largeur;
        public $nbrEtage;

        public function __construct($name,$length,$width,$floor)
        {
            $this->nom=$name;
            $this->longueur=$length;
            $this->largeur=$width;
            $this->nbrEtage=$floor;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getLongueur(){
            return $this->longueur;
        }
        public function getLargeur(){
            return $this->largeur;
        }
        public function getNbrEtage(){
            return $this->nbrEtage;
        }

       public function setNom($name){
            $this->nom=$name;
       } 
       public function setLongueur($length){
        $this->longueur=$length;
       }
        public function setLargeur($width){
            $this->largeur=$width;
       }
       public function setNbrEtage($floor){
        return $this->nbrEtage=$floor;
       }  
       public function surface(){
        echo "La surface de ".$this->nom." est égale à : ".$this->longueur*$this->largeur*$this->nbrEtage."m²";
       }
    }


?>