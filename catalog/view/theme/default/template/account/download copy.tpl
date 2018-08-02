<?php echo $header; ?>
<div class="container">
  <ul class="breadcrumb hidden">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" style="text-align: center;"><?php echo $content_top; ?>
      <h3><?php echo $heading_title; ?></h3>
      
      <p>Ссылки на Яндекс.Диск</p>
      <div id="download">
          <p><a href="https://yadi.sk/d/WIE-9zvSkn5CF">Изображения</a></p>
          <p><a href="https://yadi.sk/d/BAM1NI9btYBQC">Прайс-листы</a></p>
      </div>
     
      <div class="buttons clearfix hidden">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php echo $content_bottom; ?>
    </div>
    </div>
</div>
<?php echo $footer; ?>