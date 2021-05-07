# Cineweb :movie_camera:

Um sistema gerenciador de franquias de cinemas.

## Features

- Gerenciamento de unidades da franquia
- Gerenciamento de funcionários
- Gerenciamento de comidas, combos e promoções :chocolate_bar:
- Gerenciamento de filmes, sessões, assentos

## :zap: Requisitos para rodar o projeto

- PHP 5.3.0+
- MySQL
- Git
- (Opcional) Possuir o Xampp

## :information_source: Como rodar o projeto no XAMPP

Se ainda não possui o XAMPP, segue um tutorial de como instalá-lo e como funciona :point_right: [tutorial](https://www.youtube.com/watch?v=L-0prC44hbY)

Clone o projeto para dentro de htdocs (pasta do XAMPP em que são servidos os arquivos .php):

```bash
git clone https://github.com/felipe-jm/cineweb
```

Após isso:

- Entre em [./application/config/config.php](./application/config/config.php)
- Defina as configurações do banco de dados
- Execute as queries .sql localizadas em [./sql](./sql):
  1. [./sql/01-create-database.sql](./sql/01-create-database.sql)
  2. [./sql/02-create-table.sql](./sql/02-create-table.sql)
  3. [./sql/03-seed-database.sql](./sql/03-seed-database.sql)

> Para visualizar o banco de dados no XAMPP, basta acessar [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

Para iniciar o projeto, basta acessar [http://localhost/cineweb](http://localhost/cineweb) e você irá cair na página inicial do sistema.

## Breve introdução

#### Estrutura geral

As URLs da aplicação estão ligadas diretamente aos métodos de seu controller em [./application/controllers](./application/controllers)

`exemplo.com/cineweb/index.php/cidades` irá realizar o que _index()_ executa em [./application/controllers/cidades.php](./application/controllers/cidades.php)

`exemplo.com/cineweb/index.php/cidades/criar` irá realizar o que _criar()_ executa em [./application/controllers/cidades.php](./application/controllers/cidades.php)

`exemplo.com/cineweb/` irá realizar o que _index()_ executa em [./application/controllers/home.php](./application/controllers/home.php) (página padrão).

#### Exibindo uma View

O método criar() no controller [./application/controllers/cidades.php](./application/controllers/cidades.php) mostra o header, footer e a view/página criar.php que está em [./application/views/cidades/criar.php](./application/views/cidades/criar.php)

```php
public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/cidades/criar.php';
    require APP . 'views/_templates/footer.php';
  }
```

#### Trabalhando com dados do banco

Para realizar operações sobre dados de um certo model, cujo as funções estão em [./application/model/model.php](./application/model/model.php), basta dentro do controller utilizar **$this->model->{nome da função desejada}();**

```php
public function index()
{
    // pegando todos os filmes
    $filmes = Filme::all();

   // assim dentro das seguintes views pode-se acessar $filmes
    require APP . 'views/_templates/header.php';
    require APP . 'views/filmes/index.php';
    require APP . 'views/_templates/footer.php';
}
```

Atualmente, a manipulação de dados ocorre somente em [./application/model/model.php](./application/model/model.php) utilizando PDO. Exemplo:

```php
public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM filmes";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }
```

O resultado ($filmes) pode ser utilizado entro das views:

```php
<tbody>
<?php foreach ($filmes as $filme) { ?>
    <tr>
        <td><?php if (isset($filme->nome)) echo htmlspecialchars($filme->nome, ENT_QUOTES, 'UTF-8'); ?></td>
        <td class="acoes">
            <a href="<?php echo URL_WITH_INDEX_FILE . 'filmes/editar/' . htmlspecialchars($filme->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/edit.svg" alt="Editar" height="28" width="28">
            </a>
        </td>
        <td class="acoes">
            <a href="<?php echo URL_WITH_INDEX_FILE . 'filmes/deletarFilme/' . htmlspecialchars($filme->id, ENT_QUOTES, 'UTF-8'); ?>">
                <img src="<?php echo URL; ?>public/img/icons/trash.svg" alt="Deletar" height="28" width="28">
            </a>
        </td>
    </tr>
<?php } ?>
</tbody>
```
