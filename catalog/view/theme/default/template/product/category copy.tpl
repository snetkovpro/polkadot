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
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <?php if ($thumb || $description) { ?>
      <div class="row hidden">
        <?php if ($thumb) { ?>
        <div class="col-sm-2 hidden"><img src="<?php echo $thumb; ?>" alt="<?php echo $heading_title; ?>" title="<?php echo $heading_title; ?>" class="img-thumbnail" /></div>
        <?php } ?>
        <?php if ($description) { ?>
        <div class="col-sm-10 hidden"><?php echo $description; ?></div>
        <?php } ?>
      </div>
      <?php } ?>
      
      
      
      <?php if ($products) { ?>
      <p class="hidden"><a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a></p>
      <div class="row">
          
        <div class="col-md-5 layout">
          <div class="btn-group hidden-xs">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo $button_list; ?>">
              <img src="<?php echo($baseurl); ?>image/list_icon.png" alt="">
            </button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo $button_grid; ?>">
              <img src="<?php echo($baseurl); ?>image/grid_icon.png" alt=""></button>
          </div>
        
          <label class="control-label" for="input-limit"><?php echo $text_limit; ?></label>
        
        
          <div class="col-sm-4">
          <select id="input-limit" class="form-control" onchange="location = this.value;">
            <?php foreach ($limits as $limits) { ?>
            <?php if ($limits['value'] == $limit) { ?>
            <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
            <?php } ?>
            <?php } ?>
          </select>
        </div>
        </div>
      </div>
      <br />
      <div class="row equal">
        <?php foreach ($products as $product) { ?>
        <?php if ($customer_group_id) { ?>
        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="product-thumb">
            <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
            <div>
            <?php if ($opt) { ?>
              <div class="caption" style="min-height:250px;">
            <?php } else { ?>
              <div class="caption">
            <?php } ?>
            
                <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                <p><?php echo $product['description']; ?></p>
                <?php if ($product['rating']) { ?>
                <div class="rating">
                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                  <?php if ($product['rating'] < $i) { ?>
                  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } else { ?>
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } ?>
                  <?php } ?>
                </div>
                <?php } ?>
                <?php if ($product['price']) { ?>
                <p class="price">
                  <?php if (!$product['special']) { ?>
                  <?php echo $product['price']; ?>
                  <?php } else { ?>
                  <span class="price-old">РРЦ <?php echo $product['price']; ?> /</span> <span class="price-new">Опт <?php echo $product['special']; ?></span>
                  <?php } ?>
                  <?php if ($product['pack']) { ?>
                  <span>&nbsp; &nbsp;за упаковку</span>
                  <?php } ?>
                  <?php if ($product['tax']) { ?>
                  <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                  <?php } ?>
                </p>
                <?php } ?>
                <?php if ($product['minimum']) { ?>
                <p class="price priceadd">
                    <span style="text-align: left;">Минимальное количество для заказа этого товара: <?php echo $product['minimum'] ?></span>
                </p>
                <?php } ?>
                <?php if ($product['pack']) { ?>
                <p class="price priceadd">
                    <span class="priceadd">Этот товар продаётся упаковками, по <?php echo $product['pack'] ?> шт.</span>
                </p>
                <?php } ?>
              </div>
              <div class="button-group price-group">
                  <?php if ($product['stock']) { ?>

               <button type="button" class="but counterBut dec"><img src="<?php echo $baseurl; ?>image/arrow-back.png" alt=""></button>
                      <input name="quantity" class="form-control quantity fieldCount field" type="text" pattern="[0-9]{0,3}" value="1" data-min="1" data-max="99">
                      <button type="button" class="but counterBut inc"><img src="<?php echo $baseurl; ?>image/arrow-forward.png" alt=""></button>
                <button class="cart" type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span></button>
                <?php } else { ?>
                <div class="stock"><div>Нет в наличии</div></div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <?php } else if (!$customer_group_id && $product['guest_status']) { ?>
        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="product-thumb">
            <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
            <div>
              <div class="caption">
                <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                <p><?php echo $product['description']; ?></p>
                <?php if ($product['rating']) { ?>
                <div class="rating">
                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                  <?php if ($product['rating'] < $i) { ?>
                  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } else { ?>
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } ?>
                  <?php } ?>
                </div>
                <?php } ?>
                <?php if ($product['price']) { ?>
                <p class="price">
                  
                  <?php echo $product['price']; ?>
                  
                  
                  <?php if ($product['tax']) { ?>
                  <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                  <?php } ?>
                </p>
                <?php } ?>
                
                
              </div>
              <div class="button-group price-group">
                  <?php if ($product['stock']) { ?>
                    
                      <button type="button" class="but counterBut dec"><img src="<?php echo $baseurl; ?>image/arrow-back.png" alt=""></button>
                      <input name="quantity" class="form-control quantity fieldCount field" type="text" pattern="[0-9]{0,3}" value="1" data-min="1" data-max="99">
                      <button type="button" class="but counterBut inc"><img src="<?php echo $baseurl; ?>image/arrow-forward.png" alt=""></button>
                    <button class="cart" type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>', '<?php echo $customer_group_id; ?>');"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span></button>
                <?php } else { ?>
                <div class="stock"><div>Нет в наличии</div></div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
        <div class="col-sm-6 text-right"><?php echo $results; ?></div>
      </div>
      <?php } ?>
      <?php if (!$categories && !$products) { ?>
      <p><?php echo $text_empty; ?></p>
      <div class="buttons">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php } ?>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>

<script>
  function catalogItemCounter(field){
      
      var fieldCount = function(el) {

        var 
          // Мин. значение
          min = el.data('min') || false,

          // Макс. значение
          max = el.data('max') || false, 

          // Кнопка уменьшения кол-ва
          dec = el.prev('.dec'), 

          // Кнопка увеличения кол-ва
          inc = el.next('.inc');

        function init(el) {
          if(!el.attr('disabled')){
            dec.on('click', decrement);
            inc.on('click', increment);
          }

          // Уменьшим значение
          function decrement() {
            var value = parseInt(el[0].value);
            value--;

            if(!min || value >= min) {
              el[0].value = value;
            }
          };

          // Увеличим значение
          function increment() {
            var value = parseInt(el[0].value);
              
            value++;

            if(!max || value <= max) {
              el[0].value = value++;
            }
          };
          
        }

        el.each(function() {
          init($(this));
        });
      };

      $(field).each(function(){
        fieldCount($(this));
      });
    }
    
catalogItemCounter('.fieldCount');
</script>