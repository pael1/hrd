<?php
if (!isset($_SESSION['stacks'])) {
    $_SESSION['stacks'] = [];
}
session_start();
if (isset($_POST['push'])) {
    $_SESSION['stacks'][] = $_POST['stack_name'];
}
if (isset($_POST['pop'])) {
    removeLast();
}
function removeLast()
{
    $length = count($_SESSION['stacks']);
    unset($_SESSION['stacks'][$length - 1]);
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
</head>

<body>
    <div class="container">
        <pre>
        3.Create a stack of integers using arrays( First in last out )

a. create input fields and push button to insert new value
b. Create pop button to remove top value
c. Always display the existing stack content
d. Do not use pre defined php array function like array_pop
        </pre>
        <form action="task3.php" method="post">
            Name: <input type="text" name="stack_name"><br>
            <button type="submit" name="push">Push</button>
            <button type="submit" name="pop">Pop</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['stacks'])) {
                    foreach ($_SESSION['stacks'] as $key => $value) {
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