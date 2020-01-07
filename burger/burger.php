<?php

class Burger{
    public $Burger;
    public $liha="veise";
    public $sai="valge";
    public $hind="7.99eur";
    public $lisand1="tomat";
     public $lisand1hind="0.5";
    public $lisand2="kurk";
     public $lisand2hind="0.5eur";
    public $lisand3="juust";
     public $lisand3hind="0.5eur";
    public $lisand4="peekon";
     public $lisand4hind="1eur";}
     {

     function Burx($Burger) {
    $this->burger = $Burger;
  }

$burger = new Burger();

$burger->set_name('Apple');


echo $burger->Burger();


/*
echo "Burger sisaldab ",  $liha->Burger();

class LuxBurger{
    public $burger;
    public $lisand1;
    public $lisand2;
    public $lisand3;
    public $lisand4;



}

class TervislikBurger{
    public $burger;
    public $tervislikLisand1;
    public $tervslikLisand1hind;
    public $tervislikLisand2;
    public $tervslikLisand2hind;
}

/*/