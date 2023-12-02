<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../assets/css/style.css">
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

                <li class="active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Students</span>
                    </a>
                </li>

                <li>
                    <a href="../teachers/teachers.php">
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
                    <a href="../../../auth/login.php">
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
                        <input type="text" placeholder="Search here" name="search" id="search">
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
                        <h2>Recent Students</h2>
                        <a href="add_students.php" class="btn">Add New</a>
                    </div>
                    <div class="msg" style="background-color:rgb(105, 163, 105);padding:15px;margin:15px;border-radius:5px;display:flex;justify-content:space-between;align-items:center;display:none;">
                        <p>
                            <?php
                                if(isset($_GET['msg'])){
                                    $msg = $_GET['msg'];
                                    echo $msg;
                                }
                            ?>
                        </p>
                        <a href="#" id="close_msg" style="color:white;font-size:25px;"><ion-icon name="close-outline"></ion-icon></a>
                    </div>
                    <table id="data-table">
                        <thead>
                            <tr>
                                <td>Numero</td>
                                <td>Profile</td>
                                <td>Prenom</td>
                                <td>Nom</td>
                                <td>Email</td>
                                <td>Gender</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Students Booking</h2>
                    </div>
                    
                  
                </div>
            </div>

            <!-- ======================= Cards ================== -->
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/show.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>