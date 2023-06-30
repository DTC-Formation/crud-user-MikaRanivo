<?php

class Voiture{
    public $marque;
    public $modele;
    public $couleur;
    public $boite_vitesse;
    private $allumer_moteur;
    private $vitesse;
    private $frein;

    public function __construct($marque,$modele,$couleur,$boite_vitesse) 
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->boite_vitesse = $boite_vitesse;
        $this->allumer_moteur = false;
        $this->vitesse = 0;
        $this->frein = false;
    }

    public function getInformation()
    {
        $information = [
            'marque' => $this->marque,
            'modele' => $this->modele,
            'couleur'=> $this->couleur,
            'boite_vitesse'=>$this->boite_vitesse,
        ]; 
        
        foreach ($information as $Attribut => $valeur) {
            echo $Attribut . ": " . $valeur . "\n";
        }
        
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

    public function Accelerer($accelerer)
    {
        
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

class PapierVoiture extends Voiture{
    private $numeroImmatriculation;
    private $dateExpiration;

    public function __construct($numeroImmatriculation,$dateExpiration){
        $this->numeroImmatriculation = $numeroImmatriculation;
        $this->dateExpiration = $dateExpiration;
    }

    public function getImmatriculation(){
        return $this->numeroImmatriculation;
        
    }

    public function getDateExpiration(){
       return $this->dateExpiration;
        
    }

}
$papier = new PapierVoiture("123456789", "2025-12-31");
echo $papier->getImmatriculation(); 
echo $papier->getDateExpiration();

