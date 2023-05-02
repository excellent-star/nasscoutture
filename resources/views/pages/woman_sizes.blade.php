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
                                                                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                                                                        <input type="checkbox" class="form-check-input"  id="jupe_check_input" required="">
                                                                        <label class="form-check-label" for="customCheckBox3">Jupe  <span><input type="number" value="1" style="width: 50px;height: 20px;border: 1px sold #886CC0;border-radius: 2px 2px 2px 2px;border: 1px solid lightgray;padding: 5px;" min="1"  id="jupe_quantity_input" required=""></span></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-xxl-6 col-6">
                                                                    <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                                        <input type="checkbox" class="form-check-input"  id="robe_check_input" required="">
                                                                        <label class="form-check-label" for="customCheckBox4">Robe <span><input type="number" value="1" style="width: 50px;height: 20px;border: 1px sold #886CC0;border-radius: 2px 2px 2px 2px;border: 1px solid lightgray;padding: 5px;" min="1"  id="robe_quantity_input" required=""></span></label>
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
                                                                <label>Longueur Pince</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurpincev:0}}" name="longueurpincev" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurtaillev:0}}" name="longueurtaillev" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Haut</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurhautv:0}}" name="longueurhautv" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourmanchev:0}}" name="tourmanchev" type="number" min="0" class="form-control">
                                                            </div>
                                                          
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Col</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->colv:0}}" name="colv" type="number" min="0" class="form-control">
                                                            </div>
                                                         
                                                        </div>
                                                        <div class="row">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Epaule</label>
                                                                <input type="hidden" value="{{$client->id}}" name="client_id"/>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->epaulev:0}}" type="number" min="0" name="epaulev" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Longueur manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurmanchev:0}}" name="longueurmanchev" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de poitrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourpoitrinev:0}}" name="tourpoitrinev"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de Taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourtaillev:0}}" name="tourtaillev"type="number" min="0" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Commentaire</span>
                                                                <textarea name="commentairev" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->commentairev:''}}</textarea>
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
                                         <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures Pantalon</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                    <form>

                                                        <div class="row d-flex align-items-center">
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de Taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourtaillep:0}}" type="number" min="0" name="tourtaillep" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de fesse</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourfessep:0}}" name="tourfessep" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Cuisse</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->cuissep:0}}" name="cuissep" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>genoux</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->genouxp:0}}" name="genouxp" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurp:0}}" name="longueurp" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>pied</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->piedp:0}}" name="piedp" type="number" min="0" class="form-control">
                                                            </div>
                                                            
                                                         
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea name="commentairep" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->commentairep:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        </form>

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
                                         <!-- card -->
									  </div>
									</div>
								  </div>

                                  <div class="accordion-item">
									<div class="accordion-header collapsed rounded-lg" id="accord-10Two" data-bs-toggle="collapse" data-bs-target="#collapse10Two" aria-controls="collapse9Two" aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <span class="accordion-header-text">Jupe</span>
									  <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapse10Two" class="collapse accordion__body" aria-labelledby="accord-10Two" data-bs-parent="#accordion-nine">
									  <div class="accordion-body-text">
										 <!-- card -->
                                         <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures Jupe</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                    <form>

                                                        <div class="row d-flex align-items-center">
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de Taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourtaillej:0}}" type="number" min="0" name="tourtaillej" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de fesse</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourfessej:0}}" name="tourfessej"type="number" min="0" class="form-control" >
                                                            </div>
                                                           
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurj:0}}" name="longueurj" type="number" min="0" class="form-control">
                                                            </div>
                                                            
                                                            
                                                         
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea name="commentairej" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->commentairej:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        </form>

                                                    <!-- fields -->
                                                </div>
                                                <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                                    <div class="card-footer-link mb-4 mb-sm-0">
                                                        <p class="card-text text-dark d-inline"><a id="save_jupe" class="btn btn-sm btn-primary">Mettre à jour</a></p>
                                                    </div>

                                                    <a target="_blank" href="{{route('print_client_sizes', ['client_id' => $client->id, 'article' => 'jupe'])}}" class="btn btn-sm btn-primary">Imprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
                                         <!-- card -->
									  </div>
									</div>
								  </div>

                                  <div class="accordion-item">
									<div class="accordion-header collapsed rounded-lg" id="accord-12Two" data-bs-toggle="collapse" data-bs-target="#collapse12Two" aria-controls="collapse12Two" aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <span class="accordion-header-text">Robe</span>
									  <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapse12Two" class="collapse accordion__body" aria-labelledby="accord-12Two" data-bs-parent="#accordion-nine">
									  <div class="accordion-body-text">
										 <!-- card -->
                                         <div class="row">
                                         <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Mesures Robe</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- fields -->

                                                    <form>

                                                        <div class="row d-flex align-items-center">
                                                            
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Pince</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurpincer:0}}" name="longueurpincer" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurtailler:0}}" name="longueurtailler" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Robe</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurrober:0}}" name="longueurrober" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de Fesse</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourfesser:0}}" name="tourfesser" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourmancher:0}}" name="tourmancher" type="number" min="0" class="form-control">
                                                            </div>
                                                            
                                                         
                                                        </div>
                                                        <div class="row">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Epaule</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->epauler:0}}" type="number" min="0" name="epauler" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Longueur Manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurmancher:0}}" name="longueurmancher"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de Pointrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourpoitriner:0}}" name="tourpoitriner" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de Taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourtailler:0}}" name="tourtailler" type="number" min="0" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Commentaire</span>
                                                                <textarea name="commentairer" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->commentairer:''}}</textarea>
                                                            </div>
                                                        </div>
                                                     
                                                        </form>

                                                    <!-- fields -->
                                                </div>
                                                <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                                    <div class="card-footer-link mb-4 mb-sm-0">
                                                        <p class="card-text text-dark d-inline"><a id="save_robe" class="btn btn-sm btn-primary">Mettre à jour</a></p>
                                                    </div>

                                                    <a target="_blank" href="{{route('print_client_sizes', ['client_id' => $client->id, 'article' => 'robe'])}}" class="btn btn-sm btn-primary">Imprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
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
                                                                <label class="form-label">Epaule</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->epaulech:0}}" type="number" min="0" name="epaulech" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Longueur manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurmanchech:0}}" name="longueurmanchech" type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourtaillech:0}}" name="tourtaillech"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Tour de poitrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourpoitrinech:0}}" name="tourpoitrinech"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourtaillech:0}}" name="tourtaillech" type="number" min="0" class="form-control">
                                                            </div>
                                                            
                                                            
                                                         
                                                        </div>
                                                        <div class="row align-items-center my-5">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Pince</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurpincech:0}}" name="longueurpincech" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur taille</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurtaillech:0}}" name="longueurtaillech" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Longueur Haut</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->longueurhautch:0}}" name="longueurhautch" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Poignets</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->poignetch:0}}" name="poignetch" type="number" min="0" class="form-control">
                                                            </div>
                                                           
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Coude</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->coudech:0}}" name="coudech" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Col</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->colch:0}}" name="colch" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->tourmanchech:0}}" name="tourmanchech" type="number" min="0" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Commentaire</span>
                                                                <textarea name="commentairech" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->commentairech:''}}</textarea>
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
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_longueurhhaut_tun:0}}" name="f_longueurhhaut_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Poignets</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_poignet_tun:0}}" name="f_poignet_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Tour de manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_tourmanche_tun:0}}" name="f_tourmanche_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Coude</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_coude_tunn:0}}" name="f_coude_tunn" type="number" min="0" class="form-control">
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>Col</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_col_tun:0}}" name="f_col_tun" type="number" min="0" class="form-control">
                                                            </div>

                                                         
                                                        </div>
                                                        <div class="row">
                                                        <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Epaule</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_epaule_tun:0}}" type="number" min="0" name="f_epaule_tun" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">Longueur manche</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_loongueurmanche_tun:0}}" name="f_loongueurmanche_tun"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label class="form-label">poitrine</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->f_poitrine_tun:0}}"  name="f_poitrine_tun"type="number" min="0" class="form-control" >
                                                            </div>
                                                            <div class="mb-1 col-md-1" style="flex-grow:2;">
                                                                <label>ventre</label>
                                                                <input value="{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->ff_ventre_tun:0}}" name="ff_ventre_tun" type="number" min="0" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <div class="input-group">
                                                                <span class="input-group-text">Commentaire</span>
                                                                <textarea name="commentaire_tun" class="form-control">{{(isset($client_sizes) && !empty($client_sizes))?$client_sizes->commentaire_tun:''}}</textarea>
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
                    formData.append("commentairev",$("textarea[name=commentairev]").val());
                    
                    formData.append("colv",$("input[name=colv]").val());
                    formData.append("tourmanchev",$("input[name=tourmanchev]").val());

                    formData.append("longueurhautv",$("input[name=longueurhautv]").val());
                    formData.append("longueurtaillev",$("input[name=longueurtaillev]").val());
                    formData.append("longueurpincev",$("input[name=longueurpincev]").val());
                    formData.append("tourtaillev",$("input[name=tourtaillev]").val());
                    formData.append("tourpoitrinev",$("input[name=tourpoitrinev]").val());
                    formData.append("longueurmanchev",$("input[name=longueurmanchev]").val());
                    formData.append("epaulev",$("input[name=epaulev]").val());
                 
                    
                    
                    callAjax("http://127.0.0.1:8000/save-woman-veste-size",formData);

            });


             $("#save_pantalon").click(function(){

                

                    const formData = new FormData();
                    formData.append("_token", "{{ csrf_token() }}");
                    formData.append("client_id",$("input[name=client_id]").val());
                    formData.append("commentairep",$("textarea[name=commentairep]").val());
                    
                  
                    formData.append("piedp",$("input[name=piedp]").val());
                    formData.append("longueurp",$("input[name=longueurp]").val());
                    formData.append("genouxp",$("input[name=genouxp]").val());
                    formData.append("cuissep",$("input[name=cuissep]").val());
                    formData.append("tourfessep",$("input[name=tourfessep]").val());
                    formData.append("tourtaillep",$("input[name=tourtaillep]").val());
                   
                    
                    
                    callAjax("http://127.0.0.1:8000/save-woman-pantalon-size",formData);

            });

            $("#save_jupe").click(function(){

                

                    const formData = new FormData();
                    formData.append("_token", "{{ csrf_token() }}");
                    formData.append("client_id",$("input[name=client_id]").val());
                    formData.append("commentairej",$("textarea[name=commentairej]").val());
                    
                  
                    formData.append("longueurj",$("input[name=longueurj]").val());
                    formData.append("tourfessej",$("input[name=tourfessej]").val());
                    formData.append("tourtaillej",$("input[name=tourtaillej]").val());
                
                   
                    
                    
                    callAjax("http://127.0.0.1:8000/save-woman-jupe-size",formData);

            });


             $("#save_robe").click(function(){

                

                    const formData = new FormData();
                    formData.append("_token", "{{ csrf_token() }}");
                    formData.append("client_id",$("input[name=client_id]").val());
                    formData.append("commentairer",$("textarea[name=commentairer]").val());
                    
                  
                    formData.append("tourmancher",$("input[name=tourmancher]").val());
                    formData.append("tourfesser",$("input[name=tourfesser]").val());
                    formData.append("longueurrober",$("input[name=longueurrober]").val());
                    formData.append("longueurtailler",$("input[name=longueurtailler]").val());
                    formData.append("longueurpincer",$("input[name=longueurpincer]").val());
                    formData.append("tourtailler",$("input[name=tourtailler]").val());
                    formData.append("tourpoitriner",$("input[name=tourpoitriner]").val());
                    formData.append("longueurmancher",$("input[name=longueurmancher]").val());
                    formData.append("epauler",$("input[name=epauler]").val());

                    callAjax("http://127.0.0.1:8000/save-woman-robe-size",formData);

            });


            $("#save_chemise").click(function(){

                

                    const formData = new FormData();
                    formData.append("_token", "{{ csrf_token() }}");
                    formData.append("client_id",$("input[name=client_id]").val());
                    formData.append("commentairech",$("textarea[name=commentairech]").val());
                    
                    formData.append("tourmanchech",$("input[name=tourmanchech]").val());
                    formData.append("colch",$("input[name=colch]").val());
                    formData.append("coudech",$("input[name=coudech]").val());
                    formData.append("poignetch",$("input[name=poignetch]").val());
                    formData.append("longueurhautch",$("input[name=longueurhautch]").val());
                    formData.append("longueurtaillech",$("input[name=longueurtaillech]").val());
                    formData.append("longueurpincech",$("input[name=longueurpincech]").val());
                    formData.append("tourtaillech",$("input[name=tourtaillech]").val());
                    formData.append("tourpoitrinech",$("input[name=tourpoitrinech]").val());
                    formData.append("tourtaillech",$("input[name=tourtaillech]").val());
                    formData.append("longueurmanchech",$("input[name=longueurmanchech]").val());
                    formData.append("epaulech",$("input[name=epaulech]").val());
                   

                    callAjax("http://127.0.0.1:8000/save-woman-chemise-size",formData);

            });


            $("#save_tunique").click(function(){

                

                    const formData = new FormData();
                    formData.append("_token", "{{ csrf_token() }}");
                    formData.append("client_id",$("input[name=client_id]").val());
                    formData.append("commentaire_tun",$("textarea[name=commentaire_tun]").val());


                    formData.append("f_col_tun",$("input[name=f_col_tun]").val());
                    formData.append("f_coude_tunn",$("input[name=f_coude_tunn]").val());
                    formData.append("f_tourmanche_tun",$("input[name=f_tourmanche_tun]").val());
                    formData.append("f_poignet_tun",$("input[name=f_poignet_tun]").val());
                    formData.append("f_longueurhhaut_tun",$("input[name=f_longueurhhaut_tun]").val());
                    formData.append("ff_ventre_tun",$("input[name=ff_ventre_tun]").val());
                    formData.append("f_poitrine_tun",$("input[name=f_poitrine_tun]").val());
                    formData.append("f_loongueurmanche_tun",$("input[name=f_loongueurmanche_tun]").val());
                    formData.append("f_epaule_tun",$("input[name=f_epaule_tun]").val());
                  
                    
                    
                   

                    callAjax("http://127.0.0.1:8000/save-woman-tunique-size",formData);

            });




            // manage order 

            $("#add_order").click(function(){

                $('#veste_check_input').prop('checked', false); 
                $('#pantalon_check_input').prop('checked', false); 
                $('#jupe_check_input').prop('checked', false); 
                $('#robe_check_input').prop('checked', false); 
                $('#chemise_check_input').prop('checked', false); 
                $('#tunique_check_input').prop('checked', false); 

                $('#veste_quantity_input').val(1); 
                $('#pantalon_quantity_input').val(1); 
                $('#jupe_quantity_input').val(1); 
                $('#robe_quantity_input').val(1); 
                $('#chemise_quantity_input').val(1); 
                $('#tunique_quantity_input').val(1); 
               
            });

            $("#make_order_button").click(function(){

                   var veste_check = $("#veste_check_input").is(':checked');
                   var veste_quantity = $("#veste_quantity_input").val();

                   var pantalon_check = $("#pantalon_check_input").is(':checked');
                   var pantalon_quantity =  $('#pantalon_quantity_input').val();

                   var jupe_check = $("#jupe_check_input").is(':checked');
                   var jupe_quantity =  $('#jupe_quantity_input').val();

                   var robe_check = $("#robe_check_input").is(':checked');
                   var robe_quantity =  $('#robe_quantity_input').val();

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

                   if(!jupe_check)
                   {
                         jupe_quantity = 0;
                   }
                  
                   if(!robe_check)
                   {
                         robe_quantity = 0;
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

                   if(!veste_check && !pantalon_check && !jupe_check && !robe_check && !chemise_check && !tunique_check)
                   {
                    cand_order = false;
                   }

                   
                  
                   if(cand_order)
                   {
                    var url_missed_part = "{{$client->id}}"+"/f/"+veste_quantity+"/"+pantalon_quantity+"/"+jupe_quantity+"/"+robe_quantity+"/"+chemise_quantity+"/"+tunique_quantity;

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

