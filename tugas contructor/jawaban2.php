<?php 
    class tiket{
        public $harga="250000";

        public function __construct()
        {
            echo "ini berasal dari construct tiket <br/>";
        }
        public function __destruct()
        {
            echo "ini berasal dari destruct tiket";
        }
            
    }
        $bus = new tiket();