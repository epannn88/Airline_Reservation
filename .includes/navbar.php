<?php
require "config.php";

$_SESSION["id"] = 1;
$_sessionId = $_SESSION["id"];
$img = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $_sessionId"));
?>

<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl
navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>
  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
          <?php
            $id = $img["id"];
            $name = $img["name"];
            $image = $img["image"];
          ?>
          <img src=<?php echo $image; ?> width= 125 height= 125  class="w-px-40 h-auto rounded-circle"/>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="#">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                  <img src=<?php echo $image; ?> width= 125 height= 125  class="w-px-40 h-auto rounded-circle"/>
                  </div>
                </div>
                <!-- nama -->
                <div class="flex-grow-1">
                  <span class="fw-semibold d-block"><?php echo $nama; ?></span>
                  <small class="text-muted"><?php echo $role; ?></small>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="auth/logout.php">
              <i class="bx bx-power-off me-2"></i>
              <span class="align-middle">Log Out</span>
            </a>
          </li>
        </ul>
      </li>
      <!--/ User -->
    </ul>
  </div>
</nav>
<!-- / Navbar -->