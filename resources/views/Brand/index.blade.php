<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <link href="{{url('AdminPanelAsset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <!-- <link href="{{url('AdminPanelAsset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"> -->

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

    @if(Session::has('Delete_message_for_delete'))    
        <p class="alert alert-danger text-center">{{ Session::get('Delete_message_for_delete') }}</p>
    @endif

    @if(Session::has('succses_message_for_Update'))    
            <p class="alert alert-success text-center">{{ Session::get('succses_message_for_Update') }}</p>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset">
                <div class="panel panel-default">
                    <div class=" text-center" style="font-size: 18px;margin: 10px"><b>List Of Brand</b></div>
                    <hr>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="my-dataTables">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="background-color: #6f5e68; color: #fff;"> ID</th>
                                        <th class="text-center" style="background-color: #6f5e68; color: #fff;"> Product Brand</th>
                                        <th class="text-center" style="background-color: #6f5e68; color: #fff;"> Action</th>                                                
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($showBrandList as $showBrand)
                                        <tr class="odd grade">
                                            <td class="text-center">{{$showBrand->id}}</td>
                                            
                                            <td class="text-center">{{$showBrand->brand_name}}</td>
                                            <td class="text-center">
                                            <a href="{{route('brand.edit',$showBrand->id)}}">Edit</a>  ||                                         
                                            <a href="{{route('brand.get.destroy', $showBrand)}}" style="color:red">Delete </a>
                                            </td>
                                        
                                           
                                        </tr>
                                    @empty

                                    @endforelse
                                  
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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
                <a href=/create/brand>Add A Brand</a>
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