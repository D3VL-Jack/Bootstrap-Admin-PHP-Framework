<?php

    if(!isset($_GET["area"])){
        $_GET["area"] = "";
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
?>
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
    <?php
            function isAreaActive($area, $thisArea) {
                global $pages, $thisPage;
                if($area == $thisArea){
                    return " active";
                }elseif(!$_GET["area"] && $area === $pages[$thisPage]["defaultPage"]){
                    return " active";
                }
            }
            $areas = array_keys($pages[$thisPage]["areas"]);
            foreach ($areas as $area){
                echo '
                <li class="nav-item">
                    <a class="nav-link'.isAreaActive($area, $_GET["area"]).'" href="index.php?page='.$thisPage.'&area='.$area.'">'.$pages[$thisPage]["areas"][$area]["cleanName"].'</a>
                </li>';
            }
?>
    </ul>
</nav>
