<?php include("template/Header.php"); ?>

            <div class="jumbotron">
                <h1 class="display-1" style="text-align: center;">BIENVENIDO
                <?php
                    if($status){
                        echo ','.strtoupper($user);
                    }else{

                    }
                ?>
                </h1>
                <p class="lead" style="text-align: center;">Pasese por nuestros productos</p>
                <hr class="my-2">
                <div style="text-align: center;">
                <?php
                    if($status){
                        echo '<img src="https://cdn.discordapp.com/attachments/796558928820699166/916145553493065848/5unfl0w3r._.__1636556463684936.jpg"
                        width="500">';
                    }else{
                        echo '<img src="https://somoskudasai.com/wp-content/uploads/2021/06/portada_wonder-egg-12.jpg">';
                    }
                ?>
                </div>
            </div>

<?php include("template/pie.php"); ?>