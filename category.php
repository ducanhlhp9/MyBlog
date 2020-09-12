<?php include 'includes/header.php'; ?>

<div class="wrap">

    <?php include 'includes/navigation.php'; ?>
    <!-- END header -->


    <!-- END section -->

    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Categories</h2>
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



