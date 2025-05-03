<?php
// include header agar header dapat ditampilkan
include (".includes/header.php");
$title = "Akun"; // judul halaman
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php'; // untuk menampilkan notifikasi
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
// Membuat "kode rahasia" untuk keamanan (seperti kunci anti-pencurian)
require "config.php";
// untuk mendapatkan koneksi ke database

$_SESSION["id"] = 1;
$_sessionId = $_SESSION["id"];
$img = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $_sessionId"));
// Ambil data pengguna dari database (foto, nama, dll.) berdasarkan ID-nya.
?>

<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
            </li>
        </ul>
    <div class="card mb-4">
        <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
            <form class="form" id="form" action="akun_process.php" enctype="multipart/form-data" method="post" >
            <div class="upload">
            <?php
            $id = $img["id"];
            $name = $img["name"];
            $image = $img["image"];
            ?>
            <img src=<?php echo $image; ?> width= 125 height= 125 >
            <!-- menampilkan foto profil anda saat ini -->
            <div class="round">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <input type="hidden" name="name" value="<?php echo $name; ?>">
              <input type="file" name="image" id="image" accept=".jpg, jpeg, .png">
              <i class = "fa fa-camera" style = "color: #ffff"></i>
            </div> 
                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
            </div>
            <button type="submit" name="edit" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Edit</span>
            </button>
            </form>
            
            
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              autofocus
                              value="<?php echo $nama; ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Role</label>
                            <input class="form-control" type="text" name="role" id="role" value="<?php echo $role; ?>" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              placeholder="john@example.com"
                              value="<?php echo $email; ?>"
                            />
                        </div>
                        </div>
                        <div class="mt-2 mb-3">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    

<?php 
include (".includes/footer.php");
?>