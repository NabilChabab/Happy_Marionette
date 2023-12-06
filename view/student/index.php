<?php
include "../../connect.php";
?>

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
        <div class="navigation active">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Happy-marionnette</span>
                    </a>
                </li>

                <li class="active">
                    <a href="../admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Chats</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Library</span>
                    </a>
                </li>

                <li>
                    <a href="../../../controller/logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main active">
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
                        <img src="../../assets/images/profilephoto.jfif" alt="">
                    </div>
                    <div class="name">
                        <p><?php echo isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : ''; ?></p>
                        <p><?php echo isset($_COOKIE['user_role']) ? $_COOKIE['user_role'] : ''; ?></p>
                    </div>
                </div>
            </div>

            <div class="cardBox">
                  <?php
                    $sql = "SELECT * FROM `students` LIMIT 4";
                    $result = mysqli_query($connect,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                  
                  ?>
                <div class="card">
                    <div>
                        <div class="numbers" style="font-size:25px;"><?php echo $row['nom']?></div>
                        <div class="cardName"><?php echo $row['email']?></div>
                    </div>

                    <div class="iconBx">
                        <img src="../../assets/images/<?php echo $row['image']?>" alt="" srcset="" style="max-width:60px;border-radius:50%;">
                    </div>
                </div>
                    <?php
                    }
                ?> 
                   
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Posts</h2>
                        <a href="add_students.php" class="btn">Add New Post</a>
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

              
                   
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Books</h2>
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