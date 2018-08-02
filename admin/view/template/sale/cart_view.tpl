<?php echo $header; ?><?php echo $column_left; ?>

<div id="content" class="full-cart">
	
	<p></p>
	<span class="cart-view"><?php echo $customer; ?></span>

	<div class="modal fade" id="pr-coupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title" id="myModalLabel">Добавление купона</h4>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo $pr_coupon; ?>" id="form-coupon" method="post">
	        	
	        	<input type="hidden" name="type" value="P">

	        	<?php foreach ($product as $produc) { ?>
					<input type="hidden" name="coupon_product[]" value="<?php echo $produc['product_id']; ?>">
				<?php } ?>

				<input type="hidden" name="total" value="0">
				<input type="hidden" name="shipping" value="0">
				<input type="hidden" name="uses_total" value="1">
				<input type="hidden" name="uses_customer" value="1">
				<input type="hidden" name="status" value="1">
				<input type="hidden" name="letter" value="1">
				<input type="hidden" name="email" value="<?php echo $email; ?>">
				<input type="hidden" name="customer" value="<?php echo $customer; ?>">
				<input type="hidden" name="logged" value="1">


	        	<div class="form-group required">
	                
	                <div class="col-sm-8">
	                  <input type="text" name="name" placeholder="Название купона" id="input-name" class="form-control" />
	                  
	                </div>
              	</div>
              	<br/>
              	<div class="form-group required">
	                
	                <div class="col-sm-8">
	                  <input type="text" name="code" placeholder="Код купона" id="input-code" class="form-control" />
	                  
	                </div>
              	</div>
              	<br/>
              	<div class="form-group required">
	                
	                <div class="col-sm-8">
	                  <input type="text" name="discount" placeholder="%" id="input-discount" class="form-control" />
	                  
	                </div>
              	</div>
              	<br/>

	        	<div class="form-group">
	                <label class="col-sm-8 control-label">Суммировать с программой лояльности</label>
	                <div class="col-sm-4">
	                  <label class="radio-inline">
	                    
	                    <input type="radio" name="sum" value="1" checked="checked" />
	                    
	                    
	                    
	                    Да
	                  </label>
	                  <label class="radio-inline">
	                    
	                    <input type="radio" name="sum" value="0" />
	                    Нет
	                  </label>
	                </div>
              	</div>
              	<div class="form-group">
	                <label class="col-sm-2 control-label" for="input-date-start">Дата начала</label>
	                <div class="col-sm-5">
	                  <div class="input-group date">
	                    <input type="text" name="date_start" value="<?php echo $date_start; ?>" data-date-format="YYYY-MM-DD" id="input-date-start" class="form-control" />
	                    <span class="input-group-btn">
	                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
	                    </span></div>
	                </div>
              	</div>
              	<div class="col-sm-5"></div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label" for="input-date-end">Дата окончания</label>
	                <div class="col-sm-5">
	                  	<div class="input-group date">
		                    <input type="text" name="date_end" value="<?php echo $date_end; ?>" data-date-format="YYYY-MM-DD" id="input-date-end" class="form-control" />
		                    <span class="input-group-btn">
		                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
		                    </span>
	                	</div>
	                </div>
	            </div>
	            <div class="col-sm-5"></div>

	        </form>
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" form="form-coupon" class="btn btn-primary">Создать купон</button>
	      </div>
	    </div>
	  </div>
	</div>

	<button class="btn btn-primary btn-lg" id="button-coupon" data-toggle="modal" data-target="#pr-coupon">
		Создать купон
	</button>
	
	<table class="table">
		<thead>
			<tr>
				<td>Товар</td>
				<td>Артикул</td>
				<td>Кол-во</td>
				<td>Цена</td>
				<td>Сумма</td>
			</tr>
		</thead>
		<tbody>
		
			<?php foreach ($product as $produc) { ?>
				<tr>
					<td><?php echo $produc['name']; ?></td>
					<td><?php echo $produc['art']; ?></td>
					<td><?php echo $produc['quantity']; ?></td>
					<td><?php echo $produc['price']; ?></td>
					<td><?php echo $produc['sum']; ?></td>
				</tr>

			<?php } ?>
		</tbody>
	</table>
</div>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});
//--></script>