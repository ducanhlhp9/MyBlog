<?php
include "db.php";

function show_cat()
{
    global $connection;

    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<li class='nav-item dropdown'><a class='nav-link' href='category.php?cat_id=$cat_id'>{$cat_title}</a></li>";
    }
}



?>
<?php
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 6;
$offset = ($pageno-1) * $no_of_records_per_page;

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

$total_pages_sql = "SELECT COUNT(*) FROM posts";
$result = mysqli_query($connection,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
?>
