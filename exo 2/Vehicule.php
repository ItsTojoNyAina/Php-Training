<?php
    abstract class vehicule{
        private static $count=0;
        private $matricule;
        private $anneeModele;
        private $prix;
        public function __construct($annemomdele,$prix){
            $this->matricule=++self::$count;
            $this->anneeModele=$anneemodele;
            $this->setPrix($prix);
        }
        public function getMatricule(){
            return  $this->matricule;
        }
        public function getNumMod(){
            return $this->anneeModele;
        }
        public function getPrix(){
            return $this->prix;
        }
        public function setAnneeMod($An){
            $this->anneeModele= $An;
        }
        public function setPrix($prix){
            $this->prix= $prix;
        }
        abstract public function demarer();
        abstract public function accelerer();

        public function __toString(){
            return "Matricule :".$this->matricule."Année de Modèle :".$this->anneeModele."Prix :".$this->prix;
        }
    }