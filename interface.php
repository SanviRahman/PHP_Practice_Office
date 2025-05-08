<?php
    interface User
    {
        public function someMethod();
        public function display();
    }

    class Profile implements User
    {
        public function someMethod()
        {
            echo "Hello From Some Method". PHP_EOL;
        }
        
        
        public function display()
        {
            echo "Hello From Display Function";
        }
    }

    $profile= new Profile();
    $profile->someMethod();
    $profile->display();
?>