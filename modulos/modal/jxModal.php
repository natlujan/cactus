<?php
    $valor = $_POST["valor"];
?>

<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cillian Murphy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="container">
                <div class="row">
                 <div class="col-12">
                    <img src="assets/img/<?=$valor?>" alt="" width="100%">
                 </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>