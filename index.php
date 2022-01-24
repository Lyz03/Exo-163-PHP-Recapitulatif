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

<form action="/newsletter.php" method="post">
    <div>
        <label for="email">Adresse mail :</label>
        <input id="email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
    </div>
    <input type="submit" name="submit">
</form>



</body>
</html>

