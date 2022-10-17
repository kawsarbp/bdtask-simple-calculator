<?php
if(isset($_POST['calculate']))
{
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];
    if(is_numeric($first_number) && is_numeric($second_number))
    {
        if($_POST['calculate'] == 'sum')
        {
            $result = $first_number + $second_number;
        }elseif($_POST['calculate'] == 'substraction'){
            $result = $first_number - $second_number;
        }elseif($_POST['calculate'] == 'multiplication'){
            $result = $first_number * $second_number;
        }elseif($_POST['calculate'] == 'division'){
            $result = $first_number / $second_number;
        }
    }else
    {
        $error = "Please Enter Only Number !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section id="calculator-area">
        <?php if(isset($error)) { ?>
            <h3 style="text-align: center; color:red;"><?= $error; ?></h3>
        <?php } ?>
    <div id="box-area">
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="box">
            <label for="first_number">Enter First Number</label>
            <input type="text" value="<?= isset($first_number)?$first_number:'' ?>" id="first_number" name="first_number" required="" >
        </div>
        <br>
        <div class="box">
            <label for="second_number">Enter Second Number</label>
            <input type="text" value="<?= isset($second_number)?$second_number:'' ?>" id="second_number" name="second_number" required="" >
        </div>
        <br>
        <div class="box">
            <label for="">Result</label>
            <input type="text" id="" value="<?= isset($result)?$result:'' ?>">
        </div>
        <br>
        <div>
            <input type="submit" value="sum" name="calculate" class="calculate">
            <input type="submit" value="substraction" name="calculate" class="calculate">
            <input type="submit" value="multiplication" name="calculate" class="calculate">
            <input type="submit" value="division" name="calculate" class="calculate">
        </div>
    </form>
    </div>
    
</section>

</body>
</html>