<?php
    include_once "models/Post.php";
    class PostController{
        public function acao($rotas){
            switch($rotas){
                case "posts":
                    $this->viewPosts();
                break;
                case "formulario-post";
                    $this->viewFormularioPost();
                break;
                case "cadastrar-post":
                    $this->CadastroPost();
                break;
            }
        }

        private function  viewFormularioPost(){
            include "views/newPost.php";

        }

        private function viewPosts(){
            include "views/posts.php";
        }

        private function cadastroPost(){
            $descri = $_POST['descri']; //pegando do formulario newPost
            // var_dump($_FILES);
            // exit;
            $nomeArquivo = $_FILES['img']['name'];
            $pastaTemporaria = $_FILES["enviado"]["tmp_name"];
            $pastaUploads = "views/img/$nomeArquivo";
            move_uploaded_file($pastaTemporaria,$pastaUploads);

            $post = new Post();
            $resultado = $post->postar($pastaUploads, $descri);
            if($resultado){
                header('Location:/instaFake/posts');
            }
        }
    }