<?php
session_start();
require("../database/db.php");
require("../templates/Block.php");

use Templates\Block;

$page = R::dispense("pages");

if (isset($_POST["add_page"])) {
    $page->title = $_POST["title"];
    $page->offer = $_POST["offer"];
    $page->img = $_POST["img"];
    $page->text_title = $_POST["text_title"];
    $page->content = $_POST["content"];
    $page->tag = $_POST["tag"];
    $page->description = $_POST["description"];

    R::store($page);

    echo "<h1>SUCCESS</h1>";
}

if (isset($_SESSION["user"])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Администратор :: Tiger Logistics</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
    <body>
    <section id="admin" style="display: -webkit-box;">
        <div style="display: table-caption;margin-right: auto;margin-left: auto;">
            <form action="index.php" method="post">
                <input type="text" name="title" placeholder="Title...">
                <input type="text" name="offer" placeholder="Offer...">
                <input type="file" accept=".jpg, .jpeg, .png" name="img" placeholder="Img...">
                <input type="text" name="text_title" placeholder="Text title...">
                <input type="text" name="content" placeholder="Content...">
                <input type="text" name="tag" placeholder="Tag...">
                <input type="text" name="description" placeholder="Description...">
                <input type="submit" name="add_page" value="Submit">
            </form>
        </div>

        <div class="pages" style="display: grid; margin-left: 50px;">
            <?
            $pages = R::find("pages");

            foreach ($pages as $page) {
                echo Block::generate($page);
            }
            ?>
        </div>
    </section>
    </body>
    </html>
    <?
} ?>
<?php
if ($_SESSION["user"] != "admin") {
    echo "<h1>YOU DON'T HAVE ACCESS TO THIS PAGE</h1>";
}
