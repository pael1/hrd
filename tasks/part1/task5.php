<?php

    session_start();
    if(!isset($_SESSION['value']))
        $_SESSION['value'] = 0;
    $addOne = $_SESSION['value'] + 1;
    $_SESSION['value'] = $addOne;
    echo "The number is now  " .$addOne;


    if (isset($_COOKIE["addOne"]))
    {
        $addOne1 = $_COOKIE["addOne"] + 1;
        unset($_COOKIE['addOne']); 
        setcookie('addOne', $addOne1);


        echo "The number is now  " . $addOne1;
    }
    else
    {
        setcookie('addOne', 0);
        echo "Cookies is not set";
    }
