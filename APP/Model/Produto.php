<?php

    namespace APP\Model;
    
    class Produto {

        public $nome;
        public $preco;
        public $qtd;

        public function __construct($nome, $preco, $qtd)
        {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->qtd = $qtd;

        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getPreco()
        {   
            return $this->preco;
        }

        public function getQtd()
        {
            return $this->qtd;
        }
        
    }