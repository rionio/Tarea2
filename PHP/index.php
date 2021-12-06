<?php include("template/Header.php"); ?>
<br> <p></p><br><p></p><br><p></p><br><p><br><p></p><br><p></p><br><p></p><br><p>
</p>
<style>
body{ 
  background: url(https://i.redd.it/x3ovn9pyx3271.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
            <div class="row">
            <div class="col-lg-12"  style="background-color:#beefff; algin=center;" >
            <div class="jumbotron">
                <h1 class="display-1" style="text-align: center;">BIENVENIDO ,
                <!--  -->
                test
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
                    // if($status){
                        // echo '<img src="https://cdn.discordapp.com/attachments/796558928820699166/916145553493065848/5unfl0w3r._.__1636556463684936.jpg"
                        // width="500">';
                    // }else{
                        // echo '<img src="https://somoskudasai.com/wp-content/uploads/2021/06/portada_wonder-egg-12.jpg">';
                    // }
                ?>
                </div>
            </div>
            </div>
            </div>
<?php include("template/pie.php"); ?>