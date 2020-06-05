<?php
class Magazzino{
    public $nomeMagazzino;
    public $città;
    public $dipendenti;

    public function __construct($_nomeMagazzino , $_città , $_dipendenti){
        $this->nomeMagazzino = $_nomeMagazzino;
        $this->città = $_città;
        $this->dipendenti =$_dipendenti;
    }

    public function show(){
        echo "<h2> Nome: $this->nomeMagazzino </h2>";
        echo "<h3> Città: $this->città </h3>";
        echo "<span> Numero dipendenti: $this->dipendenti </span>";
    }
}
$magazzino1 = new Magazzino('Primo magazzino' , 'Sassari' , 200);
$magazzino2 = new Magazzino('Secondo magazzino' , 'Cagliari' , 350);
$magazzino3 = new Magazzino('Terzo magazzino' , 'Oristano' , 120);

?>