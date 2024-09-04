<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Gerador de Currículo</h1>
    <form action="templates/resume.php" method="post">
        <div class="form-group">
            <label for="name">Nome Completo:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="dob">Data de Nascimento:</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div id="experiences-container">
            <h4>Experiências Profissionais</h4>
            <button type="button" id="add-experience" class="btn btn-primary">Adicionar Experiência +</button>
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-success">Gerar Currículo</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
