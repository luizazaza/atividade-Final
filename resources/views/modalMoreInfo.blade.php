<div class="modal fade text-dark" id="modalMoreInfo-{{$dadosContato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $dadosContato->nome }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="col-md-4 mb-5 ms-3">
        <strong>Fone</strong>
          <p>{{ $dadosContato->fone }}</p>
        <strong>E-mail</strong>
          <p>{{ $dadosContato->email }}</p>
        <strong>Bio</strong>
          <p>{{ $dadosContato->bio }}</p>
      </div>
    </div>
  </div>
</div>