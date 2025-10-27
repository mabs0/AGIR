<?php
session_start();

// Credentials en dur (insecure - uniquement pour test local)
const AUTH_EMAIL = 'caroline.refuz@casden.fr';
const AUTH_PASS  = 'Agir-2025!';

$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère proprement les champs
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Comparaison "brute"
    if ($username === AUTH_EMAIL && $password === AUTH_PASS) {
        // Auth OK -> on démarre la session utilisateur et redirige
        $_SESSION['user'] = AUTH_EMAIL;
        // Redirection vers une page protégée (change si nécessaire)
        header('Location: page-user.php');
        exit;
    } else {
        $err = 'Identifiants incorrects.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script defer src="https://umami.multiserv.ovh/script.js" data-website-id="38bc8dd3-cd11-417a-9343-9895eebb34d3"></script>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/global/logo-onglet.png">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="all">
    <div class="login-container">
        <h2 class="text-center mb-4">Connexion</h2>

        <?php if (!empty($err)): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($err, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST" autocomplete="off">
            <div class="mb-3">
                <label for="username" class="form-label">Adresse Mail</label>
                <input type="email" class="form-control" id="username" name="username"
                       value="<?= isset($username) ? htmlspecialchars($username, ENT_QUOTES, 'UTF-8') : '' ?>"
                       required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
    </div>
</div>
</body>
</html>
