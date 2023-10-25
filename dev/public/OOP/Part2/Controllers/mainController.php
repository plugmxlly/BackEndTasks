<?php

namespace Controllers;

use Services\Db;
use View\View;

class MainController
{
    private view $view;

    private db $db;
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../Templates');
        $this->db = new Db();
    }

    public function main()
    {
        $articles = $this->db->query('SELECT * FROM "articles";');
        $this->view->renderHtml('Main/main.php', ['articles' => $articles]);
    }


    public function sayHello(string $name)
    {
        $this->view->renderHtml('Main/hello.php', ['article_name' => $name]);
    }
}