<!DOCTYPE html>
<html>
<head>
  <title>Historial de Ventas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Views/Estilos/historial.css">
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
        <!-- cerrar sesion -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
          <path fill-rule="evenodd"
            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
        </svg> -->
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


      <!-- crear un submenu para los iconos -->

      <!--crear las tablas filtros para el historial de ventas-->
  <div class="container historial">
    <h2>Historial de Ventas</h2>
    
          <!--crear un boton de factura-->
          <div class="container">
            <button class="btn btn-primary generate-button" onclick="generarFactura()">Generar Factura</button>
          </div>
          <!-- cerrar boton de factura -->
    <div class="form-row mb-3">
      <div class="col-md-4">
        <input type="text" class="filter-input" placeholder="Filtrar por Producto" id="filter-producto">
      </div>
    </div>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>IDCliente</th>
          <th>ordCliente</th>
          <th>ordProducto</th>
          <th>ordServicio</th>
          <th>ordFechaCompra</th>
          <th>IDDestallesEnvio</th>
          <th>IDEnvio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Producto A</td>
          <td>123</td>
          <td>10</td>
          <td>12</td>
          <td>12</td>
          <td>2023-07-01</td>
          <td>12</td>
          <td>12</td>
        </tr>
        <tr>
          <td>Producto B</td>
          <td>20</td>
          <td>5</td>
          <td>12</td>
          <td>12</td>
          <td>2023-07-01</td>
          <td>12</td>
          <td>12</td>
        </tr>
        <tr>
          <td>Producto A</td>
          <td>20</td>
          <td>8</td>
          <td>12</td>
          <td>12</td>
          <td>2023-07-01</td>
          <td>12</td>
          <td>12</td>
        </tr>
        <tr>
          <td>Producto C</td>
          <td>20</td>
          <td>12</td>
          <td>12</td>
          <td>12</td>
          <td>2023-07-01</td>
          <td>12</td>
          <td>12</td>
        </tr>
        <tr>
            <td>Producto C</td>
            <td>20</td>
            <td>12</td>
            <td>12</td>
            <td>12</td>
            <td>2023-07-01</td>
            <td>12</td>
            <td>12</td>
          </tr>
          <tr>
            <td>Producto C</td>
            <td>20</td>
            <td>12</td>
            <td>12</td>
            <td>12</td>
            <td>2023-07-01</td>
            <td>12</td>
            <td>12</td>
          </tr>
          <tr>
            <td>Producto C</td>
            <td>20</td>
            <td>12</td>
            <td>12</td>
            <td>12</td>
            <td>2023-07-01</td>
            <td>12</td>
            <td>12</td>
          </tr>
      </tbody>
    </table>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      // Filtrar por producto
      $('#filter-producto').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('table tbody tr').filter(function() {
          $(this).toggle($(this).find('td:nth-child(1)').text().toLowerCase().indexOf(value) > -1);
        });
      });
      
      // Filtrar por fecha
      $('#filter-fecha').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('table tbody tr').filter(function() {
          $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1);
        });
      });
      
      // Filtrar por cantidad
      $('#filter-cantidad').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('table tbody tr').filter(function() {
          $(this).toggle($(this).find('td:nth-child(3)').text().toLowerCase().indexOf(value) > -1);
        });
      });
    });
  </script>
</body>
</html>