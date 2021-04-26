<?php
class SKY{
    public function Weather( $api_type,$type  ){
        $appid = "7a93e70a9fe90658242d0a79b3b2853b";
        if($api_type==="weather"){
            $city = "Toyama-shi,jp";
            $url = "http://api.openweathermap.org/data/2.5/".$api_type."?q=" . $city . "&units=metric&APPID=" . $appid;
            $json_decode = json_decode( file_get_contents($url));
            if( $type  === "weather" ){
                return $json_decode->weather[0]->main;
            }elseif($type==="temp"){
                return $json_decode->main->temp;
            }
        }
        elseif($api_type==="forecast"){
            $type="minutely";
            $lat=36.6989841;
            $lon=137.1871019;
            $url="https://api.openweathermap.org/data/2.5/onecall?lat=".$lat."&lon=".$lon."&exclude=".$type."&appid=".$appid;
            #$json = file_get_contents( $url );
            #$json = mb_convert_encoding( $json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN' );
            $json_decode = json_decode( file_get_contents($url));
            //print_r($json_decode);
            //How to specify when the target is an stdClassObject
            for ($num=0;$num<48;$num++){
                $tempk[]=$json_decode->hourly[$num]->temp;
                $winds[]=$json_decode->hourly[$num]->wind_speed;
                $weather[]=$json_decode->hourly[$num]->weather[0]->main;
                $pres[]=$json_decode->hourly[$num]->pressure;
                $humi[]=$json_decode->hourly[$num]->humidity;
            }
            foreach ($tempk as $var){
                $temp[]=(float)$var-273.15;
            }
            $filename="forecast.csv";

            /*if (file_exists($filename)) {
                unlink( $filename);
            }*/ 
            $file=fopen("forecast.csv","w");
            fputcsv($file,$weather);
            fputcsv($file,$temp);
            fputcsv($file,$pres);
            fputcsv($file,$humi);
            fputcsv($file,$winds);
            fclose($file);
            if( $type=="1"){
                return $weather[1];
            }
            
        }
    }
}
$load=new SKY();
$load->Weather("forecast","");