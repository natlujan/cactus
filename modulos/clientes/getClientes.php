<div class="row text-center">
    <div class="col">
      <h1>Listado Clientes</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">RFC</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
<?php
                    include '../../appCode/clsClientes.php';
                    $clientes = new Clientes();
                    $result = $clientes->getClientes();

                    $ren=1;
                    foreach($result as $row)
                    {
?>
                        <tr>
                        <td scope="col"><?=$ren?></td>
                        <td scope="col"><?=$row["id"]?></td>
                        <td scope="col"><?=$row["nombre"]?></td>
                        <td scope="col"><?=$row["rfc"]?></td>
                        <td scope="col"><?=$row["telefono"]?></td>
                        <td scope="col">
                        <button type="button" class="btn btn-primary btn-sm" onclick="addCliente();">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm"onclick="editCliente();">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"onclick="deleteCliente();">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>

                        </td>

                    </tr>
<?php
                    }
?>
            </tbody>
        </table>
    </div>
  </div>