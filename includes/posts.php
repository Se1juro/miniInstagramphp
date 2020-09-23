<div class="containerPosts">
    <div class="containerPosts__wrapper">
        <?php
        $gestor = opendir('./images');
        if ($gestor) {
            while (($image = readdir($gestor)) != false) {
                if ($image != '.' && $image != '..') {
                    echo "
                    <img src='images/$image' class='img-fluid'/>
                    ";
                }
            }
        }
        ?>
    </div>
</div>