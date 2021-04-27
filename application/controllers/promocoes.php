<?php


class Combos
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/combos
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/combos/index.php';
    require APP . 'views/_templates/footer.php';
  }
}
