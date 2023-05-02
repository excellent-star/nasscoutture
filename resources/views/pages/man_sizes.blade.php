@extends('layouts.main')

@section('main_content')

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- container starts -->
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a >Mesures</a></li>
						<li class="breadcrumb-item"><a >{{$client->nom}}</a></li>
					</ol>
                </div>
                <!-- row -->
                <!-- Row starts -->
                <div class="row">
                    <!-- Column starts -->


                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block">
                             
                            </div>
                            <div class="card-body">
                                
                               <div class="row">
                                  <div class="col-sm-6">
                                  <button style="background-color: #D653C1;border-color: #D653C1;color: #fff;" type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-primary"><i class="fas fa-print"></i>
                                    </span>Imprimer les mesures de ce client</button>
                                  </div>
                                  <div class="col-sm-6">
                                  <button id="add_order" data-bs-toggle="modal" data-bs-target="#basicModal" style="background-color: #D653C1;border-color: #D653C1;color: #fff;float:right;" type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-primary"><i class="fas fa-shopping-cart"></i>
                                    </span>Ajouter une commande pour ce client </button>
                                  </div>
                               </div>

                               <!-- Modal -->
                               <div class="modal fade" id="basicModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Faites votre choix</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form id="form_id">
                                                 <div class="row">
                                                 <div class="col-xl-12 col-lg-12">


                                                <div class="card">
                                                
                                                    <div class="card-body">
                                                        <div class="row">
                                                                <div class="col-xl-4 col-xxl-6 col-6">
                                                                    <div class="form-check custom-checkbox mb-3">
                                                                        <input type="checkbox" class="form-check-input" id="veste_check_input" required="">
                                                                        <label class="form-check-label" for="customCheckBox1">Veste <span><input type="number" value="1" style="width: 50px;height: 20px;border: 1px sold #886CC0;border-radius: 2px 2px 2px 2px;border: 1px solid lightgray;padding: 5px;" min="1"  id="veste_quantity_input" required=""></span></label>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-xxl-6 col-6">
                                                                    <div class="form-check custom-checkbox mb-3 checkbox-info">
                                                                        <input type="checkbox" class="form-check-input"  id="pantalon_check_input" required="">
                                                                        <label class="form-check-label" for="customCheckBox2">Pantalon <span><input type="number" value="1" style="width: 50px;height: 20px;border: 1px sold #886CC0;border-radius: 2px 2px 2px 2px;border: 1px solid lightgray;padding: 5px;" min="1"  id="pantalon_quantity_input" required=""></span></label>
                                                                    </div>
                                                                </div>
                                                              
                                                                
                                                                <div class="col-xl-4 col-xxl-6 col-6">
                                                                    <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                                                        <input type="checkbox" class="form-check-input"  id="chemise_check_input" required="">
                                                                        <label class="form-check-label" for="customCheckBox5">Chemise <span><input type="number" value="1" style="width: 50px;height: 20px;border: 1px sold #886CC0;border-radius: 2px 2px 2px 2px;border: 1px solid lightgray;padding: 5px;" min="1"  id="chemise_quantity_input" required=""></span></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-xxl-6 col-6">
                                                                    <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                                                        <input type="checkbox" class="form-check-input"  id="tunique_check_input" required="">
                                                                        <label class="form-check-label" for="customCheckBox5">Tunique <span><input type="number" value="1" style="width: 50px;height: 20px;border: 1px sold #886CC0;border-radius: 2px 2px 2px 2px;border: 1px solid lightgray;padding: 5px;" min="1"  id="tunique_quantity_input" required=""></span></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            

                                                        </div>
                                                    </div>
                                                </div>

                                                 </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Annuler</button>
                                                    <button type="button" id="make_order_button" class="btn btn-primary">Faire la commande</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
								
                            </div>
                        </div>
                    </div>


                   
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block">
                             
                            </div>
                            <div class="card-body">
                                
								
                            </div>
                        </div>
                    </div>
                    <!-- Column ends -->
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Mesures de M. {{ $client->nom.'  '.$client->prenom }} </h4>
                                <p class="m-0 subtitle">{{$client->tel}} </p>
                            </div>
                            <div class="card-body">
                                
								<div class="accordion accordion-active-header" id="accordion-nine">
								  <div class="accordion-item">
									<div class="accordion-header  rounded-lg" id="accord-9One" data-bs-toggle="collapse" data-bs-target="#collapse9One" aria-controls="collapse9One" aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <span class="accordion-header-text">Veste</span>
									  <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapse9One" class="collapse accordion__body show" aria-labelledby="accord-9One" data-bs-parent="#accordion-nine">
									  <div class="accordion-body-text">
										 <!-- card -->
                                         <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures veste</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                    <form>


                                                        <div class="row d-flex align-items-center">
                                                            
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Haut</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_longueurhautv:0}}" name="h_longueurhautv" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_tourmanchev:0}}" name="h_tourmanchev" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Dos</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->dosv:0}}" name="dosv" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Col</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_colv:0}}" name="h_colv" type="number" min="0" class="form-control">
                                                            </div>
                                                         
                                                        </div>
                                                        <div class="row">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Epaule</label>
                                                                <input type="hidden" value="{{$client->id}}" name="client_id"/>
                                                                <input type="number" value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_epaulev:0}}" min="0" name="h_epaulev" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Longueur manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_longueurmanchev:0}}" name="h_longueurmanchev" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">poitrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->poitrinev:0}}" name="poitrinev" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>ventre</label>
                                                                <input  value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->ventrev:0}}" name="ventrev" type="number" min="0" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea name="h_commentairev" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_commentairev:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        </form>

                                                    <!-- fields -->
                                                </div>
                                                <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                                    <div class="card-footer-link mb-4 mb-sm-0">
            
                                                        <p class="card-text text-dark d-inline"><a id="save_veste" class="btn btn-sm btn-primary">Mettre à jour</a></p>
                                                    </div>

                                                    <a target="_blank" href="{{route('print_client_sizes', ['client_id' => $client->id, 'article' => 'veste'])}}" class="btn btn-sm btn-primary">Imprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
                                         <!-- card -->
									  </div>
									</div>
								  </div>
								  <div class="accordion-item">
									<div class="accordion-header collapsed rounded-lg" id="accord-9Two" data-bs-toggle="collapse" data-bs-target="#collapse9Two" aria-controls="collapse9Two" aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <span class="accordion-header-text">Pantalon</span>
									  <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapse9Two" class="collapse accordion__body" aria-labelledby="accord-9Two" data-bs-parent="#accordion-nine">
									  <div class="accordion-body-text">
										 <!-- card -->
                                         <form id="save_veste_form">
                                         <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures Pantalon</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                   

                                                        <div class="row d-flex align-items-center">
                                                           
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_longueurp:0}}" name="h_longueurp" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Mollet</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_molletp:0}}" type="number" min="0" name="h_molletp" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>genoux</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_genouxp:0}}" name="h_genouxp" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>pied</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_piedp:0}}" name="h_piedp" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Fond</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->fondp:0}}" name="fondp" type="number" min="0" class="form-control">
                                                            </div>
                                                            <!-- <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Mollet</label>
                                                                <input name="mollet_pantalon" type="number" min="0" class="form-control">
                                                            </div> -->
                                                         
                                                        </div>
                                                        <div class="row">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->taillep:0}}" type="number" min="0" name="taillep" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Bassin</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->bassinp:0}}" name="bassinp" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Cuisse</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_cuissep:0}}" name="h_cuissep" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Fermeture</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->fermeturep:0}}" name="fermeturep" type="number" min="0" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea name="h_commentairep" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_commentairep:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        

                                                    <!-- fields -->
                                                </div>
                                                <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                                    <div class="card-footer-link mb-4 mb-sm-0">
                                                        <p class="card-text text-dark d-inline"><a id="save_pantalon" class="btn btn-sm btn-primary">Mettre à jour</a></p>
                                                    </div>

                                                    <a target="_blank" href="{{route('print_client_sizes', ['client_id' => $client->id, 'article' => 'pantalon'])}}" class="btn btn-sm btn-primary">Imprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
                                         </form>
                                         <!-- card -->
									  </div>
									</div>
								  </div>

								  <div class="accordion-item">
									<div class="accordion-header collapsed rounded-lg" id="accord-9Three" data-bs-toggle="collapse" data-bs-target="#collapse9Three" aria-controls="collapse9Three" aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <span class="accordion-header-text">Chemise</span>
									   <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapse9Three" class="collapse accordion__body" aria-labelledby="accord-9Three" data-bs-parent="#accordion-nine">
									  <div class="accordion-body-text">
										  <!-- card -->
                                          <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures Chemise</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                    <form>

                                                        <div class="row d-flex align-items-center">
                                                            
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Haut</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_longueurhautch:0}}" name="h_longueurhautch" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Poignets</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_poignetch:0}}" name="h_poignetch" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourmanchech:0}}" name="tourmanchech" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Coude</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_coudech:0}}" name="h_coudech" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Col</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_colch:0}}" name="h_colch" type="number" min="0" class="form-control">
                                                            </div>
                                                         
                                                        </div>
                                                        <div class="row">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Epaule</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_epaulech:0}}" type="number" min="0" name="h_epaulech" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Longueur manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_longueurmanchech:0}}" name="h_longueurmanchech" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">poitrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->poitrinech:0}}" name="poitrinech" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>ventre</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->ventrech:0}}" name="ventrech" type="number" min="0" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea name="h_commentairech" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_commentairech:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        </form>

                                                    <!-- fields -->
                                                </div>
                                                <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                                    <div class="card-footer-link mb-4 mb-sm-0">
                                                        <p class="card-text text-dark d-inline"><a id="save_chemise" class="btn btn-sm btn-primary">Mettre à jour</a></p>
                                                    </div>

                                                    <a target="_blank" href="{{route('print_client_sizes', ['client_id' => $client->id, 'article' => 'chemise'])}}" class="btn btn-sm btn-primary">Imprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
                                         <!-- card -->
									  </div>
									</div>
								  </div>
                                 

                                  <div class="accordion-item">
									<div class="accordion-header collapsed rounded-lg" id="accord-9Four" data-bs-toggle="collapse" data-bs-target="#collapse9Four" aria-controls="collapse9Three" aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <span class="accordion-header-text">Gilet</span>
									   <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapse9Four" class="collapse accordion__body" aria-labelledby="accord-9Four" data-bs-parent="#accordion-nine">
									  <div class="accordion-body-text">
										 <!-- card -->
                                         <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures Gilet</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                    <form>

                                                        <div class="row d-flex align-items-center">
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Epaule</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->epauleg:0}}" type="number" min="0" name="epauleg" class="form-control" >
                                                            </div>
                                                          
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">poitrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->poitrineg:0}}" name="poitrineg"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>ventre</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->ventreg:0}}" name="ventreg" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurg:0}}"  name="longueurg" type="number" min="0" class="form-control">
                                                            </div>
                                                            
                                                         
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea name="h_commentaireg" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_commentaireg:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        </form>

                                                    <!-- fields -->
                                                </div>
                                                <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                                    <div class="card-footer-link mb-4 mb-sm-0">
                                                        <p class="card-text text-dark d-inline"><a id="save_gilet" class="btn btn-sm btn-primary">Mettre à jour</a></p>
                                                    </div>

                                                    <a target="_blank" href="{{route('print_client_sizes', ['client_id' => $client->id, 'article' => 'gilet'])}}" class="btn btn-sm btn-primary">Imprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
                                         <!-- card -->
									  </div>
									</div>
								  </div>

                                  <div class="accordion-item">
									<div class="accordion-header collapsed rounded-lg" id="accord-9Five" data-bs-toggle="collapse" data-bs-target="#collapse9Five" aria-controls="collapse9Three" aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <span class="accordion-header-text">Tunique</span>
									   <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapse9Five" class="collapse accordion__body" aria-labelledby="accord-9Four" data-bs-parent="#accordion-nine">
									  <div class="accordion-body-text">
										  <!-- card -->
                                          <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures Tunique</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                    <form>

                                                        <div class="row d-flex align-items-center">
                                                           
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Haut</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurhaut_tun:0}}" name="longueurhaut_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Poignets</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->poignet_tun:0}}" name="poignet_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourmanche_tun:0}}" name="tourmanche_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Langeuur manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurmanche_tun:0}}" name="longueurmanche_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Coude</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->coude_tun:0}}" name="coude_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Col</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->col_tun:0}}" name="col_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                         
                                                        </div>
                                                        <div class="row">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Epaule</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->epaul_tun:0}}" type="number" min="0" name="epaul_tun" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Longueur manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurmanch_tun:0}}" name="longueurmanch_tun"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">poitrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->poitrine_tun:0}}" name="poitrine_tun"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>ventre</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->ventre_tun:0}}" name="ventre_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Commentaire</span>
                                                                <textarea name="h_commentaire_tun" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->h_commentaire_tun:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        </form>

                                                    <!-- fields -->
                                                </div>
                                                <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                                    <div class="card-footer-link mb-4 mb-sm-0">
                                                        <p class="card-text text-dark d-inline"><a id="save_tunique" class="btn btn-sm btn-primary">Mettre à jour</a></p>
                                                    </div>

                                                    <a target="_blank" href="{{route('print_client_sizes', ['client_id' => $client->id, 'article' => 'tunique'])}}" class="btn btn-sm btn-primary">Imprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
                                         <!-- card -->
									  </div>
									</div>
								  </div>



								</div>
                            </div>
                        </div>
                    </div>
                    <!-- Column ends -->
                    <!-- Column starts -->
                    
                    <!-- Column ends -->
                </div>
                <!-- Row ends -->
            </div>
            <!-- container ends -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection

@section('additional_scripts')

<script>

        $(function(){

           function callAjax(url,formData){

                 
            $.ajax({
                        url: url,
                        method: 'POST',
                        data: formData,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success:function(response)
                        {
                            Swal.fire(
                                'Modification',
                                response.message,
                                'success'
                                )
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

            $("#save_veste").click(function(){

                

                    const formData = new FormData();
                    formData.append("_token", "{{ csrf_token() }}");
                    formData.append("client_id",$("input[name=client_id]").val());
                    formData.append("h_commentairev",$("textarea[name=h_commentairev]").val());
                    
                    formData.append("h_epaulev",$("input[name=h_epaulev]").val());
                    formData.append("h_longueurmanchev",$("input[name=h_longueurmanchev]").val());
                    formData.append("poitrinev",$("input[name=poitrinev]").val());
                    formData.append("ventrev",$("input[name=ventrev]").val());
                    formData.append("h_longueurhautv",$("input[name=h_longueurhautv]").val());
                    formData.append("h_tourmanchev",$("input[name=h_tourmanchev]").val());
                    formData.append("dosv",$("input[name=dosv]").val());
                    formData.append("h_colv",$("input[name=h_colv]").val());
                    
                    callAjax("http://127.0.0.1:8000/save-man-veste-size",formData);

            });

            $("#save_pantalon").click(function(){

                

            const formData = new FormData();
            formData.append("_token", "{{ csrf_token() }}");
            formData.append("client_id",$("input[name=client_id]").val());
            formData.append("h_commentairep",$("textarea[name=h_commentairep]").val());


            formData.append("fondp",$("input[name=fondp]").val());
            formData.append("h_piedp",$("input[name=h_piedp]").val());
            formData.append("h_genouxp",$("input[name=h_genouxp]").val());
            formData.append("h_molletp",$("input[name=h_molletp]").val());
            formData.append("h_longueurp",$("input[name=h_longueurp]").val());
            formData.append("fermeturep",$("input[name=fermeturep]").val());
            formData.append("h_cuissep",$("input[name=h_cuissep]").val());
            formData.append("bassinp",$("input[name=bassinp]").val());
            formData.append("taillep",$("input[name=taillep]").val());

            

            callAjax("http://127.0.0.1:8000/save-man-pantalon-size",formData);

            });

            $("#save_chemise").click(function(){

                

                const formData = new FormData();
                formData.append("_token", "{{ csrf_token() }}");
                formData.append("client_id",$("input[name=client_id]").val());
                formData.append("h_commentairech",$("textarea[name=h_commentairech]").val());


                formData.append("h_colch",$("input[name=h_colch]").val());
                formData.append("h_coudech",$("input[name=h_coudech]").val());
                formData.append("tourmanchech",$("input[name=tourmanchech]").val());
                formData.append("h_poignetch",$("input[name=h_poignetch]").val());
                formData.append("h_longueurhautch",$("input[name=h_longueurhautch]").val());
                formData.append("ventrech",$("input[name=ventrech]").val());
                formData.append("poitrinech",$("input[name=poitrinech]").val());
                formData.append("h_longueurmanchech",$("input[name=h_longueurmanchech]").val());
                formData.append("h_epaulech",$("input[name=h_epaulech]").val());



                callAjax("http://127.0.0.1:8000/save-man-chemise-size",formData);

            });


             $("#save_gilet").click(function(){

                

                const formData = new FormData();
                formData.append("_token", "{{ csrf_token() }}");
                formData.append("client_id",$("input[name=client_id]").val());
                formData.append("h_commentaireg",$("textarea[name=h_commentaireg]").val());


                formData.append("longueurg",$("input[name=longueurg]").val());
                formData.append("ventreg",$("input[name=ventreg]").val());
                formData.append("poitrineg",$("input[name=poitrineg]").val());
                formData.append("h_poignetch",$("input[name=h_poignetch]").val());
                formData.append("epauleg",$("input[name=epauleg]").val());
               


                callAjax("http://127.0.0.1:8000/save-man-gilet-size",formData);

            });



              $("#save_tunique").click(function(){

                

                const formData = new FormData();
                formData.append("_token", "{{ csrf_token() }}");
                formData.append("client_id",$("input[name=client_id]").val());
                formData.append("h_commentaire_tun",$("textarea[name=h_commentaire_tun]").val());


                formData.append("col_tun",$("input[name=col_tun]").val());
                formData.append("coude_tun",$("input[name=coude_tun]").val());
                formData.append("longueurmanche_tun",$("input[name=longueurmanche_tun]").val());
                formData.append("tourmanche_tun",$("input[name=tourmanche_tun]").val());
                formData.append("poignet_tun",$("input[name=poignet_tun]").val());

                formData.append("longueurhaut_tun",$("input[name=longueurhaut_tun]").val());
                formData.append("ventre_tun",$("input[name=ventre_tun]").val());
                formData.append("poitrine_tun",$("input[name=poitrine_tun]").val());
                formData.append("longueurmanch_tun",$("input[name=longueurmanch_tun]").val());
                formData.append("epaul_tun",$("input[name=epaul_tun]").val());
               


                callAjax("http://127.0.0.1:8000/save-man-tunique-size",formData);

            });




            // manage order 

            $("#add_order").click(function(){

                $('#veste_check_input').prop('checked', false); 
                $('#pantalon_check_input').prop('checked', false); 
             
                $('#chemise_check_input').prop('checked', false); 
                $('#tunique_check_input').prop('checked', false); 

                $('#veste_quantity_input').val(1); 
                $('#pantalon_quantity_input').val(1); 
              
            
                $('#chemise_quantity_input').val(1); 
                $('#tunique_quantity_input').val(1); 
               
            });

            $("#make_order_button").click(function(){

                   var veste_check = $("#veste_check_input").is(':checked');
                   var veste_quantity = $("#veste_quantity_input").val();

                   var pantalon_check = $("#pantalon_check_input").is(':checked');
                   var pantalon_quantity =  $('#pantalon_quantity_input').val();

                 

               

                   var chemise_check = $("#chemise_check_input").is(':checked');
                   var chemise_quantity =  $('#chemise_quantity_input').val();

                   var tunique_check = $("#tunique_check_input").is(':checked');
                   var tunique_quantity =  $('#tunique_quantity_input').val();

                   if(!veste_check)
                   {
                        veste_quantity = 0;
                   }
                   if(!pantalon_check)
                   {
                         pantalon_quantity = 0;
                   }

                  
                  
                
                  
                   if(!chemise_check)
                   {
                         chemise_quantity = 0;
                   }
                   if(!tunique_check)
                   {
                         tunique_quantity = 0;
                   }

                   var cand_order = true;

                   if(!veste_check && !pantalon_check  && !chemise_check && !tunique_check)
                   {
                    cand_order = false;
                   }
                  
                   if(cand_order)
                   {
                    var url_missed_part = "{{$client->id}}"+"/m/"+veste_quantity+"/"+pantalon_quantity+"/"+0+"/"+0+"/"+chemise_quantity+"/"+tunique_quantity;

                        window.open("http://127.0.0.1:8000/add-order/"+url_missed_part,"_self");
                   }
                   else{


                    Swal.fire(
                                'Commande',
                                'vous avez rien choisie, dommage !',
                                'warning'
                                )
                   }


                  
                   
            });






        });
</script>

@endsection

