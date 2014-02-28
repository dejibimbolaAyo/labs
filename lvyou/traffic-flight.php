<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>交通</title>
<meta name="keywords" content="页面关键字">
<meta name="description" content="页面描述">
<?php include("common/meta.php"); ?>
</head>
<body>
<?php include("common/header.php"); ?>

<!--.wrap 1\\-->
<div class="wrap">

<?php include("search.html"); ?>

<?php include("crumbs.html"); ?>

<?php include("intro.html"); ?>

    <div class="aside">
        <?php include("side-nav.html"); ?>
        
        <div class="hr_c"></div>
        
        <?php include("aside.html"); ?>
    </div><!--//.aside-->
    
    <div class="main">
        <div class="xbox">
            <div class="xtitle">
                <h2 class="htit">**交通</h2>
                <a href="#" class="xlink">搜索国际机票</a>
            </div>
            <div class="xcontent">
                <div class="xtypo">
                    <!--富文本区域-->
                    <?php include("xtypo.html"); ?>
                </div><!--//.xtypo-->
            </div>
        </div><!--//.xbox-->
    </div><!--//.main-->
</div><!--//.wrap -->

<?php include("common/footer.php"); ?>

</body>
</html>
