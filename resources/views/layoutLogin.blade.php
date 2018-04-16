<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>HOTEL ABANCAY</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('/css/back/theme-blue.css')}}">
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>ADMINISTRAR</strong> HOTEL</div>
                    <form action="login" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email"   name="email" class="form-control" placeholder="Usuario"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="password" class="form-control" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">
                                
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Ingresar</button>
                            </div>
                        </div>
            
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; spaziour.com 2018
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </body>
</html>

