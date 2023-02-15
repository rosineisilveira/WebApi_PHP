<h1>Alterando Cliente</h1>
<form class="form" action="<?= base_url("admin/updateClientAction/{$arrayClient['idClient']}")?>" method="post">
    <div class=""mb-3 mt-3>
        <label class="form-label">Nome</label>
        <input name="name" class="form-control"  type="text" value="<?=$arrayClient['name']?>" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Email</label>
        <input name="email" class="form-control"  type="text" value="<?=$arrayClient['email']?>" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Telefone</label>
        <input name="phone" class="form-control"  type="text" value="<?=$arrayClient['phone']?>" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Endereço</label>
        <input name="address" class="form-control"  type="text" value="<?=$arrayClient['address']?>" required>
    </div>
    <input class="btn btn-primary mt-03" type="submit" value="Enviar">
</form> 