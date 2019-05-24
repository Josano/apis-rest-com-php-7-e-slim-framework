<?php
namespace App\Models\MySQL\CodeeasyGerenciadorDeLojas;
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
    public function setLojaId(int $loja_id)
    {
        $this->loja_id = $loja_id;
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
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return float
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * @param float $preco
     */
    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     */
    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade;
    }


}