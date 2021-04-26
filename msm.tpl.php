<! DOCTYPE html>
<html lang="ja">
<?php include('header.inc.php')?>
<body>
    <?php include('navbar.tpl.php')?>
    <div class="container">
        <div class="starter-template">
            <h1>Forecast in MSM</h1>
            <p>Updated at 10:30(JST).</p>
            <div class="row">
                <div class="col-sm-6">
                    <h2>500hPa Temp & Wind</h2>
                    <img src="./pic/GIF/500temp.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
                <div class="col-sm-6">  
                    <h2>500hPa RelativeHumidity</h2>
                    <img src="./pic/GIF/500RH.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>700hPa Temp & Wind</h2>
                    <img src="./pic/GIF/700temp.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
                <div class="col-sm-6">  
                    <h2>700hPa RelativeHumidity</h2>
                    <img src="./pic/GIF/700RH.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>850hPa Temp & Wind</h2>
                    <img src="./pic/GIF/850temp.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
                <div class="col-sm-6">  
                    <h2>850hPa RelativeHumidity</h2>
                    <img src="./pic/GIF/850RH.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Surface Temp & Wind</h2>
                    <img src="./pic/GIF/sur_temp.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block" alt="">
                </div>
                <div class="col-sm-6">  
                    <h2>Surface RelativeHumidity</h2>
                    <img src="./pic/GIF/surRH.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Surface rain</h2>
                    <img src="./pic/GIF/sur_r1h.gif?<?php echo date("YmdHis");?>" class="img-responsive center-block" alt="">
                </div>
            </div>
            <p>However, this data shall be displayed for public, non-commercial research and educational purposes.<br>Draw with GrADS</p>
            <?php include('footer.inc.php')?>
        </div>
    </div>
</body>
</html>
