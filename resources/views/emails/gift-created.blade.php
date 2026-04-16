<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>Le cadeau {{ $gift->name }} a bien été ajouté ({{ number_format($gift->price, 2, ',', ' ') }}€)</p>
</body>
</html>
