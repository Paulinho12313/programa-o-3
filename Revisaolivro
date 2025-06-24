<?php

class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro '{$this->titulo}' emprestado com sucesso.<br>";
        } else {
            echo "Livro '{$this->titulo}' não está disponível.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro '{$this->titulo}' devolvido com sucesso.<br>";
    }
}

class Aluno {
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function pegarLivro(Livro $l) {
        echo "{$this->nome} está tentando pegar o livro '{$l->getTitulo()}'.<br>";
        $l->emprestar();
    }
}

// aqui vou criar os objetos 
$livro1 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry");
$livro2 = new Livro("Dom Casmurro", "Machado de Assis");

$aluno1 = new Aluno("João", "2021001");

// aqui é o teste
$aluno1->pegarLivro($livro1);
$livro1->devolver();
$aluno1->pegarLivro($livro1);
$aluno1->pegarLivro($livro2);

?>
