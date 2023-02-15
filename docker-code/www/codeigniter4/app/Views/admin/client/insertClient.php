<h1>Inserindo Cliente</h1>
<form class="form" action="<?=base_url('admin/insertClientAction')?>" method="post">
    <div class=""mb-3 mt-3>
        <label class="form-label">Nome</label>
        <input name="name" class="form-control"  type="text" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Email</label>
        <input name="email" class="form-control"  type="text" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Telefone</label>
        <input name="phone" class="form-control"  type="text" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Endereço</label>
        <input name="address" class="form-control"  type="text" required>
    </div>
    <input class="btn btn-primary mt-3" type="submit" value="Enviar">
</form> 