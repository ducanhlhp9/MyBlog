<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        <a href="https://www.facebook.com/hoangduc.anh.1420/" >
                            <img src="images/facebook.png" alt="Image placeholder" class="img-fluid"
                                 style="width: 50px">
                        </a>
                        <a href="https://twitter.com/HongcAn52449307" >
                            <img src="images/twitter.png" alt="Image placeholder" class="img-fluid" style="width: 50px">
                        </a>
                        <a href="https://www.linkedin.com/in/hoang-duc-anh-668872192/" >
                            <img src="images/linkedin.png" alt="Image placeholder" class="img-fluid"
                                 style="width: 50px">
                        </a>
                        <a href="https://github.com/ducanhlhp9" >
                            <img src="images/github.png" alt="Image placeholder" class="img-fluid" style="width: 50px">
                        </a>

                    </div>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                    <form action="search.php" class="search-top-form" method="post">
                        <span class="icon fa fa-search"></span>
                        <input type="text" name="search" id="s" placeholder="Type a tag to search...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button"
                   aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="index.php">Ở đây viết xàm xí nè!!</a></h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <?php show_cat(); ?>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
