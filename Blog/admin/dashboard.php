<?php
 include("../path.php"); 
 include("../app/controllers/posts.php");
?> 

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">

     <!--Custom Styling-->
     <link rel="stylesheet" href="../assets/css/style.css">


    <!--Admin Styling-->
    <link rel="stylesheet" href="../assets/css/admin.css">


    <title>Admin Section - Dashboard</title>
</head>
<body>
    <?php include("ROOT_PATH" .  "../../../app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper-->
    <div class="admin-wrapper">

        <!--Left Sidebar-->
        <?php include("ROOT_PATH" .  "../../../app/includes/adminSidebar.php"); ?>
        <!-- // Left Sidebar-->

        <!--Admin Content-->
        <div class="admin-content">
           


            <div class="content">
                <h2 class="page-title">Dashboard</h2>

                <?php include("ROOT_PATH" . "../../../app/includes/messages.php"); ?>

               
            </div>
        </div>

        <!--// Admin Content-->
    </div>

    <!--//  Admin Page Wrapper-->



  
<!---JQUERY--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<!--ckeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<!--CUSTOM SCRIPT-->
<script src="../assets/js/main.js"></script>
</body>
</php>