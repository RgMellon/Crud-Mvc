<table>
        <thead>
          <tr>
              <th>Nome</th>
              <th>Preço</th>
              <th>Qtd</th>
              <th style="display:flex; justify-content:center">Ações</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach($produtos as $p) : ?>
            <tr>
                <td> <?= $p['nome']; ?> </td>
                <td> <?= $p['preco'] ?> </td>
                <td><?= $p['qtd'] ?> </td>
                <td style="display:flex; justify-content:space-around"> 
                    <form action="redireciona.php?acao=excluir" method="POST">
                        <input type="hidden" name="id_produto" value="<?=$p['id'];?> ">
                        <button class="waves-effect waves-light btn btn-danger" type="submit">Excluir </button>
                    </form> 
                    
                    <a class="waves-effect waves-light btn modal-trigger btn-edit" href="#modal2">Editar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
      </table>

      <?php  include 'formEditProd.php'; ?>