<?php include 'includes/header.php'; ?>

<div class="wrap">

    <?php include 'includes/navigation.php'; ?>
    <!-- END header -->


    <!-- END section -->

    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    (isset($_GET['cat_id'])) ? $cat_id = $_GET['cat_id'] : header("Location: index.php");
                    $query = "SELECT * FROM categories WHERE cat_id=$cat_id ";
                    $result = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($result)){
                    $cat_title = $row['cat_title'];
                    ?>
                    <h2 class="category mb-3" style="margin-top: 10px; padding: 10px 10px; font-size: 15px"><?php echo $cat_title;?></h2>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                        <?php include 'includes/cat_posts.php'; ?>
                    </div>

                </div>

                <!-- END main-content -->

                <!-- start side_bar-->

                <?php include "side_bar.php" ?>

                <!--end side_bar-->

            </div>
        </div>
    </section>
<?php include "includes/footer.php"?>

</div>



