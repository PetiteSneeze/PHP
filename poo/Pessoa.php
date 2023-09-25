<?php

    class pessoa{

        private $nome;
        private $idade;
        private $endereco;

        function __Construct($nome,$endereco,$idade){
            $this->setNome($nome);
            $this->setEndereco($endereco);
            $this->setIdade($idade);
        }

        function setNome($nome){
            $this ->nome = $nome;
        }
        function getNome(){
            return $this->nome;
        }
        function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        function getEndereco(){
            return $this ->endereco;
        }
        function setIdade($idade){
            if($idade>0)
                $this->idade= $idade;
            else
                $this->idade = 0;
        }
        function getIdade(){
            return $this->idade;
        }
    }
?>