@extends('layouts.main')

@section('main_content')

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a >Liste</a></li>
						<li class="breadcrumb-item"><a >Clients</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    

					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clients</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Sexe</th>
                                                <th>Téléphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if(isset($clients) && !empty($clients))
                                            
                                                @foreach($clients as $client)
                                                
                                                    <tr>
                                                    <td><img class="rounded-circle" width="35" src="template_assets/images/profile/small/{{$client->sexe=='M'?'male_profile.png':'female_profile.png'}}" alt=""></td>
                                                    <td>{{$client->nom}}</td>
                                                    <td>{{$client->prenom}}</td>
                                                    <td>{{$client->sexe}}</td>
                                                    <td>{{$client->tel}}</td>
                                                    
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{route('edit_client',$client->id)}}" class="btn btn-primary shadow btn-xs sharp me-1 "><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="{{$client->sexe=='M'?route('man_sizes',$client->id):route('woman_sizes',$client->id)}}" class="btn btn-primary shadow btn-xs sharp me-1 "><i class="fa fa-user"></i></a>
                                                    
                                                        </div>												
                                                    </td>												
                                                </tr>
                                                @endforeach
                                            @endif
                                            
                                           
                                           
                                           
                                        </tbody>
                                    </table>
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

@section('addional_scripts')

<script>

$(function(){

     $(".delete_clicked").click(function(){

            alert("good");
     });

      
});
</script>

@endsection