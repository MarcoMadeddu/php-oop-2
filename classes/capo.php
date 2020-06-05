<?php
include_once __DIR__ .'/../magazzino.php';

class Capi extends Magazzino{
    public $nome;
    public $cognome;

    public function __construct($_nome , $_cognome){

        $this->nome= $_nome;
        $this->cognome= $_cognome;
    }

    public function show(){
        echo "<h3>Capo Reparto: $this->nome $this->cognome</h3>";
    }
}

$capo1 = new Capi("marco" , "madeddu");
$capo2 = new Capi("lorenzo" , "balsano");
$capo3 = new Capi("paolo" , "duzioni");
?>