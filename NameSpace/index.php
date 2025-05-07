<?php

    require "user.php";
    require "school.php";

    use App\User;
    use School\Student;

    $user=new User;
    $user->get();

    $user2=new Student;
    $user2->display();

    $user3=new School\User;
    $user3->get();



?>