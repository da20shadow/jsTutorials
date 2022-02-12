<?php
include "template/header.php";
?>
<div id="container">
</div>
<script type="text/babel">
reactDOM.render( 
    <h1>Hello, React!</h1>,
    document.getElementById('container')
)
</script>
<h1>Home Page PHP</h1>
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
        <h3>Item 4</h3>
        <button class="btn">Click To Get Alert</button>
    </div>

    <div class="grid-item item5">
        <h3>Item 5</h3>
        <button class="btn">Click To Change Style</button>
    </div>

    <div class="grid-item footer">Footer</div>
</div>

<?php include "template/footer.php"; ?>
