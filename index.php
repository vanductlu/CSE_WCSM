<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png" type = "image/x-icon">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <title>W3CSM</title>
</head>
<body>
    <div class="d-flex container-fluid p-0 bg-white bg-opacity-50">
        
        <div class="slidebar col-md-2 rounded-end-3 bg-white">
            <div class="logo d-flex " >
                <div class="mx-auto pt-4">
                    <img src="./img/brandlog1.png" alt="" class="logo_1">
                    <img src="./img/brandlogo2.png" alt="" class="logo_2">
                </div>
            </div>
            <div class="content_box px-4 pt-4">
                <div class="content my-4">
                    <i class="bi bi-person text-danger fs-5"></i>
                    <span class="m-2"> Users </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i> 
                </div>
                <div class="content my-4">
                    <i class="bi bi-person-check text-danger fs-5"></i>
                    <span class="m-2"> Roles </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i> 
                </div>
                <div class="content my-4">
                    <i class="bi bi-shield text-danger fs-5"></i>
                    <span class="m-2"> Permissions </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i> 
                </div>
                <div class="content my-4">
                    <i class="bi bi-gear text-danger fs-5"></i>
                    <span class="m-2"> Configuration </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i>
                </div>
                <hr>
                <div class="content my-4">
                    <i class="bi bi-newspaper text-danger fs-5"></i>
                    <span class="m-2"> Pages </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i>
                </div>
                <div class="content my-4">
                    <i class="bi bi-filter text-danger fs-5"></i>
                    <span class="m-2"> Blogs </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i>
                </div>
                <div class="content my-4">
                    <i class="bi bi-card-text text-danger fs-5"></i>
                    <span class="m-2"> Categories </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i>
                </div>
                <div class="content my-4">
                    <i class="bi bi-tag text-danger fs-5"></i>
                    <span class="m-2"> Tags </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i>
                </div>
                <div class="content my-4">
                    <i class="bi bi-menu-app text-danger fs-5"></i>
                    <span class="m-2"> Menus </span>
                    <i class="bi bi-caret-right-fill text-secondary"></i>
                </div>
            </div>
        </div>
        <div class="main col-md-9 mt-3 px-4 ">
            <div class="header d-flex pb-3 border-bottom border-light">
                <i class="bi bi-list fs-2 "></i>
                <p class="h2 fw-bold text-success ms-4 col-8">W3CSM</p>
                <form action="">
                    <div class="row">
                        <input placeholder="Search here..." class="search_box border-none rounded py-1 pe-1 ps-5">
                        <i class="search bi bi-search text-success "></i>
                    </div>
                </form>
            </div>

            <div class="filter bg-white rounded px-5 py-4 mt-5">
                <div class="d-flex">
                    <h5 class="text-success fw-bold">Filter</h5>
                    <i class="bi bi-arrow-up-circle-fill text-success fs-4"></i>
                </div>
                <form class="d-flex mt-3">
                    <input class="rounded-2 pe-5 ps-2 py-1 me-4" placeholder="Email">
                    <input class="rounded-2 pe-5 ps-2 py-1 me-4" placeholder="Mobile">
                    <select class="rounded-2 pe-5 ps-2 py-1 me-4">
                        <option value="">Select Group</option>
                        <option value="1">admin</option>
                        <option value="1">Customer</option>
                        <option value="1">Manager</option>
                    </select>
                    <button class="rounded-2 px-4 py-1 mb-0 border-success bg-success text-white text-center me-4 "><div class="d-flex align-items-center"><i class="bi bi-search text-white"></i><h5 class="mb-0 ps-1">Filter</h5></div></button>
                    <button class="rounded-2 px-4 py-1 border-success bg-white text-center border-3"><h5 class="mb-0">Clear</h5></button>
                </form>
            </div>
            <div class="user bg-white rounded  mt-3">
                <div class="user_header d-flex px-5 py-4 border-bottom border-black">
                    <h5 class="text-danger col-10">Users</h5>
                    <button class="rounded-2 px-1 py-1 border-danger bg-white text-center text-danger border-3 me-2" ><h6 class="mb-0">Delete</h6></button>
                    <button class="rounded-start-2 px-2 py-1 mb-0 border-danger bg-danger text-white text-center text-nowrap" onclick="showAddUserForm()"><h6 class="mb-0">ADD USER</h6></button>
                    <button class="rounded-end-2  border-danger bg-danger text-white text-center"><i class="bi bi-plus"></i></button>
                </div>
            </div>
            <form id="addUserForm" style="display: none;" method="post" action="form_add_user.php">
    <label for="fullname">Full Name:</label>
    <input type="text" name="fullname" id="fullname" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    <label for="group">Group:</label>
    <input type="text" name="group" id="group" required>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" id="mobile" required>

    <label for="dateofbirth">Date of Birth:</label>
    <input type="date" name="dateofbirth" id="dateofbirth" required>

    <button type="submit">Add User</button>
</form>
            <div class="user_content bg-white px-5 py-4">
                <table class="m-auto">
                    <tr>
                      <th><input type="checkbox" c></th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Group</th>
                      <th>Mobile</th>
                      <th> Date Of Birth</th>
                      <th> Status</th>
                      <th>Action</th>
                    </tr>
                    
        <?php if ($result->num_rows > 0) { ?>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
            <td><input type='checkbox'></td>
            <td><?= $row["fullname"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["gender"] ?></td>
            <td><p class='rounded-4 mb-0 text-white bg-primary px-2 py-1'><?= $row["group"] ?></p></td>
            <td><?=$row["mobile"]?></td>
            <td><?=$row["dateofbirth"]?></td>
            <td class='py-0'><i class='bi bi-dot h1 text-center text-secondary'></i></td>
            <td>
            <div class="row d-flex flex-direction-row">
  <form method="post" action="form_edit.php" class="d-inline">
    <input type="hidden" name="id" value="<?=$row["id"]?>">
    <button type="submit" name="edit" value="<?=$row["id"]?>" class="btn btn-success btn-sm me-1">
      <i class="bi bi-pencil-fill text-white"></i>
    </button>
  </form>
  <form method="post" action="" class="d-inline">
    <input type="hidden" name="id" value="<?=$row["id"]?>">
    <button type="submit" name="delete" class="btn btn-danger btn-sm">
      <i class="bi bi-trash-fill text-white"></i>
    </button>
  </form>
</div>
            </td>
            </tr>
       <?php } ?>
     <?php } else { ?>
        <tr><td colspan='9'>Không có dữ liệu.</td></tr>
   <?php } ?>
                    
                  </table>
            </div>
            <div class="user_footer bg-white pb-2 py-2 d-flex">
            <nav aria-label="Page navigation example">
        <ul class="pagination">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
            </div>
        </div>
    </div>
    <script>
  function showAddUserForm() {
    var addUserForm = document.getElementById("addUserForm");
    addUserForm.style.display = "block";
  }
</script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["insert"])) {
    }

    if (isset($_POST["delete"])) { 
    }

    if (isset($_POST["edit"])) {
        $idToEdit = $_POST["edit"]; 
    }
}
?>