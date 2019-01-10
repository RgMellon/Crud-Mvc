<?php 

    require 'vendor/autoload.php';

    use APP\Controller\ProdutosController;

    $acao = $_GET['acao'];

    if($acao == 'salvar'){
    
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $qtd = $_POST['qtd'];

        $p = new ProdutosController();
        $p->salvar($nome, $preco, $qtd);

    }

    if($acao == 'excluir') {
        $p = new ProdutosController();
        $p->excluir($_POST['id_produto']);
    }

    if($acao == 'editar') {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $qtd = $_POST['qtd'];
        $id = $_POST['prod_id'];

         $p = new ProdutosController();

          $p->editar($nome, $preco, $qtd, $id);
    }
