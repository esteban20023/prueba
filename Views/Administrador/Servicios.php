<!DOCTYPE html>
<html>

<head>
    <title>Tabla con opción de editar y modal</title>
    <link rel="stylesheet" href="/Views/Estilos/Servicios.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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




    <div class="container mt-5">
        <h2>Tabla de datos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>
                        <button class="btn btn-primary edit-btn" data-toggle="modal"
                            data-target="#editModal">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>
                        <button class="btn btn-primary edit-btn" data-toggle="modal"
                            data-target="#editModal">Editar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal para editar -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar los campos de edición -->
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>