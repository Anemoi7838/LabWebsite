<! DOCTYPE html>
<html lang="jp">
<?php include('header.inc.php')?>
<body>
    <?php include('navbar.tpl.php')?>
    <div class="container">
        <div class="starter-template">
            <h1>Today's timelapse in laboratory</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Current sky</h2>
                        <img src="./pic/snapshot.jpg?<?php echo date("YmdHis");?>" class="img-responsive center-block" alt="Maintenanse"/>
                        <p>Updated every 1 minutes with Raspberry Pi</p>
                    </div>
                <div class="col-sm-6">
                    <?php date_default_timezone_set('Asia/Tokyo');
                    if(date("H")<19){ 
                        print_r("<h2>Yesterday's cloud movement in timelapse</h2>");
                        $path=date('Ymd', strtotime('-1 day'));
                    }else{
                        print_r("<h2>Today's cloud movement in timelapse</h2>");
                        $path=date("Ymd");
                    }?>
                    <video playsinline="" src="./pic/GIF/<?php echo $path;?>.mp4" loop autoplay muted class="img-responsive center-block" ></video>
                    <form action="Timelapse.past.php" method="post">
                        <div class="form-group">
                            <label for="message">Click here for past timelapses</label>
                            <select class="form-control" name="select" id="select">
                            <?php if (date("H")<19){
                            $path=date('Y/m/d', strtotime('-2 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-3 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-4 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-5 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-6 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-7 day'));
                            echo "<option>$path</option>";
                            }else{
                            $path=date('Y/m/d', strtotime('-1 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-2 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-3 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-4 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-5 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-6 day'));
                            echo "<option>$path</option>";
                            $path=date('Y/m/d', strtotime('-7 day'));
                            echo "<option>$path</option>";
                            }?>
                            </select>
                        </div>
                        <button type="submit">OK</button>
                    </form>
                    <p>Taken every 1 minutes from 10:00 to 18:00 with a Raspberry Pi</p>
                    <p>Today's time lapse is updated at 18:00 (JST)</p>
                </div>
                <div class="col-sm-12">
                    <h3>Attention!</h3>
                    <p>It looks darker than it actually is because it is shot with an ND filter that has the effect of reducing the light intensity.</p>
                    <?php include('footer.inc.php')?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
