<link rel="stylesheet" href="components/navbar/navbar.css">

<nav class="navbar bg-body-tertiary cor">
  <div class="container cor">
    <a class="navbar-brand" href="#">
      <img src="assets/imgs/Untitled-2.fw.png" alt="Bootstrap" width="129" height="95">
    </a>

    <form class="d-flex mx-auto" role="search">

      <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="write">
        <div class="bg-dark p-4">
          <h5 class="text-body-emphasis h4">Collapsed content</h5>
          <span class="text-body-secondary">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-write">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

  </div>
</nav>

<?php include 'components/navbar/menu.php'; ?>