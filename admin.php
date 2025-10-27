<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victoire !</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f9f9f9;
        }

        /* Conteneur pour gérer la position */
        .image-container {
            width: 100%;
            height: 100vh;           /* prend toute la hauteur de l’écran */
            overflow: hidden;        /* coupe si jamais ça dépasse */
            display: flex;
            justify-content: center; /* centré horizontalement */
            align-items: flex-start; /* collé en haut */
        }

        .image-container img {
            width: 100%;
            height: auto;
            object-fit: contain;     /* garde tout visible sans couper */
            object-position: top;    /* aligne le haut de l’image */
        }
    </style>
</head>
<body>
<div class="image-container">
    <img src="Frame%201.png" alt="Bravo, vous êtes sociétaires CASDEN">
</div>
</body>
</html>