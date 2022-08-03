<?php
// class CreateStack
// {
//     public $top;
//     public $stack = array();

//     function __construct()
//     {
//         $this->top = -1;
//     }

//     // create a function to check whether 
//     // the stack is empty or not  
//     public function isEmpty()
//     {
//         if ($this->top == -1) {
//             echo "Stack is empty. <br>";
//         } else {
//             echo "Stack is not empty. <br>";
//         }
//     }

//     //create a function to return size of the stack 
//     public function size()
//     {
//         echo "The size of stak is " .  $this->top + 1 . "<br>";
//     }

//     //create a function to add new element 
//     public function push($x)
//     {
//         $this->stack[++$this->top] = $x;
//         echo $x . " is added into the stack. <br>";
//     }

//     //create a function to delete top element   
//     public function pop()
//     {
//         if ($this->top < 0) {
//             echo "Stack is empty. <br>";
//         } else {
//             $x = $this->stack[$this->top--];
//             echo $x . " is deleted from the stack. <br>";
//         }
//     }

//     public function topElement()
//     {
//         if ($this->top < 0) {
//             echo "Stack is empty. <br>";
//         } else {
//             echo "The top element of stack is " . $this->stack[$this->top];
//         }
//     }
// }

// $MyStacks = new CreateStack();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}
session_start();
if (isset($_POST['submit'])) { 
    $_SESSION['cart'][] = $_POST['stack_name'];
}
if (isset($_POST['pop'])) { 
   removeLast();
}
function removeLast(){
    $data = count($_SESSION['cart']);
    unset($_SESSION['cart'][$data - 1]);
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

    <form action="task1.php" method="post">
        Name: <input type="text" name="stack_name"><br>
        <input type="submit" name="submit">
        <input type="submit" name="pop" value="Pop"/>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($_SESSION['cart'] as $key => $value) {
                echo "<tr>";
                echo "<th scope='row'>" . $value . "</th>";
                echo "</tr>";
            }
            ?>


        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>