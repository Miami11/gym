<?php
$name = "小丸子";
$age = "是秘密唷..";
$address = "漫畫走廊...";
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
     th {
         background-color: #ff6479;
     }


    </style>
</head>
<body>
<table height= "60" width="200" cellspacing = "1px" border="1">
        <tr>
            <th>姓名</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>年齡</th>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <th>地址</th>
            <td><?php echo $address; ?></td>

        </tr>
    </table></div>


</body>
</html>

