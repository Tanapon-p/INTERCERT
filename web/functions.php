<?php
    require_once "./interscepter.php";
    
    // Full Thai Date
    function thai_date($strDate, $time = null, $MY = null) {
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));
        $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
        $strMonthThai = $strMonthCut[$strMonth];

        if ($time) {
            return "$strDay $strMonthThai $strYear เวลา $strHour:$strMinute:$strSeconds";
        } elseif ($MY) {
            return "$strMonthThai $strYear";
        } else {
            return "$strDay $strMonthThai $strYear";
        }
    }

    function redirect($path) {
        header("Location: $path");
    }

    function time_ago($lang, $datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        if ($lang == "EN") {
            $string = array(
                'y' => 'Years',
                'm' => 'Months',
                'w' => 'Weeks',
                'd' => 'Days',
                'h' => 'Hours',
                'i' => 'Minutes',
                's' => 'Seconds',
            );
            $ago = "ago";
            $justnow = "Just now";
        } elseif ($lang == "TH") {
            $string = array(
                'y' => 'ปี',
                'm' => 'เดือน',
                'w' => 'สัปดาห์',
                'd' => 'วัน',
                'h' => 'ชั่วโมง',
                'i' => 'นาที',
                's' => 'วินาที',
            );
            $ago = "ที่แล้ว";
            $justnow = "เมื่อสักครู่นี้";

        } else {
            $string = array(
                'y' => 'ปี',
                'm' => 'เดือน',
                'w' => 'สัปดาห์',
                'd' => 'วัน',
                'h' => 'ชั่วโมง',
                'i' => 'นาที',
                's' => 'วินาที',
            );
            $ago = "ที่แล้ว";
            $justnow = "เมื่อสักครู่นี้";
        }
        
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }

        return $string ? implode(', ', $string) . ' ' . $ago : $justnow;
    }

    function thai_month($month) {
        $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
        return $strMonthCut[$month];
    }

    function rootURL($dir = __DIR__) {

        $root = "";
        $dir = str_replace('\\', '/', realpath($dir));

        //HTTPS or HTTP
        $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

        //HOST
        $root .= '://' . $_SERVER['HTTP_HOST'];

        //ALIAS
        if (!empty($_SERVER['CONTEXT_PREFIX'])) {
            $root .= $_SERVER['CONTEXT_PREFIX'];
            $root .= substr($dir, strlen($_SERVER['CONTEXT_DOCUMENT_ROOT']));
        } else {
            $root .= substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
        }

        $root .= '/';

        $path = explode("/", $root);

        return $path[0] . "//" . $path[2] . "/" . $path[3];
    }

    function actualURL() {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        return $url;
    }