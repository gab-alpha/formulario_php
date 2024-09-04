<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $experiences = $_POST['experience'];

    ob_start();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículo de <?php echo $name; ?></title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h1 class="mt-5"><?php echo $name; ?></h1>
        <p><strong>Data de Nascimento:</strong> <?php echo $dob; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Telefone:</strong> <?php echo $phone; ?></p>

        <?php if (!empty($experiences['position'][0])): ?>
            <h2>Experiências Profissionais</h2>
            <?php foreach ($experiences['position'] as $index => $position): ?>
                <div>
                    <h4><?php echo htmlspecialchars($position); ?></h4>
                    <p><strong>Empresa:</strong> <?php echo htmlspecialchars($experiences['company'][$index]); ?></p>
                    <p><strong>Duração:</strong> <?php echo htmlspecialchars($experiences['duration'][$index]); ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    </body>
    </html>

    <?php
    $output = ob_get_clean();

    // Salvar o currículo em um arquivo HTML
    $file_name = 'curriculo-' . time() . '.html';
    file_put_contents('../uploads/' . $file_name, $output);

    // Redirecionar para o download
    header('Content-Disposition: attachment; filename="' . $file_name . '"');
    header('Content-Type: text/html');
    echo $output;
}
?>
