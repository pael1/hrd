<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1; Number 1</title>
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
            1. Create the given pattern (double-diamond)
        </pre>
        <div class="center">
            <?php
            $size = 8;

            //upper pyramid
            for ($i = 1; $i <= $size; $i++) {
                // printing spaces 1st pyramid
                for ($j = $size; $j > $i; $j--) {
                    echo "&nbsp;&nbsp;";
                }
                // printing star 1st pyramid
                for ($k = 0; $k < $i * 2 - 1; $k++) {
                    if ($k === 0 || $k === 2 * $i - 2) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                // printing spaces 2nd pyramid
                for ($j1 = $size; $j1 > $i; $j1--) {
                    echo "&nbsp;&nbsp;";
                }
                // printing another spaces 2nd pyramid
                for ($j1 = $size - 1; $j1 > $i; $j1--) {
                    echo "&nbsp;&nbsp;";
                }

                // printing star 2nd pyramid
                for ($k1 = 0; $k1 < $i * 2 - 1; $k1++) {
                    if ($k1 === 0 || $k1 === 2 * $i - 2) {
                        if ($i != 8) {
                            echo "*";
                        }
                        if ($k1 == 14) {
                            echo "*";
                        }
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }

            // downside pyramid
            for ($i = 1; $i <= $size - 1; $i++) {
                // printing spaces 1st downside pyramid
                for ($j = 0; $j < $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                // printing star 1st downside pyramid
                for ($k = ($size - $i) * 2 - 1; $k >= 1; $k--) {
                    if ($k === 1 || $k === ($size - $i) * 2 - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }

                // printing spaces 2nd downside pyramid
                for ($j1 = 0; $j1 < $i; $j1++) {
                    echo "&nbsp;&nbsp;";
                }
                // printing another spaces 2nd downside pyramid
                for ($j1 = 1; $j1 < $i; $j1++) {
                    echo "&nbsp;&nbsp;";
                }

                // printing star 2nd downside pyramid
                for ($k1 = ($size - $i) * 2 - 1; $k1 >= 1; $k1--) {
                    if ($k1 === 1 || $k1 === ($size - $i) * 2 - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }

            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../../js/app.js"></script>
</body>

</html>