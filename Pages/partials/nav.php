<ul class="nav">
    <li class="<?php setActive('home') ?> <?php setActive('') ?>">
        <a href="home">Home </a>
    </li>
    <li class="<?php setActive('about') ?>">
        <a href="about">About Us </a>
    </li>
    <li class="<?php setActive('gallery') ?>">
        <a href="gallery">Gallery </a>
    </li>
    <li class="<?php setActive('blog') ?>">
        <a href="blog">Blog </a>
    </li>
    <?php if (!isset($_SESSION['name']) && !isset($_SESSION['email'])) { ?>
        <li class="<?php setActive('subscribe') ?>">
            <a href="subscribe">Subscribe </a>
        </li>
    <?php } ?>
    <li class="<?php setActive('calender') ?> <?php setActive('add-event') ?> <?php setActive('save-event') ?> ">
        <a href="calender">Calender </a>
    </li>
    <li class="<?php setActive('donate') ?>">
        <a href="donate">Donate </a>
    </li>
    <li class="<?php setActive('shop') ?>">
        <a href="shop">Shop </a>
    </li>
    <li class="<?php setActive('contact') ?>">
        <a href="contact">Contact Us </a>
    </li>
</ul>
<div style="width: 20%"></div>
<ul class="nav">
    <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])) { ?>
        <li style="float:right">
            <a href="logout">Logot </a>
        </li>
        <li style="float:right" class="<?php setActive('all-members') ?> <?php setActive('delete-member')  ?>">
            <a href="all-members"><?php echo $_SESSION['name']; ?></a>
        </li>

    <?php } else { ?>
        <li style="float:right" class="<?php setActive('membership') ?>">
            <a href="membership">Membership </a>
        </li>
    <?php } ?>
</ul>

</div>
<div class="content-section">

