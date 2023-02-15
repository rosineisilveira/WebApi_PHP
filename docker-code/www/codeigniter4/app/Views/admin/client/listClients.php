<div class="row">
    <div class="col-sm-8">
      <h1>listagem de Clientes</h1>      
    </div>
    <div class="col-sm-4">     
        <form class="d-flex" action="<?=base_url('admin/searchClient')?>" method="post">    
            <input class="form-control me-2" name="search" class="form-control"  placeholder="Pesquisar"  type="text">
            <button type = "submit" class = "btn btn-primary">Pesquisar</button>      
        </form>            
    </div>      
</div>
</tr>
<table class= "table ">
    <tr>
        <th>ID do Cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>

    <?php
       foreach($arrayClients as $client){
    ?>
        <tr>
            <td>
              <?=$client['idClient']?>
            </td>
            <td>
              <?=$client['name']?>
            </td>
            <td>
              <?=$client['email']?>
            </td>
            <td>
              <?=$client['phone']?>
            </td>
            <td>
              <?=$client['address']?>
            </td>
            <td>
              <a class="btn btn-small btn-primary" href="<?=base_url("admin/updateClient/{$client['idClient']}")?>">
                  Alterar
              </a>
            </td>
            <td>
              <a class="btn btn-small btn-danger"href="<?=base_url("admin/deleteClient/{$client['idClient']}")?>">
                  Deletar
              </a>
            </td>
        </tr>
    <?php
        }
    ?>   
</table>

