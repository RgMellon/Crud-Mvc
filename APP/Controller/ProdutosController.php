<?php 

    namespace APP\Controller;

    use APP\Model\Produto;
    use APP\Dao\ProdutoDao;
    use APP\View\View;

    class ProdutosController {

        public function salvar($nome, $preco, $qtd)
        {
            $p = new Produto($nome, $preco, $qtd);
            $pDao = new ProdutoDao();
            $pDao->store($p);

            View::render('Home',[
               'produtos' => $pDao->all()
           ]);
        }

        public function all() 
        {
            $pDao = new ProdutoDao();
            return $pDao->all();
        }

        public function excluir($id)
        {
           $pDao = new ProdutoDao();
           $pDao->delete($id);

           View::render('Home',[
               'produtos' => $pDao->all()
           ]);
        }

        public function editar($nome, $preco, $qtd, $id)
        {
             $pDao = new ProdutoDao();
             
             $p = new Produto($nome, $preco, $qtd);

             $pDao->edit($p, $id);

              View::render('Home',[
               'produtos' => $pDao->all()
           ]);
        }
    }