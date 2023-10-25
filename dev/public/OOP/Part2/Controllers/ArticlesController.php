<?php

namespace Controllers;

use Services\Db;
use View\View;

class ArticlesController
{

    private View $view;


    private Db $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../templates');
        $this->db = new Db();
    }

    public function view(int $articleId)
    {
        $result = $this->db->query(
            'SELECT * FROM Articles WHERE id = :id;',
            [':id' => $articleId]
        );

        if ($result === []) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', ['article' => $result[0]]);
    }
}