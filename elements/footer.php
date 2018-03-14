<?php
foreach($jsFiles as $file){
    if(strpos($file, 'http') !== false){
        echo '<script type="application/javascript" src="' . $file . '"></script>';
    }else{
        echo '<script type="application/javascript" src="' . $jsPath . $file . '"></script>';
    }
}
if(!isset($_GET["area"])){
    $_GET["area"] = "overview";
}
$setHome = false;
$pages_array = array_keys($pages);
if(isset($_GET["page"])){

    foreach ($pages_array as $page){
        if($_GET["page"] == $page) {
            $thisPage = $_GET["page"];
        }else{
            if(!$setHome){
                $thisPage = key($pages);
                $setHome = true;
            }
        }
    }
}else{
    if(!$setHome){
        $thisPage = key($pages);
        $setHome = true;
    }
}
$areas = array_keys($pages[$thisPage]["areas"]);
$startJsOut = false;
foreach ($areas as $area){
    if(in_array($_GET["area"], $areas)){
    if($area == $_GET["area"]) {
        if (!$startJsOut) {
            echo '<script type="application/javascript">' . $pages[$thisPage]["areas"][$_GET["area"]]["jsRun"] . '</script>';
            $startJsOut = true;
        }
    }
    }else{
        if(!$startJsOut){
            echo '<script type="application/javascript">' . $pages[$thisPage]["areas"][$pages[$thisPage]["defaultPage"]]["jsRun"] . '</script>';
            $startJsOut = true;
        }
    }
}

