<div class="card m-2 border-0 element-hover" style="width: 18rem; z-index: 1;">
  <img src="<?= $producto->getImgUrl() ?>" class="card-img-top my-2" alt="...">

  <div class="card-body">
    <h5><?= $producto->getNombre() ?></h5>
    <span>Precio: <?= $producto->getPrecio() ?></span>
    <br>
    <span>Stock: <?= $producto->getStock() ?></span>
    <p class="card-text"><?= $producto->getDescripcion() ?></p>
  </div>

  <div class="btn-group col-6 m-3">
    <a href="edit.php?id=<?= $producto->getIdProducto() ?>" class="btn btn-primary">Editar</a>
    <a href="delete.php?id=<?= $producto->getIdProducto() ?>" class="btn btn-danger">Eliminar</a>
  </div>
</div>