<?php
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
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?php echo $siteTitle ?></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <?php
                function isPageActive($page, $thisPage) {
                    if($page == $thisPage){
                        return " active";
                    }
                }
                $pages_array = array_keys($pages);
                foreach ($pages_array as $page){
                    echo '
                <li class="nav-item'.isPageActive($page, $thisPage).'">
                    <a class="nav-link" href="index.php?page='.$page.'">'.$pages[$page]["cleanName"].'</a>
                </li>';
                }
                ?>
            </ul>
        </div>
    </nav>
</header>