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
    // ADMIN DASHBOARD LOGIC REMOVED FOR INTELLECTUAL PROPERTY PROTECTION
    // ============================================================================
    // The admin authentication and data fetching logic has been intentionally
    // removed to protect the intellectual property of this project.
    //
    // Original functionality included:
    // - Session-based admin authentication and authorization
    // - User role verification and access control
    // - Database queries to fetch user data
    // - Admin dashboard data preparation and display
    // - Secure redirect handling for unauthorized access
    // ============================================================================

    // TODO: Implement admin authentication and data fetching logic here
    $users_data = []; // Placeholder - actual data fetching removed

    /*
    // Original admin dashboard flow (removed):
    // 1. Check if user is logged in and has admin privileges
    // 2. Redirect unauthorized users to login page
    // 3. Fetch user data from database
    // 4. Prepare data for dashboard display
    // 5. Handle admin-specific functionality
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <a href="addUsers.php" class="btn btn-danger">+ Add User</a>
                    <div class="row mt-3">
                    <div class="col">
                            <table class="table table-striped border">
                                <thead>
                                    <tr class="bg-dark">
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users_data as $user_data){ ?>
                                        <tr>
                                            <td><?php echo $user_data['emri']; ?></td>
                                            <td><?php echo $user_data['username']; ?></td>
                                            <td><?php echo $user_data['email']; ?></td>
                                            <td>
                                                <a href="editUser.php?id=<?php echo $user_data['id']; ?>" class="btn btn-success">Edit</a> | 
                                                <a href="deleteUsers.php?id=<?php echo $user_data['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>