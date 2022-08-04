<?php
if (!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = [];
}
session_start();
if (isset($_POST['push'])) {
    $_SESSION['queue'][] = $_POST['stack_name'];
}
if (isset($_POST['pop'])) {
    removeFirst();
}
function removeFirst()
{
    $firstKey = array_key_first($_SESSION['queue']);
    unset($_SESSION['queue'][$firstKey]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2; Number 3</title>
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
        4.Create a queue of integers using arrays (first in first out )

            e. create input fields and push button to insert new value
            f. Create pop button to remove the old value
            g. Always display the existing queue content
            h. Do not use pre defined php array function like array_pop
        </pre>

        <form action="task4.php" method="post">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="stack_name">
            </div>
            <button type="submit" class="btn btn-success" name="push">Push</button>
            <button type="submit" class="btn btn-danger" name="pop">Pop</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if (isset($_SESSION['queue'])) {
                    foreach ($_SESSION['queue'] as $key => $value) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $value . "</th>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>