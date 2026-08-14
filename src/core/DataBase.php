<?php

class Database
{
    public PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "pgsql:host=localhost;dbname=education;port=5432",
                "postgres",
                "1945DIOUF"
            );

            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->pdo->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch (PDOException $e) {

            $sqlitePath = dirname(__DIR__, 2) . "/erp.db";

            $this->pdo = new PDO(
                "sqlite:" . $sqlitePath
            );

            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->pdo->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );
        }
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }

    public function query(
        string $sql,
        bool $single = true
    ): array|false {

        $query = $this->pdo->query($sql);

        if ($single) {
            return $query->fetch();
        }

        return $query->fetchAll();
    }

    public function prepare(
        string $sql,
        array $datas = []
    ): PDOStatement {

        $statement = $this->pdo->prepare($sql);

        $statement->execute($datas);

        return $statement;
    }

    public function executeQuery(
        string $sql,
        array $datas = [],
        bool $single = true
    ): array|false {

        $statement = $this->prepare($sql, $datas);

        if ($single) {
            return $statement->fetch();
        }

        return $statement->fetchAll();
    }
}