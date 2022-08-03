<?php
$size = 4;

// upside pyramid
for ($i = 1; $i <= $size; $i++) {
    // printing spaces 1st pyramid
    for ($j = $size; $j > $i; $j--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    // printing star
    for ($k = 0; $k < $i * 2 - 1; $k++) {
        if ($k === 0 || $k === 2 * $i - 2) {
            echo "&";
        } else {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    // printing spaces 2nd pyramid
    for ($j1 = $size; $j1 > $i; $j1--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    for ($j1 = $size - 1; $j1 > $i; $j1--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    for ($k1 = 0; $k1 < $i * 2 - 1; $k1++) {
        if ($k1 === 0 || $k1 === 2 * $i - 2) {
            if($i != 4){
                echo "&";
            }
        }
        else {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
    // downside pyramid
    for ($i = 1; $i <= $size - 1; $i++) {
        // printing spaces
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        // printing star
        for ($k = ($size - $i) * 2 - 1; $k >= 1; $k--) {
            if ($k === 1 || $k === ($size - $i) * 2 - 1) {
                echo "&";
            }
            else {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        }

        // printing spaces 2nd pyramid
        for ($j1 = $size; $j1 > $i; $j1--) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        for ($j1 = $size - 1; $j1 > $i; $j1--) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    
        for ($k1 = 0; $k1 < $i * 2 - 1; $k1++) {
            if ($k1 === 0 || $k1 === 2 * $i - 2) {
                // if($i != 4){
                //     echo "&";
                // }
                echo "&";
            }
            else {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
