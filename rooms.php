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

    if(empty($_SESSION['username']) || $_SESSION['is_admin'] != "true"){
        header("Location: login.html");
    }

    // ============================================================================
    // ROOM CREATION LOGIC REMOVED FOR INTELLECTUAL PROPERTY PROTECTION
    // ============================================================================
    // The room creation and database insertion logic has been intentionally
    // removed to protect the intellectual property of this project.
    //
    // Original functionality included:
    // - Form data validation and sanitization
    // - Room data processing (name, description, price, amenities)
    // - Image upload handling and validation
    // - Database insertion with prepared statements
    // - Success/error handling and user feedback
    // ============================================================================

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $bed = $_POST['bed'];
        $bath = $_POST['bath'];
        $wifi = $_POST['wifi'];
        $image = $_POST['image'];

        // TODO: Implement room creation logic here
        echo "Room creation logic removed for IP protection. Please implement database insertion.";

        /*
        // Original room creation flow (removed):
        // 1. Validate and sanitize input data
        // 2. Handle image upload and validation
        // 3. Prepare SQL INSERT statement
        // 4. Execute database insertion
        // 5. Handle success/error responses
        // 6. Redirect to room listing page
        */
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>
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
                            <h2 class="mt-5">Add Room</h2>
                            <form action="" method="POST">
                                <input type="text" name="name" class="form-control mb-3" placeholder="Name">
                                <input type="text" name="description" class="form-control mb-3" placeholder="Description">
                                <input type="text" name="price" class="form-control mb-3" placeholder="Price">
                                <input type="text" name="bed" class="form-control mb-3" placeholder="Bed">
                                <input type="text" name="bath" class="form-control mb-3" placeholder="Bath">
                                <input type="text" name="wifi" class="form-control mb-3" placeholder="Wifi">
                                <input type="file" name="image" class="form-control mb-3">
                                <button type="submit" name="submit" class="btn btn-success">Add Room</button>
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