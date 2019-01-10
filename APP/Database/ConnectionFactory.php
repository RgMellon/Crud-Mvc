<?php 

    namespace APP\Database;
    use PDO;

    class ConnectionFactory {

        private  static $host = 'localhost';
        private static $dbname = 'crud';
        private static $user = 'root';
        private static $pass = '';

        public static function getCon()
        {
            try{
                $con = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname.'', self::$user, self::$pass);
                 
            }catch(PDOException $e){
                print('Erro ao conectar no banco'. $e->getMessage());
                //print log;
            }

            return $con;
           
        }
    }