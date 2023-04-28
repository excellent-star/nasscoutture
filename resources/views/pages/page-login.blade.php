<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Nass Couture</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="template_assets/images/nasscoutureico.ico">
    <link href="template_assets/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a ><img src="template_assets/images/nasscouture.png" alt=""></a>
									</div>
                              
                                    <form >
                                     
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Code de securité</strong></label>
                                            <input type="password" class="form-control" value="Password" >
                                        </div>
                                       
                                        <div class="text-center">
                                            <button id="submitButton" type="submit" class="btn btn-primary btn-block">Se Connecter</button>
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="template_assets/vendor/global/global.min.js"></script>
    <!-- <script src="template_assets/js/custom.min.js"></script> -->
    <!-- <script src="template_assets/js/dlabnav-init.js"></script> -->
	<!-- <script src="template_assets/js/styleSwitcher.js"></script> -->
    <script>

          $(function(){
               
                $("#submitButton").click(function(event){
                        event.preventDefault()
                  
                       window.open("http://127.0.0.1:8000/dashboard","_self");
                });
                 
          });
    </script>
</body>
</html>