<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images/favicon.ico">

<title><?php echo $siteTitle ?></title>
<?php
foreach($cssFiles as $file){
    if(strpos($file, 'http') !== false){
        echo '<link rel="stylesheet" href="'.$file.'">'."\n";
    }else{
        echo '<link rel="stylesheet" href="'.$cssPath.$file.'">'."\n";
    }
}
?>