<?php echo $header; ?>

<div class="container">
  <?php if ($information_id == 7 && $islogged || $information_id != 7) { ?>
    <div class="row"><?php echo $column_left; ?>
      <?php if ($column_left && $column_right) { ?>
      <?php $class = 'col-sm-6'; ?>
      <?php } elseif ($column_left || $column_right) { ?>
      <?php $class = 'col-sm-9'; ?>
      <?php } else { ?>
      <?php $class = 'col-sm-12'; ?>
      <?php } ?>
      <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
       <!-- <h1><?php echo $heading_title; ?></h1> -->
      <?php if ($information_id == 3) { ?>
        <div id="cities">
      <?php } else { ?>
          <div id="paydel">
      <?php } ?>
        <?php echo $description; ?>
        </div>
        <?php echo $content_bottom; ?></div>
      <?php echo $column_right; ?></div>
    </div>
  <?php } else { header('Location: http://' . $_SERVER['HTTP_HOST'] . '/login/'); exit(); } ?>

<?php echo $footer; ?>