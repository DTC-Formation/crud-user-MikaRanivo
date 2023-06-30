<?php

class Voiture{
    public $marque;
    public $modele;
    public $couleur;
    public $boite_vitesse;
    private $allumer_moteur;
    private $vitesse;
    private $frein;

    public function __construct() 
    {
        $this->allumer_moteur = false;
        $this->vitesse = 0;
        $this->frein = false;
    }

    public function Demarer()
    {
        if(!$this->allumer_moteur){
            $this->allumer_moteur = true;
            echo " \n Moteur en Marche!! \n";

        }else{
            echo "Moteur déja en marche!! \n";
        }

    }

    public function Accelerer()
    {
        $accelerer = readline("\n entrer la valeur de l'acceleration : ");
        if($this->allumer_moteur) {
            $this->vitesse += $accelerer;
            echo "La voiture accelère avec une vitesse de " . $this->vitesse . "km/h. \n";

        }else{
            echo "la voiture ne peut pas accelerer!! \n veiller demarer la moteur!!. ";
        }
    }
    public function Freiner()
    {
        if($this->vitesse > 0){
            $this->frein =true;
            while ($this->vitesse >0){
                $this->vitesse--;
                echo "\n vitesse actuele: ".$this->vitesse. "km/h \n ";
            }
            echo "voiture en arrêt totale \n";
            
        }else{
            echo "voiture deja en Arret.";
        }
    }
    public function ArretMoteur()
    {
        $this->allumer_moteur = false;
        echo "\n Moteur en arrêt!! \n";
    }

}
$voiture= new Voiture();
while (true){
     echo "Quel action voulez vous faire?\n";
     echo "0. Demarer \n";
     echo "1. Accelerer \n";
     echo "2. freiner \n";
     echo "3. Arreter le Moteur\n";
     echo "4. Quiter \n";

echo "\n Choix:"; 
$choix = (int) fgets(STDIN);

 switch ($choix){
     case 0:
     $voiture->Demarer();
     break;
     case 1:
     $voiture->Accelerer();
     break;
     case 2:
     $voiture->Freiner();
     break;
     case 3:
     $voiture->ArretMoteur();
     break;
     case 4:
     echo "programme terminer";
     exit;
     default:
     echo "choix invalide\n";
 }

}