
        @extends('layouts.main')

		@section('main_content')
		<div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tableau de bord</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Statistiques</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
					
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
					   <a href="{{route('list_client')}}">
					   <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Clients</p>
										<h4 class="mb-0">{{(isset($count_clients) && !empty($count_clients)?$count_clients:0)}}</h4>
										<!-- <span class="badge badge-primary">+3.5%</span> -->
									</div>
								</div>
							</div>
						</div>
					   </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="{{ route('list_female')}}">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
								<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Clients Femmes</p>
										<h4 class="mb-0">{{(isset($female_clients) && !empty($female_clients)?$female_clients:0)}}</h4>
										<!-- <span class="badge badge-primary">+3.5%</span> -->
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                       <a href="{{'list_male'}}">
					   <div class="widget-stat card">
							<div class="card-body  p-4">
								<div class="media ai-icon">
								<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Clients Hommes</p>
										<h4 class="mb-0">{{$count_clients-$female_clients}}</h4>
										<!-- <span class="badge badge-primary">+3.5%</span> -->
									</div>
								</div>
							</div>
						</div>
					   </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                       <a href="#">
					   <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
								<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Clients avec au moins une commande</p>
										<h4 class="mb-0">{{(isset($client_order) && !empty($client_order)?$client_order:0)}}</h4>
										<!-- <span class="badge badge-primary">+3.5%</span> -->
									</div>
								</div>
							</div>
						</div>
					   </a>
                    </div>
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						 <a href="{{route('list_orders')}}">
						 <div class="widget-stat card bg-danger">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<i class="fas fa-shopping-cart"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Commandes</p>
										<h3 class="text-white">{{(isset($count_order) && !empty($count_order)?$count_order:0)}}</h3>
									</div>
								</div>
							</div>
						</div>
						 </a>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<a href="#">
						<div class="widget-stat card bg-success">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="fas fa-shopping-cart"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Avances</p>
										<h3 class="text-white">{{(isset($count_cash_advance) && !empty($count_cash_advance)?$count_cash_advance:0)}}</h3>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>
					
				
					
					
					
                </div>
            </div>
        </div>
		@endsection
        
	