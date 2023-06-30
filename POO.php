<?php

class Shape
{
    public  $numberOfSides;
    public  $name;

    public function setNumberOfSides( $numberOfSides)
    {
        $this->numberOfSides = $numberOfSides;
        
        return $this;
    }

    public function setName( $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getNumberOfSides()
    {
        return $this->numberOfSides;
    }

    public function getName()
    {
        return $this->name;
    }
}

$triangle = new Shape();
$triangle->setName("triangle");
$triangle->setNumberofSides(3);
echo $triangle->getName();
echo $triangle->getNumberOfSides();





