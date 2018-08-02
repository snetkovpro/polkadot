<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
        <meta http-equiv="cache-control" content="no-cache">
    <!-- Начнём с самого простого скрипта, ЗАЩИТА ОТ КЭШИРОВАНИЯ: -->
        <meta http-equiv="pragma" content="no-cache"/>
        
        <!-- Ну этот код очень полезный - Защита от перетаскивания и выделения текста. -->
        
        
        <!-- Следующий скрипт - ЗАЩИТА ОТ КОПИРОВАНИИ ИНФОРМАЦИИ -->
        <script language=JavaScript>
        function notcopy(){
        alert("Извините, но с этой страницы нельзя ничего копировать!")
        return false
        }
        
        
        /* НУ И ПОСЛЕДНИЙ СКРИПТ - ЗАЩИТА ОТ ПЕЧАТИ */
        
        function atlpdp1()
        {
        for (wi=0; wi<document.all.length; wi++)
        {
        if (document.all[wi].style.visibility != 'hidden')
        {
        document.all[wi].style.visibility = 'hidden';
        document.all[wi].id = 'atlpdpst'
        }
        }
        }
        
        function atlpdp2()
        {
        for (wi=0; wi<document.all.length; wi++)
        {
        if (document.all[wi].id == 'atlpdpst')
        document.all[wi].style.visibility = ''
        }
        }
        
        window.onbeforeprint = atlpdp1;
        window.onafterprint = atlpdp2;
        
        
        
        /* Выключение Правой кнопки мыши */
        
        
        </script>
    
    
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; if (isset($_GET['page'])) { echo " - ". ((int) $_GET['page'])." ".$text_page;} ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; if (isset($_GET['page'])) { echo " - ". ((int) $_GET['page'])." ".$text_page;} ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>
<meta property="og:title" content="<?php echo $title; if (isset($_GET['page'])) { echo " - ". ((int) $_GET['page'])." ".$text_page;} ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $og_url; ?>" />
<?php if ($og_image) { ?>
<meta property="og:image" content="<?php echo $og_image; ?>" />
<?php } else { ?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:site_name" content="<?php echo $name; ?>" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/stylesheet.css?v=149" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/fontello.css" rel="stylesheet">
<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>
<?php if (strpos($_SERVER['REQUEST_URI'], 'gde-kupit')) { ?>
<style>
.country a{
    color: #000;
}
.country a:hover{
    color: #544;
   
}
</style>
<script>
$(document).ready(function(){
     
     $(".country a").click(function (e) {
         if(this.hash !== ""){
         e.preventDefault();
         var hash = this.hash;
         $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           window.location.hash = hash;
      });
  
         }
        
        
    });
    
  $("div[class!=country] > a").after(function(){
      var content = $(this).attr("href");
      var re = /\s\d\.\s|\s\d\d\.\s/g; 
      var rawcontent = content.replace(re, "<br><br>" + '$&');
      re = /Сайт|Группа|\s-\s/g;
      content = rawcontent.replace(re, "<br>" + '$&');
      $(this).after("<div class='slide' style='display:none;'><div class='col-sm-4'></div><div class='col-sm-8'>" + content + "</div></div>");
  });    
   $("#cities a").click(function(e){
      
      e.preventDefault();
      $(this).next().slideToggle("slow");
      
      
  }); 
});
</script>
<?php } ?>


<script>
$(document).ready(function () {
$('#column-left, #column-right').removeClass('hidden-xs');
$(".simpleregister fieldset").wrapInner("<div class='fieldt' />");
});
</script>


        <?php global $config; if ($config->get('config_vie_custom_js')) { ?>
        <?php echo html_entity_decode($config->get('config_vie_custom_js'), ENT_QUOTES, 'UTF-8'); ?>
        <?php } ?>
      
</head>
<?php if (strpos($og_url, 'ecopaper') || strpos($og_url, 'craftpaper')) { ?>

<body class="<?php echo $class; ?>" style="background-image: none;">

<?php } else { ?>
<body class="<?php echo $class; ?>">
<?php } ?>

<div class="wrapper">

<nav>
  <div class="container">
    <?php echo $currency; ?>
    <?php echo $language; ?>
    <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li class="hidden"><a href="<?php echo $contact; ?>"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md"><?php echo $telephone; ?></span></li>
        
        <li class="dropdown"><a href="<?php echo $account; ?>" title="<?php echo $text_account; ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_account; ?></span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <?php if ($logged) { ?>
            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
           <!-- <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li> -->
            <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
            <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
            <?php } else { ?>
            <li><a href="<?php echo $register; ?>"><?php echo $text_register; ?></a></li>
            <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="hidden"><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_wishlist; ?></span></a></li>
        <li class="hidden"><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_shopping_cart; ?></span></a></li>
        <li class="hidden"><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_checkout; ?></span></a></li>
       <!-- <li><?php echo $cart; ?></li> -->
      </ul>
      <?php if ($logged && $action) { ?>
      <a href="<?php echo $base; ?>index.php?route=information/information&information_id=8">Акции</a>
      <?php } ?>
    </div>
  </div>
  
</nav>
<header id="headerr">
  <div class="container">
    <div class="row">
      <?php if(strpos($og_url, 'ecopaper')) { ?>
        
        <div class="col-sm-3"></div>
        <div class="col-sm-6" id="logo">
          <a href="<?php echo $home; ?>ecopaper/"><img src="<?php echo $ecopaper; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a>
        </div>
        
        <div class="col-sm-3"></div>

      <?php } elseif (strpos($og_url, 'polkadot/')) { ?>
      
        <div class="col-sm-3"></div>
        <div class="col-sm-6" id="logo">
          <?php if ($logo) { ?>
              <a href="<?php echo $home; ?>polkadot/kollekcii/"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
              
              
          <?php } else { ?>
            <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
          <?php } ?>
        </div>
        <div class="col-sm-3"></div>

      <?php } elseif (strpos($og_url, 'craftpaper')) { ?>

        <div class="col-sm-3"></div>
        
        <div class="col-sm-6" id="logo">
          <a href="<?php echo $home; ?>craftpaper/"><img src="<?php echo $craftpaper; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a>
        </div>
        <div class="col-sm-3"></div>

      <?php } else { ?>

        <div class="col-sm-3">
          <a href="<?php echo $home; ?>ecopaper/"><img src="<?php echo $ecopaper; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
        </div>
        <div class="col-sm-6" id="logo">
          <?php if ($logo) { ?>
              <a href="<?php echo $home; ?>polkadot/kollekcii/"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
              
              
          <?php } else { ?>
            <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
          <?php } ?>
        </div>
        <div class="col-sm-3">
          <a href="<?php echo $home; ?>craftpaper/"><img src="<?php echo $craftpaper; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
        </div>

      <?php } ?>


        <div class="col-sm-3"><?php echo $search; ?></div>
        
      
      
      
    </div>
  </div>
</header>

<div class="container">
  <nav id="menu" class="navbar">
    <div class="navbar-header"> <!-- <span id="category" class="visible-xs"><?php echo $text_category; ?></span> -->
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        
        <li><a href="<?php echo $base; ?>index.php?route=product/category&path=59_20">Polkadot</a></li>
        
          <li><a href="<?php echo $base; ?>index.php?route=product/category&path=124">EcoPaper</a></li>
        <li><a href="<?php echo $base; ?>index.php?route=product/category&path=178">CraftPaper</a></li>
        <li>
          <a href="#" title="<?php echo $text_account; ?>" class="dropdown-toggle" data-toggle="dropdown"> 
            <span>Блог</span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="http://polkadot-su.blogspot.ru/" title="Ссылка на другой сайт">Polkadot</a></li>
            <li><a href="https://ecopaper-su.blogspot.ru/" title="Ссылка на другой сайт">EcoPaper</a></li>
            <li><a href="https://craftpaper-su.blogspot.ru" title="Ссылка на другой сайт">CraftPaper</a></li>
          </ul>
          
        </li>
        <li><a href="<?php echo $base; ?>index.php?route=information/information&information_id=6">Оплата/Доставка</a></li>
        <li><a href="<?php echo $base; ?>index.php?route=information/information&information_id=3">Где купить?</a></li>
        <li><a href="<?php echo $base; ?>index.php?route=information/information&information_id=5">Сотрудничество</a></li>
        <li><a href="<?php echo $base; ?>index.php?route=information/contact">Контакты</a></li>
        
       <!--   <li class="dropdown"><a href="<?php echo $account; ?>" title="<?php echo $text_account; ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_account; ?></span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <?php if ($logged) { ?>
            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
            <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li>
            <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
            <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
            <?php } else { ?>
            <li><a href="<?php echo $register; ?>"><?php echo $text_register; ?></a></li>
            <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
            <?php } ?>
          </ul>
          </li> -->
          
          <li id="cart-menu" class="dropdown">
               <?php echo $cart; ?>
        </li>
         
      </ul>
    </div>
  </nav>
  
</div>

