<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];
} else if (isset($_GET['post_tags'])) {
    $search = $_GET['post_tags'];
}
show_search_post($search);
?>
<?php
function show_search_post($search)
{

    $connection = mysqli_connect("localhost", "root", "canh", "blogging_system");
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
    $result = mysqli_query($connection, $query);
    $found = mysqli_num_rows($result);
    if ($found === 0) {
        echo "<div class='alert alert-danger'>No search result found</div>";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_category = $row['post_category'];
            $post_category_id = $row['post_category_id'];
            $post_content = $row['post_content'];
            $post_tags = $row['post_tags'];
            $post_status = $row['post_status'];
            $post_image = $row['post_image'];
            $date = $row['post_date'];
            $post_views = $row['post_views'];
            $post_comment_count = $row['post_comment_count'];

            ?>
            <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="admin/<?php echo $post_image; ?>" alt="Image placeholder">
                    <div class="blog-content-body">
                        <div class="post-meta">
                            <span class="author mr-2"><?php echo $post_author; ?></span>&bullet;
                            <span class="mr-2"><?php echo $date; ?> </span> &bullet;
                            <span class="ml-2"><span
                                        class="fa fa-comments"></span> <?php echo $post_comment_count; ?></span>
                        </div>
                        <h2><?php echo $post_title; ?></h2>
                    </div>
                </a>
            </div>

        <?php }
    }
}

?>
