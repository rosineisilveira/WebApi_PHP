<h1>listagem de Contatos</h1>
<table class= "table table-striped">
    <tr>
        <th>ID do Contato</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Mensagem</th>
        
    </tr>

    <?php
       foreach($arrayContacts as $contato){
    ?>
        <tr>
            <td>
              <?=$contato['idContact']?>
            </td>
            <td>
              <?=$contato['name']?>
            </td>
            <td>
              <?=$contato['email']?>
            </td>
            <td>
              <?=$contato['message']?>
            </td>
        </tr>
    <?php
        }
    ?>   
</table>