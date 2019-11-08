<?php

    class Conexao{
        private $host = "mysql:host=localhost;dbname=instagram;port=3307";
        private $user = 'root';
        private $pass = ''; //quem usa mac pode por root denovo

        protected function conectar(){
            return new PDO($this->host, $this->user, $this->pass);
        }
    }