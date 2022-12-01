<?php
session_start();
// jika $sessionnya sudah ada maka,
if (!isset($_SESSION['login'])) {
   echo "<script>
                alert('Akses Anda ditolak, silakan login terlebih dahulu')
                document.location.href = 'login.php'
            </script>";
};
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reviews Products</title>

    <!--------- CONNECT LINK --------->
    <link rel="stylesheet" href="./assets/css/reviews.css?v1">
    <link rel="stylesheet" href="./assets/css/ripiu_style.css?v1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <nav class="navtop">
        <div>
            <a href="./landing_user.php" style="padding-right: 30px;"><i style="padding-bottom: 0px; font-size: 24px; color:black;" class="bi bi-arrow-left-circle"></i></a>
            <h1>Reviews Products</h1>
        </div>
    </nav>
    <div class="content home">
        <h2>Review Eye & Lip Care</h2>
        <p>Check out the below reviews for our eye & lip care product.</p>

        <div class="reviews"></div>
        <script>
            const reviews_page_id = 1;
            fetch("reviews_eye.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
                document.querySelector(".reviews").innerHTML = data;
                document.querySelector(".reviews .write_review_btn").onclick = event => {
                    event.preventDefault();
                    document.querySelector(".reviews .write_review").style.display = 'block';
                    document.querySelector(".reviews .write_review input[name='name']").focus();
                };
                document.querySelector(".reviews .write_review form").onsubmit = event => {
                    event.preventDefault();
                    fetch("reviews_eye.php?page_id=" + reviews_page_id, {
                        method: 'POST',
                        body: new FormData(document.querySelector(".reviews .write_review form"))
                    }).then(response => response.text()).then(data => {
                        document.querySelector(".reviews .write_review").innerHTML = data;
                    });
                };
            });
        </script>
    </div>
</body>

</html>