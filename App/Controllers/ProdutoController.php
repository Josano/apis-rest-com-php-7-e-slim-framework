<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\GerenciadorDeLojas\ProdutosDAO;
use App\Models\MySQL\GerenciadorDeLojas\ProdutoModel;

final class ProdutoController
{
    public function getProdutos(Request $request, Response $response, array $args): Response
    {
        $id = (int)$args['id'];
        $produtosDAO = new ProdutosDAO();
        $produtos = $produtosDAO->getAllProdutos($id);
        $response = $response->withJson($produtos);
        return $response;
    }

    public function insertProduto(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $produtosDAO = new ProdutosDAO();
        $produto = new ProdutoModel();

        $produto->setLojaId($data['loja_id'])
            ->setNome($data['nome'])
            ->setPreco($data['preco'])
            ->setQuantidade($data['quantidade']);
        $produtosDAO->InsertProduto($produto);

        $response = $response->withJson([
            'message' => 'Produto inserido  com sucesso!'
        ]);

        return $response;
    }

    public function updateProduto(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $produtosDAO = new ProdutosDAO();
        $produto = new ProdutoModel();
        $produto->setId((int)$data['id'])
            ->setNome($data['nome'])
            ->setPreco($data['preco'])
            ->setQuantidade($data['quantidade']);
        $produtosDAO->updateProduto($produto);
        $response = $response->withJson([
            'message' => 'Produto alterada com sucesso!'
        ]);
        return $response;
    }
    public function deleteProduto(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getParsedBody();
        $produtosDAO = new ProdutosDAO();
        $id = (int)$queryParams['id'];
        $produtosDAO->deleteProduto($id);

        $response = $response->withJson([
            'message' => 'Produto excluído com sucesso!'
        ]);
        return $response;
    }
}