<?php

namespace Controller;

class Generator
{

    public $filteredGifts = [];

    // to be changed if ChatGPT API connected
    function generateListOfGifts($allGifts): array
    {
        $hobby = htmlspecialchars(isset($_POST['hobby'])? $_POST['hobby'] : '');
        $price = htmlspecialchars(isset($_POST['max_price']) ? $_POST['max_price'] : '');
        $sex = htmlspecialchars(isset($_POST['sex']) ? $_POST['sex'] : '');
        $age = htmlspecialchars(isset($_POST['age']) ? $_POST['age'] : '');
        $special = htmlspecialchars(isset($_POST['special']) ? $_POST['special'] : '');

        foreach ($allGifts as $gift) {
            if ((!empty($_POST['hobby']) ? $gift->getHobby() == $hobby : true) &&
                ($gift->getPrice() <= $price) &&
                (!empty($_POST['age']) ? in_array($age, $gift->getAge()) : true) &&
                (in_array($sex, $gift->getSex())) &&
                ($special != '' ? (strstr($gift->getSpecial(), $special)) : true)) {
                $this->filteredGifts[] = $gift;
            }
        } return $this->filteredGifts;
    }
}