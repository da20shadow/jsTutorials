<?php
include "template/header.php";


?>

    <h1>CSS Grid Tutorial</h1>
    <div class="grid-container">
        <div class="grid-item theHeader">
            <h2>Header</h2>
            <nav>
                <a href="index.php">Home</a>
                <a href="css-grid.php">CSS Grid</a>
                <a href="">Page 3</a>
                <a href="">Page 4</a>
            </nav>
        </div>
        <div class="grid-item sidebar">
            Sidebar
        </div>
        <div class="grid-item main">
            Main Content
        </div>
        <div class="grid-item item4">
            Item 4
        </div>
        <div class="grid-item item5">Item 5</div>
        <div class="grid-item footer">Footer</div>
    </div>

<?php include "template/footer.php"; ?>