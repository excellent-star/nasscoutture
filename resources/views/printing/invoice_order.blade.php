<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
</head>
<style>

    #wrapper_div{

          margin:auto;
          width: 90%;
          /* height: 100%; */
        
          /* background-color: red; */
          
    }

    body{
         
        border: 2px dotted black;
            /* height: 100%; */
       
    }

    #wrapper_div #header{

         text-align: center;
       
    }

    /* #wrapper_div #header p{

        
    } */

    #wrapper_div #content{

        justify-content: center;
        margin: auto;
        width: 90%;
        }

        #wrapper_div #content table{

          width: 90%;
          text-align: center;
         
        }

        #wrapper_div #content table td {

            text-align: left;

        }

        #wrapper_div #content table td:nth-child(2) {

            text-align: right;


            }

        @page  {
            size: A4 landscape;
            margin-top: 0px 0px;
            padding-bottom: 0px;
                

        }

        #space td{

              height: 30px;
        }


        #details td p{

             text-align: center;
        }

       #details td,th{

        border:1px solid black;

       }

        
       
</style>
<body>

<div  id="wrapper_div" >

        <div id="header">

            <img src="template_assets/images/cn-removebg-preview.PNG"/>
            <h3>NASS COUTURE <br>  <span>------------------</span></h3>
          
            <p>Coupe et Couture ajustées <br>  <span>------------------</span></p>
          
        </div>

        <div id="content" >


            <table>
                        
                        <tr>
                                <td>Nom/Prénom :  -----------------------------------------  </td>
                                <td><span>{{ (isset($order) && !empty($order))?$order->nom.' '.$order->prenom:"" }}</span></td>
                        </tr>
                        <tr>
                                <td>Numéro Facture:  -----------------------------------------   </td>
                                <td><span>{{ (isset($order) && !empty($order))?$order->facture:"" }}</span></td>
                        </tr>
                     
                        <tr>
                                <td>Date de dépot: -----------------------------------------     </td>
                                <td><span>{{ (isset($order) && !empty($order))?date("d-m-Y", strtotime($order->datedepot)):"" }}</span></td>
                        </tr>
                        <tr >
                                <td>Date de retrait: -----------------------------------------    </td>
                                <td><span>{{ (isset($order) && !empty($order))?$order->dateretire:"----//----" }}</span></td>
                        </tr>

                        <tr id="space" >
                                <td>  </td>
                                <td></td>
                        </tr>

                        
                      
            </table>
            <table style="margin-bottom:40px" id="details" class="table">
                   <tr>
                       <th>Article</th>
                       <th>Qte</th>
                       <th>Pirx Unitaire</th>
                       <th>Total</th>
                   </tr>

                    @foreach($articles as $article)

                      <tr>
                            <td><p>{{$article->designation}}</p></td>
                            <td><p>{{$article->qte}}</p></td>
                            <td><p>{{$article->pu}}</p></td>
                            <td><p>{{$article->qte * $article->pu}}</p></td>
                      </tr>
                    @endforeach
                   
            </table>

            <table>
                    @if($avance!=null)

                    <tr>
                                <td>Avance :        <span>{{ (isset($avance) && !empty($avance))?$avance->avance:"" }}</span></td>
                                <td></td>
                    </tr>
                    <tr>
                                <td>Reste :     <span>{{ (isset($avance) && !empty($avance))?$order->reste:"" }}</span></td>
                                <td></td>
                    </tr>
                    @endif
                    <tr>
                                <td>Montant Total    :      <span style="font-weight:bold">{{ (isset($order) && !empty($order))?$order->montant_total:"" }}</span></td>
                                <td></td>
                    </tr>
            </table>
            
            <table>

                      
                        <tr>
                                <td></td>
                                <td>Fait à Libreville , le {{date('d-m-Y')}}</td>
                        </tr>

            </table>

        </div>

</div>
    
</body>
</html>