<?php include_once("config.php");?>
<!doctype html>
<html lang="en">
<head>
    <?php include_once("elements/head.php");?>
</head>

<body>
<?php include_once("elements/header.php"); ?>
<div class="container-fluid">
    <div class="row">
        <?php include_once("elements/sidenav.php"); ?>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <?php
        $pages_array = array_keys($pages);
        $outputted = false;
        $defaultPage = $pages[key($pages)]["areas"][key($pages[key($pages)]["areas"])]["fileName"];
        if(isset($_GET["page"])){
            foreach ($pages_array as $page){
                if(in_array($_GET["page"], $pages_array)){
                    $area_array = array_keys($pages[$page]["areas"]);
                    if($_GET["page"] == $page) {
                        if(!$_GET["area"] == "") {
                            foreach ($area_array as $area){
                                if($_GET["area"] == $area){
                                    if(!$outputted){
                                        include_once("pages/" . $pages[$page]["areas"][$area]["fileName"]);
                                        $outputted = true;
                                    }
                                }
                            }
                        }else{
                            if(!$outputted){
                                include_once("pages/" . $pages[$page]["areas"][$pages[$page]["defaultPage"]]["fileName"]);
                                $outputted = true;
                            }

                        }
                    }
                }else{
                    if(!$outputted){
                        echo $page;
                        include_once("pages/" . $defaultPage);
                        $outputted = true;
                    }
                }
            }
        }else{
            if(!$outputted){
                include_once("pages/" . $defaultPage);
                $outputted = true;
            }
        }
        ?>
        </main>
    </div>
</div>
<?php include_once("elements/footer.php"); ?>
</body>
</html>
