<?php


class Burger{

    public $nimetus = 'Argiburger';
    public $liha = 'Veiseliha';
    public $sai = 'Valge sai';
    public $hind = 1;
    public $lisand1 = 'tomat';
    public $lisand1Hind = 0.40;
    public $lisand2 = 'hapukurk';
    public $lisand2Hind = 0.30;
    public $lisand3 = 'redis';
    public $lisand3Hind = 0.40;
    public $lisand4 = 'muna';
    public $lisand4Hind = 0.15;


    public function BurgerSumma(){
        return
                $this -> hind +
                $this -> lisand1Hind +
                $this -> lisand2Hind +
                $this -> lisand3Hind +
                $this -> lisand4Hind ;

    }

    public function MidaTeTellisite(){

        return  'Te tellisite: '.               $this -> nimetus.
                '<br> milles on lihaks: ' .     $this -> liha.
                '<br> milles on saiaks: ' .     $this -> sai.
                '<br> milles on lisand 1:' .    $this -> lisand1.
                '<br> milles on lisand 2:' .    $this -> lisand2.
                '<br> milles on lisand 3:' .    $this -> lisand3.
                '<br> milles on lisand 4:' .    $this -> lisand4.
            '<br> Milles on lisaks kaasas : ' . $this -> lisand;
    }
}

class TervislikBurger extends Burger{
    public $nimetus = 'Tervislik burger';
    public $sai = 'täistera sai';
    public $tervislikLisand1 = 'Feta juust';
    public $tervislikLisand1Hind = 0.50;
    public $tervislikLisand2 = 'Kartuli liistud';
    public $tervislikLisand2Hind = 1;

    public function BurgerSumma(){
        return
            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind +
            $this -> tervislikLisand1Hind +
            $this -> tervislikLisand2Hind;

    }
    public function MidaTeTellisite(){
        return  'Te tellisite: '.               $this -> nimetus.
                '<br> milles on lihaks: ' .     $this -> liha.
                '<br> milles on saiaks: ' .     $this -> sai.
                '<br> milles on lisand 1:' .    $this -> lisand1.
                '<br> milles on lisand 2:' .    $this -> lisand2.
                '<br> milles on lisand 3:' .    $this -> lisand3.
                '<br> milles on lisand 4:' .    $this -> lisand4.
                '<br> Milles on tervislik lisand 1::' . $this -> tervislikLisand1.
                '<br> Milles on tervislik lisand 2: ' . $this -> tervislikLisand2;
    }

}

class LuxBurger extends burger{

}
// anna burgeritele omadused
$argiBurger = new burger();
$kahekihine = new burger();
$tavaTervislikBurger = new TervislikBurger();

$kahekihine -> nimetus = 'Luxburger';
$kahekihine -> hind = 4.5;
$kahekihine -> lisand1 = 'Salat';
$kahekihine -> lisand1Hind = 0;
$kahekihine -> lisand2 = 'ketšup';
$kahekihine -> lisand2Hind = 0;
$kahekihine -> lisand3 = 'kapsas';
$kahekihine -> lisand3Hind =0;
$kahekihine -> lisand4 = 'tomat';
$kahekihine -> lisand4Hind = 0;
$kahekihine->  lisand="friikartul ja jook tasuta kaasa";

echo '<h1> tava burger </h1>';
echo $argiBurger -> MidaTeTellisite();
echo '<br> See maksis:' . $argiBurger -> BurgerSumma();
echo '<hr>';

echo '<br> <h1>Lux burger</h1>';
echo $kahekihine -> MidaTeTellisite();
echo '<br> Mis maksis: '. $kahekihine -> BurgerSumma();
echo '<hr>';

echo '<h1> Vegan burger</h1>';
echo $tavaTervislikBurger -> MidaTeTellisite();
echo '<br> Mis maksis: '. $tavaTervislikBurger -> BurgerSumma();
echo '<hr>';

