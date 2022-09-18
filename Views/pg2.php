<?php 
    $id = $_SESSION['id'];
    include '../Config/Conexion.php';
    $conexion = new Conexion();
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $consulta = $conexion->stm->prepare($sql);
    $consulta->execute();
    $persona = $consulta->fetchAll(PDO::FETCH_OBJ);
    foreach($persona as $u){}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Software para parqueadero</title>
    <!-- http://127.0.0.1:5501/pg2.html -->
    <link rel="stylesheet" href="../Public/Css/style2.css">
    <link rel="stylesheet" href="../Public/Css/style5.css">
    <link rel="stylesheet" href="../Public/Css/style11.css">
    <link rel="stylesheet" href="../Public/Css/style12.css">
    <link rel="stylesheet" href="../Public/Css/style13.css">
    <link rel="stylesheet" href="../Public/Css/style6.css">

    <link rel="stylesheet" href="../Public/Css/style9.css">
    <script src="../Public/JS/pg2.js"></script>

</head>

<body class="text-bg-secondary p-3" >

  
    
    <nav class="navbar  fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand " href="#"></a>
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title bg-linght text-light" id="offcanvasNavbarLabel"><b>USUARIO</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active bg-linght text-light" aria-current="page" href="pg1.html"><b>Cerrar Sesión</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#" onclick="eliminar(<?php echo $_SESSION['id']; ?>)" ><b>Eliminar Cuenta</b></a>
               </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <b>Actualizar Datos</b>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li>Nombre de Usuario:</li>
                    <?php echo $_SESSION['nombre_usuario'];?><br><br>
                    <li>Nombre y Apellidos: </li>
                    <?php echo $_SESSION['nombre_apellidos'];?><br><br>
                    <li>Correo:</li>
                    <?php echo $_SESSION['email'];?><br><br>
                    <a href="UsersController.php?action=actualizarusuario">               
                    <button class='btn btn-danger' style="text-align: center">Actualizar</button></a>
                    
                    
                    
                   
                    
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
   
    

      <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>


    <div class="row">

           
        <div class="col-md-4">
            <img src="../Public/Img/logopr.png" id="logo">
        </div>
    </div>
    

    <h1>¿Qué deseas hacer?</h1><br>

    
        <div class="row">

           
                
            
            <div class="col-md-4">

            </div>
            <button class="btn btn-danger col-md-4" onclick="Registro()">Registrar ingreso de vehículo</button>

        </div><br>

        <div class="row">
            <div class="col-md-4">

            </div>
            <button class="btn btn-danger col-md-4" onclick="msalida()">Registrar salida de vehículo</button>
        
        </div><br>

        <div class="row">
            <div class="col-md-4"></div>
            <button class="btn btn-danger col-md-4" onclick="bd()">Historial de ingreso</button>
        </div>
    </div>

    <div id="basededatos">
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <h1>Historial:</h1>
        </div>

        <!-- border border-5 border border-danger mb-5 -->
        <div class="container text-center" id="dates">
            <div class="form" id="input_responsive">

                <h4>Seleccione la fecha del registro que quiere mostrar</h4><br>



                <div class="row">

                    <div class="">

                        <input type="date" class="form-control bg-dark  p-2 text-white border border-dark"><br>
                    </div>
                    <div>
                        <a href="../Views/pg8.php"><button class="btn btn-danger ">Confirmar</button></a><br><br>
                        <button class="btn btn-danger" onclick="obd()">Volver</button>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
    </div>
    

    
    <div id="ingreso">
    <div class="row">
        
         <div class="col-md-4"></div>
        <div class="col-md-4"><h1>Ingrese los siguientes datos para registrar un vehículo:</h1></div>

        <div class="container text-center">

            <div class="form" id="input_responsive">
                <div class="row">

                    <div class="col-md-4">
                    </div>

                    <div class="col-md-4">
                        <input type="text" placeholder="Nombre y apellido" class="form-control bg-dark  p-2 text-white border border-dark" name="Nombre_Apellidos"><br>
                    </div>
                </div>
                <div class="row">

                  <div class="col-md-4">
                  </div>

                  <div class="col-md-4">
                        <input type="number" placeholder="Identificación" class="form-control bg-dark  p-2 text-white border border-dark" name="Identificacion"><br>
                  </div>
                </div>

                <div class="row">
                 <div class="col-md-4">
                 </div>
                  <div class="col-md-4">
                        <input type="text" placeholder=" Matrícula" class="form-control bg-dark  p-2 text-white border border-dark" name="Matricula"><br>
                  </div>
                </div>
            </div>

            <div>
                <button  class="btn btn-danger " onclick="mostrarcentros()">Registrar Ingreso</button><br><br>
               <button  class="btn btn-danger" onclick="cancelarregistro1()">Volver</button>
            </div>
        </div>
          


<!-- date_default_timezone_set('America/Bogota');    
$DateAndTime2 = date('m-d-Y h:i:s a', time());

echo "$DateAndTime2"; -->

<!-- <input name="Fecha_ingreso"  type="date">
<input name="Fecha_salida"  type="date"> -->


        </div>
        
      </div>

        <div id="mostrarcenters">
        <div class="row">
          <div class="col-md-4"></div>
    
    
            <div class="col-md-4">
                <h1>¿En que centro desea ubicar el vehiculo? </h1>
                <div id="centros" class="container text-center">
                    <div class="form">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <button class="btn btn-danger col-md-4" onclick="mostrarctgi()" value="CTGI" name="Centro">CTGI</button>
                        </div><br>
    
    
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <button class="btn btn-danger col-md-4" onclick="mostrarcdhc()" value="CDHC" name="Centro">CDHC</button>
                        </div><br>
    
    
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <button class="btn btn-danger col-md-4" onclick="mostrarctdma()" value="CTDMA" name="Centro">CTDMA</button>
                        </div><br>

                        <div class="row">
                          <div class="col-md-4">
                          </div>
                          <button class="btn btn-danger col-md-4" onclick="cancelarregistro()">CANCELAR</button>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          </div>
        </div>
        <!-- <form action="UsersController.php" method="POST"> -->
          <div id="mctgi">
            <div id="fondo" class="container" ><br>
              <div id="estacion" class="row" >
                 <h3>Parqueadero CTGI</h3></div><br><br>
                 <div id="parkings" class="col-md-9">
                 <button class="btn btn-success parks" id="p1" onclick="p1()" name="Numero_Parqueadero" value="1" type="submit">1</button>
                 <button class="btn btn-success parks" id="p2" onclick="p2()">2</button>
                 <button class="btn btn-success parks" id="p3" onclick="p3()">3</button>
                 <button class="btn btn-success parks" id="p4" onclick="p4()">4</button><br>
             </div>
             <div id="parkings" class="col-md-9">
                 <button class="btn btn-success parks" id="p5" onclick="p5()">5</button>
                 <button class="btn btn-success parks" id="p6" onclick="p6()">6</button>
                 <button class="btn btn-success parks" id="p7" onclick="p7()">7</button>
                 <button class="btn btn-success parks" id="p8" onclick="p8()">8</button>
             </div>
             <div id="parkings" class="col-md-8">
                 <button class="btn btn-success parks" id="p9" onclick="p9()">9</button>
                 <button class="btn btn-success parks" id="p10" onclick="p10()">10</button>
                 <button class="btn btn-success parks" id="p11" onclick="p11()">11</button>
                 <button class="btn btn-success parks" id="p12" onclick="p12()">12</button>
             </div>
                     
                 </div>
          </div>

          <div id="mcdhc">
          <div id="fondo" class="container"><br>

            <div id="estacion1" class="row">
                <h3>Parqueadero CDHC</h3>
            </div><br><br>
            <div id="parkings" class="col-md-9">
                <button class="btn btn-success parks" id="p13" onclick="p13()">13</button>
                <button class="btn btn-success parks" id="p14" onclick="p14()">14</button>
                <button class="btn btn-success parks" id="p15" onclick="p15()">15</button>
                <button class="btn btn-success parks" id="p16" onclick="p16()">16</button><br>
            </div>
            <div id="parkings" class="col-md-9">
                <button class="btn btn-success parks" id="p17" onclick="p17()">17</button>
                <button class="btn btn-success parks" id="p18" onclick="p18()">18</button>
                <button class="btn btn-success parks" id="p19" onclick="p19()">19</button>
                <button class="btn btn-success parks" id="p20" onclick="p20()">20</button>
            </div>
            <div id="parkings" class="col-md-8">
                <button class="btn btn-success parks" id="p21" onclick="p21()">21</button>
                <button class="btn btn-success parks" id="p22" onclick="p22()">22</button>
                <button class="btn btn-success parks" id="p23" onclick="p23()">23</button>
                <button class="btn btn-success parks" id="p24" onclick="p24()">24</button>
            </div>
    
    
          </div>
        </div>

        <div id="mctdma">
          <div id="fondo" class="container"><br>

            <div id="estacion2" class="row">
                <h3>Parqueadero CTDMA</h3>
            </div><br><br>
            <div id="parkings" class="col-md-9">
                <button class="btn btn-success parks" id="p25" onclick="p25()">25</button>
                <button class="btn btn-success parks" id="p26" onclick="p26()">26</button>
                <button class="btn btn-success parks" id="p27" onclick="p27()">27</button>
                <button class="btn btn-success parks" id="p28" onclick="p28()">28</button><br>
            </div>
            <div id="parkings" class="col-md-9">
                <button class="btn btn-success parks" id="p29" onclick="p29()">29</button>
                <button class="btn btn-success parks" id="p30" onclick="p30()">30</button>
                <button class="btn btn-success parks" id="p31" onclick="p31()">31</button>
                <button class="btn btn-success parks" id="p32" onclick="p32()">32</button>
            </div>
            <div id="parkings" class="col-md-8">
                <button class="btn btn-success parks" id="p33" onclick="p33()">33</button>
                <button class="btn btn-success parks" id="p34" onclick="p34()">34</button>
                <button class="btn btn-success parks" id="p35" onclick="p35()">35</button>
                <button class="btn btn-success parks" id="p36" onclick="p36()">36</button>
            </div>
    
    
        </div>
    

        </div>
        </form>


        <script src="../Public/JS/sweetalert.min.js"></script>

        <script>

          function eliminar(id)
       {
          swal({
          title: "¿Estás seguro?",
          text: "Una vez eliminado no se podrá recuperar la cuenta",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("La cuenta se eliminó con éxito", {
              icon: "success",
            });
         
            location.href = '../Views/pg16.php?id=' + id;


          } else {
            swal("La cuenta no fue eliminada");
          }
        });
            }
        </script>






</body>

</html>