<div class="modal fade text-dark" id="modalCadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Contato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="col-md-4 mb-5 ms-3">
      <form method = "post" action="{{route('cadastrarContato')}}">
        @csrf
          <div class="mb-3 form-check">
              <label for="nomeInput" class="form-label">Nome:</label>
              <input type="text" name="nome" class="form-control" id="nomeInput" >
          </div>

          <div class="mb-3 form-check">
              <label for="foneInput" class="form-label">Fone:</label>
              <input type="text" name="fone"class="form-control" id="foneInput" >
          </div>

          <div class="mb-3 form-check">
              <label for="emailInput" class="form-label">Email:</label>
              <input type="email" name="email" class="form-control" id="emailInput">
          </div>

          <div class="mb-3 form-check">
              <label for="bioInput" class="form-label">Bio:</label>
              <input type="text" name="bio"class="form-control" id="bioInput" >
          </div>
   
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>