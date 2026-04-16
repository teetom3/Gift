<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p style="color: #0000FF; font-weight: bold;">
        Le cadeau {{ $giftName }} a bien été ajouté ({{ number_format($giftPrice, 2, ',', ' ') }}€)
    </p>
</body>
</html>
