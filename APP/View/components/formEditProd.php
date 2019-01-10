<div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Editar <?= $p['nome'] ?></h4>
      
      <form action="redireciona.php?acao=editar" method="POST">
            <input type="text" name="nome" value="<?= $p['nome'] ?>">
            <input type="text" name="preco" value="<?= $p['preco'] ?>">
            <input type="text" name="qtd" value="<?= $p['qtd'] ?>">
            <input type="hidden" name="prod_id" value="<?= $p['id'] ?>">
            <button type="submit" class="waves-effect waves-light btn modal-trigger btn-add"
            style="margin-top:1rem"> Editar </button>
        </form>
    </div>
    
  </div>