<!DOCTYPE html>
<html>
  <head>
    <title>Balance General</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style3.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    />
    <style>
      /* Estilos personalizados */
      .balance-header {
        border-bottom: 1px solid #ddd;
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
      }
      .total-amount {
        font-weight: 600;
      }
      .table td,
      .table th {
        vertical-align: middle;
      }
      .table td:first-child {
        font-weight: 600;
      }
      .table td:last-child {
        font-weight: 600;
        text-align: right;
      }
      .table .table {
        margin-bottom: 0;
      }
      .table-responsive {
        overflow-x: auto;
      }
      .text-danger {
        color: #f00;
      }

      .salir{

        text-decoration:none;
        color: black;
      }

    </style>
  </head>
  <body>

  <!--Botón para cerrar sesion-->
  <div class="fixed-bottom">
        <button class="btn btn-primary">

        <a href="index.php" class="salir">Cerrar sesión</a>
        </button>
      </div>


    <div class="container my-5">
      <div class="card">
        <div class="card-header balance-header">
          Balance General
        </div>
        <div class="card-body p-0 table-responsive">
          <table class="table table-striped table-bordered mb-0">
            <thead>
              <tr>
                <th>Cuenta</th>
                <th>Descripción</th>
                <th class="text-right">Monto</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="3" class="bg-light text-dark">
                  <strong>Activos</strong>
                </td>
              </tr>
              <tr>
                <td>Cuenta de Ahorro</td>
                <td>
                  Cuenta de ahorro a largo plazo
                </td>
                <td class="text-right">$10,000.00</td>
              </tr>
              <tr>
                <td>Cuenta Corriente</td>
                <td>
                  Cuenta corriente para pagos de facturas
                </td>
                <td class="text-right">$2,500.00</td>
              </tr>
              <tr>
                <td>Efectivo</td>
                <td>
                  Dinero en efectivo disponible
                </td>
                <td class="text-right">$500.00</td>
              </tr>
              <tr>
                <td colspan="3" class="bg-light text-dark">
                  <strong>Pasivos</strong>
                </td>
              </tr>
              <tr>
                <td>Préstamo Estudiantil</td>
                <td>
                  Préstamo estudiantil a largo plazo
                </td>
                <td class="text-right">($20,000.00)</td>
              </tr>
              <tr>
                <td>Tarjeta de Crédito</td>
                <td>
                  Tarjeta de crédito con saldo pendiente
                </td>
                <td class="text-right text-danger">($1,200.00)</td>
              </tr>
              <tr>
                <td colspan="2" class="bg-light text-dark">
                  <strong>Total Activos</strong>
                </td>
                <td class="text-right total-amount">$13,000.00</td>
              </tr>
              <tr>
                <td colspan="2" class="bg-light text-dark">
                  <strong>Total Pasivos</strong>
                </td>
                <td class="text-right total-amount">($21,200.00)</td>
              </tr>
              <tr>
                <td colspan="2" class="bg-light text-dark">
                  <strong>Patrimonio Neto</strong>
                </td>
                <td class="text-right total-amount">$-8,200.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper"
      integrity="sha384-j7V/vB1hcz+nrgJU5UC6U5H6h5E6lBY7nZbWfY+PvzJMJMmEi+jBaPfJ8x5ytlNO"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>


    



  </body>
  </html>    