<?php
$num = [];

for ($i = 1; $i < 7; $i++) {
  $arr = [$i];
  $res = $i;
  for ($j = 4; $j > 0; $j--) {
    //multiply the result by index plus 1
    $res = $res * ($i + 1);
    //store to array $arr
    $arr[] = $res;
  }
  $num[] = $arr;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Part 1; Number 4</title>
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
         4.Create the given pattern
        </pre>
    <div class="center">
      <table class="table cus_table">
        <?php
        foreach ($num as $value) {
          echo "<tr>";
          for ($i = count($value) - 1; $i >= 0; $i--) {
            echo "<td>" . $value[$i] . "</td>";
          }
          echo "</tr>";
        }
        ?>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="../../js/app.js"></script>
</body>

</html>