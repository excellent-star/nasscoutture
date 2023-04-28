    @extends('layouts.main')

    @section('main_content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a >{{ (isset($client) && !empty($client))?'Modifier':'Ajouter' }}</a></li>
						<li class="breadcrumb-item"><a >Client</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                   


					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Information du client</h4>
                                
                            </div>
                            <div class="card-body">
                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="text-center">{{ $error }} </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="basic-form">
                                    <form action="{{ (isset($client) && !empty($client))?route('update_client'):route('create_client') }}" method="{{ (isset($client) && !empty($client))?'PUT':'POST' }}"> 
                                         @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Nom</label>
                                                <input type="text" name="nom" @if(isset($client) && !empty($client))value="{{ $client->nom }}"@endif class="form-control" placeholder="Nom">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Prénom</label>
                                                <input type="text" name="prenom"  @if(isset($client) && !empty($client))value="{{ $client->prenom }}"@endif  class="form-control" placeholder="Prénom">
                                                 <input type="hidden" name="client_id"  @if(isset($client) && !empty($client))value="{{ $client->id }}"@endif   >

                                                 <input type="hidden" name="updated_message" id="updated_message" @if(Session::has('updated')) value="{{ Session::get('updated')}}" @endif   >
                                                 
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">téléphone</label>
                                                <input type="text" name="tel" @if(isset($client) && !empty($client))value="{{ $client->tel }}"@endif   class="form-control" placeholder="téléphone">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                            <label class="form-label">sexe</label>
                                                <select id="inputState"  name="sexe" class="default-select form-control wide">
                                                    
                                                    
                                                    <option @if(isset($client) && !empty($client) && $client->sexe=='M') selected @endif   value="M">Masculin</option>
                                                    <option @if(isset($client) && !empty($client)  && $client->sexe=='F') selected @endif  value="F">Feminin</option>
                                              
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-primary">{{ (isset($client) && !empty($client))?'Mettre à jour':'Enregistrer' }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
					
					
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    @endsection

    @section('additional_scripts')

    <script>

          $(function(){

              var updatedMessage = $("#updated_message").val();
               
              if(updatedMessage!="")
              {
                
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: updatedMessage,
                    showConfirmButton: false,
                    timer: 5000
                    })
              }

                
          });
    </script>

    @endsection

