<div class="dlabnav" >
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                   

                    <li><a href="{{route('dashboard')}}" class="" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Tableau de bord</span>
						</a>
					</li>
					
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fas fa-user"></i>
							<span class="nav-text">Clients</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_client') }}">Ajouter un client</a></li>
                            <li><a href="{{ route('list_client') }}">Liste des clients</a></li>
						
                            <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li> -->

                            <!-- <li><a href="app-calender.html">Calendar</a></li> -->

							<!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
									<li><a href="ecom-product-list.html">Product List</a></li>
									<li><a href="ecom-product-detail.html">Product Details</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									<li><a href="ecom-checkout.html">Checkout</a></li>
									<li><a href="ecom-invoice.html">Invoice</a></li>
									<li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-shopping-cart"></i>
							<span class="nav-text">Commandes</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('list_orders')}}">Commandes</a></li>
                           
                        </ul>
                    </li>

                    <li><a href="{{route('edit_password')}}" class="" aria-expanded="false">
							<i class="fas fa-key"></i>
							<span class="nav-text">Code sécurité</span>
						</a>
					</li>

          
                  
                </ul>
				
				
			</div>
        </div>