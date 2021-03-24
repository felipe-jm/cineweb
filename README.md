# Cineweb :movie_camera:

Um sistema gerenciador de cinemas.

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

1. Entre em [./application/config/config.php](./application/config/config.php)
2. Defina as configurações do banco de dados
3. Executa as queries .sql para criação do banco

> Para visualizar o banco de dados no XAMPP, basta acessar [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

Para iniciar o projeto, basta acessar [http://localhost/cineweb](http://localhost/cineweb) e você irá cair na página inicial do sistema.

## Breve introdução

#### Estrutura geral

As URLs da aplicação estão ligadas diretamente aos métodos de seu controller em [./application/controllers](./application/controllers)

`exemplo.com/home/exampleOne` irá realizar o que _exampleOne()_ executa em [./application/controllers/home.php](./application/controllers/home.php)

`exemplo.com/home` irá realizar o que _index()_ executa em [./application/controllers/home.php](./application/controllers/home.php)

`exemplo.com` irá realizar o que _index()_ executa em [./application/controllers/home.php](./application/controllers/home.php) (página padrão).

#### Exibindo uma View

O método exampleOne() no controller [./application/controllers/home.php](./application/controllers/home.php) mostra o header, footer e a view/página example_one.php que está em [./application/views/example_one.php](./application/views/example_one.php)

```php
public function exampleOne()
{
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/home/example_one.php';
    require APP . 'views/_templates/footer.php';
}
```

#### Trabalhando com dados do banco

Para realiar operações sobre dados de um certo model, cujo as funções estão em [./application/model/model.php](./application/model/model.php), basta dentro do controller utilizar **$this->model->{nome da função desejada}();**

```php
public function index()
{
    // pegando todos os filmes
    $movies = $this->model->getAllMovies();

   // assim dentro das seguintes views pode-se acessar $movies
    require APP . 'views/_templates/header.php';
    require APP . 'views/songs/index.php';
    require APP . 'views/_templates/footer.php';
}
```

Atualmente, a manipulação de dados ocorre somente em [./application/model/model.php](./application/model/model.php) utilizando PDO. Exemplo:

```php
public function getAllMovies()
{
    $sql = "SELECT id, nome, duracao FROM filmes";
    $query = $this->db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}
```

O resultado ($movies) pode ser utilizado entro das views:

```php
<tbody>
<?php foreach ($movies as $movie) { ?>
    <tr>
        <td><?php if (isset($movie->nome)) echo htmlspecialchars($movie->nome, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($movie->duracao)) echo htmlspecialchars($movie->duracao, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php } ?>
</tbody>
```
