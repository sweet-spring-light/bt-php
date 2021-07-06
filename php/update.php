<?php

if (isset($_GET['id'])) {
        include "db_conn.php";

        function validate($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $id = validate($_GET['id']);

        $sql = "SELECT * FROM baiviet WHERE mabv = $id";
        $result = mysqli_query($conn, $sql);
     
        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        } else {
                header("Location: read.php");
        }
} else if (isset($_POST['update'])) {
        include "../db_conn.php";
        function validate($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $post = validate($_POST['post']);
        $author = validate($_POST['author']);
        $date__created = validate($_POST['date__created']);
        $pages = validate($_POST['pages']);
        $id = validate($_POST['mabv']);
        echo $data;
        if (empty($post)) {
                header("Location: ../index.php?error=Post is required&$user_data");
        } else if (empty($author)) {
                header("Location: ../index.php?error=Author is required&$user_data");
        } else if (empty($date__created)) {
                header("Location: ../index.php?error=Date-Created  is required&$user_data");
        } else if (empty($pages)) {
                header("Location: ../index.php?error=Pages  is required&$user_data");
        } else {

                $sql = "UPDATE baiviet
               SET tenbv='$post', tacgia='$author' , ngaydang='$date__created', sotrang='$pages'
               WHERE mabv=$id ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                        header("Location: ../read.php?success=successfully updated");
                } else {
                        header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
                }
        }
} else {
        header("Location: read.php");
}
