<?php
$name = "張三";
$accout = "iPod";
$password = "1111";
$email = "iPod@iPod";
$gender = "male";
$birthday = "1980-08-08";
$telephone = "4257383#224";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>

<form>
<table height= "70" width="600" cellspacing = "1px" border="1">

    <tr>
        <td>姓名</td>
        <td><input type="text" value="<?php echo $name; ?>"></td>
    </tr>
    <tr>
        <td>帳號</td>
        <td><input type="text" maxlength="8" value="<?php echo $accout; ?>"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="password" maxlength="8" value="<?php echo $password; ?>"</td>
    </tr>
    <tr>
        <td>e-mail</td>
        <td><input type="email" value="<?php echo $email; ?>"</td>
    </tr>
    <tr>
        <td>性別</td>
        <td>
            <?php

            if($gender == "male")
            {
                echo "<input type=\"radio\" name=\"gender\" value=\"male\" checked> Male<br>";
                echo "<input type=\"radio\" name=\"gender\" value=\"female\"> Female<br>";
            }
            else if($gender == "female")
            {
                echo "<input type=\"radio\" name=\"gender\" value=\"male\"> Male<br>";
                echo "<input type=\"radio\" name=\"gender\" value=\"female\" checked> Female<br>";
            }

            ?>

        </td>
    </tr>
    <tr>
        <td>生日</td>
        <td><input type="date" value="<?php echo $birthday; ?>"></td>
    </tr>
    <tr>
        <td>聯絡電話</td>
        <td><input type="tel" value="<?php echo $telephone; ?>"></td>
    </tr>

</table>

</form>

</body>
</html>