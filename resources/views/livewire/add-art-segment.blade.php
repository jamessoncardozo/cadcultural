
<div>
  @include('livewire.artsegmentmodal')

  <div class="container">
      <div class="row">
          <div class="col-md-12">
              @if (session()->has('message'))
                  <h5 class="alert alert-success">{{ session('message') }}</h5>
              @endif

              <div class="card">
                  <div class="card-header">
                          <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Procure aqui..." style="width: 230px" />
                          <button type="button" class="btn btn-primary float-top" data-bs-toggle="modal" data-bs-target="#segmentModal">
                              Novo
                          </button>
                  </div>
                  <div class="card-body">
                      <table class="table table-borderd table-striped">
                          <thead>
                              <tr>
                                  <th>Nome:</th>
                                  <th>Descrição:</th>
                                  <th>Ações:</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($artsegments as $segment)
                                  <tr>
                                      <td>{{ $segment->segmentName }}</td>
                                      <td>{{ $segment->description }}</td>
                                      <td>
                                          <button type="button" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{$segment->id}})" class="btn btn-primary">
                                              Editar
                                          </button>
                                          <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="delete({{$segment->id}})" class="btn btn-danger">Deletar</button>
                                      </td>
                                  </tr>
                              @empty
                                  <tr>
                                      <td colspan="5">Não há segmentos cadastrados.</td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!--<div class="col-md-10 offset-md-1 dashboard-segments-container">
   
  @if(count($artsegments) > 0)
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Segmento:</th>
                <th scope="col">Descrição:</th>
                <th scope="col">Ações:</th>
            </tr>
        </thead>
        <tbody>
          @foreach($artsegments as $segment)
          
            <tr>
               <td> {{$segment->segmentName}} </a></td>
               <td> {{$segment->description}} </a></td>
               <td>
                    <x-slot name="actions">
                        <x-jet-button>
                            {{ __('Create') }}
                        </x-jet-button>
                    </x-slot>
                  <a href="/artisticsegments/edit/{{ $segment->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                  <form action="/artisticsegments/destroy/{{ $segment->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    @else
        <p>Você ainda não tem segmentos cadastrados, <a href="/artisticsegments/create">Criar Segmento Artístico</a></p>
    @endif
</div>
