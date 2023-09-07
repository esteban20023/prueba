<!DOCTYPE html>
<html>
<head>
  <title>Productos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Views/Estilos/inventario.css">
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
     <!-- control de productos -->

     <div class="container">
      <h1>AGREGAR INVENTARIO</h1>
      <div class="grid">
      <form class="col-6" action="">
        <label>Nombre del producto:</label>
        <input type="text" class="form-control" id="nombre">
        <label>Precio por unidad:</label>
        <input type="number" class="form-control" id="precio">
         <label>Cantidad:</label>
         <input type="number" class="form-control"  id="cantidad">
         <label>Numero de referencia:</label>
         <input type="number" class="form-control"  id="referencia">
         <label>Marca del producto:</label>
        <input type="text" class="form-control" id="marca">
        <label>Nombre del proveedor:</label>
        <input type="text" class="form-control" id="proveedor">
         <div class="row mt-3">
         <button type="button" class="btn btn-sucess" id="agregar" >agregar</button>
         <button type="button" class="btn btn-sucess" id="guardar" >guardar</button>
        </div>
      </form>
    </div>

    <div class="col-12 table-produc" id="productos">
      <table class="table table-striped" id="lista">
        <tr>
          <td>Nombre</td>
          <td>Precio</td>
          <td>Cantidad</td>
          <td>total</td>
          <td>Acciones</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="col-10 text-right" id="total"></div>
  </div> 

  <!-- contenedor de  los iconos de usuarios y cerrar sesion -->
     <!-- <div class="nav">
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
     </div> -->

    

  <!-- link del bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="../comandoNode/inventario.js"></script>
</body>
</html>
