<?php

class Person
{
    public function __construct(int $height, int $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    public static function calcAvgHeight(array $persons) : float
    {
        $result = 0;
        $size = sizeof($persons);
        foreach($persons as $value){
            $result += $value->height;
        }

        if($size > 0 ){
            return $result/$size;
        }else{
            return 0;
        }
    }
}        
            
$matt = new Person(174, 69);
$jason = new Person(190, 103);
$kevin = new Person(184, 78);
$johna = new Person(160, 55);
$dave = new Person(165, 69);
echo Person::calcAvgHeight( [$matt, $jason, $kevin, $johna, $dave] );
