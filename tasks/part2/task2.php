<?php

function generateNumber()
{
    $random_number_array = range(1, 100);
    shuffle($random_number_array);
    return array_slice($random_number_array, 0, 4);
}


$marksarray = array(
    generateNumber(),
    generateNumber(),
    generateNumber(),
    generateNumber()
);

//compute every rows
for ($i = 0; $i < count($marksarray); $i++) {
    $sum_row_result[] = array_sum($marksarray[$i]);
}

for ($i = 0; $i < count($marksarray); $i++) {
    $sum_col_result[] = array_sum(array_column($marksarray, $i));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2; Number 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container">
        <pre>
        2. Manipulate multidimensional array
            a. Create a 4x4 table
            i. Generate a random number from 1 - 100
            ii. The number generated should always be unique
            iii. Sum up the number per column and row
        </pre>
        <table class="table table-bordered">
            <thead>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($marksarray); $i++) {
                    echo "<tr><td>" . $marksarray[$i][0] . "</td>";
                    echo "<td>" . $marksarray[$i][1] . "</td>";
                    echo "<td>" . $marksarray[$i][2] . "</td>";
                    echo "<td>" . $marksarray[$i][3] . "</td>";
                    echo "<td class='row-answer'>" . $sum_row_result[$i] . "</td>";
                    echo "</tr>";
                }
                echo "<tr class='row-answer'>";
                for ($i = 0; $i < count($marksarray); $i++) {
                    echo "<td>" . $sum_col_result[$i] . "</td>";
                }
                echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>