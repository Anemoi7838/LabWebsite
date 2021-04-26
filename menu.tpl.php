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
					<h1>Welcome to Lab. of Meteorology & Climatology in Toyama University </h1>
				</div>
			</div>
			<div class="out">
				<img src="./SLIDE/slide11.jpg" class="img-responsive center-block" alt="">
                <input type=radio name="slide" id="slide1">
                <input type=radio name="slide" id="slide2">
                <input type=radio name="slide" id="slide3">
                <input type=radio name="slide" id="slide4">
                <div class="in">
                    <label for="slide1"><span></span><a href="#1"><img src="./SLIDE/slide11.jpg"></a></label>
                    <label for="slide2"><span></span><a href="#2"><img src="./SLIDE/slide06.jpg"></a></label>
                    <label for="slide3"><span></span><a href="#3"><img src="./SLIDE/slide07.jpg"></a></label>
                    <label for="slide4"><span></span><a href="#4"><img src="./SLIDE/slide08.jpg"></a></label>
                </div>
			</div>
            <div class="row">
                <div class="col-sm-12">
                    <h2>Current weather in Toyama</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>Weather</th>
                            <th>Temperature</th>
                        </tr>
                        <tr>
                            <td> <?php echo $weather-> Weather("weather","weather");?></td>
                            <td> <?php echo $weather-> Weather("weather","temp")."℃";?></td>
                        </tr>
                    </table>
                </div>  
            </div>
			<div class="row">
				<div class="col-sm-4">
					<h2 id="timelapse">Today's cloud movement in laboratory</h2>
					<img src="pic/timelapse.png" class="img-responsive center-block">
					<p>Displays the timelapse of the laboratory of Toyama University</p>
                    <p>Click here for the latest</p>
					<a class="btn btn-primary"href="./Timelapse.tpl.php" >CLICK</a>
				</div>
				<div class="col-sm-4">
                    <h2 id="msm">Weather forecast in Toyama</h2>
					<img src="./pic/forecast.jpg" class="img-responsive center-block">
					<p>The weather of Toyama City for the next 2 days will be displayed</p>
                    <p>Click here for the latest</p>
					<a class="btn btn-primary" href="./forecast.tpl.php">CLICK</a>
				</div>
				<div class="col-sm-4">
					<h2 id="data">Meteorological data</h2>
					<img src="./pic/data.png" class="img-responsive center-block">
					<p>Displays observation data of Toyama University and Hegurajima
					in Ishikawa Prefecture</p>
                    <p>Click here for the latest</p>
					<a class="btn btn-primary" href="./data.tpl.php">CLICK</a>
				</div>
			</div>
            <div class="row">
				<div class="col-sm-4">
					<h2 id="timelapse">Forecast in GSM</h2>
					<img src="pic/pr_050.png" class="img-responsive center-block">
					<p>GSM is a numerical weather prediction model of the Japan 
                    Meteorological Agency that targets the atmosphere of the entire globe. 
                    Since tropical and polar weather with different weather characteristics 
                    also affect the weather near Japan, a global model that covers the entire 
                    globe is needed to forecast the weather in Japan several days ahead.</p>
                    <p>Click here for the latest</p>
					<a class="btn btn-primary" href="./gsm.tpl.php" >CLICK</a>
				</div>
				<div class="col-sm-4">
                    <h2 id="msm">Forecast in MSM</h2>
					<img src="./pic/850RH05.png" class="img-responsive center-block">
					<p>MSM is a numerical weather prediction model of the Japan Meteorological
                    Agency for the atmosphere in Japan and its vicinity. A mesomodel with a 
                    grid spacing of 5 km can predict phenomena with a horizontal scale of several
                    tens of kilometers or more, such as localized low pressure systems and 
                    organized cumulonimbus clouds that cause torrential rains.</p>
                    <p>Click here for the latest</p>
					<a class="btn btn-primary" href="./msm.tpl.php">CLICK</a>
				</div>
				<div class="col-sm-4">
                    <h2 id="bri">Briefing paper</h2>
					<img src="./pic/back.jpg" class="img-responsive center-block">
					<p></p>
                    <p>Click more detail</p>
					<a class="btn btn-primary" href="./paper.php">CLICK</a>
				</div>
			</div>
			<h3>Future plans</h3>
			<ul>
				<li>Automation of MSM & GSM updates</li>
				<li>Automation of Toyama Univ. data  updates</li>
				<li>Visualization of laboratory stay time</li>
				<li>and so on ....</li>
			</ul>
			<h3>Past updates</h3>
			<ul>
				<li>Automation of drawing of observation data in Toyama University(4/6)</li>
				<li>Automation of GSM of drawing(3/23)</li>
				<li>Automation of MSM of drawing(3/23)</li>
                <li>Display the future weather in Toyama with API(3/12)</li>
                <li>Display the current weather in Toyama with API(3/9)</li>
                <li>Defect adjustment(3/9)</li>
                <li>Browsing past time-lapse(3/8)</li>
				<li>Server change(3/7)</li>
				<li>Automation of time-lapse updates(2/27)</li>
				<li>Automation of time-lapse updates(2/27)</li>
				<li>Web application opened(2/26)</li>
			</ul>
			<a href="http://www3.u-toyama.ac.jp/climate/">Toyama University Meteorological Laboratory website<br></a>	  
            <?php include('footer.inc.php')?>
		</div>
	</div>
</body>
</html>
