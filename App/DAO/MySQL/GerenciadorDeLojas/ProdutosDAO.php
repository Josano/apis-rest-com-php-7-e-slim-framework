<?php

namespace App\DAO\MySQL\GerenciadorDeLojas;
use App\Models\MySQL\GerenciadorDeLojas\ProdutoModel;

class  ProdutosDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProdutos(int $lojaId): array
    {
        $statement = $this->pdo
            ->prepare('SELECT
                    *
                FROM produtos
                WHERE
                    loja_id = :loja_id
            ;');
        $statement->bindParam(':loja_id', $lojaId, \PDO::PARAM_INT);
        $statement->execute();
        $produtos = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $produtos;
    }

    public function InsertLoja(ProdutoModel $produto) : void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO produtos VALUES(
                null,
                :loja_id,
                :nome,
                :preco,
                :quantidade
                
            );');
        $statement->execute([
            'loja_id' => $produto->getLojaId(),
            'nome' => $produto->getNome(),
            'preco' => $produto->getPreco(),
            'quantidade' => $produto->getQuantidade()

        ]);
    }
}