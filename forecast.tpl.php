<! DOCTYPE html>
<html lang="ja">
<?php include('header.inc.php');
include('home.php');
$weather = new SKY();?>
<body>
	<?php include('navbar.tpl.php')?>
	<div class="container">
		<div class="starter-template">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Weather forecast of every hour until 48 hours ahead</h2>
                    <img src="forecast.png?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2>Weather forecast of every hour until 1 ~ 24 hours ahead</h2>
                    <img src="table_forecast_1.png?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2>Weather forecast of every hour after 25 ~ 48 hours ahead</h2>
                    <img src="table_forecast_2.png?<?php echo date("YmdHis");?>" class="img-responsive center-block"/>
                </div>
            </div>
            
            <?php include('footer.inc.php')?>
        </div>
    </div>
</body>
</html>