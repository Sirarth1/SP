php<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
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
                            <li class="active"><a href="alta_equipo.php">Alta de equipos</a> </li>
                            <li><a href="alta_reporte.php">Alta de Reportes</a></li>
                            <li><a href="estado_reporte.php">Estado de reportes</a></li>
                            <li><a href="accesos.html">Accesos  </a ></li> 
                            <li><a href="inicio.php" class="navbar-brand">Menu Principal</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <div class="container">
    
        <h1>Alta de equipos</h1> 
        <h3>Rellena los campos necesarios para registra un nuevo equipo</h2> 
        
        <h2>Informacion General</h2>
        <form action="" class="">
            <div class="col-md-12">   
                <div class="form-group col-md-3">
                    <label  for="">No.DAP-SIS</label><br>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tipo de equipo</label> <br>
                        <select class="form-control" name="" id="" >
                            <option value="">PC</option>
                            <option value="">Laptop</option>
                            <option value="">Notebook</option>
                            <option value="">Impresora</option>
                            <option value="">Fotocopiadora</option>
                        </select> 
                </div>
                <div class="form-group col-md-3">
                    <label for="">Modelo del equipo</label><br>
                    <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: HP-JK48000.">    
                </div>
                
                <div class="form-group col-md-3">
                    <label for="">Marca</label><br>
                    <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: Lenovo, HP, Acer, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Numero de serie</label><br>
                    <input class="form-control" type="text" name="" id="">
                </div>
            </div> 

            <div class="col-md-12">
                <h2>Datos de la tarjeta madre</h2> 
                
                <!--Datos tarjeta madre-->
                    <div class="form-group col-md-3"> 
                        <label for="">Modelo: </label> <br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: Aorus Micro ATX B550M."> 
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Tipo de Socket:</label><br>
                        <input class="form-control" type="text" name="" id="" placeholder="AM4.">
                    </div>
                    <div class="form-group col-md-3">   
                        <label for="">Puertos de video:</label><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: 2 Hdmi, 1 VGA.">
                    </div>
                    <div class="form-group col-md-3">       
                        <label for="">Puertos PCI</label><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: 2 puertos PCI y 1 PCE-2.0.">
                    </div>
                    <div class="form-group col-md-3"> 
                        <label for="">Ranuras ram</label><br>
                        <select class="form-control" name="" id="">
                            <option value="">1 Ranura RAM</option>
                            <option value="">2 Ranura RAM</option>
                            <option value="">4 Ranura RAM</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Puerto NVME</label><br>
                        <input class="form-control" type="text" name="" id="">
                    </div>
                    
                <!--Fin datos tarjeta madre--> 
                <!--Datos del procesador-->
            </div>
            <div class="col-md-12">
                    <h2>Datos del Procesador</h2>
                    <div class="form-group col-md-3">
                        <label for="">Modelo del procesador</label><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: i7-10700k.">
                    </div>
                    <div class="form-group col-md-3"> 
                        <label for="">Velocidad del procesador</label><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: 4.10 GHZ.">
                    </div>
                    
            </div>       
                <!--fin datos del procesador-->
                <br><br>
                <!--Inicio datos almacenamieno disco/ssd y ram-->
            <div class="col-md-12">
                <h2>Almacenamiento </h2>
                    <div class="form-group col-md-3">
                        <label for="">Capacidad de Almacenamiento</label><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo 1??: 250GB o 520GB o 1TB."><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo 2??: 250GB o 520GB o 1TB.">    
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Tipo de disco</label> <br>
                            <select class="form-control" name="" id="">
                                <option value="">Disco Duro</option>
                                <option value="">SSD</option>
                                <option value="" selected>Sin unidad</option>
                            </select> <br>
                            <select class="form-control" name="" id="">
                                <option value="">Disco Duro</option>
                                <option value="">SSD</option>
                                <option value="" selected>Sin unidad</option>
                            </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Capacidad de la memoria RAM</label><br>
                            <select class="form-control" name="" id="">
                                <option value="">4GB</option>
                                <option value="">8GB</option>
                                <option value="">16GB</option>
                                <option value="">32GB</option>
                                <option value="" selected>Slot vacio</option>
                            </select> <br>
                            <select class="form-control" name="" id="">
                                <option value="">4GB</option>
                                <option value="">8GB</option>
                                <option value="">16GB</option>
                                <option value="">32GB</option>
                                <option value="" selected>Slot vacio</option>
                            </select>
                    </div>
                    <div class="form-group col-md-3"> 
                        <label for="">Velocidad de la RAM</label><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: 1600Mhz o 2666Mhz o 3200Mhz."><br>
                        <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: 1600Mhz o 2666Mhz o 3200Mhz.">
                    </div>
                <!--in datos almacenamieno disco/ssd y ram-->
                <!--Inicio de otro tipo de especificaciones del equipo-->
            </div>
            
            <div class="col-md-12">
                <h2>Otros datos del equipo</h2>
                <div class="form-group col-md-3">
                    <label for="">Graficos integrados/dedicados</label><br>
                    <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: Gtx 2060 o Radeon Vega 8.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Modelo de la fuente de poder</label><br>
                    <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: Evga 600 W1 black 100V/240V.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Monitor</label><br>
                    <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: HP, Samsung, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tiemp?? de uso</label><br>
                        <select class="form-control" name="" id="">
                            <option value="">menor a 1 a??o</option>
                            <option value="">de 1 a 3 a??os</option>
                            <option value="">de 3 a 6 a??os</option>
                            <option value="">mayor a 6 a??os</option>
                        </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Teclado</label> <br>
                    <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: De frabrica, DELL, Lenovo, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tiemp?? de uso</label> <br>
                        <select class="form-control" name="" id="">
                            <option value="">menor a 1 a??o</option>
                            <option value="">de 1 a 3 a??os</option>
                            <option value="">de 3 a 6 a??os</option>
                            <option value="">mayor a 6 a??os</option>
                        </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Mause</label><br>
                    <input class="form-control" type="text" name="" id="" placeholder="Ejemplo: De fabrica, Lenovo, hp, logitech, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tiemp?? de uso</label><br>
                        <select class="form-control " name="" id="">
                            <option value="">menor a 1 a??o</option>
                            <option value="">de 1 a 3 a??os</option>
                            <option value="">de 3 a 6 a??os</option>
                            <option value="">mayor a 6 a??os</option>
                        </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="ss">Lector dvd/cd</label>
                    <input class="form-control" type="checkbox" name="" id="">
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="ss">Lector de Targetas SD</label>
                    <input class="form-control" type="checkbox" name="" id=""></p>
                </div>
                <div class="form-group col-md-12">
                    <p class="text">
                        <label for="">Observaciones del equipo</label><br>
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </p>
                </div>
                <div class="col-md-12">

                    <!--Inicio de la informacion logica del equipo-->
                <h2>Informacion logica del equipo</h2>
                <div class="form-group col-md-6">
                    <label  for="">Direccion IP</label>
                    <select class="form-control" name="" id=""></select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Direccion MAC Ethernet</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Direccion MAC Wifi</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
               
                
                
            
            <!--fin de la informacion logica del equipo-->
            <!--Inicio del formulario responsables-->
                </div>

               
            <!--fin de otro tipo de especificaciones del equipo-->
            <!--Inicio de la informacion logica del equipo-->
            </div>
            <div class="col-md-12">
                <h2>Datos de los responsables</h2>
                
                <div class="form-group col-md-6">
                    <label for="">Usuario</label> <br>
                    <select class="form-control" name="" id="">
                        <option value="">asdfd</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Area</label> <br>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Responsables</label><br>
                    <select class="form-control" name="" id="">
                        <option value="">dsaf</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Cargo</label> <br>
                    <input class="form-control" type="text" name="" id="">
                </div>
               
                <div class="form-group col-md-3">
                    <input  type="button" value="Nuevo responsable"  id="btn-abrir-popupus" class="btn btn-success"> 
                </div>
                <div class="form-group col-md-3">
                    <input type="button" value="Nueva Usuario" id="btn-abrir-popup" class="btn btn-success">
                </div>
              
                <!--Fin del formulario responsables-->

            </div>
            <div class="col-md-12">
                <h2>Datos para futura actualizacion del equipo</h2> <br>
                <h4>Esta area tiene como objetivo llenarse con componentes compatibles con el equipo con el fin de actualizar en un futuro de ser necesario. 
                    En caso de no contar con la informaicon, dejar los campos en blanco.</h4>
                <div class="form-group col-md-4">
                    <label for="" >Procesadores soportados</label><br>
                    <textarea name="" id="" cols="48" rows="10" ></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Ram soprtada</label><br>
                    <textarea name="" id="" cols="48" rows="10"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Graficos soportados</label><br>
                    <textarea name="" id="" cols="48" rows="10"></textarea>
                </div>
                    
                   
                    
                                  
            </div>
          

        </form>
    </div>



        <div>
            <p>
                <div class="overlay" id="overlay">
                    <div class="popup" id="popup">
                        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times">X</i></a>
                        <h3>Nuevo responsable</h3>
                        <form action="">
                            <div class="contenedor-inputs">
                                <input type="text" placeholder="Area">
                                <input type="text" placeholder="Nombre">
                                <input type="text" placeholder="Cargo">
                                <input type="submit" class="btn-submit" value="Registrar">
                            </div>
                            
                        </form>
                    </div>
                </div>
            
                <div class="overlay" id="overlayus">
                    <div class="popup" id="popupus">
                        <a href="#" id="btn-cerrar-popupus" class="btn-cerrar-popup"><i class="fas fa-times">X</i></a>
                        <h3>Nuevo Usuario</h3>
                    
                        <form action="">
                            <div class="contenedor-inputs">
                                <input type="text" placeholder="Area">
                                <input type="text" placeholder="Usuario nuevo">
                                <input type="submit" class="btn-submit" value="Registrar">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </p>
        </div>
        <br>
        <br>
        <br>

    <footer>
        <div class="container">
            <div class="row">
                
              
                    <p>Sistema de Atencion Ciudadana de Alumbrado Publico <br>
                        Dise??ado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion</p>
                
            </div>
        </div>
    </footer>

    
    <script src="js/popup.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>