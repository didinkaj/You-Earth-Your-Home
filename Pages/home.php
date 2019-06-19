<?php page('/partials/head'); ?>
<div class="hero-image">
    <div class="hero-text">
        <h1>Change starts with you.</h1>
        <p>Be the change you wish to see in the world</p>
        <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])) { ?>
            <a href="all-members" class="button" style="text-decoration: none">Membership</a>
        <?php } else { ?>
        <a href="subscribe" class="button" style="text-decoration: none">Get Involved</a>
        <?php } ?>
    </div>
</div>

<div class=" flex center row ">
    <div class="column ">
        <div class="home content">
            <h4 style="text-align: center">Your Earth. Your Home</h4>
            <img src="../images/home1.jpg" alt="home" style="width: 100%">
            <p>is a not for profit organisation
                that aims to promote sustainability
                initiatives at a grassroots level
                through individual awareness.
            </p>
        </div>
    </div>
    <div class="column ">
        <div class=" home content">
            <h4 style="text-align: center">Purpose of the website</h4>
            <img src="../images/home4.jpg" alt="home" style="width:100%">
            <p>
                We are focused on minimising and reducing
                the individual’s consumption of power,
                water and other consumables at home and at work.
            </p>
            <p>
                We do this by offering individual support and advice on
                sustainability issues and environmental projects.
            </p>
            <p>
                We believe that to save our planet,
                we should first change ourselves.
            </p>
            <p>
                Change starts with you.
            </p>
            <p>
                As Mahatma Gandhi once said,
                “Be the change you wish to see in the world.”
            </p>
        </div>
    </div>
    <div class="column">
        <div class="home content">
            <h4 style="text-align: center">Sustainability sites include:</h4>
            <img src="../images/home3.jpg" alt="Nature" style="width:100%">
            <ol>
                <li>http://www.earthhour.org</li>
                <li>http://www.greenpeace.org</li>
                <li>http://www.wwf.org.au/</li>
            </ol>

        </div>
    </div>
</div>
<?php page('/partials/footer'); ?>
