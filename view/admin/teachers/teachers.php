<?php
include "../../../connect.php";

$query = "SELECT * FROM `teachers` ORDER BY `nom` ASC";
$result = mysqli_query($connect , $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<style>
    .admin{
        display:flex;
        gap:1rem;
    }
    .name p{
        font-weight:bold;
        color:grey;
    }
</style>
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Happy-marionnette</span>
                    </a>
                </li>

                <li>
                    <a href="../admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../students/students.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Students</span>
                    </a>
                </li>

                <li class="active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Teachers</span>
                    </a>
                </li>

                <li>
                    <a href="../booking/booking.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>

                <li>
                    <a href="../roles/roles.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Roles</span>
                    </a>
                </li>

                <li>
                    <a href="../notifications/notifications.php">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="title">Notifications</span>
                    </a>
                </li>

                <li>
                    <a href="../settings/settings.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="../../../view/auth/login.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="admin">
                    <div class="user">
                        <img src="../../../assets/images/me.jpg" alt="">
                    </div>
                    <div class="name">
                        <p>Nabil CHABAB</p>
                        <p>Admin</p>
                    </div>
                </div>
            </div>

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">800</div>
                        <div class="cardName">Total Students</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">42</div>
                        <div class="cardName">Total Teachers</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Teachers</h2>
                        <a href="add_teachers.php" class="btn">Add New</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>CIN</td>
                                <td>Profile</td>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Departement</td>
                                <td>Classe</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <?php 
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <td><?php echo $row['cin']?></td>
                                <td><img src="../../../assets/images/<?php echo $row['image']?>" style="max-width:40px;border-radius:50%;"></td>
                                <td><?php echo $row['nom']?></td>
                                <td><?php echo $row['prenom']?></td>
                                <td><?php echo $row['departement']?></td>
                                <td><?php echo $row['classe']?></td>
                                <td><a href="edit_teachers.php?id=<?= $row['id']?>" style="color:black;font-size:20px;margin-right:20px"><ion-icon name="pencil-outline"></ion-icon></a><a href="delete_teachers.php?id=<?= $row['id']?>" style="color:red;font-size:20px;"><ion-icon name="close-circle-outline"></ion-icon></a></td>
                            </tr>
                            <?php
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Teachers Booking</h2>
                    </div>
                    <table>
                        <?php
                          $querys = "SELECT booking.*, students.nom AS student_name, teachers.nom AS teacher_name
                          FROM `booking`
                          INNER JOIN `students` ON booking.student_id = students.id
                          INNER JOIN `teachers` ON booking.teacher_id = teachers.id
                          ORDER BY booking.start_date DESC
                          LIMIT 10;";
                          $results = mysqli_query($connect , $querys);
                        ?>
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_assoc($results)){
                            
                            ?>
                            <tr>
                                
                                <td><?php echo $row['teacher_name']?></td>
                                <td><?php echo $row['book_name']?></td>
                                <td><?php echo $row['start_date']?></td>
                                <td><?php echo $row['end_date']?></td>
                                
                        
                            </tr>
                            <?php
                                }
                             ?>   
                        </tbody>
                    </table>
                  
                </div>
            </div>

            <!-- ======================= Cards ================== -->
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../../../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>