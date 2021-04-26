<! DOCTYPE html>
<html lang="ja">
<?php include('header.inc.php')?>
<body>
    <?php include('navbar.tpl.php')?>
    <div class="container">
        <div class="starter-template">
            <h1>Forecast in GSM</h1>
            <p>Updated at 10:30(JST).</p>
            <div class="row">
                <div class="col-sm-6">
                    <h2>850hPa equivalent potential temperature & rain </h2>
                    <img src="./pic/GIF/850ept.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
                <div class="col-sm-6">  
                    <h2>Surface Pressure & wind & rain</h2>
                    <img src="./pic/GIF/850pr.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>500hPa height & vorticity</h2>
                    <img src="./pic/GIF/z500.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            <p>However, this data shall be displayed for public, non-commercial research and educational purposes.<br>Draw with GrADS</p>
            <?php include('footer.inc.php')?>
        </div>
    </div>
</body>
</html>
