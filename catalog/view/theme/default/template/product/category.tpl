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
        <div class="col-md-6" id="conventions">
          <span class="violet">мин.</span><span> - минимальное количество для заказа этого товара</span><br><span class="violet">уп.</span><span> - количество единиц товара в упаковке</span>
        </div>
      </div>
      <br />
      <div class="row equal">

        

        <?php foreach ($products as $product) { ?>

        
        


        
        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <?php if ($product['discount'] != 0) { ?>
              <div class="discount">
                -<?php echo $product['discount']; ?>%
              </div>
            <?php } ?>
          <div class="product-thumb">
            
            
            <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
            <div>
            <?php if ($register) { ?>
              <div class="caption" style="min-height:250px;">
            <?php } else { ?>
              <div class="caption">
            <?php } ?>
            
                <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                <p><?php echo $product['description']; ?></p>
                

                <!---price section-->

                <p class="price">

                    <?php if ($register) { ?>
                     
                    
                      
                    
                      <?php if ($product['percent_opt'] == 0) { ?>
                        <span class="price-old">РРЦ <?php echo $product['retail']; ?> /</span> 
                        <span class="price-new">Опт <?php echo $product['special']; ?></span>
                      <?php } else { ?>
                        <span class="price-old">РРЦ <?php echo $product['retail']; ?> /</span> 
                        <span class="price-new">Опт </span><span class="price cross"><?php echo $product['special']; ?> </span>/
                        <span class="price-new"><?php echo $product['percent_opt']; ?></span>
                      <?php } ?>
                  
                    <?php } else { ?>

                      <?php if ($product['percent_roz'] == 0) { ?>
                        <span class="price"><?php echo $product['retail']; ?> </span> 
                        
                      <?php } else { ?>
                        <span class="price-old cross"><?php echo $product['retail']; ?> </span> 
                        <span class="price"><?php echo $product['percent_roz']; ?></span>
                      <?php } ?>

                    <?php } ?>



                  
                </p>
                
                <div id="minpack">
                  <?php if ($product['minimum'] > 1) { ?>
                  <span class="price priceadd">
                      мин: <?php echo $product['minimum']; ?>
                  </span>
                  <?php } ?>
                  <?php if ($product['pack'] > 1) { ?>
                  <span class="price priceadd">
                      уп: <?php echo $product['pack']; ?>
                  </span>
                  <?php } ?>
                </div>

                
                
              </div>

              <?php if ($register || $product['guest_status']) { ?>
                <div class="button-group price-group">
                    <?php if ($product['stock']) { ?>
                 <button type="button" class="but counterBut dec"><img src="<?php echo $baseurl; ?>image/arrow-back.png" alt=""></button>
                 <?php if ($product['minimum'] > 1) { ?>
                        <input name="quantity" class="form-control quantity fieldCount field" type="text" pattern="[0-9]{0,3}" value="<?php echo $product['minimum']; ?>" data-min="1" data-max="99">
                  <?php } else { ?>
                        <input name="quantity" class="form-control quantity fieldCount field" type="text" pattern="[0-9]{0,3}" value="1" data-min="1" data-max="99">
                  <?php } ?>
                        <button type="button" class="but counterBut inc"><img src="<?php echo $baseurl; ?>image/arrow-forward.png" alt=""></button>
                  <button class="cart" type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', $('#quantity').val());"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span></button>
                  <?php } else { ?>
                  <div class="stock"><div>Нет в наличии</div></div>
                  <?php } ?>
                </div>
              <?php } ?>

            </div>
          </div>

          

        </div>
        
        

        
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