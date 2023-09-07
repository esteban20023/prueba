<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almacenamiento de Pedidos</title>
  <!-- Agregar los enlaces a los archivos de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Views/Estilos/pedidos.css">
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


    <!-- almacenamiento de pedidos -->
    <div class="container-pedidos mt-4">
      <h2>Tabla de Pedidos</h2>
      <input type="text" id="searchInput" class="form-control mb-3" placeholder="Buscar por cliente...">
      <table class="table">
          <thead>
              <tr>
                  <th>Número de Pedido</th>
                  <th>Fecha</th>
                  <th>Cliente</th>
                  <th>Dirección de Entrega</th>
                  <th>Total del Pedido</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1001</td>
                  <td>2023-07-26</td>
                  <td>Juan Pérez</td>
                  <td>Calle Principal 123, Ciudad</td>
                  <td>$150.00</td>
              </tr>
              <tr>
                  <td>1002</td>
                  <td>2023-07-25</td>
                  <td>María Gómez</td>
                  <td>Avenida Central 456, Ciudad</td>
                  <td>$80.50</td>
              </tr>
              <!-- Agregar más filas aquí para mostrar más pedidos -->
          </tbody>
      </table>
  </div>

  <script>
      const searchInput = document.getElementById('searchInput');
      searchInput.addEventListener('keyup', filterTable);

      function filterTable() {
          const filterValue = searchInput.value.toUpperCase();
          const table = document.querySelector('table');
          const rows = table.getElementsByTagName('tr');

          for (let i = 1; i < rows.length; i++) {
              const cells = rows[i].getElementsByTagName('td')[2]; // Índice 2 corresponde a la columna "Cliente"
              if (cells) {
                  const cellText = cells.textContent || cells.innerText;
                  if (cellText.toUpperCase().indexOf(filterValue) > -1) {
                      rows[i].style.display = '';
                  } else {
                      rows[i].style.display = 'none';
                  }
              }
          }
      }
  </script>
    
  <!-- Agregar los enlaces a los archivos de Bootstrap y jQuery (necesario para algunas funcionalidades de Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>



  <!-- <script src="filter.js">
    // Obtener referencias a los elementos del formulario
const filterForm = document.getElementById('filterForm');
const clientNameInput = document.getElementById('clientName');
const startDateInput = document.getElementById('startDate');
const endDateInput = document.getElementById('endDate');

// Escuchar el evento 'submit' del formulario
filterForm.addEventListener('submit', function (event) {
  event.preventDefault(); // Evitar que el formulario se envíe

  // Obtener los valores de los campos de filtro
  const clientName = clientNameInput.value.trim();
  const startDate = startDateInput.value;
  const endDate = endDateInput.value;

  // Filtrar los pedidos según los criterios seleccionados
  const filteredOrders = filterOrders(clientName, startDate, endDate);

  // Actualizar la tabla con los pedidos filtrados
  updateTable(filteredOrders);
});

// Ejemplo de datos de pedidos (pueden provenir de una base de datos o una API)
const orders = [
  { id: 1, date: '2023-07-15', client: 'Cliente 1', total: 100 },
  { id: 2, date: '2023-07-16', client: 'Cliente 2', total: 150 },
  { id: 3, date: '2023-07-17', client: 'Cliente 1', total: 200 },
  // Agrega más datos de pedidos aquí
];

// Función para filtrar los pedidos según los criterios seleccionados
function filterOrders(clientName, startDate, endDate) {
  return orders.filter((order) => {
    // Filtrar por nombre del cliente (ignorar mayúsculas y minúsculas)
    const clientMatches = order.client.toLowerCase().includes(clientName.toLowerCase());
    // Filtrar por rango de fechas
    const dateMatches = (!startDate || order.date >= startDate) && (!endDate || order.date <= endDate);
    return clientMatches && dateMatches;
  });
}

// Función para actualizar la tabla con los pedidos filtrados
function updateTable(filteredOrders) {
  const tableBody = document.getElementById('filteredOrders');
  // Limpiar la tabla antes de actualizarla
  tableBody.innerHTML = '';

  filteredOrders.forEach((order) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${order.id}</td>
      <td>${order.date}</td>
      <td>${order.client}</td>
      <td>${order.total}</td>
    `;
    tableBody.appendChild(row);
  });
}

  </script>