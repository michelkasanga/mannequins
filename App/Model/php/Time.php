<?php 
namespace App\Model\php;

class Time
{
        private static int  $resultat;


    private static function comparaison(int $a,int $b){
        
            return self::$resultat = $a - $b;
    }
    public static function timing( $date, $time){

        $res = static::comparaison((int)time(),(int)$time);
        $datecreate = date_create($date);
        $date_format_hours = date_format($datecreate,'H');
        $date_format_day = date_format($datecreate,'d M');
        $date_format_year = date_format($datecreate,'d M Y');
    

        //uneh = 3600 sec et une minutes =60 sec

        //secondes
        if($res<60){
            return " $res sec";
        } 
        //minutes
        elseif($res>=60 && $res<120){
            return " 1 min";
        }elseif($res>=120 && $res<180){
            return " 2 min";
        }elseif($res>=180 && $res<240){
            return " 3 min";
        }elseif($res>=240 && $res<300){
            return " 4 min";
        }elseif($res>=300 && $res<360){
            return " 5 min";
        }elseif($res>=360 && $res<420){
            return " 6 min";
        }elseif($res>=420 && $res<480){
            return " 7 min";
        }elseif($res>=480 && $res<540){
            return " 8 min";
        }elseif($res>=540 && $res<600){
            return " 9 min";
        }elseif($res>=600 && $res<660){
            return " 10 min";
        }elseif($res>=660 && $res<720){
            return " 11 min";
        }elseif($res>=720 && $res<780){
            return " 12 min";
        }elseif($res>=780 && $res<840){
            return " 13 min";
        }elseif($res>=840 && $res<900){
            return " 14 min";
        }elseif($res>=900 && $res<960){
            return " 15 min";
        }elseif($res>=960 && $res<1020){
            return " 16 min";
        }elseif($res>=1020 && $res<1080){
            return " 17 min";
        }elseif($res>=1080 && $res<1140){
            return " 18 min";
        }elseif($res>=1140 && $res<1200){
            return " 19 min";
        }elseif($res>=1200 && $res<1260){
            return " 20 min";
        }elseif($res>=1260 && $res<1320){
            return " 21 min";
        }elseif($res>=1320 && $res<1380){
            return " 22 min";
        }elseif($res>=1380 && $res<1440){
            return " 23 min";
        }elseif($res>=1440 && $res<1500){
            return " 24 min";
        }elseif($res>=1500 && $res<1560){
            return " 25 min";
        }elseif($res>=1560 && $res<1620){
            return " 26 min";
        }elseif($res>=1620 && $res<1680){
            return " 27 min";
        }elseif($res>=1680 && $res<1740){
            return " 28 min";
        }elseif($res>=1740 && $res<1800){
            return " 29 min";
        }elseif($res>=1800 && $res<1860){
            return " 30 min";
        }elseif($res>=1860 && $res<1920){
            return " 31 min";
        }elseif($res>=1920 && $res<1980){
            return " 32 min";
        }elseif($res>=1980 && $res<2040){
            return " 33 min";
        }elseif($res>=2040 && $res<2100){
            return " 34 min";
        }elseif($res>=2100 && $res<2160){
            return " 35 min";
        }elseif($res>=2160 && $res<2220){
            return " 36 min";
        }elseif($res>=2220 && $res<2280){
            return " 37 min";
        }elseif($res>=2280 && $res<2340){
            return " 38 min";
        }elseif($res>=2340 && $res<2400){
            return " 39 min";
        }elseif($res>=2400 && $res<2460){
            return " 40 min";
        }elseif($res>=2460 && $res<2520){
            return " 41 min";
        }elseif($res>=2520 && $res<2580){
            return " 42 min";
        }elseif($res>=2580 && $res<2640){
            return " 43 min";
        }elseif($res>=2640 && $res<2700){
            return " 44 min";
        }elseif($res>=2700 && $res<2760){
            return " 45 min";
        }elseif($res>=2760 && $res<2820){
            return " 46 min";
        }elseif($res>=2820 && $res<2880){
            return " 47 min";
        }elseif($res>=2880 && $res<2940){
            return " 48 min";
        }elseif($res>=2940 && $res<3000){
            return " 49 min";
        }elseif($res>=3000 && $res<3060){
            return " 50 min";
        }elseif($res>=3060 && $res<3120){
            return " 51 min";
        }elseif($res>=3120 && $res<3180){
            return " 52 min";
        }elseif($res>=3180 && $res<3240){
            return " 53 min";
        }elseif($res>=3240 && $res<3300){
            return " 54 min";
        }elseif($res>=3300 && $res<3360){
            return " 55 min";
        }elseif($res>=3360 && $res<3420){
            return " 56 min";
        }elseif($res>=3420 && $res<3480){
            return " 57 min";
        }elseif($res>=3480 && $res<3540){
            return " 58 min";
        }elseif($res>=3540 && $res<3600){
            return " 59 min";
        }
        //heures
        elseif($res>=3600 && $res<7200){
            return " 1h";
        }elseif($res>=7200 && $res<10800){
            return " 2h";
        }elseif($res>=10800 && $res<14400){
            return " 3h";
        }elseif($res>=14400 && $res<18000){
            return " 4h";
        }elseif($res>=18000 && $res<21600){
            return " 5h";
        }elseif($res>=21600 && $res<25200){
            return " 6h";
        }elseif($res>=25200 && $res<28800){
            return " 7h";
        }elseif($res>=28800 && $res<32400){
            return " 8h";
        }elseif($res>=32400 && $res<36000){
            return " 9h";
        }elseif($res>=36000 && $res<39600){
            return " 10h";
        }elseif($res>=39600 && $res<43200){
            return " 11h";
        }elseif($res>=43200 && $res<46800){
            return " 12h";
        }elseif($res>=46800 && $res<50400){
            return " 13h";
        }elseif($res>=50400 && $res<54000){
            return " 14h";
        }elseif($res>=54000 && $res<57600){
            return " 15h";
        }elseif($res>=57600 && $res<61200){
            return " 16h";
        }elseif($res>=61200 && $res<64800){
            return " 17h";
        }elseif($res>=64800 && $res<68400){
            return " 18h";
        }elseif($res>=68400 && $res<72000){
            return " 19h";
        }elseif($res>=72000 && $res<75600){
            return " 20h";
        }elseif($res>=75600 && $res<79200){
            return " 21h";
        }elseif($res>=79200 && $res<82800){
            return " 22h";
        }elseif($res>=82800 && $res<172800){
            return " 23h";
        }
        //jours
        elseif($res>=172800 && $res<259200){
            return " 2j";
        }elseif($res>=259200 && $res<345600){
            return " 3j";
        }elseif($res>=3456000 && $res<432000){
            return " 4j";
        }elseif($res>=432000 && $res<518400){
            return " 5j";
        }elseif($res>=518400 && $res<604800){
            return " 6j";
        }elseif($res>=604800 && $res<691200){
            return " 7j";
        }elseif($res>=691200 && $res<31557600){
            return $date_format_day;
        }elseif($res>=31557600){
            return $date_format_year;
        }
    }
        
}