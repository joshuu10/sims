
@extends('layout.app')

    @section('profile')
 
 
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-4">
                    <h1 class="m-0">User account management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="homepage.php" style="color:black;">Home</a></li>
                    <li class="breadcrumb-item active"><a href="product.php" >Account</a></li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    
                </div>
        
            <section class="content">
                <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">User account details and it's information</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <!-- /.card-header -->
                
                <!--endimgupload-->
                
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label></label><br>

                            <img src="Assests/Images/'.$data[..].'" width="120px" height="80px">
                                
                    </div>
                    </div>
                </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Fullname</label><br>
                                  
                                <h2>....<h2>
 
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Username</label>
                             <h2>.....<h2>  

                        </div>
                    </div>
                        <!-- /.form-group -->
                        <div class="col-md-4">
                        <div class="form-group">
                        <label>E-mail</label>
                                    
                                <h2>...<h2>

                        </div>
                        </div> 
                    </div>          
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label>Phone-number</label>
                                                                   
                             <h2>..<h2>  

                            </div>
                        </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Account created at</label>
                                <h2>..(created)...<h2>   
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                        </div>

                    
                    <!-- /.row -->
                </div>
                <div class="row">
                    <div class="col-md-7">
                        
                        </div>
                        <div class="col-md-2">
                        
                        </div>
                        <div class="col-md-2">
                        <a title="SI unit" class="btn btn-success btn-circle" href="updateacc.php">Edit account</a>
                        </div>
                    </div>
                    
                    </div>    
                
                <!-- /.card-body -->
                
                </div>
    @endsection            