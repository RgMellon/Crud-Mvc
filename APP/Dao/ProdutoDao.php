<?php 

    namespace APP\Dao;

    use APP\Database\ConnectionFactory;

    
    class ProdutoDao {

        private $con;

        public function __construct() 
        {
            $this->con = ConnectionFactory::getCon();
        }

        public function store($produto)
        {
           $sql = "INSERT INTO produtos (nome, preco, qtd) VALUES (:nome, :preco, :qtd)";
           $con = $this->con->prepare($sql);
          
           $con->bindValue(':nome', $produto->getNome());
           $con->bindValue(':preco', $produto->getPreco());
           $con->bindValue(':qtd', $produto->getQtd());
            
           $con->execute();
           
        }

        public function all()
        {
            $sql = "SELECT * FROM produtos";

            $con = $this->con->prepare($sql);

            $con->execute();

            $obj = $con->fetchALL(\PDO::FETCH_ASSOC);

            return $obj;
        }

        public function delete($id)
        {
             $sql = "DELETE FROM produtos where id = :id";
            $con = $this->con->prepare($sql);
            
            $con->bindValue(':id', $id);
            $con->execute();
        }

        public function edit($produto, $id)
        {
            $sql = "UPDATE  produtos set nome = :nome, preco = :preco, qtd = :qtd where id = :id";
            $con = $this->con->prepare($sql);
            
            $con->bindValue(':nome', $produto->getNome());
            $con->bindValue(':preco', $produto->getPreco());
            $con->bindValue(':qtd', $produto->getQtd());
            $con->bindValue(':id', $id);

            $con->execute();
        }
    }