<div class="col-md-12 col-lg-4 sidebar">
    <div class="sidebar-box search-form-wrap">
        <form action="search.php" class="search-form" method="post">
            <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" name="search" class="form-control" id="s"
                       placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>

    <div class="sidebar-box">
        <div class="bio text-center">
            <img src="images/canh.jpg" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
                <h2>Anh HD</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus
                    excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="#" class="btn btn-primary btn-sm">Read my bio</a></p>
                <p class="social">
                    <a href="https://twitter.com/HongcAn52449307" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.facebook.com/hoangduc.anh.1420/" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="https://github.com/ducanhlhp9" class="p-2"><span class="fa fa-github"></span></a>
                    <a href="https://www.linkedin.com/in/hoang-duc-anh-668872192/" class="p-2"><span class="fa fa-linkedin"></span></a>
                </p>
            </div>
        </div>
    </div>
    <!-- END sidebar-box -->

    <!-- latest post -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- END latest post -->
    <!--  category  -->
    <?php include 'includes/category.php'; ?>
    <!-- END category -->
    <!-- END sidebar-box -->

    <?php include 'includes/tags.php'; ?>
</div>
<!-- END sidebar -->