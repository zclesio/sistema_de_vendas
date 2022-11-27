<form id="formAddUsuario" method="POST" onsubmit="return addUsuario()">
    <div class="modal fade" id="addModalUsers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar um Novo Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-sm-4">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="" name="" id="">
                </div>
                <div class="col-sm-4">
                    <label for="data_Nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" id="" name="" id="">
                </div>
                <div class="col-sm-4">
                    <label for="sexo" >sexo</label>
                    <select class="form-control" id="nome" name="nome" require>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="email">Email</label>
                    <input type="mail" class="form-control" id="" name="" id="">
                </div>
                <div class="col-sm-4">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="" name="" id="">
                </div>
                <div class="col-sm-4">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="" name="" id="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="idFunc" id="idFunc">Funcao do Usuario</label>
                    <select name="idFunc" id="idFunc" class="form-control">
                        <option value="1">Cliente</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="endereco">Endereco</label>
                    <textarea name="endereco" id="endereco" class="form-control"></textarea>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <span class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</span>
            <button class="btn btn-primary">Adicionar</button>
          </div>
        </div>
      </div>
    </div>
</form>