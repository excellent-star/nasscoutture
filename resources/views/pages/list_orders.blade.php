@extends('layouts.main')

@section('main_content')

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a >Commandes</a></li>
						<li class="breadcrumb-item"><a >Clients</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    

					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Commandes</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                           
                                                <th>Date depot</th>
                                                <th>Date provisoir retrait</th>
                                                <th>Date de retrait</th>
                                                <th>Numero Facture</th>
                                                <th>Montant Total</th>
                                                <th>Nom client</th>
                                                <th>Prenom client</th>
                                                <th>Sexe</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $all_orders ?>

                                            @if(isset($all_orders) && !empty($all_orders))
                                            
                                                @foreach($all_orders as $order)
                                                
                                                    <tr>
                                                   
                                                    <td>{{$order->datedepot}}</td>
                                                    <td>{{$order->dateretrait==null?'Rien':$order->dateretrait}}</td>
                                                    <td>{{$order->dateretire==null?'Pas encore':$order->dateretrait}}</td>
                                                    <td>{{$order->facture}}</td>
                                                    <td>{{$order->montant_total}}</td>
                                                    <td>{{$order->nom}}</td>
                                                    <td>{{$order->prenom}}</td>
                                                    <td>{{$order->sexe=='F'?'Femme':'Homme'}}</td>
                                                    
                                                    <td>
                                                        <div class="d-flex">
                                                            
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-3 "><i class="fa fa-edit"></i></a>

                                                            <a href="{{route('print_invoice',$order->commande_id)}}" class="btn btn-primary shadow btn-xs sharp me-3 "><i class="fas fa-print"></i></a>

                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 "><i class="fas fa-eye"></i></a>
                                                    
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