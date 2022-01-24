<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bonus</title>
</head>
<body>

<?php

if (isset($_POST['submit']) && !empty($_POST['email'])) {
    $userEmail = strip_tags($_POST["email"]);
    $date = new DateTime();
    $date -> setTimezone(new DateTimezone('Europe/Paris'));

    $userInfo = trim($userEmail) . "," . $date -> format('d/m/y H\hi' . ",");

    file_put_contents('email.txt', "\n" . $userInfo, FILE_APPEND);

    $fileContent = file_get_contents('email.txt');
    $array = explode(',', $fileContent);

    ?>
    <table style="border-collapse: collapse" border="1px solid black">
        <tr>
            <td>Email</td>
            <td>Date</td>
        </tr>
        <?php
        for ($i = 0; $i < count($array) - 1; $i += 2) {
            $a = $i+1;
            echo "<tr><td>$array[$i]</td><td>$array[$a]</td></tr>";
        }
        ?>
    </table>
    <?php
}
?>

</body>
</html>