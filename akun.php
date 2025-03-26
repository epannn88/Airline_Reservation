<?php
include (".includes/header.php");
$title = "Akun";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

require "config.php";

$_SESSION["id"] = 1;
$_sessionId = $_SESSION["id"];
$img = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $_sessionId"));
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
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select">
                              <option value="">Select</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="English">English</option>
                              <option value="Malaysia">Malaysia</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Language</label>
                            <select id="language" class="select2 form-select">
                              <option value="">Select Language</option>
                              <option value="en">English</option>
                              <option value="de">Indonesia</option>
                              <option value="pt">Malaysia</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="currency" class="form-label">Currency</label>
                            <select id="currency" class="select2 form-select">
                              <option value="">Select Currency</option>
                              <option value="idr">IDR</option>
                              <option value="usd">USD</option>
                              <option value="myr">MYR</option>
                            </select>
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