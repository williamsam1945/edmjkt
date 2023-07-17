<style>
.dropdown-menu li {
  position: relative;
}
.dropdown-menu .dropdown-submenu {
  display: none;
  position: absolute;
  left: 100%;
  top: -7px;
}
.dropdown-menu .dropdown-submenu-left {
  right: 100%;
  left: auto;
}
.dropdown-menu > li:hover > .dropdown-submenu {
  display: block;
}
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FIN +</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pendapatan
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#">
                Penjualan &raquo;
              </a>
              <ul class="dropdown-menu dropdown-submenu">
                <li>
                  <a class="dropdown-item" href="/sales-register-invoice">Register Invoice Penjualan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/settle-sales-invoice">Settle Invoice Penjualan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Edit Invoice Penjualan</a>
                </li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="#">Retur Penjualan</a></li>
            <li>
              <a class="dropdown-item" href="#">
                Inquiry Penjualan &raquo;
              </a>
              <ul class="dropdown-menu dropdown-submenu">
                <li>
                  <a class="dropdown-item" href="#">Inquiry Penjualan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Inquiry Settle Penjualan</a>
                </li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="#">Retur Penjualan</a></li>
            <li>
              <a class="dropdown-item" href="#">
                Report Penjualan &raquo;
              </a>
              <ul class="dropdown-menu dropdown-submenu">
                <li>
                  <a class="dropdown-item" href="#">Report Piutang</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Report Penjualan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Report History Invoice Penjualan</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pengeluaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Standing Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>