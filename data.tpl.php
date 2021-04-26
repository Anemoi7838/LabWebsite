<! DOCTYPE html>
<html lang="jp">
<?php include('header.inc.php')?>
<body>
    <?php include('navbar.tpl.php')?>
    <div class="container">
        <div class="starter-template">
            <div class="row">
                <div class="col-sm-12">
                    <h1><strong>Meteorological data</strong></h1>
                    <h1>Today's meteorological data</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Toyama University</h2>
                    <img src="./Toyama/Fig/day_toyama.png?<?php echo date("Ymdhis");?>" class="img-responsive center-block" alt="CommingSoon!">
                </div>
                <div class="col-sm-6">  
                    <h2>Hegurajima in Ishikawa Prefecture</h2>
                    <img src="./pic/dhegura.png" class="img-responsive center-block">
                </div>
            </div>
            <h1>Data for the past week</h1>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Toyama University</h2>
                    <img src="./pic/junbityu_photo.jpg" class="img-responsive center-block" alt="CommingSoon!">
                    <p>The University of Toyama is located in the cities of Toyama and Takaoka in Toyama Prefecture, Japan.</p>
                </div>
                <div class="col-sm-6">  
                    <h2>Hegurajima in Ishikawa Prefecture</h2>
                    <img src="./pic/wegura.png" class="img-responsive center-block">
                    <p>Hegurajima is an island that floats on the Sea of Japan about 50km north of the Noto Peninsula in Ishikawa Prefecture. It belongs to Amamachi, Wajima City.<br>Draw with python.</p>
                </div>
            </div>
            <?php include('footer.inc.php')?>
        </div>
</body>
</html>
