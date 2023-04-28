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
                                <td>P  :    -----------------------------------------  </td>
                                <td><span>{{ (isset($data) && !empty($data))?$data->mesure->page:"" }}</span></td>
                        </tr>
                        <tr>
                                <td>Nom/Prénom :  -----------------------------------------  </td>
                                <td><span>{{ (isset($data) && !empty($data))?$data->nom.' '.$data->prenom:"" }}</span></td>
                        </tr>
                        <tr>
                                <td>Numéro Facture:  -----------------------------------------   </td>
                                <td><span>{{ (isset($data) && !empty($data))?$data->mesure->page:"" }}</span></td>
                        </tr>
                        <tr>
                                <td>Numéro Page: -----------------------------------------   </td>
                                <td><span>{{ (isset($data) && !empty($data))?$data->mesure->page:"" }}</span></td>
                        </tr>
                        <tr>
                                <td>Date de dépot: -----------------------------------------     </td>
                                <td><span>10/02/2023</span></td>
                        </tr>
                        <tr >
                                <td>Date de retrait: -----------------------------------------    </td>
                                <td><span>10/02/2023</span></td>
                        </tr>

                        <tr id="space" >
                                <td>  </td>
                                <td></td>
                        </tr>

                        <tr>
                                <td>Epaule    : <span>45</span></td>
                                <td>E : <span>45</span></td>
                        </tr>
                        <tr>
                                <td>L. Manche    :  <span>45</span></td>
                                <td>P : <span>45</span></td>
                        </tr>
                        <tr>
                                <td>Poitrine    :   <span>45</span></td>
                                <td>V : <span>45</span></td>
                        </tr>
                        <tr>
                                <td>Ventre    : <span>45</span></td>
                                <td>L : <span>45</span></td>
                        </tr>
                        <tr>
                                <td>Longueur Haut    :  <span>45</span></td>
                                <td></td>
                        </tr>
                        <tr>
                                <td>Tour de Manche    : <span>45</span></td>
                                <td></td>
                        </tr>
                        <tr>
                                <td>Col    :    <span>45</span></td>
                                <td></td>
                        </tr>
                        <tr>
                                <td>Dos    :    <span>45</span></td>
                                <td></td>
                        </tr>
            </table>

        </div>

</div>
    
</body>
</html>