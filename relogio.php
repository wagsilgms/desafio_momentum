<?php require 'head.php'; ?>

<body>
    <div class="relogio digital">
        <span class="h"></span>
        <span>:</span>
        <span class="m"></span>
        <span>:</span>
        <span class="s"></span>
    </div>

    <div class="frase_cumprimen"><span class="cumprimen"></span>, <?=$dados['nome'];?>!</div>
    <div class="frase" id="frase">
        <?=$dados['frase'];?>
        <div class="autor" id="autor"><?=$dados['autor'];?></div>
    </div>
    <a href="index.php" class="sair">Sair</a>
    
    <script src="assets/js/script.js"></script>
</body>

<?php require 'footer.php'; ?>