<?php
    namespace App\Views;
    
    class HomeView
    {
        public function render(string $jmeno)
        {
                echo "Jmeno je ".$jmeno;
        }
    }