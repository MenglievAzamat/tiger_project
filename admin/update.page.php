<?php

session_start();
require("../database/db.php");

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {

    $page = R::load("pages", $_GET["id"]);

    if (isset($_POST["update"])) {
        $page->title = $_POST["title"];
        $page->offer = $_POST["offer"];
        $page->img = $_POST["img"];
        $page->text_title = $_POST["text_title"];
        $page->content = $_POST["content"];
        $page->tag = $_POST["tag"];
        $page->description = $_POST["description"];

        R::store($page);
    }

    ?>
    <div style="display: table-caption;margin-right: auto;margin-left: auto;">
        <form action="update.page.php?id=<?= $page->id ?>" method="post">
            <input type="text" name="title" value="<?= $page->title ?>">
            <input type="text" name="offer" value="<?= $page->offer ?>">
            <input type="file" accept=".jpg, .jpeg, .png" name="img" value="<?= $page->img ?>">
            <input type="text" name="text_title" value="<?= $page->text_title ?>">
            <input type="text" name="content" value="<?= $page->content ?>">
            <input type="text" name="tag" value="<?= $page->tag ?>">
            <input type="text" name="description" value="<?= $page->description ?>">
            <input type="submit" name="update" value="Submit">
        </form>
    </div>
<? } else {
    echo "<h1 style='color: RED;'>ACCESS DENIED</h1>";
}