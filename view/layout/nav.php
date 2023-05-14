
<nav class="navbar bg-warning" >
  <div class="container-lg py-auto d-flex justify-content-between" style="align-content: center;">
    <a class="navbar-brand" href="/view/index.php ">
      <img style="width: auto;" src="/view/img/Amazon_logo.svg.webp" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    </a>
    <div class="">
      <form class="d-flex" method="POST" action="/view/index.php">
        <input class="form-control border-0 p-1 px-2 rounded search" style="width: 230px;" name="search" id="search" type="search" placeholder="Buscar" aria-label="Search">
        <!-- <button class="btn btn-outline-light" type="submit">Buscar</button> -->
        <?php include('search-down.php'); ?>
      </form>
    </div>
  </div>
</nav>
