
<!doctype html>
<html lang="en">
<head>
    <style>
        tr, td {
            border: 2px solid black;
        }


    </style>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <h2>This is PHP</h2>
        <tr>
            <th> <?php $txt = "Greeting"; echo "$txt <br>" ?> </th>
            <th><?php $txt2 = "Question"; echo "$txt2 <br>" ?> </th>
        </tr>
        <tr>
            <td><?php echo "Hello?" ?></td>
            <td><?php echo "How is your class?" ?></td>
        </tr>
        <tr>
            <td><?php echo "How are you?" ?></td>
            <td><?php echo 4 / 2 ?></td>
        </tr>

</table>

</body>
</html>
