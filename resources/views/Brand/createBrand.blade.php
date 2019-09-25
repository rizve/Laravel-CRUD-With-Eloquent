<!DOCTYPE html>
<html>
<head>
    <title>Brand</title>
    <link href="{{url('AdminPanelAsset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{url('AdminPanelAsset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{url('AdminPanelAsset/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

</head>
<body>
    <h1></h1>
    @if(Session::has('succses_message'))    
    <p class="alert alert-success text-center">{{ Session::get('succses_message') }}</p>    
    @endif
    <div class="container">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">                    
                        <div class="text-center" style="font-size: 18px;margin: 10px"><b>Add Brand</b>
                        </div>
                        <hr>
                        <div class="panel-body">
                        {!! Form::open(array('route' => 'brand.store')) !!}                       
                            <div class="form-group">
                                <label>Brand Name * : </label>
                                <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Product Brand" required>
                            </div>                      
                            <button type="submit" class="btn btn-primary" style="background-color: #6f5e68;"><i class="fas fa-cart-plus"></i> Add Product Brand</button>
                        {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="flex-center position-ref">
            
            <div class="content">               
                <div class="links">
                    <!-- <a href=/create/brand>Add A Brand</a> -->
                    <a href="/">Home</a>
                    ||
                    <a href="/brand">Show Brand</a>
                    ||
                    <a href="/create/product">Add Product</a>
                    ||
                    <a href="/product">Show Product</a>
                    <!-- <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>

</body>
</html>

