<?php
/*
Elisi Hotel Management System – Proprietary License
Copyright (c) 2025 XTRAGES

Licensed for personal use, educational purposes, and portfolio demonstration only.
Commercial use, distribution, reproduction, modification, or resale without explicit
written permission from the author is strictly prohibited.

Provided "AS IS", without warranty of any kind.
Contact: aldinzendeli33@gmail.com
*/

    include_once("config.php");

    // ============================================================================
    // STAFF EDIT DATA FETCHING LOGIC REMOVED FOR INTELLECTUAL PROPERTY PROTECTION
    // ============================================================================
    // The staff data fetching for editing has been intentionally removed to protect
    // the intellectual property of this project.
    // ============================================================================

    $id = $_GET['id'];

    // TODO: Implement staff data fetching for editing logic here
    $staff_data = []; // Placeholder - actual data fetching removed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar bg-dark navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['username']; ?></a>
            <a href="logout.php" class="btn btn-danger justify-content-end d-flex">
                Logout  <i class="fa-solid fa-right-from-bracket ms-2 d-flex align-items-center"></i>
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <?php include_once("sidebar.php"); ?>

            <div class="col-10">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <h2 class="mt-5">Edit Staff</h2>
                            <form action="updateStaff.php" method="POST">
                                <input type="text" name="id" class="form-control mb-3"
                                value="<?php echo $staff_data['id']; ?>" readonly>

                                <input type="text" name="name" class="form-control mb-3"
                                value="<?php echo $staff_data['name']; ?>" placeholder="Name">

                                <input type="text" name="job" class="form-control mb-3"
                                value="<?php echo $staff_data['job']; ?>" placeholder="Job">

                                <input type="text" name="image" class="form-control mb-3"
                                value="<?php echo $staff_data['image']; ?>" placeholder="Image">

                                <button type="submit" name="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>