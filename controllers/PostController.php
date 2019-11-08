<?php

    class PostController{
        public function acao($rotas){
            switch($rotas){
                case "posts":
                    echo "Pagina dos Posts";
                break;
                case "formulario-post";
                    echo "Pagina de Cadastro dos Posts.";
                break;
            }
        }
    }