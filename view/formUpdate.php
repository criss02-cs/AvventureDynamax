<form id="updateForm" action="controller/updateRecord.php?<?= $defaultParams ?>" method="post">
    <div class="form-group row">
        <input type="hidden" name="id" value="<?= $user['id_leggendari'] ?>">

        <input type="hidden" name="action" value="<?= $user['id_leggendari'] ? 'store' : 'save' ?>">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" required class="form-control form-control-lg" value="<?= $user['nome'] ?>" name="nome" id="nome" placeholder="Nome del pokemon">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Tipo 1</label>
        <div class="col-sm-10">
            <input type="text" required class="form-control  form-control-lg" value="<?= $user['tipo1'] ?>" name="tipo1" id="tipo1" placeholder="tipo1">
        </div>
    </div>
    <div class="form-group row">
        <label for="fiscalcode" class="col-sm-2 col-form-label">Tipo 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control  form-control-lg" value="<?= $user['tipo2'] ?>" name="tipo2" id="tipo2" placeholder="tipo 2">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <?php if ($user['id_leggendari']) { ?>
            <div class="col-sm-5 text-center">
                <a href="<?= $deleteUserUrl ?>?id_leggendari=<?= $user['id_leggendari'] ?>&action=delete" onclick="return confirm('DELETE Pokemon?')" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                    Delete
                </a>

            </div>
        <?php } ?>
        <div class="<?= $user['id_leggendari'] ? 'col-sm-5' : 'col-sm-12' ?>  text-center">
            <button class="btn btn-success">

                <i class="fa fa-pen"></i>
                <?= $user['id_leggendari'] ? 'Update' : 'Insert' ?>
            </button>
        </div>
    </div>
</form>