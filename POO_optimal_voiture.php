<?php

abstract class Voiture{
    protected $marque;
    protected $modele;
    protected $couleur;

    public function __construct($marque,$modele,$couleur){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
    }

    public function Demarrer(){
        echo "Moteur demarer \n";
    }

    public function Arreter(){
        echo "Moteur arreter \n";
    }

    abstract public function Accelerer($vitesse);

}
class voitureTransport extends Voiture {
    protected $nombreplace;
    public function __construct($marque,$modele,$couleur,$place){
        parent::__construct($marque,$modele,$couleur);
        $this->nombreplace = $place;
    }

    public function GetInformation(){
        $information =[
            'marque' => $this->marque,
            'modele' => $this->modele,
            'couleur'=> $this->couleur,
            'place'=> $this->nombreplace,
        ];
        foreach($information as $attribut => $valeur){
            echo $attribut. ":" . $valeur . "\n";       
         }
    }

    public function Accelerer($valeur) {
        echo "La voiture de Transport accélère de " . $valeur . " km/h.\n";
    }


}


class VoitureSport extends Voiture {
    protected $puissance;

    public function __construct($marque,$modele, $couleur, $puissance){
        parent::__construct($marque,$modele,$couleur);
        $this->puissance = $puissance;
    }

    public function GetInformation(){
        $information =[
            'marque' => $this->marque,
            'modele' => $this->modele,
            'couleur'=> $this->couleur,
            'puissance'=> $this->puissance,
        ];
        foreach($information as $attribut => $valeur){
            echo $attribut. ":" . $valeur . "\n";       
         }
    }
    public function Accelerer($valeur) {
        echo "La voiture de sport accélère de " . $valeur . " km/h.\n";
    }
}
$voitureTransport = new VoitureTransport("Sprenter","124 TBA","Blanc",32);
echo $voitureTransport->GetInformation();
$voitureTransport->Demarrer();
$voitureTransport->Accelerer(50);

