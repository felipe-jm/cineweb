<?php


class Funcionarios
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/funcionarios
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/funcionarios/index.php';
    require APP . 'views/_templates/footer.php';
  }
}
