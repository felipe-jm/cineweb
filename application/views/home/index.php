<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
    <div>
        <h2>Escolha uma das opções:</h2>
        <div class="optionsWrapper">
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>/cidades">
                Cidades
            </a>
            <a class="btn homeBtn">
                Filmes
            </a>
            <a class="btn homeBtn">
                Equipe
            </a>
            <a class="btn homeBtn">
                Comidas
            </a>
            <a class="btn homeBtn">
                Unidades
            </a>
            <a class="btn homeBtn">
                Combos
            </a>
            <a class="btn homeBtn">
                Clientes
            </a>
            <a class="btn homeBtn">
                Promoções
            </a>
            <a class="btn homeBtn">
                Sessões
            </a>
        </div>
    </div>
</div>