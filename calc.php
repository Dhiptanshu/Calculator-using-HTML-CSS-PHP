<?php
session_start();

if (!isset($_SESSION['expression'])) {
    $_SESSION['expression'] = '';
}

if (isset($_POST['choice'])) {
    $choice = $_POST['choice'];

    if ($choice == '=') {
        $_SESSION['expression'] = eval("return " . $_SESSION['expression'] . ";");
    } elseif ($choice == 'C') {
        $_SESSION['expression'] = ''; 
    } else {
        $_SESSION['expression'] .= $choice; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        input {
            width: 147px;
            height: 40px;
            text-align: right;
            font-size: 18px;
        }
        button {
            width: 45px;
            height: 45px;
            font-size: 18px;
            margin: 2px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="text" name="number" id="number" value="<?= $_SESSION['expression'] ?>" readonly>
        <button type="submit" name="choice" value="C">C</button>
        <br>
        <button type="submit" name="choice" value="7">7</button>
        <button type="submit" name="choice" value="8">8</button>
        <button type="submit" name="choice" value="9">9</button>
        <button type="submit" name="choice" value="/">/</button>
        <br>
        <button type="submit" name="choice" value="4">4</button>
        <button type="submit" name="choice" value="5">5</button>
        <button type="submit" name="choice" value="6">6</button>
        <button type="submit" name="choice" value="*">x</button>
        <br>
        <button type="submit" name="choice" value="1">1</button>
        <button type="submit" name="choice" value="2">2</button>
        <button type="submit" name="choice" value="3">3</button>
        <button type="submit" name="choice" value="-">-</button>
        <br>
        <button type="submit" name="choice" value="0">0</button>
        <button type="submit" name="choice" value=".">.</button>
        <button type="submit" name="choice" value="=">=</button>
        <button type="submit" name="choice" value="+">+</button>
    </form>
</body>
</html>
