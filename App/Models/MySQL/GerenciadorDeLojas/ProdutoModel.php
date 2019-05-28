<?php
namespace App\Models\MySQL\GerenciadorDeLojas;
final class ProdutoModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $loja_id;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var float
     */
    private $preco;
    /**
     * @var int
     */
    private $quantidade;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     * @return ProdutoModel
     */
    public function setId(int $id): ProdutoModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getLojaId(): int
    {
        return $this->loja_id;
    }

    /**
     * @param int $loja_id
     */
    public function setLojaId(int $loja_id): ProdutoModel
    {
        $this->loja_id = $loja_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): ProdutoModel
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreco(): float
    {
        return (float)$this->preco;
    }

    /**
     * @param float $preco
     */
    public function setPreco(float $preco): ProdutoModel
    {
        $this->preco = $preco;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return (int)$this->quantidade;
    }

    /**
     * @param int $quantidade
     */
    public function setQuantidade(int $quantidade): ProdutoModel
    {
        $this->quantidade = $quantidade;
        return $this;
    }


}