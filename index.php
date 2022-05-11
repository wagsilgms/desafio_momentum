<?php require 'head.php'; ?>

<body>
    <div class="fundo">
        <h1>Olá, Visitante!<br>Bem-vindo ao site Momentum.<br><br>Qual o seu nome?<h1>
        <form method="POST" action="form.php">
            <div id="aviso">Por favor, preencha seu nome!</div>
            <input type="text" name="nome" id="nome"> <br>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <script src="assets/js/script.js"></script>
</body>

<?php require 'footer.php'; ?>