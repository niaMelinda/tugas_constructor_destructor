<?php 
   class tiket_bus{
    public $tiket = "Umum";
    public $nama_penumpang = "Nia Melinda";
    public $harga_tiket = "250000" 
    
    public function __construct(){
        echo "ini berasal dari construct tiket_bus";
    }
    public function ambil_tiket(){
        echo "ambil_tiket milik $this->nama_penumpang dengan harga $this->harga_tiket";
    }
    public function __destruct(){
        echo "ini berasal dari destruct tiket_bus";
   }

   $tiket= new tiket_bus();
   echo "<br/>";
   echo $tiket->ambil_tiket();
   echo "<br/>";
   ?>