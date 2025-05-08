<?php
     

    trait User
    {
        public function messege()
        {
            echo "Hello From SCT-Bangla Ltd.". PHP_EOL;
        }
    }
    trait Moin
    {
        public function messege2()
        {
            echo "Hello from Private";
        }
    }

    class Welcome
    {
        use User;
        use Moin;
    }


    $obj= new Welcome();
    $obj->messege();
    $obj->messege2();


?>