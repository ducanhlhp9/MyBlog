<?php
//$sql = "SELECT * FROM posts ORDER BY post_id LIMIT 5";
$sql = "SELECT DISTINCT post_tags FROM posts ORDER BY post_id LIMIT 5";

$result = mysqli_query($connection, $sql);

?>

<div class="sidebar-box">
    <h3 class="heading">Tags</h3>
    <ul class="tags">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $tags = explode(',', $row['post_tags']);
            $post_tags = $row['post_tags'];
            ?>
            <li><?php foreach ($tags as $tag) {
                    echo "<a href='search.php?post_tags=$post_tags' class='btn btn-primary' style='margin:2px;color:#000;'>#$tag</a>";
                } ?></li>

        <?php }

        ?>
        <a >

    </ul>
</div>
