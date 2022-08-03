<?php

function generateNumber()
{
    $random_number_array = range('A', 'K');
    shuffle($random_number_array);
    //array, index, lenght
    return array_splice($random_number_array, 0, 5, true);
}

$marksarray = array(
    generateNumber(),
    generateNumber(),
    generateNumber(),
    generateNumber()
);

print_r($marksarray);

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
        1. Generate a random character from a -k
            a. Create a 4 x 5 table
            b. Display all the random character inside the table
            c. Highlight all the character that belongs to the even column
        </pre>
        <table class="table table-bordered">
            <thead>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($marksarray); $i++) {
                    echo "<tr>";
                    echo "<td>" . $marksarray[$i][0] . "</td>";
                    echo "<td>" . $marksarray[$i][1] . "</td>";
                    echo "<td>" . $marksarray[$i][2] . "</td>";
                    echo "<td>" . $marksarray[$i][3] . "</td>";
                    echo "<td>" . $marksarray[$i][4] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>