<div class="list-group" id="account-menu">
  
  <?php if ($action) { ?>
  <a class="action" href="<?php echo $baseurl; ?>index.php?route=information/information&information_id=8">Акции</a>
  <?php } ?>

  <p>Моя учётная запись</p>
    
  <a href="<?php echo $baseurl; ?>index.php?route=information/information&information_id=7" class="list-group-item">Программа лояльности</a> 
  <a href="<?php echo $baseurl; ?>index.php?route=account/simpleedit" class="list-group-item">Основные данные</a>
  <a href="<?php echo $password; ?>" class="list-group-item">Изменить мой пароль</a>
  <a href="<?php echo $address; ?>" class="list-group-item">Изменить мои адреса</a>
  
  <p>Мои заказы</p>

  <a href="<?php echo $order; ?>" class="list-group-item"><?php echo $text_order; ?></a> 
  <a href="<?php echo $download; ?>" class="list-group-item"><?php echo $text_download; ?></a>

  <p>Подписка</p>

  <a href="<?php echo $newsletter; ?>" class="list-group-item">Редактировать подписку</a>
  
  
</div>
