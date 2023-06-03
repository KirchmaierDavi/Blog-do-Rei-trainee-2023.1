<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit($table, $id, $parameters)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(
                function ($parameters) {
                    return "{$parameters} = :{$parameters}";
                },
                array_keys($parameters)
            )
            ),
            'id = :id',
        );

        $parameters['id'] = $id;

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s;',
            $table,
            "id = :id"
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $value = $id - 1;
        $tableFix = sprintf(" ALTER TABLE users AUTO_INCREMENT =  %s",$value);
        //"UPDATE users SET id = id - 1";
       

        try {
            $statement = $this->pdo->prepare($tableFix);

            $statement->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $updateSql = sprintf('UPDATE %s SET id = id - 1 WHERE id > :id;', $table);
        try {
            $updateStatement = $this->pdo->prepare($updateSql);
            $updateStatement->execute(compact('id'));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
}