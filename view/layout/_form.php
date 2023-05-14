<div class="form-group mb-3">
  <label for="nombre">Nombre:</label>
  <input class="form-control border-0 shadow-sm" 
    type="text" name="nombre" 
    required maxlength="80"
    value="<?= isset($Nombre) ? $Nombre : '' ?>"
  >
</div>

<div class="form-group mb-3">
  <label for="descripcion">Descripcion:</label>
  <input class="form-control border-0 shadow-sm" 
    type="text" name="descripcion" 
    required maxlength="250"
    value="<?= isset($Descripcion) ? $Descripcion : '' ?>"
  >
</div>

<div class="form-group mb-3">
  <label for="stock">Stock:</label>
  <input class="form-control border-0 shadow-sm" 
    type="number" name="stock" 
    required
    value="<?= isset($Stock) ? $Stock : '' ?>"
  >
</div>

<div class="form-group mb-3">
  <label for="precio">Precio:</label>
  <input class="form-control border-0 shadow-sm" 
    type="number" step="0.01" name="precio" 
    required
    value="<?= $Precio ? $Precio : '' ?>"
  >
</div>

<div class="form-group mb-3">
  <label for="imgUrl">Imagen(URL):</label>
  <input class="form-control border-0 shadow-sm" 
    type="text" name="imgUrl" 
    required maxlength="250"
    value="<?= isset($ImgUrl) ? $ImgUrl : '' ?>"
  >
</div>
      