<?php

class Hobbies
{
    public $hobbies = [];
    public $response = [];

    public function add(string $hobbyist, array $hobbies) : void
    {
        $this->hobbies[$hobbyist] = $hobbies;
    }

    public function findHobbyists(string $hobby) : array
    {
        $array = $this->hobbies;
        $return = [];
        foreach ($array as $key => $values){
            //var_dump($values);
            if(in_array($hobby, $values)){
                array_push($return, $key);
                //var_dump($values);
            }
        }
        return $return;
    }
}

$hobbies = new Hobbies;
$hobbies->add('John', ['Piano', 'Puzzles', 'Yoga']);
$hobbies->add('Adam', ['Drama', 'Fashion', 'Pets']);
$hobbies->add('Mary', ['Magic', 'Pets', 'Reading','Yoga']);

//var_dump($hobbies->hobbies['John'][0]);
$result = $hobbies->findHobbyists('Yoga');
//var_dump($result);
echo implode(', ', $result);
