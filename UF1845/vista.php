<!DOCTYPE html>
<html lang="ca">

<head>
    <title>Formulari de contacte</title>
    <link rel="stylesheet" href="estil.css">
</head>

<body>
    <form class="styled-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" name="nom" placeholder="Escriu el nom">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="correu" placeholder="Escriu el correu">
        </div>

        <!-- Para errores o mensaje correcto -->

        <?php if (!empty($errors)) : ?>
            <div>
                <?php echo $errors; ?>
            </div>
        <?php elseif ($enviat) : ?>
            <div>
                <p>Enviat correctament</p>
            </div>
        <?php endif ?>

        <div class="form-group">
            <input type="submit" name="submit" value="Enviar correu">
        </div>
    </form>
</body>

</html>