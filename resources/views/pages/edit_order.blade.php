
@extends('layouts.main')

@section('main_content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Modification Commande</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Avance</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">

        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                            <div class="row">
                                  <div class="col-sm-6">
                                  <!-- <button style="background-color: #D653C1;border-color: #D653C1;color: #fff;" type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-primary"><i class="fas fa-print"></i>
                                    </span>Imprimer les mesures de ce client</button> -->
                                  </div>
                                  <div class="col-sm-6">
                                  <button id="store_order" style="background-color: #D653C1;border-color: #D653C1;color: #fff;float:right;" type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-primary"><i class="fa fa-cart-plus"></i>
                                    </span>Mettre à jour </button>
                                  </div>
                               </div>
                            </div>
                        </div>
        </div>
            
        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Commande</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Libelle</th>
                                                <th scope="col">Quantité</th>
                                                <th scope="col">Prix unitaire</th>
                                                <th scope="col">Total</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="table_body">
                                            

                                            @foreach($articles as $key => $item)
                                            
                                          
                                         
                                             
                                                 
                                                    <tr class="articles_ordered">
                                                        <td>{{$item->designation}}</td>
                                                        <td>
                                                            <input data-quantity-value="{{$item->qte}}"  class="quantity_item form-control quantity_{{$item->id}}" value="{{$item->qte}}" type="number"  min="0"/>
                                                        </td>
                                                        <td>
                                                        <input data-prix_unit-value="{{$item->pu}}" class="prixu_item form-control prixu_{{$item->id}}" type="number" value="{{$item->pu}}" min="0"/>
                                                        <input type="hidden" value="{{$item->id}}"/>
                                                        </td>
                                                        <td>
                                                            <span style="font-weight: bold;font-size:15px;" class="total_item total_{{$item->id}}">{{$item->qte * $item->pu}}</span> (frcfa)
                                                        </td>
                                                        
                                                    </tr>
                                                
                                          
                                            @endforeach
                                           
                                            <tr>
                                                        <td></td>
                                                        <td>
                                                            <input type="hidden" name="client_id" value="{{$order->client_id}}"/>
                                                            <input type="hidden" name="order_id" value="{{$order->id}}"/>
                                                            <input type="hidden" name="avance_id" value="{{$avance!=null?$avance->id:0}}"/>
                                                        </td>
                                                        <td colspan="2">
                                                             <span>Total : <span id="total_commande" style="font-weight:bold;">   {{$order->montant_total}}   </span>   (frcfa)</span>
                                                        </td>
                                                      
                                         </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        
            
            
            
        </div>


        <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Avance</th>
                                                <th scope="col">Reste</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>   
                                                     <input type="number" value="{{$avance!=null?$avance->montantav:0}}" id="avance_input" class="form-control" min="0"/>
                                                    </td>
                                                
                                                    <td> <input readonly id="reste_input" value="{{$avance!=null?$avance->reste:0}}"  type="number" class="form-control" min="0"/></td>
                                               
                                            </tr>

                                            <tr>
                                                <td>   
                                                      <p> La date de retrait des articles</p>
                                                    </td>
                                                
                                                    <td> <input value="{{$order!=null?$order->dateretrait:0}}" id="retrait_date_input"  type="date" class="form-control" min="0"/></td>
                                               
                                            </tr>
                                          
                                           
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        
            
            
            
        </div>


    </div>
</div>
@endsection


@section('additional_scripts')

<Script>

    $(function(){

           var total_commande;
           var temporary_total_commande;
           var _quantity ;
           var _prix_unit;
           var _check_validation = {message:"your can store to database", is_ok:true};
           var _dataToSend = [];
         

           $(".quantity_item").on('input',function(){

                var item =  $(this).val();
                _quantity = item;

                $(this).attr('data-quantity-value', _quantity);

               var sublings = $(this).parent().siblings();

               var prix_unitaire_element = sublings[1].children[0];



               var prix_unitaire_class = sublings[1].children[0].classList;

               var prix_unitaire_className = "."+prix_unitaire_class[2];

                var prix_unitaire_value = $(prix_unitaire_className).val();
           
                sublings[2].children[0].innerText = prix_unitaire_value * item;

                var current_total = $(".total_item");

                

                total_commande =0;

                $.each(current_total,function(index,value){

                      total_commande=total_commande+parseInt(value.innerText);
                });

                temporary_total_commande = total_commande;

                $("#total_commande")[0].innerText = total_commande.toString();

           
               
                // total_commande = 

                  
                      
           });



            $(".prixu_item").on('input',function(){

                var prix_unitaire =  $(this).val();

                _prix_unit = prix_unitaire;
                $(this).attr('data-prix_unit-value', _prix_unit);

               var sublings = $(this).parent().siblings();

               var quantity = sublings[1].children[0];

              

               var quantity_class = sublings[1].children[0].classList;


               var quantity_className = "."+quantity_class[2];

           
                var quantity_value = $(quantity_className).val();
           
                sublings[2].children[0].innerText = quantity_value * prix_unitaire;

                var current_total = $(".total_item");

                total_commande =0;

                $.each(current_total,function(index,value){

                      total_commande=total_commande+parseInt(value.innerText);
                });

                    temporary_total_commande = total_commande;

                $("#total_commande")[0].innerText = total_commande.toString();

                  
                      
           });


            $("#avance_input").on('input',function(){

                    var avance = $(this).val();

                    if(temporary_total_commande<=parseInt(avance))
                    {
                        $("#reste_input").val("");
                        return;
                    }

                    var reste = temporary_total_commande - parseInt(avance);

                    $("#reste_input").val(reste.toString());
                      
           });



           $("#store_order").click(function(){

                     var articles_ordered = $(".articles_ordered");

                     for(let i=0;i< articles_ordered.length;i++){

                             var tr_children = articles_ordered[i].children;

                            var _quantity = tr_children[1].children[0].attributes[0].nodeValue;

                            var _prix_unitaire = tr_children[2].children[0].attributes[0].nodeValue;

                            var _article_id = parseInt(tr_children[2].children[1].attributes[1].nodeValue);

                            _prix_unit = parseInt(_prix_unitaire);
                            _quantity = parseInt(_quantity);

                            var article = tr_children[0].innerText;
                       
                                _dataToSend.push({"article":article,"quantity":_quantity,"price":_prix_unit,"article_id":_article_id});
                            if(_quantity <=0)
                            {
                                    _check_validation.is_ok = false;
                                    _dataToSend = [];
                                    if(article=="veste"){

                                        _check_validation.message= " verifié la quanité des vestes";
                                    }else if(article=="chemise")
                                    {
                                        _check_validation.message= " verifié la quanité des chemise";
                                    }else if(article=="tunique")
                                    {
                                        _check_validation.message= " verifié la quanité des tuniques";
                                    }else if(article=="robe")
                                    {
                                        _check_validation.message= " verifié la quanité des robes";
                                    }
                                    else if(article=="pantalon"){

                                        _check_validation.message= " verifié la quanité des pantalons";

                                    }else{

                                        _check_validation.message= " verifié la quanité des jupes";
                                    }
                                    
                                   break;
                                   
                            }

                            if(_prix_unitaire <=0){

                                _check_validation.is_ok = false;
                                _dataToSend= [];
                                    if(article=="veste"){

                                        _check_validation.message= " verifié le prix unitaire des vestes";
                                    }else if(article=="chemise")
                                    {
                                        _check_validation.message= " verifié le prix unitaire des chemise";
                                    }else if(article=="tunique")
                                    {
                                        _check_validation.message= " verifié le prix unitaire des tuniques";
                                    }else if(article=="robe")
                                    {
                                        _check_validation.message= " verifié le prix unitaire des robes";
                                    }
                                    else if(article=="pantalon"){

                                        _check_validation.message= " verifié le prix unitaire des pantalons";

                                    }else{

                                        _check_validation.message= " verifié le prix unitaire des jupes";
                                    }
                                 break;
                            }

                            _check_validation.is_ok = true;
                            _check_validation.message = "la validation est correcte";

                     }

                    //   $.each(articles_ordered,function(index,value){

                    //         var tr_children = value.children;

                    //         var _quantity = tr_children[1].children[0].attributes[0].nodeValue;

                    //         var _prix_unitaire = tr_children[2].children[0].attributes[0].nodeValue;

                           

                    //         if(_quantity <=0)
                    //         {
                    //                 _check_validation = false;
                    //                 throw new Error("not valide");
                                   
                    //         }

                    //         if(_prix_unitaire <=0){

                    //             _check_validation = false;
                    //             throw new Error("not valide");
                    //         }

                        


                           
                    //    });

                    
                    if(!_check_validation.is_ok){

                        Swal.fire(
                                'Validation',
                                _check_validation.message,
                                'warning'
                                )
                    }else{

                        var avance = $("#avance_input").val();

                        var reste = $("#reste_input").val();
                        var date_retrait = $('#retrait_date_input').val();

                     
                        

                        if(avance!=null)
                        {
                             if(avance>=total_commande)
                             {
                                Swal.fire(
                                'Validation',
                                'l\'avance d\'argent est superieure ou la même chose que la somme total, donc retire l\'avance',
                                'warning'
                                )
                                _dataToSend= [];
                                return;
                             }
                        }

                        if(date_retrait=="")
                        {
                            
                                Swal.fire(
                                'Validation',
                                'la date de retrait est obligatoire',
                                'warning'
                                )
                                _dataToSend= [];
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
                                    confirmButtonText: 'oui, Enregister!'
                                    }).then((result) => {

                                       
                                    if (result.value) {


                                        // Swal.fire(
                                        // 'Deleted!',
                                        // 'Your file has been deleted.',
                                        // 'success'
                                        // )
                                        
                                        const formData = new FormData();
                                        formData.append("_token", "{{ csrf_token() }}");
                                        formData.append("client_id",$("input[name=client_id]").val());
                                        formData.append("order_id",$("input[name=order_id]").val());
                                        formData.append("avance_id",$("input[name=avance_id]").val());
                                        formData.append("avance",avance);
                                        formData.append("reste",reste);
                                        formData.append("date_retrait",date_retrait);
                                        formData.append("total_commande",total_commande);
                                        formData.append('order_data', JSON.stringify(_dataToSend));


                                      
                                        $.ajax({
                                            url:'http://127.0.0.1:8000/update-order/'+$("input[name=order_id]").val(),
                                            method: 'POST',
                                            data: formData,
                                            dataType: 'JSON',
                                            contentType: false,
                                            cache: false,
                                            processData: false,
                                            success:function(response)
                                            {

                                              
                                                _dataToSend= [];
                                                // return;
                                                Swal.fire(
                                                    'Commande',
                                                    response.message,
                                                    'success'
                                                    )
                                                   
                                                    window.open('http://127.0.0.1:8000/list-orders',"_self");
                                            },
                                            error: function(response) {

                                                Swal.fire(
                                                    'Modification',
                                                    'Une erreur s\'produite',
                                                    'warning'
                                                    )
                                                    _dataToSend= [];
                                            }
                                        });


                                    }else{
                                        _dataToSend= [];
                                    }
                                    });
                        

                         
                    }

                    //    console.log(_check_validation.is_ok+"  "+_check_validation.message+"  data "+_dataToSend);

                   
           });







    });


     
    

</script>

@endsection

