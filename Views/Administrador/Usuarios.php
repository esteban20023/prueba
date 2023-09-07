<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/Views/Estilos/usuarios.css">
  <title>usuarios</title>
</head>

  <!-- creacion de los menus originales -->
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

      <!-- creacion del icono del usuario y de cerrar sesión -->
      <!-- <div class="user">
  <svg xmlns="http://www.w3.org/2000/svg" class="usuario" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="salir" width="50" height="50" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
  </svg>
</div> -->
    </div>
  </div>


  <!-- creacion del titulo -->
  <div class="title">
    <h1>USUARIOS REGISTRADOS</h1>
  </div>
  <!-- creacion de los contenidos del dashboard -->
  <div class="content">
    <div class="search-box filtro">
      <input type="text" id="search-input" class="form-control" placeholder="Buscar nombres">
    </div>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Correo</th>
          <th scope="col">Dirección</th>
          <th scope="col">Ciudad</th>
          <th scope="col">Telefono</th>
          <th scope="col">T.Documento</th>
          <th scope="col">N.Documento</th>
          <th scope="col">Genero</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>
      <tbody id="table-body">
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>
            <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">Editar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>
            <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">Editar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>
            <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">Editar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>
            <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">Editar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>esteban</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>
            <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">Editar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>david</td>
          <td>esteban</td>
          <td>esteban</td>
          <td>
            <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">Editar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- creacion de los modales para poder editar la tabla de registros -->

   <!-- Modal para editar -->
   <div class="modal fade grid" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
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
                  <label for="nombre">Nombres:</label>
                  <input type="text" class="form-control" id="Nombres" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                  <label for="apellido">Apellidos:</label>
                  <input type="text" class="form-control" id="Apellidos" placeholder="Ingrese el apellido">
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
                  <label for="Genero">Genero:</label>
                  <input type="text" class="form-control" id="Genero" placeholder="Ingrese el Cargo">
                </div>
                <div class="form-group">
                  <label for="Password">Contraseña:</label>
                  <input type="password" name="password" id="password" placeholder="Ingrese una contraseña">
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

  <!-- SCRIPT DE EL SISTEMA DE BUSQUEDA -->
  <script>
    const searchInput = document.getElementById('search-input');
    const tableBody = document.getElementById('table-body');
    const rows = tableBody.getElementsByTagName('tr');

    searchInput.addEventListener('keyup', function () {
      const searchTerm = searchInput.value.toLowerCase();

      for (let i = 0; i < rows.length; i++) {
        const name = rows[i].getElementsByTagName('td')[0].innerText.toLowerCase();
        const shouldShow = name.includes(searchTerm);
        rows[i].style.display = shouldShow ? '' : 'none';
      }
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>