<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Views/Estilos/empleados.css">
    <title>Empleados registrados</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 sidebar">
        <div class="logo">
          <img class="image" src="/Views/imagenes/logo3.png" alt="racing sports motors">
      </div><br>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../Administrador/index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/usuarios.html">Usuarios registrados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/empleados.html">Empleados registrados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/historial.html">Historial de ventas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/inventario.html">Inventario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/productos.html">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/Servicios.html">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/envios.html">Solicitud de envios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Administrador/pedidos.html">Pedidos</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- contenedor de  los iconos de usuarios y cerrar sesion -->
     <div class="nav">
        <div class="row">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg> 
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">cerrar sesión</a></li>
            </ul>
          </li>
        </div>
     </div>


      <!-- Botón que activará el modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Agregar Empleado
  </button> -->
  
  <!-- Modal -->
  <form action="../app/empleados.php" method="post">
  <div class="modal fade grid" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Encabezado del modal -->
        <div class="modal-header">
          <h4 class="modal-title">Crear empleado</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Cuerpo del modal -->
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="nombre">Nombres:</label>
              <input type="text" class="form-control" id="Nombres" placeholder="Ingrese el nombre">
            </div>
            <div class="form-group">
              <label for="apellido">Apellidos:</label>
              <input type="text" class="form-control" id="Apellidos" placeholder="Ingrese el apellido">
            </div>
            <div class="form-group">
              <label for="edad">Edad:</label>
              <input type="number" class="form-control" id="Edad" placeholder="Ingrese la edad">
            </div>
            <div class="form-group">
              <label for="Fecha_Nacimiento">Fecha de nacimiento:</label>
              <input type="date" class="form-control" id="Fecha_Nacimiento" placeholder="Ingrese fecha de nacimiento">
            </div>
            <div class="form-group">
              <label for="Direccion">Direccion:</label>
              <input type="text" class="form-control" id="Direccion" placeholder="Ingrese su direccion">
            </div>
            <div class="form-group">
              <label for="TipoDocumento">Tipo de documento:</label><br>
            <select id="Tipo_Documento">
              <option value="seleccione">-Seleccione-</option>
              <option value="C.C">Cedula</option>
              <option value="T.I">Tarjeta de identidad</option>
              <option value="pst">Pasaporte</option>
            </select>  
            </div>
            <div class="form-group">
              <label for="NumeroDocumento">Numero de documento:</label>
              <input type="number" class="form-control" id="Numero_Documento" placeholder="Ingrese el numero de documento">
            </div>
            <div class="form-group">
              <label for="Telefono">Telefono o Celular:</label>
              <input type="number" class="form-control" id="Telefono" placeholder="Ingrese el numero de telefono/celular">
            </div>
            <div class="form-group">
              <label for="Contrato">Tipo de contrato:</label><br>
              <select id="Tipo_Contrato">
              <option value="seleccione">-Seleccione-</option>
              <option value="Labor">por obra o labor</option>
              <option value=" término fijo"> término fijo</option>
              <option value="término indefinido">término indefinido</option>
              <option value="aprendizaje">aprendizaje</option>
              <option value="temporal, ocasional o accidenta">temporal</option>
              <option value="">----------</option>
            </select>  
            </div>
            <div class="form-group">
              <label for="Sueldo">Sueldo:</label>
              <input type="number" class="form-control" id="Sueldo" placeholder="Ingrese el Sueldo">
            </div>
            <div class="form-group">
              <label for="Cargo">Cargo:</label>
              <input type="text" class="form-control" id="Cargo" placeholder="Ingrese el Cargo">
            </div>
            <div class="form-group">
              <label for="Password">Contraseña:</label>
              <input type="password" name="password" id="password" placeholder="Ingrese una contraseña">
            </div>
          </form>
        </div>
        <!-- Pie del modal -->
        <div class="modal-footer">
          <button type="button" class="btn Cerrar" data-dismiss="modal">Cerrar</button>
          <a onclick="Guardar()" class=" CrearEmpleado">Guardar</a>
        </div>
      </div>
    </div>
  </div>
</form>
  <!-- tabla de empleados-->
  <div class="container mt-4">   
    <h2>Empleados registrados</h2> 
    <!-- Filtro -->
    <div class="form-group filtro">
      <input type="text" class="form-control" id="filterInput" placeholder="Buscar">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Crear nuevo empleado
      </button>
    </div>
    
    <!-- Tabla para mostrar datos -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>Salario</th>
        </tr>
      </thead>
      <tbody>
        <!-- Datos de ejemplo -->
        <tr>
          <td>Empleado 1</td>
          <td>Desarrollador</td>
          <td>$2500</td>
        </tr>
        <tr>
          <td>Empleado 2</td>
          <td>Diseñador</td>
          <td>$2200</td>
        </tr>
        <tr>
          <td>Empleado 3</td>
          <td>Contador</td>
          <td>$2800</td>
        </tr>
        <!-- Agrega más filas de datos aquí -->
      </tbody>
    </table>
  </div>

  <script>
    // Evento para filtrar la tabla según el texto ingresado en el input
document.querySelector("#filterInput").addEventListener("keyup", function () {
    const filterValue = this.value.toLowerCase();
    const rows = document.querySelectorAll("table tbody tr");
  
    rows.forEach((row) => {
      const name = row.querySelector("td:nth-child(1)").textContent.toLowerCase();
      const position = row.querySelector("td:nth-child(2)").textContent.toLowerCase();
      const salary = row.querySelector("td:nth-child(3)").textContent.toLowerCase();
  
      if (
        name.includes(filterValue) ||
        position.includes(filterValue) ||
        salary.includes(filterValue)
      ) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  });
  
  </script>



  
  <!-- Enlace a los scripts de Bootstrap (jQuery y Popper.js) -->
 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>