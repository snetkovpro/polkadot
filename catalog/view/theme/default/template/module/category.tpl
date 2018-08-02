<div class="list-group">
    
  <?php foreach ($categories as $category) { ?>
  
      
      

      <?php if ($category['category_id'] == $category_id) { ?>
      <?php foreach ($category['children'] as $child) { ?>
        
          <?php if ($islogged || $child['guest_status']) { ?>
              <?php if (($child['category_id'] == $child_id) && ($child_lv3_id == 0)) { ?>
                        <a href="<?php echo $child['href']; ?>" class="list-group-item active"><?php echo $child['name']; ?></a>
                      <?php } else { ?>
                      <a href="<?php echo $child['href']; ?>" class="list-group-item"><?php echo $child['name']; ?></a>
                      <?php } ?>
          <?php } ?>   
          <?php if(isset($child['children_lv3']) && count($child['children_lv3'])>0){ ?>
                                 
                                   <?php foreach ($child['children_lv3'] as $child_lv3) { ?>
                                   
                                      <?php if ($islogged || $child_lv3['guest_status']) { ?>
                                       <?php if (($child_lv3['parent_id'] == $child['category_id']) && ($child['category_id'] == $child_id)) { ?>
                                             <?php if ($child_lv3['category_id'] == $child_lv3_id) { ?>
                                              <a href="<?php echo $child_lv3['href']; ?>" class="list-group-item active">&nbsp;&nbsp;&nbsp;<?php echo $child_lv3['name']; ?></a>
                                            <?php  } else { ?>
                                                <a href="<?php echo $child_lv3['href']; ?>" class="list-group-item">&nbsp;&nbsp;&nbsp;<?php echo $child_lv3['name']; ?></a>
                                            <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
      <?php } ?>
      
      <?php } ?>
    <?php } ?>
      

  
  <?php } ?>
</div>
