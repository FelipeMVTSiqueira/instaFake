<?php
    include_once "Conexao.php";
    class Post extends Conexao{
        public function postar($img, $descri){
            $db = parent::conectar();
            $query = $db->prepare("INSERT INTO instaDados(img, descri) values(?,?)");
            return $query->execute([$img, $descri]);
            //no model ele soh fica responsavel de cadastrar no banco de dados essa eh a unica coisa que //ele sabe fazer
            //nao manda pra rota, nao sabe se vai fazer uploadd de arquivo nem nada. soh mexe com banco
            //model pega o link da imagem, pega a descrição e guarda no banco de dados.
            //ai o controller faz a conversao das paradas pega o link pega a descrição e manda pro model //salvar no banco de dados
            //view soh front end html
            //model eh soh contato com o banco de dados tabela conexao
            //toda a logica fica no controller, pra redirecionar, buscar no banco, view ou nmodel ele //que administra
            
        }
    }