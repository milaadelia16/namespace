<?php
namespace Dummy;
class Calculator {
    protected $Mobil;

    function __construct(Mobil\Mobil $Mobil){
        $this->Mobil=$Mobil;
    }      

    function hitungJarak(){
        $bbm = $this->Mobil->getBbm();
        $efisiensi = $this->Mobil->getEfisiensi();
        $jarakMax = $bbm * $efisiensi;
        return $jarakMax;
    }
    
}