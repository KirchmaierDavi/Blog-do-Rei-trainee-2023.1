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

    public function selectAll($table, $start_limit = null, $rows_amount = null)
    {
        $sql = "select * from {$table}"; 

        if  ($start_limit >= 0 && $rows_amount > 0)
        {
            $sql .= " LIMIT {$start_limit}, {$rows_amount}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    //Funcoes de Produtos

    public function selecionarNomeImagem($id){

        $sql = 'SELECT nome_imagem FROM imagens WHERE imagens.id_produto = :id';
        
        try {

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(["id"=> $id]);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function selecionarIDProduto(){
        
        $sql = 'SELECT id FROM produtos ORDER BY id DESC LIMIT 1';
        
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectProduto($produtos, $categ, $id){

        $sql = "SELECT * FROM {$produtos} WHERE id = {$id}";
        $categorias = $this->selectAll($categ);

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            $result = [
                "produtos" => $stmt->fetchAll(PDO::FETCH_CLASS),
                "categorias" => $categorias
            ];

            return $result;

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function deletarImagens( $id)
    {
        $sql = "delete from `imagens` where id_produto={$id}";
        
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //Funções Genéricas


    public function adicionar($table, $dados)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)', 
            $table, implode(',', array_keys($dados)), 
            ':' . implode(', :', array_keys($dados))
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($dados);
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function editar($table, $dados, $id)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s', 
            $table, implode(', ', array_map(function ($dados){
                return "{$dados} = :{$dados}";
            },
            array_keys($dados))),
            'id = :id'
        );

        $dados['id'] = $id;

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($dados);
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }


    public function deletar($table, $id, $campoPesquisado = 'id')
    { 
        $sql = sprintf( 
            'DELETE FROM %s WHERE %s;',
            $table,
            "$campoPesquisado = :id"
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute(compact('id'));
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    


    public function procurar($table, $nomeCampo, $campoPesquisado)
    {

        $sql = sprintf( 
            'SELECT * FROM %s WHERE %s;',
            $table,
            "$nomeCampo like '%' :campoPesquisado '%' "
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute(compact('campoPesquisado'));
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch(Exception $e) {
            die($e->getMessage());
        }  
    }

    public function editaUsuario($table, $dados, $foto, $id)
    {

        $sql = "update {$table} set nome = '{$dados['nome']}', email = '{$dados['email']}', senha = '{$dados['senha']}'";

        if ($foto != '') {
            $sql = $sql . ", foto = '{$foto}' WHERE id = {$id}";
        } else {
            $sql = $sql . "WHERE id = {$id}";
        }
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

   
    public function countAll($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {
            $statement = $this->pdo->prepare($sql);
    
            $statement->execute();

            return intval($statement->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die("An error occurred when trying to count from database: {$e->getMessage()}");
        }
    }
    
}
