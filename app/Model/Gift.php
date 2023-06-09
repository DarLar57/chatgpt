<?php

namespace Model;

class Gift
{
    public string $hobby;
    public string$name;
    public int $price;
    public string $link;
    public array $sex;
    public array $age;
    public ?string $special;
    public static array $instances = [];
    
    function __construct($hobby, $name, $price, $link, $sex, $age , $special = null) 
    {
        $this->hobby = $hobby;
        $this->name = $name;
        $this->price = $price;
        $this->link = $link;
        $this->sex = $sex;
        $this->age = $age;
        $this->special = $special;
        self::$instances[] = $this;
    }

    public static function getInstances() {
        return self::$instances;
    }

    function getHobby() {
        return $this->hobby;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getLink() {
        return $this->link;
    }

    function getSex() {
        return $this->sex;
    }

    function getAge() {
        return $this->age;
    }

    function getSpecial() {
        return $this->special;
    }
}