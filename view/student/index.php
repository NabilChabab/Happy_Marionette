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

    .services {
    padding: 0px 5%;
}

.card-1 {
    background-color: var(--bg-color);
    box-shadow: 5px 5px 50px rgba(137, 43, 226, 0.253);
    position: relative;
    transition: all 0.4s ease-in-out;
    border-radius: 5px;
}

.rows {
    margin-top: 50px;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px , 1fr));
    justify-content: center;
    align-items: center;
    gap: 3rem;
}

.card-1 img {
    width: 100%;
    height: 400px;
    background-position: center;
    background-size: cover;
    object-fit: cover;
    filter: grayscale(100%);
    transition: all .4s ease-in-out;
}

.card-1 img:hover {
    filter: grayscale(0);
    transform: scale(1.1);
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.8);
}

.card-1 h1 {
    padding: 20px;
    font-size: 30px;
}

.card-1 p {
    padding: 20px;
    line-height: 40px;
    margin-bottom: 1rem;
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
                    <a href="../../controller/logout.php">
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

            <section class="services" id="services">
        <div class="cards">
            <div class="rows">
                <div class="card-1" data-aos="fade-up"
                data-aos-duration="3000">
                    <img src="../../assets/images/blog1.png" alt="#">
                    <h1>Mobile Development</h1>
                    <p>Service that provides the best quality and at the request of the client, with professional work
                        and customer support.</p>
                </div>

                <div class="card-1" data-aos="fade-down"
                data-aos-duration="3000">
                    <img src="../../assets/images/blog2.png" alt="#">
                    <h1>Web Development</h1>
                    <p>Service that provides the best quality and at the request of the client, with professional work
                        and customer support.</p>
                </div>

                <div class="card-1" data-aos="fade-up"
                data-aos-duration="3000">
                    <img src="../../assets/images/blog3.jpeg" alt="#">
                    <h1>UI/UX Design</h1>
                    <p>Service that provides the best quality and at the request of the client, with professional work
                        and customer support.</p>
                </div>

                <div class="card-1" data-aos="fade-down"
                data-aos-duration="3000">
                    <img src="../../assets/images/blog4.jpeg" alt="#">
                    <h1>Graphic Design</h1>
                    <p>Service that provides the best quality and at the request of the client, with professional work
                        and customer support.</p>
                </div>

                <div class="card-1" data-aos="fade-up"
                data-aos-duration="3000">
                    <img src="../../assets/images/blog5.jpeg" alt="#">
                    <h1>Branding</h1>
                    <p>Service that provides the best quality and at the request of the client, with professional work
                        and customer support.</p>
                </div>

                <div class="card-1" data-aos="fade-down"
                data-aos-duration="3000">
                    <img src="../../assets/images/blog6.jpeg" alt="#">
                    <h1>Comunity Mangment</h1>
                    <p>Service that provides the best quality and at the request of the client, with professional work
                        and customer support.</p>
                </div>
            </div>
        </div>


       
    </section>


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