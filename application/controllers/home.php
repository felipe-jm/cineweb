<?php


class Home extends Controller
{
    /**
     * PAGE: index
     * Este método é acessado ao acessar -> http://localhost/home (página inicial)
     */
    public function index()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/index.php';
        require APP . 'views/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     * Este método é acessado ao acessar -> http://localhost/home/exampleone
     */
    public function exampleOne()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/example_one.php';
        require APP . 'views/_templates/footer.php';
    }
}
