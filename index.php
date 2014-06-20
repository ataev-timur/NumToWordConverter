<?php
/**
 * Created by PhpStorm.
 * User: Timmy
 * Date: 14.06.14
 * Time: 12:10
 */


require_once 'Input/Input.php';
require_once 'Output/Output.php';
foreach (glob("Converter/*.php") as $filename)
{
    require_once $filename;
}


//for($i=119999900; $i <= 999999999; $i++){
//    $input  = new Input();
//    $input->setNumber($i);
//    $output = new Output($input);
//    $output->display('ua'); // en, ua, ru - lang
//}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Converter</title>
</head>
<body>

<form action="index.php" method="post">
    <p>
        <label for="number">Number: </label>
        <input type="text" id="number" name="number" size="10" maxlength="9" />
    </p>
    <p>
        <input type="radio" name="lang" value="ua" />Ukrainian
        <input type="radio" name="lang" value="en" />English
        <input type="radio" name="lang" value="ru" />Russian
    </p>
    <p><input type="submit" value="Submit"></p>
</form>
<?php
    if(isset($_POST['number']) && isset($_POST['lang'])){
        $number = $_POST['number'];
        $lang = $_POST['lang'];
        $input  = new Input();
        $input->setNumber($number);
        $output = new Output($input);
        $output->display($lang); // en, ua, ru - lang
        echo $_POST['number'];
    } else
        echo 'Choose language and enter the number';
?>
</body>
</html>