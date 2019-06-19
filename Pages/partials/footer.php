</div>
<footer>
    <div class=" flex center row">
        <div class="column-footer ">
            <div class="content-clear">
                <ul class="footer-links">
                    <li>
                        <a href="home">Home </a>
                    </li>
                    <li>
                        <a href="about">About Us </a>
                    </li>
                    <li>
                        <a href="gallery">Gallery </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="column-footer ">
            <div class="content-clear">
                <ul class="footer-links">
                    <li>
                        <a href="home">Home </a>
                    </li>
                    <li>
                        <a href="about">About Us </a>
                    </li>
                    <li>
                        <a href="gallery">Gallery </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="column-footer">
            <div class="content-clear">
                <ul class="footer-links">
                    <li>
                        <a href="home">Home </a>
                    </li>
                    <li>
                        <a href="about">About Us </a>
                    </li>
                    <li>
                        <a href="gallery">Gallery </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="column-footer">
            <div class="content-clear">
                <ul class="footer-links">
                    <li>
                        <a href="http://www.earthhour.org">Earth Hour </a>
                    </li>
                    <li>
                        <a href="http://www.greenpeace.org">Green Peace </a>
                    </li>
                    <li>
                        <a href="http://www.wwf.org.au/">wwf </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex " style="padding: 10px 30px 10px 30px; margin: 0 auto; width:80%; align-items: flex-end; justify-content: space-between">
        <p>123 Sustainability Street, Green City</p>
        <p>Contact information:
            <a href="mailto:info@yourearth.com.au" style="color: #FFFF00;text-decoration: none">someone@example.com</a>.
        </p>
        <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])) { ?>
            <a href="all-members" class="button" style="text-decoration: none">Membership</a>
        <?php } else { ?>
            <a href="subscribe" class="button" style="text-decoration: none">Subscribe</a>
        <?php } ?>
    </div>
</footer>
</div>
</body>
</html>