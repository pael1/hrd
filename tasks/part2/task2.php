<?php

function generate_number_arrays()
{
    $random_number_array = range(1, 100);
    shuffle($random_number_array);
    return array_slice($random_number_array, 0, 4);
}


$arrays_data = array(
    generate_number_arrays(),
    generate_number_arrays(),
    generate_number_arrays(),
    generate_number_arrays()
);

//compute every rows
for ($i = 0; $i < count($arrays_data); $i++) {
    $sum_row_result[] = array_sum($arrays_data[$i]);
}

for ($i = 0; $i < count($arrays_data); $i++) {
    $sum_col_result[] = array_sum(array_column($arrays_data, $i));
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
    <div class="return mb-3">
            <a href="../../index.php" class="btn btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg>
            </a>
        </div>
        <pre class="question">
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
                for ($i = 0; $i < count($arrays_data); $i++) {
                    echo "<tr>";
                    for ($k=0; $k < count($arrays_data); $k++) { 
                        echo "<td>" . $arrays_data[$i][$k] . "</td>";
                    }
                    echo "<td class='row-answer'>" . $sum_row_result[$i] . "</td>";
                    echo "</tr>";
                }
                echo "<tr class='row-answer'>";
                for ($i = 0; $i < count($arrays_data); $i++) {
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