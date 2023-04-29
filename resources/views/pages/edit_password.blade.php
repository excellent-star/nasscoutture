@extends('layouts.main')

@section('main_content')

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a >Modification</a></li>
                    <li class="breadcrumb-item"><a >Code de sécurité</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
               


                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Changer le code de sécurité</h4>
                            
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
                                <form > 
                                     @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Nouveau code</label>
                                            <input type="text" id="code_value" name="code"  class="form-control" placeholder="code secret">
                                        </div>
                                    </div>
                                    
                                    
                                    <button type="submit" id="update_code" class="btn btn-primary">Mettre à jour</button>
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

        
          $("#update_code").click(function(e){

                e.preventDefault();

                var newCode =  $("#code_value").val();
                if(newCode=="")
                {
               
                    Swal.fire( 'Modification code secret','le champ doit être rempli','warning')
                    return;
                }


            Swal.fire({
                                    title: 'êtes vous sûr de vouloir enregistrer cette commande?',
                                    text: "attestez votre avis",
                                    icon: 'Warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    cancelButtonText:'Annuler',
                                    confirmButtonText: 'Oui, enregister!'
                                    }).then((result) => {

                                       
                                    if (result.value) {


                                        // Swal.fire(
                                        // 'Deleted!',
                                        // 'Your file has been deleted.',
                                        // 'success'
                                        // )

                                    
                                        
                                        const formData = new FormData();
                                        formData.append("_token", "{{ csrf_token() }}");
                                        formData.append("new_code",newCode);
                                

                                      
                                        $.ajax({
                                            url:'http://127.0.0.1:8000/update-password',
                                            method: 'POST',
                                            data: formData,
                                            dataType: 'JSON',
                                            contentType: false,
                                            cache: false,
                                            processData: false,
                                            success:function(response)
                                            {
                                                Swal.fire(
                                                    'Code secret',
                                                    response.message,
                                                    'success'
                                                    )

                                                    $("#code_value").val('');
                                                   
                                                
                                            },
                                            error: function(response) {

                                                Swal.fire(
                                                    'Modification',
                                                    'Une erreur s\'produite',
                                                    'warning'
                                                    )
                                            }
                                        });
           


                                    }
                                    });


                                       

          });

            
      });
</script>

@endsection

