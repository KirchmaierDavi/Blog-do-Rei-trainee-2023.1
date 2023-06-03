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
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectById($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id = :id";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit($table, $id, $parametros)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(function ($parametros) {
                return "{$parametros} = :{$parametros}";
            }, array_keys($parametros))),
            'id = :id'
        );

        $parametros['id'] = $id;

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parametros);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf('DELETE FROM $s WHERE $s', $table, 'id = : $id');

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact($id));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteUser($table, $id)
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

    public function selectLastPosts($table)
    {
        $sql = sprintf("SELECT * FROM %s ORDER BY %s desc LIMIT %s", $table, 'id', "5");

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectPost($id, $table)
    {
        $sql = sprintf("SELECT * FROM %s WHERE %s", $table, "id = $id");

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
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table, implode(', ', array_keys($parameters)), ':' .implode(', :', array_keys($parameters)));

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}