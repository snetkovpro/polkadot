<table class="list">
	<thead>
	  <tr>
		<td class="center numbers">№</td>
		<td class="center date"><?php echo $column_date_start; ?></td>
		<td class="center period"><?php echo $column_period; ?></td>
		<td class="center date"><?php echo $column_date_next; ?></td>
		<td class="center name"><?php echo $column_cron_name; ?></td>
		<td class="center sendto"><?php echo $column_send_to; ?></td>
		<td class="center email-total"><img src="view/image/contacts/customers20.png" title="<?php echo $column_email_total; ?>" /></td>
		<td class="center send-total"><img src="view/image/contacts/replied20.png" title="<?php echo $column_send_total; ?>" /></td>
		<td class="center cron-count"><img src="view/image/contacts/count20.png" title="<?php echo $column_cron_count; ?>" /></td>
		<td class="center cron-status"><?php echo $column_cron_status; ?></td>
		<td class="center status"><?php echo $column_status; ?></td>
		<td class="center action"><?php echo $column_action; ?></td>
	  </tr>
	</thead>
	<tbody>
	<?php if ($crons) { ?>
		<?php foreach ($crons as $cron) { ?>
		<tr id="cron_<?php echo $cron['cron_id']; ?>">
			<td class="center"><?php echo $cron['cron_id']; ?></td>
			<td class="center td-cdatestart"><?php echo $cron['date_start']; ?></td>
			<td class="center td-cperiod"><?php echo $cron['period']; ?></td>
			<td class="center td-cdatenext"><?php echo $cron['date_next']; ?></td>
			<td class="left">
				<div class="cname"><?php echo $cron['name']; ?></div>
				<div class="cron-icons">
				<?php if($cron['send_region']) { ?>
					<?php if($cron['invers_region']) { ?>
					<img class="invers-img" src="view/image/contacts/internet16.png" title="<?php echo $cron['country']; ?> - <?php echo $cron['zone']; ?>" />
					<?php } else { ?>
					<img src="view/image/contacts/internet16.png" title="<?php echo $cron['country']; ?> - <?php echo $cron['zone']; ?>" />
					<?php } ?>
				<?php } ?>
				<?php if($cron['products']) { ?>
					<img src="view/image/contacts/nvtv16.png" title="<?php echo $column_products; ?>" />
				<?php } ?>
				<?php if($cron['attachments']) { ?>
					<img src="view/image/contacts/attachment16.png" title="<?php echo $column_attachments; ?>" />
				<?php } ?>
				<?php if($cron['unsub_url']) { ?>
					<img src="view/image/contacts/postman16.png" title="<?php echo $column_unsub_url; ?>" />
				<?php } ?>
				<?php if($cron['control_unsub']) { ?>
					<img src="view/image/contacts/spy16.png" title="<?php echo $column_control_unsub; ?>" />
				<?php } ?>
				<?php if($cron['language_id']) { ?>
					<img src="view/image/contacts/language16.png" title="<?php echo $cron['language']; ?>" />
				<?php } ?>
				<?php if((int)$cron['fdate_start'] || (int)$cron['fdate_end']) { ?>
					<img src="view/image/contacts/calendar16.png" title="<?php echo $cron['fdate_start']; ?> - <?php echo $cron['fdate_end']; ?>" />
				<?php } ?>
				<?php if($cron['static'] == 'static') { ?>
					<img src="view/image/contacts/privacy.svg" title="<?php echo $cron['static']; ?>" />
				<?php } ?>
				<?php if($cron['limit_end']) { ?>
					<img src="view/image/contacts/humans16.png" title="<?php echo $cron['limit_start']; ?> - <?php echo $cron['limit_end']; ?>" />
				<?php } ?>
				</div>
			</td>
			<td class="left">
			<?php if ($cron['invers']) { ?>
				<div class="invers-to"><?php echo $cron['send_to']; ?> <?php if($cron['send_data']) { ?>(<?php echo $cron['send_data']; ?>)<?php } ?></div>
			<?php } else { ?>
				<div><?php echo $cron['send_to']; ?> <?php if($cron['send_data']) { ?>(<?php echo $cron['send_data']; ?>)<?php } ?></div>
			<?php } ?>
			</td>
			<td class="center"><?php echo $cron['email_total']; ?></td>
			<td class="center"><?php echo $cron['send_total']; ?></td>
			<td class="center">
				<?php if($cron['cron_count']) { ?>
					<a onclick="viewhistory('<?php echo $cron['cron_id']; ?>');"><?php echo $cron['cron_count']; ?></a>
				<?php } ?>
			</td>
			<td class="center td-cstatus">
				<?php if($cron['cron_status']) { ?>
					<?php echo $cron['text_cron_status']; ?>
				<?php } ?>
			</td>
			<td class="center">
				<?php if($cron['status']) { ?><img src="view/image/success.png" /><?php } else { ?><img src="view/image/warning.png" /><?php } ?>
			</td>
			<td class="right">
				<a onclick="viewcronlogs('<?php echo $cron['cron_id']; ?>');" class="btn btn-mview" title="<?php echo $text_view_logs; ?>"></a>
				<a onclick="editcron('<?php echo $cron['cron_id']; ?>');" class="btn btn-medit" title="<?php echo $text_edit; ?>"></a>
				<a onclick="delcron('<?php echo $cron['cron_id']; ?>');" class="btn btn-mremove" title="<?php echo $text_delete; ?>"></a>
			</td>
		</tr>
		<?php } ?>
	<?php } else { ?>
		<tr class="nocrons">
		  <td class="center" colspan="12"><?php echo $text_no_data; ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php if($pagination) { ?>
<div class="pagination-block">
	<div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
	<div class="col-sm-6 text-right pagination-results"><?php echo $results; ?></div>
</div>
<?php } ?>