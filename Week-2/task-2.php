<?php

/**  Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount */


class VatCalculation
{

    private  $amount;
    private  $vat = 0.15;

    public function  __construct($amount){
        $this->amount = $amount;
    }

    public function vatCalculation(){
        return $this->amount * $this->vat;
    }
    

    /**
     * Get the value of vat
     */ 
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set the value of vat
     *
     * @return  self
     */ 
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }
}

$vat = new VatCalculation(150);
echo $vat->vatCalculation() . "\n";