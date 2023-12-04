<?php
// 
// $num1=82;
// $num2=65;
// $result=$num1+$num2;
// echo "The sum of $num1 and $num2 is $result <br>";

// $num1=82;
// $num2=65;
// $result=$num1-$num2;
// echo "The subtraction of $num1 and $num2 is $result <br>";

// $num1=82;
// $num2=65;
// $result=$num1*$num2;
// echo "The multiply of $num1 and $num2 is $result <br>";

// $num1=82;
// $num2=65;
// $result=$num1/$num2;
// echo "The division of $num1 and $num2 is $result";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
    <script></script>
</head>
<body>
    <form method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1">
        <br><br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2">
        <br><br>
        <input type="submit" name="calculate" value="add">
        <input type="submit" name="calculate" value="sub">
        <input type="submit" name="calculate" value="mul">
        <input type="submit" name="calculate" value="div">
        <br><br>
        <label for="result">Answer:</label>
        <input type="text" name="result" id="result" readonly>
</form>
</body>
<?php
if (isset($_POST['add'])){
    $input1=$_POST['num1'];
    $input2=$_POST['num2'];
    $add=$input1+$input2;
    echo '<script>document.getElementById("result").value='.$add.' </script>';
}
?>
</html>