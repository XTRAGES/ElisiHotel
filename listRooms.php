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
    // ROOM DATA FETCHING LOGIC REMOVED FOR INTELLECTUAL PROPERTY PROTECTION
    // ============================================================================
    // The room data fetching and admin authentication logic has been intentionally
    // removed to protect the intellectual property of this project.
    // ============================================================================

    // TODO: Implement admin authentication and room data fetching logic here
    $rooms_data = []; // Placeholder - actual data fetching removed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
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
                    <a href="rooms.php" class="btn btn-danger">+ Add Room</a>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-striped border">
                                <thead>
                                    <tr class="bg-dark">
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Bed</th>
                                        <th>Bath</th>
                                        <th>WiFi</th>
                                        <th>image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($rooms_data as $room_data){ ?>
                                        <tr>
                                            <td><?php echo $room_data['name']; ?></td>
                                            <td><?php echo $room_data['description']; ?></td>
                                            <td><?php echo $room_data['price']; ?></td>
                                            <td><?php echo $room_data['bed']; ?></td>
                                            <td><?php echo $room_data['bath']; ?></td>
                                            <td><?php echo $room_data['wifi']; ?></td>
                                            <td><?php echo $room_data['image']; ?></td>
                                            <td>
                                                <a href="editRoom.php?id=<?php echo $room_data['id']; ?>" class="btn btn-success">Edit</a> | 
                                                <a href="deleteRoom.php?id=<?php echo $room_data['id']; ?>" class="btn btn-danger">Delete</a>
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