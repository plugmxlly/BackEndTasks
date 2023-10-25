<?php

namespace Services;

class Db
{
    private \PDO $pdo;

    public function __construct()
    {
        $dsn = 'pgsql:host=postgres;port=5432;dbname=postgres;';
        $this->pdo = new \PDO($dsn, 'root', 'password');
    }

    public function query(string $sql, $params =[]): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result)
        {
            return null;
        }

        return $sth->fetchAll();
    }
}