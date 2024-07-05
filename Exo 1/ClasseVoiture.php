<?php
    class Voiture{
        private $marque;
        private $carburant;
        private $numero;
        public function __construct($m, $c, $n){
            $this->marque=$m;
            $this->carburant=$c;
            $this->numero=$n;
        }
        //getter et setter
        public function getMarque(){
            return $this->marque;
        }
        public function setMarque($m){
            $this->marque=$m;
        }
        public function getCarburant(){
            return $this->carburant;
        }
        public function setCarburant($c){
            $this->carburant=$c;
        }
        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($n){
            $this->numero=$n;
        }
        /* Méthode qui permet de voir si le il y a oui ou non du carburant dans le réservoir d'une voiture */
        public function estVide(){
            if ($this->carburant== 0){
                echo "Le réservoir est vide.";
            }
            else {
                echo "Il reste encore ". $this->carburant ." litres";
                }
            }
        /* Méthode démarre si le réservoir n'est pas vide et il ne démarre pas si le réservoir est vide */
        public function demarer(){
            if (!$this->estVide()){
                echo "<br>La voiture démarre !<br>";
            }
            else {
                echo "Impossible de démarrer la voiture. Le réservoir est vide.<br>";
            }
            }
    }
    ?>
