<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trish Collections --</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<style type="text/css">
    body{
        margin:70px 0px 0px 15px;
        font-color:black;
    }
    a{
        display: none;
        color: black;
        font-size:16px;
        
    }
    ul{
        text-align: center;
    }
    .logo{
        font-family:Edwardian Script ITC;
        color: #00695c;
        font-size: 60px;
    }
    hr{
        border:1px solid;
        border-color: #00695c;
        width:50%;
    }

    a:hover { 
    
    color: #00695c;


}
</style>
<body>
<div class="container-fluid">
    <div class="row">
            <div class="col-md-3 text-center">
                <div class="row">
                    <h3 class="logo"><b>Trish Collections</b></h3>
                </div>

                <div class="row" >
                    <ul class="nav" role="tablist">

                    <li class="nav-item waves-effect waves-light myTab">
                        <a class="nav-link active" data-toggle="tab" href="#" role="tab"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
                    </li><div class="clearfix"></div><hr style="width: 50%">
                    <li class="nav-item waves-effect waves-light myTab">
                        <a class="nav-link active" data-toggle="tab" href="#" role="tab"> Home</a>
                    </li><div class="clearfix"></div>
                    <li class="nav-item waves-effect waves-light myTab">
                        <a class="nav-link" data-toggle="tab" href="#" role="tab"> Catalog</a>
                    </li><div class="clearfix"></div>
                    <li class="nav-item waves-effect waves-light myTab">
                        <a class="nav-link" data-toggle="tab" href="#" role="tab"> Blog</a>
                    </li>

                     <li class="nav-item waves-effect waves-light myTab">
                        <a class="nav-link" data-toggle="tab" href="#" role="tab"> About Us</a>
                    </li><div class="clearfix"></div>
                    <hr>
                </ul>
                
                </div>
                <!-- Nav tabs -->
                
            </div>
            <div class="col-md-7">
                <!-- Tab panels -->
                @yield('content')
               
            </div>
        </div>
</div>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>

    <script type="text/javascript">
        $('#myTab a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
})       
    </script>
</body>

</html>