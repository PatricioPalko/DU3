<footer>
    <div class="container">
        <p class="logo">
            <strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
        </p>
        <p class="author">
            Návrh a design pripravil <a href="mailto:tomas@cloudfender.com">tomas@cloudfender.com</a>
        </p>
        <ul class="menu nav-footer">

            <?php

            $pages = glob('*.php');

            foreach ($pages as $file) {
                $page = basename($file, '.php');
                if ($page == 'index') $page = 'domov';
                echo '<li><a href="'. $file .'">'. ucfirst($page).'</a></li>';

            }
            ?>
<!--            <li><a href="index.php">Domov</a></li>-->
<!--            <li><a href="galeria.php">Portfólio</a></li>-->
<!--            <li><a href="about.php">O nás</a></li>-->
<!--            <li><a href="contact.php">Kontakt</a></li>-->
        </ul>
    </div>
</footer>

<script src="js/lightbox.js"></script>

</body>
</html>