<?php

    class PostController{
        public function acao($rotas){
            switch($rotas){
                case "posts":
                    $this->viewPosts();
                break;
                case "formulario-post";
                    $this->viewFormularioPost();
                break;
            }
        }

        private function  viewFormularioPost(){
            include "views/newPost.php";

        }

        private function viewPosts(){
            include "views/posts.php";
        }
    }