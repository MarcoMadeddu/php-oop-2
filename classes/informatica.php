<?php
include_once __DIR__ .'/../magazzino.php';

class Informatica extends Magazzino{
    public $mansione;
    public $collocamento;

    public function __construct($_mansione , $_collocamento){

        $this->mansione= $_mansione;
        $this->collocamento= $_collocamento;
    }

    public function show(){
        echo "<h3> Mansione: $this->mansione </h3>";
        echo "<h3> Collocamento: $this->collocamento </h3>";
    }
}

$reparto1 = new Informatica('infotmatica e sistemistica' , 'settore 3');
$reparto2 = new Informatica(' Chimica' , 'settore 4');
$reparto3 = new Informatica('Meccanica',  'settore 1');
?>