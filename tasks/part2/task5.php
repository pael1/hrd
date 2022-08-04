<?php
function bubbleSort($lists)
{
    $length = count($lists);

    // $parent for the 1st index and the $child is for 2nd index of elements
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = $parent + 1; $child <= $length - 1; $child++) {
            //checking if thr $parent is greater than $child elemen if true execute the condition
            if ($lists[$parent] > $lists[$child]) {
                //swapping the value of elements
                $temp = $lists[$child];
                $lists[$child] = $lists[$parent];
                $lists[$parent] = $temp;
            }
        }
    }

    return $lists;
}
//odd and even
$odd_even_array = [5, 1, 3, 4, 2, 8];
//worst case
$worst_case_array = [5, 4, 3, 2, 1];
//random number
$random_array = [50, 49, 31, 20, 119];


$odd_even_array_data = bubbleSort($odd_even_array);
$worst_case_array_data = bubbleSort($worst_case_array);
$random_array_data = bubbleSort($random_array);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2; Number 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container">
        <div class="return mb-3">
            <a href="../../index.php" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Redirect to home">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg>
            </a>
        </div>
        <pre class="question">
            5.Fix the code function to output the correct result. Explain your answer
        </pre>
        <div>
            <?php
            echo "<div class='center'>";
            echo "<h6>Odd - Even Number</h6>";
            foreach ($odd_even_array as $value) {
                echo $value . ", ";
            }
            echo "<h6>Bubble Sorted</h6>";
            foreach ($odd_even_array_data as $value) {
                echo $value . ", ";
            }
            echo "</div>";
            echo "<br>";

            echo "<div class='center'>";
            echo "<h6>Worst Case</h6>";
            foreach ($worst_case_array as $value) {
                echo $value . ", ";
            }
            echo "<h6>Bubble Sorted</h6>";
            foreach ($worst_case_array_data as $value) {
                echo $value . ", ";
            }
            echo "</div>";
            echo "<br>";


            echo "<div class='center'>";
            echo "<h6>Random Number</h6>";
            foreach ($random_array as $value) {
                echo $value . ", ";
            }
            echo "<h6>Bubble Sorted</h6>";
            foreach ($random_array_data as $value) {
                echo $value . ", ";
            }
            echo "</div>";
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../../js/app.js"></script>
</body>

</html>