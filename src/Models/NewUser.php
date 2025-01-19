<?php
    namespace App\Models;

    class NewUser
    {
       private string $jmeno;
       public function __construct(string $jmeno)
       {
            $this->jmeno=$jmeno;
       }
       public function getName():string
       {
            return $this->jmeno;
       }
    }