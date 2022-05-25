<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/logos/logo pagina.png"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="assets/styles.css" />

    <title>MEDIByte</title>
  </head>
  <body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex p-0 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 p-0" href="index.html"><img src="assets/logos/MediByte2.png" alt="logo" width="170px"></a>

      <div class="links-navbar pt-3 pb-2">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse me-4" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link underline" aria-current="page" href="index.html">Inicio</a>
          <a class="nav-link underline" href="#nosotros">Nosotros</a>
          <a class="nav-link underline" href="#servicios">Servicios</a>
          <a class="nav-link underline me-3" href="#contacto">Contacto</a>
          <a class="nav-link navbar-btn" href="login.html" target="_blank">Iniciar Sesión</a>
        </div>
      </div>

    </div>
    </div>
  </nav>
<!-- Fin de NavBar -------------------------------------------------------------------------------> 

    <!-- Inicia Panel de Control ---------------------------------------------------------------------->

    <div class="container">
      <div class="row">
        <div class="col-12 mt-5 pt-5 text-center">
          <h2 class ="title-color">
            Agendamiento de Citas desde Casa
          </h2>
        </div>
      </div>
    </div>

    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="assets/images/servicioCitas/doctor1.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Dr. Yardanny Suarez</h5>
            <p class="card-text">
              Especialista en Medicina Interna, Subespecialista en Reumatología.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="assets/images/servicioCitas/doctor3.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Dr. Jeffer Gutierrez</h5>
            <p class="card-text">
              Especialista en Fisiatría Subespecialista en Rehabilitación del
              adulto.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="assets/images/servicioCitas/doctor2.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Dr. William Silva</h5>
            <p class="card-text">
              Especialista en Pediatría, Subespecialista en Neonatología.
            </p>
          </div>
        </div>
      </div>
      <!-- <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div> -->
    </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h2 class ="m-4 title-color">
        Ejemplo de Agendamiento Rápido
        <div class="m-3" id="liveAlertPlaceholder"></div>
      </h2>
    </div>
  </div>
</div>

<div class="container col-8">

  <table class="table table-bordered table-primary text-center">
    <!-- <table class="table table-hover"> -->

    <thead>
      <tr>
        <th colspan="3">Agenda Dr. Méndez</th>
      </tr>
    </thead>

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Miércoles 25/05: Hora</th>
        <th scope="col">Disponibilidad</th>
      </tr>
    </thead>

    <tbody>
      <tr class="table-warning">
        <th scope="row">1</th>
        <td>08:00 am</td>
        <td class="text-muted">Agendada</td>
      </tr>
      <tr class="table-info">
        <th scope="row">2</th>
        <td>08:30 am</td>
        <td class="text-muted"> <button type="button" class="btn btn-info" id="liveAlertBtn">Agendar</button> </td>
      </tr>
      <tr class="table-warning">
        <th scope="row">3</th>
        <!-- <td colspan="2">Larry the Bird</td> -->
        <td>09:00 am</td>
        <td class="text-muted">Agendada</td>
      </tr>
      <tr class="table-info">
        <th scope="row">4</th>
        <td>09:30 am</td>
        <td class="text-muted"><button type="button" class="btn btn-info" id="liveAlertBtn2">Agendar</button></td>
      </tr>
      <tr class="table-warning">
        <th scope="row">5</th>
        <td>10:00 am</td>
        <td class="text-muted"><button type="button" class="btn btn-info" id="liveAlertBtn3">Agendar</button></td>
      </tr>
      <tr class="table-info">
        <th scope="row">6</th>
        <td>10:30 am</td>
        <td class="text-muted">Agendada</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>

<button type="button" class="btn btn-info" id="botonPrueba" onclick="mostrarVariable()">Agendar</button>

<script>

function mostrarVariable(){
  alert("sadavariable1");
  
  $v1 = $_POST['variable1'];
alert(variable1);
}
</script>


    <!-- Termina Panel de Control --------------------------------------------------------------------->

<script>

var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')
var alertTrigger2 = document.getElementById('liveAlertBtn2')
var alertTrigger3 = document.getElementById('liveAlertBtn3')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger || alertTrigger2 || alertTrigger3 ) {
  alertTrigger.addEventListener('click', function () {
    alert('Tu cita, con los datos de tu perfil ha sido agendada', 'success')
  })
  alertTrigger2.addEventListener('click', function () {
    alert('Tu cita, con los datos de tu perfil ha sido agendada', 'success')
  })
  alertTrigger3.addEventListener('click', function () {
    alert('Tu cita, con los datos de tu perfil ha sido agendada', 'success')
  })
}

</script>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

<!-- Inicio de footer --------------------------------------------------------------------------->
<footer class="container-fluid d-flex bg-light border-top flex-wrap justify-content-between align-items-center">
  <div class="ms-5 me-5">
    <img src="assets/logos/MediByte2.png" alt="" width="200px" >
  </div>

  <div class= "ms-5 me-5 text-center">
   <span class="text-muted">&copy; 2022 Medibyte.com</span>
   <br>
  <span class="text-muted">Todos los derechos reservados</span>
  </div>

  <div class="m-2 me-5 d-flex">
    <a href="https://www.twitter.com" class="ms-3 me-3"><img src="assets/icons/twitter.png" alt="" width="30px"></a>
    <a href="https://www.instagram.com" class="ms-3 me-3"><img src="assets/icons/instagram.png" alt="" width="30px"></a>
    <a href="https://www.Facebook.com" class="ms-3 me-3"><img src="assets/icons/facebook.png" alt="" width="30px"></a>
    
  </div> 
</footer>
<!-- Inicio de footer ------------------------------------------------------------------------->

  </body>
</html>
