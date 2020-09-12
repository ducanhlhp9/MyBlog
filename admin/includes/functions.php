<?php
include "db.php";

function add_category()
{
    global $connection;

    if (isset($_POST['cat_add'])) {
        if (empty($_POST['cat_title'])) {
            header("Location: ../categories.php?Field_cannot_be_empty");
        } else {
            $cat_title = $_POST['cat_title'];
            $query = "INSERT INTO categories(cat_title)VALUES('$cat_title')";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("Could not send data " . mysqli_error($connection));
            } else {
                header("Location: ../categories.php?category_added");
            }
        }
    }
}

add_category();

function show_category()
{
    global $connection;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete_cat={$cat_id}'>Delete</a></td>";
        echo "</tr>";
    }
}

function delete_category()
{
    global $connection;
    if (isset($_GET['delete_cat'])) {
        $cat_id = $_GET['delete_cat'];
        $query = "DELETE FROM categories WHERE cat_id = $cat_id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Could not delete data " . mysqli_error($connection));
        } else {
            header("Location: categories.php?category_deleted");
        }
    }
}

delete_category();


function show_posts()
{
    global $connection;

    $result = mysqli_query($connection, "SELECT * FROM posts LIMIT 100");

    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_category = $row['post_category'];
        $post_content = substr($row['post_content'], 0, 50);
        $post_tags = $row['post_tags'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $date = $row['post_date'];

        echo "<tr>";
        echo "<td>{$post_id}</td>";
        echo "<td>{$post_title}</td>";
        echo "<td>{$post_author}</td>";
        echo "<td>{$post_category}</td>";
        echo "<td><a href='posts.php?approve_post=$post_id' class='btn btn-success'>  $post_status</a></td>";
        echo "<td><img src='{$post_image}' width='50px'></td>";
        echo "<td>{$post_content}</td>";
        echo "<td>{$date}</td>";
        echo "<td>{$post_tags}</td>";
        echo "<td><a href='posts.php?source=edit&edit_post=$post_id' class='btn btn-primary'>Edit</a></td>";
        echo "<td><a href='posts.php?delete_post=$post_id' class='btn btn-danger'>Delete</a></td>";
        echo "</tr>";
    }
}


//publish or draft post
function modifyStatus($id)
{
    global $connection;
    $query = mysqli_query($connection, "SELECT post_status FROM posts WHERE post_id=$id");
    if (mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_array($query);
        $status = $result['post_status'];

        if ($status == "draft") {
            $query = mysqli_query($connection, "UPDATE posts SET post_status='published' WHERE post_id=$id");
        } else {
            $query = mysqli_query($connection, "UPDATE posts SET post_status='draft' WHERE post_id=$id");
        }
        return true;
    } else {
        return false;
    }
}
