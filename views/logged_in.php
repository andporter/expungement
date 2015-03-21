<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php


?>

<div class="container theme-showcase" role="main">
    <div class="well">
        <p>Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in!</p>
        <div class="input-daterange">
            <input type="text" class="input-small" placeholder="yyyy-mm-dd" />
            <span class="add-on">to</span>
            <input type="text" class="input-small" placeholder="yyyy-mm-dd" />
        </div>
    </div>
</div>