<h1>Inserindo Contato</h1>
<form class="form" action="<?=base_url('contact/insertContactAction')?>" method="post">
    <div class=""mb-3 mt-3>
        <label class="form-label">Nome</label>
        <input name="name" class="form-control"  type="text" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Email</label>
        <input name="email" class="form-control"  type="text" required>
    </div>
    <div class=""mb-3 mt-3>
        <label class="form-label">Mensagem</label>
        <input name="message" class="form-control"  type="text" required>
    </div>
    <input class="btn btn-primary mt-3" type="submit" value="Enviar">
</form> 