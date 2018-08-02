</div>

			<?php if (isset ($ya_metrika_active) && $ya_metrika_active){ ?>
				<?php echo $yandex_metrika; ?>
				<script type="text/javascript">
					var old_addCart = cart.add;
					cart.add = function (product_id, quantity)
					{
						var params_cart = new Array();
						params_cart['name'] = 'product id = '+product_id;
						params_cart['quantity'] = quantity;
						params_cart['price'] = 0;
						old_addCart(product_id, quantity);
						metrikaReach('metrikaCart', params_cart);
					}

					$('#button-cart').on('click', function() {
						var params_cart = new Array();
						params_cart['name'] = 'product id = '+ $('#product input[name="product_id"]').val();
						params_cart['quantity'] = $('#product input[name="quantity"]').val();
						params_cart['price'] = 0;
						metrikaReach('metrikaCart', params_cart);
					});

					function metrikaReach(goal_name, params) {
					for (var i in window) {
						if (/^yaCounter\d+/.test(i)) {
							window[i].reachGoal(goal_name, params);
						}
					}
				}
				</script>
			<?php } ?>
			<footer >
  <div class="container">
      <div class="navbar-inner">
    <div class="row hidden">
      <?php if ($informations) { ?>
      <div class="col-sm-3">
        <h5><?php echo $text_information; ?></h5>
        <ul class="list-unstyled">
          <?php foreach ($informations as $information) { ?>
          <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <?php } ?>
      <div class="col-sm-3">
        <h5><?php echo $text_service; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
          <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
          <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo $text_extra; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
          <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
          <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
          <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo $text_account; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
          <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
          <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
          <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
        </ul>
      </div>
    </div>
    
    <p style="text-align:center;"><?php echo $powered; ?></p>
    <p style="text-align:center;"><?php echo $powerede; ?></p>
    <p style="text-align:center;"><?php echo $poweredc; ?></p>
   </div>
  </div>
</footer>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->


						 <style type="text/css">
							#ToTopHover {
							cursor: pointer;
							background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAABmCAYAAABm4qluAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OThENzgzMjVCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OThENzgzMjZCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OEQ3ODMyM0I3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5OEQ3ODMyNEI3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pl4ggucAAAtuSURBVHjazFwLcBbV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) no-repeat left -51px;width: 51px;height: 51px;display: block;overflow: hidden;float: left;opacity: 0;-moz-opacity: 0;filter: alpha(opacity=0);}
							#ToTop {display: none;text-decoration: none;position: fixed;bottom: 20px;right: 20px;overflow: hidden;width: 51px;height: 51px;border: none;text-indent: -999px;background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAABmCAYAAABm4qluAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OThENzgzMjVCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OThENzgzMjZCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OEQ3ODMyM0I3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5OEQ3ODMyNEI3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pl4ggucAAAtuSURBVHjazFwLcBbVFb5ZIZDwNIYKGhigIkhCgDERFeqjNVowalWw6DhW7TiObX3X1kdja6K2tL6mtWOnRcVHrcUHKtVSRC0vDSqvIFYRTCBpi5GHRgiQhMRz5FvZuTn37u7dzePMfENm///f3W/vPed859y7ZJSXl6uUrBfhcMKRhMGEgYRsQk9CBqGN0ELYQ/iMUE+oI2zFMScrKyv7+u8eCQkcQhhJyCcMB4EoNjTw9xeELYT1hI2EJtebcSWTSRhPKMJoJLF+eBiM7YTVhFWExs4gM45wEmGQSt8OI5xGKCYsI6wktHYEmQGE7xKOiXmD++Evca7H1zoTo/UK/Cs1MuzUMyL4BDtyLRy7Hv6wD083A0GCp1UuIQ++09dyPvbDSwnzCB+lQYZH4nu4EZNVE9YSNoFAmH2If7Nxw+x/owie8F3+zoUYoXeTkCkEEc/wOd/8UkKNo4+wk78PHEGYQhgrfI+vX4oHutyFzBgLkV2ERYQ1KTr//whzCaMJZxByhO+UIHS/E4cM+8i5BiKbCS8SdqiOsQ/hc6WGYDOV8DlhgzR8uvUnXGDwkUrCEx1IxLfdhL8TXjNMufOgMkLJnInQqNsKwgJIks6ypZjOuvUmnK3PLJ1MPuasbiw3FqqusWUIELpxwJhkIsOC8NuGIZ+H5OdqOcgzrvYSpI5uUyoqKvpJZMZDTujGI7IzwY1wHrmCcHqCc+wl/COgJHzLCo6OF1C/kyzJMAmRmbjoCQitrsb3UiUcn0ijkx0kM0IQjvwU/p3g4t9E5u4dODYZ+s7VFhOatWN9/BDukykw5JPNCYiYwvvxCQjtMASDAp9MJgos3VY7XnCEhUiQ0Hcczy/dVx5NtQEeiqv+gsNtdLgQJ7LpIUR8+xamXVyrE5I2R+KhnlbCBvPKbocRuRhzOKqVOIxQCwSubsM8Q9lb6+jsptpkmxBWgyMU14e2CMcGeYaC69MYJx4FH8m0lAl/IfwzxIemxrjmduHhZHsofnT7IuJJjw5x9o8gGLnafBsFlskmQRdGFaJ6iM704Dx6zb43IpEZwu9924D6JNg6YkIvW85ZHJHQPoHMIZ6gmVot8zsOkWeECyoUVkkJtQldmwypBMgIEYVhRDZZiAQJLUxAKEMqXzxpuCzOPDqEyH8Jz4UQ8e1NwpIIhKRquKdwvMVT7fu8GWgHSRXo+SFEnlLxOpGvRyBUKBzvKzzwJg/1tG65hgj3isGf6kAkbqL1CS02fLbeoMUOFVxhL5P5RPjyUIPTrcE0atJ8xJWIb28QXtUeFGuw5w2RVbq/bT0M2X4YpLt0ovcwNWeixpibUl9gOc5bimafKSd5UBztVAGT2Yqn2kerEVhr/ccSsR6B4EuzwbEK6qPO8p0hQu3FubHWw9OX6paJIRf+P5JX2lYbkucmCP7C97LTj9XrDOJxsOpexlF2nBQoysrK2rzAtPlMyDcndzMyk7Uy3Jc264Nlc5OSO+zHION3B2NfKRKOr6NRadBbTSsNanmqQVl3pvVAlNOzfjOURLu+2R5D8uIEdXYXk+FVgSOF4ytoVHZIZPzQKFVxY1ARdoVNhKyRCrSlegLS5f98Ja/Lc60+pQuIlBr6APP11OAZSubnlLzKexq6L1md4CPTCOcgqurG9VCNJA0k22iRE9xwu9wgKdIw9o0fEI4zfL7Y0DuzLgO+i9pe6g8PQltpDTTVthRIDEBjo9hyX5UQpSouGV/8NaMV5Al1D8/pfMj0tZAicbQan5PXWcbjPLYUsNhGJAoZvwnBNc+5QvZVKJImABxhPgYp/nsXnLQN5DMhYnMg40eo8O0qLZjyq6I4WhTjRdPHUMbmWb53GFAcUBbNCCYertcrxsh9CiLVUaNGVGNlOgf9rRNVtDZspqWfENZK4qbHsohtr9hk/CFfDpV9HOZ6vxQj2R4UfytcgorrFi0WdrwK/BbUQT6mn8sotGDU/Z0anydJTklsNwQqY6A6uLlnECJTLyQ9fyfgfvjRHjx5f9PQ9rQybVrWhBvPQUIdAoJZcP5W+EIDRiIDJXtzWjeQlExPRK4S1BpDIv6uEEpYYYRWY9q+qRLs13Qlk4UwzU3BUQkfSC4eRgkUO+/LecHFd1zI8BP9oZLXQZMat7iuVgdawI9ZBG9iMtzcuEHJuzhs1hzotmTGuNbPodJnQVWkRoZD76+ho8JCdhXAN1CPiLcfQaAPIt1wqG/TrhDfjiX8mXB7sDxOQuZUwq9CMr6/5lIZIdlxY3FJQCkXwf8mG2oXjoj3E36LaedMhgukXxouopCpH0GecTF28teAsahjpNVnvv4teKCPu5A5xUKEmwh/QOmalr0PP+E909cruTl+DUL3M6Z6QjJ+SuUGIqsQzearjrElOP/rhs9vMjVXJDLfwPyUCqW/EX6i4u8TiGs88j8j/NFwzxVKaE5KZG5Wco+Zl8DvVQlePHCwRwkPCsd55ewXeqjXyZRgzuq2FhGlK2yOkjeesivMNJHhkvgq4Ue8C7BMJVuHyVPJtjXeqeTm5KUVFRW5EplpkBO6PaAObKB2tWMRTq9PcA7ugd8tSJv+wdHxAup3piUZJiFyDy56EUKrq3HrS9p/cw7vNQuSKRKEYxukhKtxr+A+ray+BPrO1WYLPYFDfb3oBZSwbquV+25AJvI7gwTiEbrR8by1hvxzhk8mW8mt0BccL1gEIraGHu9N+7Hj+aX7KqCpNpjJHIVEqTtcpcOFjoajRlmcugzTLq69JyRtjsSFnpK3c6xV8V9eKIZey4nxm2scRqgJAle3CZ6S1yyrHHzkXkttstlSMV7m4EPSezsjPUMTYlOME58Y4iMrMJ3uCfGhm2Jcc4tqv1fgq63A0uslUfdoTrGIUrbluEmuNufiuyb7PnRhFNsuhOiv9mhmCTX7rohEfqPklQG2ZahPglu25uI3JpsekVCjQKanaVtjawpEblZy0/vZFAi1qvavwBi3NXoJiFRaiAQJPZCAkHFbY7vhsvjASSFEuPS9TUVbhniS8HAEQlJ7Kku4h2YP7SGdda6hAr0zhMh1Kl4n8qEIhKTN2znCfTQyma3Cl4cLx7YhBLcasvJ1yu0twYcgICV71aDF8oRp1sAHpHeGCw1ONx/laqPmI9eqZK87/onwey13vISiUNrPM144VuMZsv1EZV4RW4hmwz5ErRtUggWigD2OabwfIbzcUN3yPR8vSTDum23AU83RaoRiS7unEu2g2pQbHLwCUI1pa7IxghtwbqzyMIxS3XJWyIU/UMl2zJqsKiTPnSX4C99LnX/wX8KPTlDdZ+OcbxxlpXdtFgW3Nb4lNC14Cl7RzchcIvjybkS9r4eL+7dSh/1U1fnbskw2GnlHtwU0KvV6q2meQS1z5BrYxURYBdwqqAFWGk9IfbMGQ/I6AvG+K417bvnC8adpVOokMv7oSFUcbwm+vIuI8P7QGYYC7VE9AelZ/i5Br7H9SB1YDOpsIrcY+gB36alBkvrVUL7SK/NXo/vSvxN8hH31diW/r8PKfaUkDSTjUD3L8Nnp8K1JHURkLLTaBYbPZ0O3tTPbMiC/u9JXyf1hbuU+COHJmqomBRK8JnQRwq9pif0pEFVxyfjij8PfT5W8rZHnNK/p8PrJy+i3xdFqHqLUNIz4AMt3Z9uIRCHjNyG45rnDoKS56isFOMK8DX1Vgy5Kozq4EzBLHdzSyG9bcFv4qAhNv1kQoSopGTZeNL0K3ZZxlu8NA6YHuij71MFNDb1VvPcKqtGeeifKl+NsN2FleqU6sI5zsYrWhs1Wbi9FNGJGzInY9opNxh9y9qMFiDalhn6BqzVAwT+tHP6XCNctWvWIZn+FGOUNOwWOo9CEUV+EQPKJ65NIunluJ0L489BwBegfjIQ47aPa/weHjRiBGkS/dUpefI1tXwowAKeGqGOaRl1lAAAAAElFTkSuQmCC) no-repeat left top;}
						</style>
						<script type="text/javascript">
						/* UItoTop jQuery */
						jQuery(document).ready(function(){$().UItoTop({easingType:'easeOutQuint'});});
						(function($){
							$.fn.UItoTop = function(options) {
								var defaults = {
									text: 'To Top',
									min: 200,
									inDelay:600,
									outDelay:400,
									containerID: 'ToTop',
									containerHoverID: 'ToTopHover',
									scrollSpeed: 1600,
									easingType: 'linear'
								};
								var settings = $.extend(defaults, options);
								var containerIDhash = '#' + settings.containerID;
								var containerHoverIDHash = '#'+settings.containerHoverID;
								$('body').append('<span id="'+settings.containerID+'">'+settings.text+'</span>');
								$(containerIDhash).hide().click(function(event){
									$('html, body').animate({scrollTop: 0}, settings.scrollSpeed);
									event.preventDefault();
								})
								.prepend('<span id="'+settings.containerHoverID+'"></span>')
								.hover(function() {
										$(containerHoverIDHash, this).stop().animate({
											'opacity': 1
										}, 600, 'linear');
									}, function() { 
										$(containerHoverIDHash, this).stop().animate({
											'opacity': 0
										}, 700, 'linear');
									});			
								$(window).scroll(function() {
									var sd = $(window).scrollTop();
									if(typeof document.body.style.maxHeight === "undefined") {
										$(containerIDhash).css({
											'position': 'absolute',
											'top': $(window).scrollTop() + $(window).height() - 50
										});
									}
									if ( sd > settings.min ) 
										$(containerIDhash).fadeIn(settings.inDelay);
									else 
										$(containerIDhash).fadeOut(settings.Outdelay);
								});
						};
						})(jQuery);
						</script>
                        
</body></html>