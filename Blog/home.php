<?php 
include("path.php");
include("ROOT_PATH" . "../../app/controllers/topics.php");

$posts = selectAll('posts', ['published' => 1]);

if (isset($_GET['t_id '])) {
 $posts = getPostsByTopic($_GET['t_id']);
}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">

    <!--Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Blog</title>
</head>
<body>
   <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
   <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>



    
    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!-- Post Slider-->

        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

            <?php foreach ($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/Blog-post/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                        <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
            <?php endforeach; ?>
            
                

               
        </div>
        <!--// Post Slider-->

        <!--Content-->
        <div class="content clearfix">
            <!--Main Content-->
            <div class="main-content">
                <h1 class="recent-posts-title">Recent Posts</h1>

                <?php foreach ($posts as $post): ?>
                <div class="posts clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/Blog-post/' . $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
                        <i class="far fa-calendar"> July 19,2020</i>
                        <p class="preview-text">
                           <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>

                

                 
            </div>
            <!--Main Content-->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="home.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li>
                            <a href="<?php echo BASE_URL . '/home.php?t_id =' . $topic['id'] ?>"><?php  echo $topic['name'];?></a>
                        </li> 
                        <?php endforeach; ?>  
                    </ul>
                </div>
            </div>
        </div>
        <!--//Content-->
    </div>

    <!--// Page Wrapper-->



    <!---Footer-->
    <?php include( ROOT_PATH . "/app/includes/footer.php"); ?>
    <!--//Footer-->
<!---JQUERY--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<!--Slick Carousel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
				

<!--CUSTOM SCRIPT-->
<script src="assets/js/main.js"></script>
</body>
</html>