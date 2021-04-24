<?php


class Cidades extends Controller
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cidades
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/cidades/index.php';
    require APP . 'views/_templates/footer.php';
  }
}
