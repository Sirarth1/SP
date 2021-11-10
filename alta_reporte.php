<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <br>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Soporte Tecnico</a>

                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="alta_equipo.php">Alta de equipos</a> </li>
                            <li class="active"><a href="alta_reporte.php">Alta de Reportes</a></li>
                            <li><a href="estado_reporte.php">Estado de reportes</a></li>
                            <li><a href="accesos.php">Accesos  </a ></li> 
                            <li><a href="inicio.php" class="navbar-brand">Menu Principal</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
    </div>

    <div class="container">
      
                    <h1>Area de Registro</h1>
                    
                        
                    
                    
                    <form action="form-inline">
                            <div class="form-group col-md-6" >
                                <input class="form-control " type="text" name="" id="" placeholder="Buscar por nombre o correo">
                                
                            </div>
                            <div class="form-group col-md-3">
                                <button class="btn btn-success" >Buscar</button>
                            </div>
                        
                            <div class="form-group col-md-6">
                                <label for="">Tipo de equipo</label>
                                <input class="form-control" type="text" name="" id="">   
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Modelo del equipo</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Marca</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Numero de serie</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Almacenamiento</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">RAM</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">¿Quien Reporta?</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Fecha del reporte</label>
                                <input class="form-control" type="date" name="" id="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Observaciones del reporte</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Indica las problematicas que presento el equipo."></textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <button class="btn btn-success form">Reportar</button>
                            </div>
                            
                        
                    </form>
                
            
    </div>
    <footer>
        <div class="container">
            <div class="row">
                
              
                    <p>Sistema de Atencion Ciudadana de Alumbrado Publico <br>
                        Diseñado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion</p>
                
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>