<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
    <div>
        <h2>Olá! Escolha uma das opções:</h2>
        <div class="optionsWrapper">
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>cidades">
                Cidades
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>filmes">
                Filmes
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>funcionarios">
                Funcionários
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>comidas">
                Comidas
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>unidades">
                Unidades
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>combos">
                Combos
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>clientes">
                Clientes
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>promocoes">
                Promoções
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>sessoes">
                Sessões
            </a>
            <a class="btn homeBtn" href="<?php echo URL_WITH_INDEX_FILE; ?>assentos">
                Assentos
            </a>
        </div>
    </div>
</div>