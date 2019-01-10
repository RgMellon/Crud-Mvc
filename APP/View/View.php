<?php 

    namespace APP\View;

    class View {

        public static function render($pageName, array $data = [])
        {
            if( $pageName ) {
                extract($data);
                require_once getcwd().'/APP/View/'.$pageName.'View.php';
            }
        }
    }