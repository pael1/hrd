<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="text-center">
            <div class="question">
                <h6>Create the given pattern (double-diamond)</h6>
                <img src="../../images/1.PNG" alt="" class="mt-3 mx-auto">
            </div>
            <div class="answer mt-5">
                <h6>Answer</h6>
                <?php
                $size = 4;

                // upside pyramid
                for ($i = 1; $i <= $size; $i++) {
                    // printing spaces
                    for ($j = $size; $j > $i; $j--) {
                        echo "&nbsp;&nbsp;";
                    }
                    // printing star
                    for ($k = 0; $k < $i * 2 - 1; $k++) {
                        if ($k === 0 || $k === 2 * $i - 2) {
                            echo "*";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    echo "<br>";
                }
                // downside pyramid
                for ($i = 1; $i <= $size - 1; $i++) {
                    // printing spaces
                    for ($j = 0; $j < $i; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    // printing star
                    for ($k = ($size - $i) * 2 - 1; $k >= 1; $k--) {
                        if ($k === 1 || $k === ($size - $i) * 2 - 1) {
                            echo "*";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    echo "<br>";
                }
                ?>
                <!-- <img src="../../images/1code.PNG" alt="" class="mt-3 code"> -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>