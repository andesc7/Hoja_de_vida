<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soy Andrés y esta es mi hoja de vida</title>
    <!-- Ruta corregida a minúsculas -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $nombre = "Andres Lopez";
        $profesion = "Ingeniero de Sistemas";
        
        // Arreglo de habilidades técnicas
        $habilidades = [
            "HTML5 & CSS3",
            "Python",
            "SQL (Bases de Datos Relacionales)",
            "Git & GitHub",
            "Diseño UI/UX (Figma)"
        ];
    ?>

    <header>
        <h1><?php echo $nombre; ?></h1>
        <h2><?php echo $profesion; ?></h2>
        <p><?php echo "Soy " . $nombre . " y soy " . $profesion; ?></p>
        <button>
            <a href="index.php" style="text-decoration: none; color: inherit;">Ir a Inicio</a>
        </button>
    </header>

    <section id="habilidades">
        <h3>Habilidades Técnicas</h3>
        <ul>
            <?php foreach ($habilidades as $habilidad): ?>
                <li><?php echo $habilidad; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

</body>
</html>