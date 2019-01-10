<?php 

    namespace APP\Controller;

    use APP\View\View;
    use APP\Controller;

    class HomeController {

        public function index() {
            $p = new ProdutosController();
            
            View::render('Home',
            [
                'produtos' => $p->all()
            ]);
        }
    }