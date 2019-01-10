<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Mocinga</title>
</head>
<body>
    <header>
         <nav>
            <div class="nav-wrapper container">
                <a href="http://localhost/mvc-2/" class="brand-logo">Crud</a>
            </div>
        </nav>
    </header>
     <div class="separator"> </div>
    <main class="container">

        
        
        <!--Area da tabela -->
        <?php include('/components/tabelaProdutos.php'); ?>

          <div class="separator"> </div>
          
        <!--Formulario adiciona -->
        <a class="waves-effect waves-light btn modal-trigger btn-add" href="#modal1">Adicionar</a>
        <?php include('/components/formAdd.php'); ?>
        
      
    
    </main>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
    $('.modal').modal();
  });
      
    </script>
</body>
</html>