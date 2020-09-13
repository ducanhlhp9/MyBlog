<?php include 'includes/header.php'; ?>

<div class="wrap">

    <?php include 'includes/navigation.php'; ?>
    <!-- END header -->


    <!-- END section -->

    <section class="site-section py-sm">
        <div class="container">

            <?php
            if (isset($_POST['message'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $message_obj->addMessage($name, $phone, $email, $message);
            }
            ?>
            <div class="row">

                <div class="col-md-12">
                    <h2 class="mb-4" style="text-align: center">Contact me</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-6 main-content">
                    <form action="contact.php" method="post">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control ">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control ">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message</label>
                                <textarea name="message" id="message" class="form-control " cols="30"
                                          rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input style="display: block; margin: 0 auto 20px auto;" type="submit" name="message"
                                       value="Send Message" class="btn btn-primary">
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-md-12 col-lg-6 main-content">
                    <img src="images/boy.png" alt="Image placeholder" class="img-fluid" style="display: block;
                            margin: 10px auto 0 auto;
                            width: 40%;">
                </div>

                <!-- END main-content -->

                <!-- start side_bar-->

                <!--end side_bar-->

            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>


</div>

