<?php 
class ControllerMarketingContacts extends Controller {
	private $error = array();
	
	public function index() {
		$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
 
		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addStyle('view/stylesheet/contactsa.css');
		$this->document->addStyle('view/javascript/jquery/colorbox/colorbox.css');
		
		$this->document->addScript('view/javascript/jquery/colorbox/jquery.colorbox-min.js');
		
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['license'] = $this->model_marketing_contacts->checkLicense();
		
		$data['text_default'] = $this->language->get('text_default');
		$data['text_newsletter'] = $this->language->get('text_newsletter');
		$data['text_customer_all'] = $this->language->get('text_customer_all');
		$data['text_customer_select'] = $this->language->get('text_customer_select');
		$data['text_customer_group'] = $this->language->get('text_customer_group');
		$data['text_customer_noorder'] = $this->language->get('text_customer_noorder');
		$data['text_customer'] = $this->language->get('text_customer');
		$data['text_client_all'] = $this->language->get('text_client_all');
		$data['text_client_select'] = $this->language->get('text_client_select');
		$data['text_client_group'] = $this->language->get('text_client_group');
		$data['text_send_group'] = $this->language->get('text_send_group');
		$data['text_affiliate_all'] = $this->language->get('text_affiliate_all');
		$data['text_affiliate'] = $this->language->get('text_affiliate');
		$data['text_product'] = $this->language->get('text_product');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_manual'] = $this->language->get('text_manual');
		$data['text_fnewsletter'] = $this->language->get('text_fnewsletter');
		$data['text_fcustomer_all'] = $this->language->get('text_fcustomer_all');
		$data['text_fcustomer_select'] = $this->language->get('text_fcustomer_select');
		$data['text_fcustomer_group'] = $this->language->get('text_fcustomer_group');
		$data['text_fcustomer_noorder'] = $this->language->get('text_fcustomer_noorder');
		$data['text_fcustomer'] = $this->language->get('text_fcustomer');
		$data['text_fclient_all'] = $this->language->get('text_fclient_all');
		$data['text_fclient_select'] = $this->language->get('text_fclient_select');
		$data['text_fclient_group'] = $this->language->get('text_fclient_group');
		$data['text_fsend_group'] = $this->language->get('text_fsend_group');
		$data['text_faffiliate_all'] = $this->language->get('text_faffiliate_all');
		$data['text_faffiliate'] = $this->language->get('text_faffiliate');
		$data['text_fproduct'] = $this->language->get('text_fproduct');
		$data['text_fcategory'] = $this->language->get('text_fcategory');
		$data['text_fmanual'] = $this->language->get('text_fmanual');
		$data['text_sql_manual'] = $this->language->get('text_sql_manual');
		$data['text_select_all'] = $this->language->get('text_select_all');
		$data['text_unselect_all'] = $this->language->get('text_unselect_all');
		$data['text_wait'] = $this->language->get('text_wait');
		$data['text_close'] = $this->language->get('text_close');
		$data['text_no_data'] = $this->language->get('text_no_data');
		$data['text_new_newsletters'] = $this->language->get('text_new_newsletters');
		$data['text_new_group'] = $this->language->get('text_new_group');
		$data['text_start_import'] = $this->language->get('text_start_import');
		$data['text_move_newsletters'] = $this->language->get('text_move_newsletters');
		$data['text_view'] = $this->language->get('text_view');
		$data['text_delete'] = $this->language->get('text_delete');
		$data['text_save'] = $this->language->get('text_save');
		$data['text_run'] = $this->language->get('text_run');
		$data['text_new_template'] = $this->language->get('text_new_template');
		$data['text_group_edit'] = $this->language->get('text_group_edit');
		$data['text_error_license'] = $this->language->get('text_error_license');
		$data['text_version'] = $this->language->get('text_version');
		$data['text_dinamic'] = $this->language->get('text_dinamic');
		$data['text_static'] = $this->language->get('text_static');
		$data['text_nothing'] = $this->language->get('text_nothing');
		$data['text_unsubs'] = $this->language->get('text_unsubs');
		$data['text_unsubs_ok'] = $this->language->get('text_unsubs_ok');
		$data['text_unsub_remove'] = $this->language->get('text_unsub_remove');
		$data['text_check_info'] = $this->language->get('text_check_info');
		$data['text_pop_info'] = $this->language->get('text_pop_info');
		$data['text_limit_hour'] = $this->language->get('text_limit_hour');
		$data['text_limit_day'] = $this->language->get('text_limit_day');
		$data['text_check_mode1'] = $this->language->get('text_check_mode1');
		$data['text_check_mode2'] = $this->language->get('text_check_mode2');
		
		$data['error_close'] = $this->language->get('error_close');
		$data['editor_mode_alert'] = $this->language->get('editor_mode_alert');

		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_to'] = $this->language->get('entry_to');
		$data['entry_customer_group'] = $this->language->get('entry_customer_group');
		$data['entry_customer'] = $this->language->get('entry_customer');
		$data['entry_send_group'] = $this->language->get('entry_send_group');
		$data['entry_affiliate'] = $this->language->get('entry_affiliate');
		$data['entry_product'] = $this->language->get('entry_product');
		$data['entry_manual'] = $this->language->get('entry_manual');
		$data['entry_subject'] = $this->language->get('entry_subject');
		$data['entry_message'] = $this->language->get('entry_message');
		$data['entry_from_newsletter'] = $this->language->get('entry_from_newsletter');
		$data['entry_for_group'] = $this->language->get('entry_for_group');
		$data['entry_sql_table'] = $this->language->get('entry_sql_table');
		$data['entry_sql_email'] = $this->language->get('entry_sql_email');
		$data['entry_sql_firstname'] = $this->language->get('entry_sql_firstname');
		$data['entry_sql_lastname'] = $this->language->get('entry_sql_lastname');
		$data['entry_template_name'] = $this->language->get('entry_template_name');
		$data['entry_group_name'] = $this->language->get('entry_group_name');
		$data['entry_group_description'] = $this->language->get('entry_group_description');
		$data['entry_move_ingroup'] = $this->language->get('entry_move_ingroup');
		$data['entry_inversion'] = $this->language->get('entry_inversion');
		$data['entry_dopurl'] = $this->language->get('entry_dopurl');
		$data['entry_cron_name'] = $this->language->get('entry_cron_name');
		$data['entry_cron_start'] = $this->language->get('entry_cron_start');
		$data['entry_cron_period'] = $this->language->get('entry_cron_period');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_to_check'] = $this->language->get('entry_to_check');
		$data['entry_checke_unsub'] = $this->language->get('entry_checke_unsub');
		$data['entry_emnovalid_action'] = $this->language->get('entry_emnovalid_action');
		$data['entry_embad_action'] = $this->language->get('entry_embad_action');
		$data['entry_emsuspect_action'] = $this->language->get('entry_emsuspect_action');

		$data['help_icon'] = $this->language->get('help_icon');
		$data['help_embad'] = $this->language->get('help_embad');
		$data['help_emnovalid'] = $this->language->get('help_emnovalid');
		$data['help_emsuspect'] = $this->language->get('help_emsuspect');
		$data['help_emremove'] = $this->language->get('help_emremove');
		$data['help_dopurl'] = $this->language->get('help_dopurl');
		$data['help_retpath'] = $this->language->get('help_retpath');
		$data['help_subject'] = $this->language->get('help_subject');
		$data['help_cron_url'] = $this->language->get('help_cron_url');
		$data['help_bad_eaction'] = $this->language->get('help_bad_eaction');
		
		$data['button_send'] = $this->language->get('button_send');
		$data['button_check'] = $this->language->get('button_check');
		$data['button_cron'] = $this->language->get('button_cron');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_upload'] = $this->language->get('button_upload');
		$data['button_update'] = $this->language->get('button_update');
		$data['button_clear'] = $this->language->get('button_clear');
		$data['button_dellog'] = $this->language->get('button_dellog');
		$data['button_check_mode2'] = $this->language->get('button_check_mode2');
		
		$data['tab_send'] = $this->language->get('tab_send');
		$data['tab_template'] = $this->language->get('tab_template');
		$data['tab_groups'] = $this->language->get('tab_groups');
		$data['tab_newsletters'] = $this->language->get('tab_newsletters');
		$data['tab_checkmails'] = $this->language->get('tab_checkmails');
		$data['tab_crons'] = $this->language->get('tab_crons');
		$data['tab_log'] = $this->language->get('tab_log');
		$data['tab_statistics'] = $this->language->get('tab_statistics');
		$data['tab_setting'] = $this->language->get('tab_setting');
		$data['tab_mails'] = $this->language->get('tab_mails');
		
		$data['token'] = $this->session->data['token'];

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL')
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('marketing/contacts', 'token=' . $this->session->data['token'], 'SSL')
   		);

    	$data['cancel'] = $this->url->link('marketing/contacts', 'token=' . $this->session->data['token'], 'SSL');
		
		$data['total_mails_alarm'] = false;
		$data['total_mails_hour'] = false;
		$data['total_mails_day'] = false;
		
		if ($this->config->get('contacts_global_limith') && $this->config->get('contacts_global_limitd')) {
			$total_mails = $this->model_marketing_contacts->getCountMails();
			
			$data['total_mails_hour'] = $this->config->get('contacts_global_limith') - $total_mails['hour'];
			$data['total_mails_day'] = $this->config->get('contacts_global_limitd') - $total_mails['day'];
			
			if ($total_mails['hour'] >= $this->config->get('contacts_global_limith')) {
				$data['total_mails_alarm'] = true;
			}
			if ($total_mails['day'] >= $this->config->get('contacts_global_limitd')) {
				$data['total_mails_alarm'] = true;
			}
		}
		
		// Send //
		$data['text_info_panel'] = $this->language->get('text_info_panel');
		$data['text_tegi'] = $this->language->get('text_tegi');
		$data['text_none'] = $this->language->get('text_none');
		$data['text_select'] = $this->language->get('text_select');
		
		$data['text_save_template'] = $this->language->get('text_save_template');
		$data['text_template_name'] = $this->language->get('text_template_name');
		
		$data['entry_period'] = $this->language->get('entry_period');
		$data['entry_period_start'] = $this->language->get('entry_period_start');
		$data['entry_period_end'] = $this->language->get('entry_period_end');
		$data['entry_limit_emails'] = $this->language->get('entry_limit_emails');
		$data['entry_limit_start'] = $this->language->get('entry_limit_start');
		$data['entry_limit_end'] = $this->language->get('entry_limit_end');
		$data['entry_region'] = $this->language->get('entry_region');
		$data['entry_zone'] = $this->language->get('entry_zone');
		$data['entry_country'] = $this->language->get('entry_country');
		$data['entry_language'] = $this->language->get('entry_language');
		$data['entry_unsubscribe'] = $this->language->get('entry_unsubscribe');
		$data['entry_contrl_unsub'] = $this->language->get('entry_contrl_unsub');
		$data['entry_insert_products'] = $this->language->get('entry_insert_products');
		$data['entry_special'] = $this->language->get('entry_special');
		$data['entry_bestseller'] = $this->language->get('entry_bestseller');
		$data['entry_featured'] = $this->language->get('entry_featured');
		$data['entry_latest'] = $this->language->get('entry_latest');
		$data['entry_selected'] = $this->language->get('entry_selected');
		$data['entry_pselected'] = $this->language->get('entry_pselected');
		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_limit'] = $this->language->get('entry_limit');
		$data['entry_catselected'] = $this->language->get('entry_catselected');
		$data['entry_category'] = $this->language->get('entry_category');
		$data['entry_each'] = $this->language->get('entry_each');
		$data['entry_attach'] = $this->language->get('entry_attach');
		$data['entry_attach_cat'] = $this->language->get('entry_attach_cat');
		$data['entry_template'] = $this->language->get('entry_template');
		$data['entry_static'] = $this->language->get('entry_static');
		
		$data['help_dinamic'] = $this->language->get('help_dinamic');
		$data['help_static'] = $this->language->get('help_static');
		
		$data['spravka_static'] = $this->language->get('spravka_static');
		$data['spravka_tegi'] = $this->language->get('spravka_tegi');
		
		$this->load->model('setting/store');
		$data['stores'] = $this->model_setting_store->getStores();
		
		$data['customer_groups'] = $this->model_marketing_contacts->getCustomersGroups();
		$data['countries'] = $this->model_marketing_contacts->getShopCountries();
		$data['categories'] = $this->model_marketing_contacts->getAllsCategories();
		$data['templates'] = $this->model_marketing_contacts->getTemplates();
		$data['groups'] = $this->model_marketing_contacts->getSendGroups();
		
		$data['default_country_id'] = $this->config->get('config_country_id');
		
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		// Send //

		// MissingSend //
		$data['button_missresend'] = $this->language->get('button_missresend');
		$data['button_missremove'] = $this->language->get('button_missremove');
		$data['button_misstocomplete'] = $this->language->get('button_misstocomplete');
		$data['button_missclose'] = $this->language->get('button_missclose');
		$data['button_close'] = $this->language->get('button_close');
		
		$data['missing_send'] = array();
		$missing_send = $this->model_marketing_contacts->getMissingDataSend();
		
		if ($missing_send) {
			foreach ($missing_send as $msend) {
				$count_miss_emails = $this->model_marketing_contacts->getTotalEmailsToSend($msend['send_id']);
				
				$data['missing_send'][] = array(
					'send_id'    => $msend['send_id'],
					'send_alarm' => $this->language->get('missins_send_alarm'),
					'send_date'  => sprintf($this->language->get('missins_send_date'), $msend['date_added']),
					'send_title' => sprintf($this->language->get('missins_send_title'), utf8_substr(html_entity_decode($msend['subject'], ENT_QUOTES, 'UTF-8'), 0, 35) . '..'),
					'send_to'    => sprintf($this->language->get('missins_send_to'), $this->language->get('text_' . $msend['send_to'])),
					'send_count' => sprintf($this->language->get('missins_send_count'), $count_miss_emails, $msend['email_total'])
				);
			}
		}
		// MissingSend //
		
		// RunCrons //
		$data['run_crons'] = array();
		$run_crons = $this->model_marketing_contacts->getRunCron();
		
		if ($run_crons) {
			foreach ($run_crons as $run_cron) {
				$cron_info = $this->model_marketing_contacts->getCron($run_cron['cron_id']);
				if ($cron_info) {
					$cron_name = $cron_info['name'];
					
					$data['run_crons'][] = array(
						'cron_id'    => $run_cron['cron_id'],
						'cron_alarm' => sprintf($this->language->get('cron_send_alarm'), $run_cron['cron_id']),
						'cron_title' => sprintf($this->language->get('cron_send_title'), html_entity_decode($cron_name, ENT_QUOTES, 'UTF-8'))
					);
				}
			}
		}
		// RunCrons //
		
		// log //		
		$file = DIR_LOGS . 'contacts.log';
		
		if (file_exists($file)) {
			$data['log'] = file_get_contents($file, FILE_USE_INCLUDE_PATH, null);
		} else {
			$data['log'] = '';
		}
		// log //
		
		// Settintg //
		$data['entry_mail_protocol'] = $this->language->get('entry_mail_protocol');
		$data['entry_mail_parameter'] = $this->language->get('entry_mail_parameter');
		$data['entry_smtp_host'] = $this->language->get('entry_smtp_host');
		$data['entry_smtp_username'] = $this->language->get('entry_smtp_username');
		$data['entry_smtp_password'] = $this->language->get('entry_smtp_password');
		$data['entry_smtp_port'] = $this->language->get('entry_smtp_port');
		$data['entry_smtp_timeout'] = $this->language->get('entry_smtp_timeout');
		$data['entry_mail_real_limit'] = $this->language->get('entry_mail_real_limit');
		$data['entry_mail_global_limit'] = $this->language->get('entry_mail_global_limit');
		$data['entry_mail_from'] = $this->language->get('entry_mail_from');
		$data['entry_mail_fromname'] = $this->language->get('entry_mail_fromname');
		$data['entry_email_pattern'] = $this->language->get('entry_email_pattern');
		$data['entry_mail_count_error'] = $this->language->get('entry_mail_count_error');
		$data['entry_image_product'] = $this->language->get('entry_image_product');
		$data['entry_product_currency'] = $this->language->get('entry_product_currency');
		$data['entry_admin_limit'] = $this->language->get('entry_admin_limit');
		$data['entry_allow_sendcron'] = $this->language->get('entry_allow_sendcron');
		$data['entry_allow_cronsend'] = $this->language->get('entry_allow_cronsend');
		$data['entry_cron_url'] = $this->language->get('entry_cron_url');
		$data['entry_reply_badem'] = $this->language->get('entry_reply_badem');
		$data['entry_ignore_servers'] = $this->language->get('entry_ignore_servers');
		$data['entry_debag_checklog'] = $this->language->get('entry_debag_checklog');
		$data['entry_spamtest_url'] = $this->language->get('entry_spamtest_url');
		$data['entry_skip_price0'] = $this->language->get('entry_skip_price0');
		$data['entry_skip_qty0'] = $this->language->get('entry_skip_qty0');
		$data['entry_add_listid'] = $this->language->get('entry_add_listid');
		$data['entry_add_precedence'] = $this->language->get('entry_add_precedence');
		$data['entry_retpath_email'] = $this->language->get('entry_retpath_email');
		$data['entry_pop_hostname'] = $this->language->get('entry_pop_hostname');
		$data['entry_pop_username'] = $this->language->get('entry_pop_username');
		$data['entry_pop_password'] = $this->language->get('entry_pop_password');
		$data['entry_pop_port'] = $this->language->get('entry_pop_port');
		$data['entry_pop_timeout'] = $this->language->get('entry_pop_timeout');
		$data['entry_pop_qty'] = $this->language->get('entry_pop_qty');
		$data['entry_check_mode'] = $this->language->get('entry_check_mode');
		$data['entry_recomen_mask'] = $this->language->get('entry_recomen_mask');
		$data['entry_bad_eaction'] = $this->language->get('entry_bad_eaction');
		$data['entry_client_status'] = $this->language->get('entry_client_status');

		$data['text_mail'] = $this->language->get('text_mail');
		$data['text_smtp'] = $this->language->get('text_smtp');
		$data['text_all_status'] = $this->language->get('text_all_status');
		$data['text_complete_status'] = $this->language->get('text_complete_status');
		
		$data['contacts_recomen_mask'] = '/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,15}$/i';
		
		$data['tab_ssmtp'] = $this->language->get('tab_ssmtp');
		$data['tab_sprod'] = $this->language->get('tab_sprod');
		$data['tab_scheck'] = $this->language->get('tab_scheck');
		$data['tab_spop'] = $this->language->get('tab_spop');
		$data['tab_sdata'] = $this->language->get('tab_sdata');
		
		$data['currencies'] = $this->model_marketing_contacts->getShopCurrencies();
		
		if ($this->config->get('contacts_mail_protocol') && ($this->config->get('contacts_mail_protocol') != '')) {
			$data['contacts_mail_protocol'] = $this->config->get('contacts_mail_protocol');
		} else {
			$data['contacts_mail_protocol'] = 'mail';
		}
		
		if ($this->config->get('contacts_mail_from') && ($this->config->get('contacts_mail_from') != '')) {
			$data['contacts_mail_from'] = $this->config->get('contacts_mail_from');
		} else {
			$data['contacts_mail_from'] = $this->config->get('config_email');
		}
		
		if ($this->config->get('contacts_mail_fromname') && ($this->config->get('contacts_mail_fromname') != '')) {
			$data['contacts_mail_fromname'] = $this->config->get('contacts_mail_fromname');
		} else {
			$data['contacts_mail_fromname'] = $this->config->get('config_name');
		}
		
		if ($this->config->get('contacts_mail_parameter')) {
			$data['contacts_mail_parameter'] = $this->config->get('contacts_mail_parameter');
		} else {
			$data['contacts_mail_parameter'] = '';
		}

		if ($this->config->get('contacts_smtp_host')) {
			$data['contacts_smtp_host'] = $this->config->get('contacts_smtp_host');
		} else {
			$data['contacts_smtp_host'] = '';
		}

		if ($this->config->get('contacts_smtp_username')) {
			$data['contacts_smtp_username'] = $this->config->get('contacts_smtp_username');
		} else {
			$data['contacts_smtp_username'] = '';
		}
		
		if ($this->config->get('contacts_smtp_password')) {
			$data['contacts_smtp_password'] = $this->config->get('contacts_smtp_password');
		} else {
			$data['contacts_smtp_password'] = '';
		}
		
		if ($this->config->get('contacts_smtp_port') && ($this->config->get('contacts_smtp_port') > 0)) {
			$data['contacts_smtp_port'] = $this->config->get('contacts_smtp_port');
		} else {
			$data['contacts_smtp_port'] = 25;
		}
		
		if ($this->config->get('contacts_smtp_timeout') && ($this->config->get('contacts_smtp_timeout') > 0)) {
			$data['contacts_smtp_timeout'] = $this->config->get('contacts_smtp_timeout');
		} else {
			$data['contacts_smtp_timeout'] = 5;	
		}
		
		if ($this->config->get('contacts_count_message') && ($this->config->get('contacts_count_message') > 0)) {
			$data['contacts_count_message'] = $this->config->get('contacts_count_message');
		} else {
			$data['contacts_count_message'] = 1;
		}
		
		if ($this->config->get('contacts_sleep_time') && ($this->config->get('contacts_sleep_time') > 0)) {
			$data['contacts_sleep_time'] = $this->config->get('contacts_sleep_time');
		} else {
			$data['contacts_sleep_time'] = 4;
		}
		
		if ($this->config->get('contacts_global_limith') && ($this->config->get('contacts_global_limith') > 0)) {
			$data['contacts_global_limith'] = $this->config->get('contacts_global_limith');
		} else {
			$data['contacts_global_limith'] = 0;
		}
		
		if ($this->config->get('contacts_global_limitd') && ($this->config->get('contacts_global_limitd') > 0)) {
			$data['contacts_global_limitd'] = $this->config->get('contacts_global_limitd');
		} else {
			$data['contacts_global_limitd'] = 0;
		}
		
		if ($this->config->get('contacts_count_send_error') && ($this->config->get('contacts_count_send_error') > 0)) {
			$data['contacts_count_send_error'] = $this->config->get('contacts_count_send_error');
		} else {
			$data['contacts_count_send_error'] = 10;
		}
		
		if ($this->config->get('contacts_email_pattern')) {
			$data['contacts_email_pattern'] = $this->config->get('contacts_email_pattern');
		} else {
			$data['contacts_email_pattern'] = '';
		}
		
		if ($data['contacts_email_pattern'] != $data['contacts_recomen_mask']) {
			$data['alarm_email_pattern'] = $this->language->get('text_alarm_email_pattern');
		} else {
			$data['alarm_email_pattern'] = '';
		}
		
		if ($this->config->get('contacts_pimage_width') && ($this->config->get('contacts_pimage_width') > 0)) {
			$data['contacts_pimage_width'] = $this->config->get('contacts_pimage_width');
		} else {
			$data['contacts_pimage_width'] = 150;
		}
		
		if ($this->config->get('contacts_pimage_height') && ($this->config->get('contacts_pimage_height') > 0)) {
			$data['contacts_pimage_height'] = $this->config->get('contacts_pimage_height');
		} else {
			$data['contacts_pimage_height'] = 150;
		}
		
		if ($this->config->get('contacts_product_currency')) {
			$data['contacts_product_currency'] = $this->config->get('contacts_product_currency');
		} else {
			$data['contacts_product_currency'] = $this->config->get('config_currency');
		}
		
		if ($this->config->get('contacts_skip_price0')) {
			$data['contacts_skip_price0'] = $this->config->get('contacts_skip_price0');
		} else {
			$data['contacts_skip_price0'] = '';
		}
		
		if ($this->config->get('contacts_skip_qty0')) {
			$data['contacts_skip_qty0'] = $this->config->get('contacts_skip_qty0');
		} else {
			$data['contacts_skip_qty0'] = '';
		}
		
		if ($this->config->get('contacts_admin_limit') && ($this->config->get('contacts_admin_limit') > 0)) {
			$data['contacts_admin_limit'] = $this->config->get('contacts_admin_limit');
		} else {
			$data['contacts_admin_limit'] = 10;
		}
		
		if ($this->config->get('contacts_allow_sendcron')) {
			$data['contacts_allow_sendcron'] = $this->config->get('contacts_allow_sendcron');
		} else {
			$data['contacts_allow_sendcron'] = '';
		}
		
		if ($this->config->get('contacts_allow_cronsend')) {
			$data['contacts_allow_cronsend'] = $this->config->get('contacts_allow_cronsend');
		} else {
			$data['contacts_allow_cronsend'] = '';
		}
		
		if ($this->config->get('contacts_add_listid')) {
			$data['contacts_add_listid'] = $this->config->get('contacts_add_listid');
		} else {
			$data['contacts_add_listid'] = '';
		}
		
		$data['precedences'] = array('bulk','junk','list');
		
		if ($this->config->get('contacts_add_precedence')) {
			$data['contacts_add_precedence'] = $this->config->get('contacts_add_precedence');
		} else {
			$data['contacts_add_precedence'] = '';
		}
		
		if ($this->config->get('contacts_retpath_email')) {
			$data['contacts_retpath_email'] = $this->config->get('contacts_retpath_email');
		} else {
			$data['contacts_retpath_email'] = $this->config->get('contacts_mail_from') ? $this->config->get('contacts_mail_from') : '';
		}
		
		$data['bad_eactions'] = array();
		$data['bad_eactions'][0] = $this->language->get('text_none');
		$data['bad_eactions'][1] = $this->language->get('text_unsubs');
		$data['bad_eactions'][2] = $this->language->get('text_unsub_remove');
		
		if ($this->config->get('contacts_bad_eaction')) {
			$data['contacts_bad_eaction'] = $this->config->get('contacts_bad_eaction');
		} else {
			$data['contacts_bad_eaction'] = '0';
		}
		
		if ($this->config->get('contacts_client_status')) {
			$data['contacts_client_status'] = $this->config->get('contacts_client_status');
		} else {
			$data['contacts_client_status'] = '0';
		}
		
		if ($this->config->get('contacts_check_mode')) {
			$data['contacts_check_mode'] = $this->config->get('contacts_check_mode');
		} else {
			$data['contacts_check_mode'] = '1';
		}
		
		if ($this->config->get('contacts_reply_badem')) {
			$data['contacts_reply_badem'] = $this->config->get('contacts_reply_badem');
		} else {
			$data['contacts_reply_badem'] = '';
		}
		
		if ($this->config->get('contacts_ignore_servers')) {
			$data['contacts_ignore_servers'] = $this->config->get('contacts_ignore_servers');
		} else {
			$data['contacts_ignore_servers'] = '';
		}
		
		if ($this->config->get('contacts_debag_checklog')) {
			$data['contacts_debag_checklog'] = $this->config->get('contacts_debag_checklog');
		} else {
			$data['contacts_debag_checklog'] = '';
		}
		
		if ($this->config->get('contacts_spamtest_url')) {
			$data['contacts_spamtest_url'] = $this->config->get('contacts_spamtest_url');
		} else {
			$data['contacts_spamtest_url'] = 'www.mail-tester.com';
		}
		
		if ($this->config->get('contacts_pop_hostname')) {
			$data['contacts_pop_hostname'] = $this->config->get('contacts_pop_hostname');
		} else {
			$data['contacts_pop_hostname'] = '';
		}

		if ($this->config->get('contacts_pop_username')) {
			$data['contacts_pop_username'] = $this->config->get('contacts_pop_username');
		} else {
			$data['contacts_pop_username'] = '';
		}
		
		if ($this->config->get('contacts_pop_password')) {
			$data['contacts_pop_password'] = $this->config->get('contacts_pop_password');
		} else {
			$data['contacts_pop_password'] = '';
		}
		
		if ($this->config->get('contacts_pop_port') && ($this->config->get('contacts_pop_port') > 0)) {
			$data['contacts_pop_port'] = $this->config->get('contacts_pop_port');
		} else {
			$data['contacts_pop_port'] = 110;
		}
		
		if ($this->config->get('contacts_pop_timeout') && ($this->config->get('contacts_pop_timeout') > 0)) {
			$data['contacts_pop_timeout'] = $this->config->get('contacts_pop_timeout');
		} else {
			$data['contacts_pop_timeout'] = 5;
		}
		
		if ($this->config->get('contacts_pop_qty') && ($this->config->get('contacts_pop_qty') > 0)) {
			$data['contacts_pop_qty'] = $this->config->get('contacts_pop_qty');
		} else {
			$data['contacts_pop_qty'] = 100;
		}
		
		$data['cron_url'] = str_replace(HTTP_SERVER, HTTP_CATALOG, $this->url->link('feed/ccrons', 'cont=' . $this->config->get('contacts_unsub_pattern')));
		// Settintg //
		
		$this->cache->delete('contacts');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/contacts.tpl', $data));
	}
	
	public function crons() {
    	$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
		
		$data['column_date_start'] = $this->language->get('column_date_start');
		$data['column_period'] = $this->language->get('column_period');
		$data['column_date_next'] = $this->language->get('column_date_next');
		$data['column_cron_name'] = $this->language->get('column_cron_name');
		$data['column_send_to'] = $this->language->get('column_send_to');
		$data['column_static'] = $this->language->get('column_static');
		$data['column_email_total'] = $this->language->get('column_email_total');
		$data['column_send_total'] = $this->language->get('column_send_total');
		$data['column_cron_count'] = $this->language->get('column_cron_count');
		$data['column_cron_status'] = $this->language->get('column_cron_status');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_region'] = $this->language->get('column_region');
		$data['column_products'] = $this->language->get('column_products');
		$data['column_attachments'] = $this->language->get('column_attachments');
		$data['column_unsub_url'] = $this->language->get('column_unsub_url');
		$data['column_control_unsub'] = $this->language->get('column_control_unsub');
		$data['column_action'] = $this->language->get('column_action');
		
		$data['text_view'] = $this->language->get('text_view');
		$data['text_view_logs'] = $this->language->get('text_view_logs');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_delete'] = $this->language->get('text_delete');
		$data['text_disable'] = $this->language->get('text_disable');
		
		$data['text_no_data'] = $this->language->get('text_no_data');
		
		$data['token'] = $this->session->data['token'];
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'cron_id';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}
		
		if ($this->config->get('contacts_admin_limit') && ($this->config->get('contacts_admin_limit') > 0)) {
			$contacts_admin_limit = $this->config->get('contacts_admin_limit');
		} else {
			$contacts_admin_limit = 10;
		}
		
		$data['crons'] = array();
		
		$crons_data = array(
			'sort'     => $sort,
			'order'    => $order,
			'start'    => ($page - 1) * $contacts_admin_limit,
			'limit'    => $contacts_admin_limit
		);

		$crons = $this->model_marketing_contacts->getCrons($crons_data);
		$crons_total = $this->model_marketing_contacts->getTotalCrons();
		
		if (!empty($crons)) {
			foreach ($crons as $cron) {
				if ($cron['status']) {
					$status_text = $this->language->get('text_status_on');
				} else {
					$status_text = $this->language->get('text_status_off');
				}
				
				$send_to = '';
				$send_data = '';
				
				$cron_info = $this->model_marketing_contacts->getDataCron($cron['cron_id']);
				
				if (!empty($cron_info)) {
					$send_to = $this->language->get('text_' . $cron_info['send_to']);
					
					if ($cron_info['send_to'] == 'customer_group') {
						$mcustomer_groups = explode(',', $cron_info['send_to_data']);
						$send_datas = array();
						
						foreach($mcustomer_groups as $mcustomer_group) {
							$group_info = $this->model_marketing_contacts->getCustomersGroupDescriptions($mcustomer_group);
							
							if (!empty($group_info) && isset($group_info[$this->config->get('config_language_id')]['name'])) {
								$send_datas[] = $group_info[$this->config->get('config_language_id')]['name'];
							}
						}
						
						if (!empty($send_datas)) {
							$send_data = implode(', ', $send_datas);
						}
					}
					
					if ($cron_info['send_to'] == 'send_group') {
						$msend_groups = explode(',', $cron_info['send_to_data']);
						$send_datas = array();
						
						foreach($msend_groups as $msend_group) {
							$sgroup_info = $this->model_marketing_contacts->getSendGroup($msend_group);
							
							if (!empty($sgroup_info) && isset($sgroup_info['name'])) {
								$send_datas[] = html_entity_decode($sgroup_info['name'], ENT_QUOTES, 'UTF-8');
							}
						}
						
						if (!empty($send_datas)) {
							$send_data = implode(', ', $send_datas);
						}
					}
					
					$send_total = $this->model_marketing_contacts->getCronSendEmailTotal($cron['cron_id']);
					$cron_count = $this->model_marketing_contacts->getCronCount($cron['cron_id']);
					$cron_status = $this->model_marketing_contacts->getCronStatus($cron['cron_id']);
					
					if ($cron_status) {
						$text_cron_status = $this->language->get('text_cstatus' . $cron_status);
					} else {
						$text_cron_status = '';
					}
					
					$language = '';
					if ($cron_info['language_id']) {
						$language_info = $this->model_marketing_contacts->getLanguage($cron_info['language_id']);
						if (isset($language_info['name'])) {
							$language = $language_info['name'];
						}
					}
					
					$country = '';
					$zone = '';
					if ($cron_info['send_region']) {
						if ($cron_info['send_country_id']) {
							$country_info = $this->model_marketing_contacts->getCountry($cron_info['send_country_id']);
							if (isset($country_info['name'])) {
								$country = $country_info['name'];
							}
						}
						if ($cron_info['send_zone_id']) {
							$zone_info = $this->model_marketing_contacts->getZone($cron_info['send_zone_id']);
							if (isset($zone_info['name'])) {
								$zone = $zone_info['name'];
							}
						}
					}
					
					$invers = ($cron_info['invers_product'] || $cron_info['invers_category'] || $cron_info['invers_customer'] || $cron_info['invers_client'] || $cron_info['invers_affiliate']) ? 1 : 0;
				
					$data['crons'][] = array(
						'cron_id'          => $cron['cron_id'],
						'name'             => html_entity_decode($cron['name'], ENT_QUOTES, 'UTF-8'),
						'send_to'          => $send_to,
						'send_data'        => $send_data,
						'date_start'       => $cron['date_start'],
						'date_next'        => $cron['date_next'],
						'period'           => $cron['period'],
						'status'           => $cron['status'],
						'status_text'      => $status_text,
						'send_region'      => $cron_info['send_region'],
						'country'          => $country,
						'zone'             => $zone,
						'invers_region'    => $cron_info['invers_region'],
						'invers_product'   => $cron_info['invers_product'],
						'invers_category'  => $cron_info['invers_category'],
						'invers_customer'  => $cron_info['invers_customer'],
						'invers_client'    => $cron_info['invers_client'],
						'invers_affiliate' => $cron_info['invers_affiliate'],
						'invers'           => $invers,
						'language_id'      => $cron_info['language_id'],
						'language'         => $language,
						'fdate_start'      => $cron_info['date_start'],
						'fdate_end'        => $cron_info['date_end'],
						'limit_start'      => $cron_info['limit_start'],
						'limit_end'        => $cron_info['limit_end'],
						'products'         => $cron_info['send_products'],
						'attachments'      => ($cron_info['attachments']) ? $cron_info['attachments'] : $cron_info['attachments_cat'],
						'static'           => $cron_info['static'],
						'unsub_url'        => $cron_info['unsub_url'],
						'control_unsub'    => $cron_info['control_unsub'],
						'email_total'      => ($cron_info['email_total']) ? $cron_info['email_total'] : '&infin;',
						'send_total'       => $send_total,
						'cron_count'       => $cron_count,
						'cron_status'      => $cron_status,
						'text_cron_status' => $text_cron_status
					);
				}
			}
		}
		
		$pagination = new Pagination();
		$pagination->total = $crons_total;
		$pagination->page = $page;
		$pagination->limit = $contacts_admin_limit;
		$pagination->url = $this->url->link('marketing/contacts/crons', 'token=' . $this->session->data['token'] . '&page={page}', 'SSL');

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($crons_total) ? (($page - 1) * $contacts_admin_limit) + 1 : 0, ((($page - 1) * $contacts_admin_limit) > ($crons_total - $contacts_admin_limit)) ? $crons_total : ((($page - 1) * $contacts_admin_limit) + $contacts_admin_limit), $crons_total, ceil($crons_total / $contacts_admin_limit));

		$this->response->setOutput($this->load->view('marketing/contacts_crons.tpl', $data));
	}
	
	public function templates() {
    	$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
		
		$data['column_template_name'] = $this->language->get('column_template_name');
		$data['column_action'] = $this->language->get('column_action');
		$data['text_view'] = $this->language->get('text_view');
		$data['text_delete'] = $this->language->get('text_delete');
		$data['text_save'] = $this->language->get('text_save');
		
		$data['text_no_data'] = $this->language->get('text_no_data');
		
		$data['token'] = $this->session->data['token'];
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'template_id';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}
		
		if ($this->config->get('contacts_admin_limit') && ($this->config->get('contacts_admin_limit') > 0)) {
			$contacts_admin_limit = $this->config->get('contacts_admin_limit');
		} else {
			$contacts_admin_limit = 10;
		}
		
		$data['templates'] = array();
		
		$templates_data = array(
			'sort'     => $sort,
			'order'    => $order,
			'start'    => ($page - 1) * $contacts_admin_limit,
			'limit'    => $contacts_admin_limit
		);

		$templates = $this->model_marketing_contacts->getTemplates($templates_data);
		$templates_total = $this->model_marketing_contacts->getTotalTemplates();
		
		if (!empty($templates)) {
			foreach ($templates as $template) {
				$data['templates'][] = array(
					'template_id'  => $template['template_id'],
					'name'         => html_entity_decode($template['name'], ENT_QUOTES, 'UTF-8')
				);
			}
		}
		
		$pagination = new Pagination();
		$pagination->total = $templates_total;
		$pagination->page = $page;
		$pagination->limit = $contacts_admin_limit;
		$pagination->url = $this->url->link('marketing/contacts/templates', 'token=' . $this->session->data['token'] . '&page={page}', 'SSL');

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($templates_total) ? (($page - 1) * $contacts_admin_limit) + 1 : 0, ((($page - 1) * $contacts_admin_limit) > ($templates_total - $contacts_admin_limit)) ? $templates_total : ((($page - 1) * $contacts_admin_limit) + $contacts_admin_limit), $templates_total, ceil($templates_total / $contacts_admin_limit));

		$this->response->setOutput($this->load->view('marketing/contacts_templates.tpl', $data));
	}
	
	public function groups() {
    	$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
		
		$data['column_group_name'] = $this->language->get('column_group_name');
		$data['column_group_description'] = $this->language->get('column_group_description');
		$data['column_group_counts'] = $this->language->get('column_group_counts');
		$data['column_action'] = $this->language->get('column_action');

		$data['text_group_edit'] = $this->language->get('text_group_edit');
		$data['text_delete'] = $this->language->get('text_delete');
		$data['text_no_data'] = $this->language->get('text_no_data');
		
		$data['token'] = $this->session->data['token'];
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}
		
		if ($this->config->get('contacts_admin_limit') && ($this->config->get('contacts_admin_limit') > 0)) {
			$contacts_admin_limit = $this->config->get('contacts_admin_limit');
		} else {
			$contacts_admin_limit = 10;
		}
		
		$data['groups'] = array();
		
		$groups_data = array(
			'sort'     => $sort,
			'order'    => $order,
			'start'    => ($page - 1) * $contacts_admin_limit,
			'limit'    => $contacts_admin_limit
		);

		$groups = $this->model_marketing_contacts->getSendGroups($groups_data);
		$groups_total = $this->model_marketing_contacts->getTotalSendGroups();
		
		if (!empty($groups)) {
			foreach ($groups as $group) {
				$counts = $this->model_marketing_contacts->getTotalNewslettersFromGroup($group['group_id']);
				
				$data['groups'][] = array(
					'group_id'    => $group['group_id'],
					'name'        => html_entity_decode($group['name'], ENT_QUOTES, 'UTF-8'),
					'description' => $group['description'],
					'counts'      => $counts
				);
			}
		}
		
		$pagination = new Pagination();
		$pagination->total = $groups_total;
		$pagination->page = $page;
		$pagination->limit = $contacts_admin_limit;
		$pagination->url = $this->url->link('marketing/contacts/groups', 'token=' . $this->session->data['token'] . '&page={page}', 'SSL');

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($groups_total) ? (($page - 1) * $contacts_admin_limit) + 1 : 0, ((($page - 1) * $contacts_admin_limit) > ($groups_total - $contacts_admin_limit)) ? $groups_total : ((($page - 1) * $contacts_admin_limit) + $contacts_admin_limit), $groups_total, ceil($groups_total / $contacts_admin_limit));

		$this->response->setOutput($this->load->view('marketing/contacts_groups.tpl', $data));
	}
	
	public function statistics() {
    	$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
		
		$data['text_mview'] = $this->language->get('text_mview');
		$data['text_nmview'] = $this->language->get('text_nmview');
		$data['text_delete'] = $this->language->get('text_delete');
		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_send_to'] = $this->language->get('column_send_to');
		$data['column_subject'] = $this->language->get('column_subject');
		$data['column_region'] = $this->language->get('column_region');
		$data['column_language'] = $this->language->get('column_language');
		$data['column_products'] = $this->language->get('column_products');
		$data['column_attachments'] = $this->language->get('column_attachments');
		$data['column_unsub_url'] = $this->language->get('column_unsub_url');
		$data['column_control_unsub'] = $this->language->get('column_control_unsub');
		$data['column_email_total'] = $this->language->get('column_email_total');
		$data['column_email_open'] = $this->language->get('column_email_open');
		$data['column_email_click'] = $this->language->get('column_email_click');
		$data['column_email_unsub'] = $this->language->get('column_email_unsub');
		$data['column_remove'] = $this->language->get('column_remove');
		$data['column_action'] = $this->language->get('column_action');
		
		$data['text_no_data'] = $this->language->get('text_no_data');
		
		$data['token'] = $this->session->data['token'];
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'date_added';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}
		
		if ($this->config->get('contacts_admin_limit') && ($this->config->get('contacts_admin_limit') > 0)) {
			$contacts_admin_limit = $this->config->get('contacts_admin_limit');
		} else {
			$contacts_admin_limit = 10;
		}
		
		$data['mailings'] = array();
		
		$statistics_data = array(
			'sort'     => $sort,
			'order'    => $order,
			'start'    => ($page - 1) * $contacts_admin_limit,
			'limit'    => $contacts_admin_limit
		);

		$mailings = $this->model_marketing_contacts->getCompleteDataSend($statistics_data);
		$mailings_total = $this->model_marketing_contacts->getTotalCompleteDataSend($statistics_data);
		
		if (!empty($mailings)) {
			$country_name = '';
			$country_iso = '';
			$zone_name = '';
			$zone_code = '';
			
			foreach ($mailings as $mailing) {
				if ($mailing['send_region'] && $mailing['send_country_id']) {
					$country_info = $this->model_marketing_contacts->getCountry($mailing['send_country_id']);
					if(isset($country_info['iso_code_3'])) {
						$country_iso = $country_info['iso_code_3'];
					}
					if(isset($country_info['name'])) {
						$country_name = $country_info['name'];
					}
				}
				if ($mailing['send_region'] && $mailing['send_zone_id']) {
					$zone_info = $this->model_marketing_contacts->getZone($mailing['send_zone_id']);
					if(isset($zone_info['code'])) {
						$zone_code = $zone_info['code'];
					}
					if(isset($zone_info['name'])) {
						$zone_name = $zone_info['name'];
					}
				}
				
				$language = '';
				$lang_code = '';
				if ($mailing['language_id']) {
					$language_info = $this->model_marketing_contacts->getLanguage($mailing['language_id']);
					if (isset($language_info['name'])) {
						$language = $language_info['name'];
					}
					if (isset($language_info['code'])) {
						$lang_code = $language_info['code'];
					}
				}
				
				if ($mailing['send_to'] == 'customer_group') {
					$mcustomer_groups = explode(',', $mailing['send_to_data']);
					$send_datas = array();
					
					foreach($mcustomer_groups as $mcustomer_group) {
						$group_info = $this->model_marketing_contacts->getCustomersGroupDescriptions($mcustomer_group);
						
						if (!empty($group_info) && isset($group_info[$this->config->get('config_language_id')]['name'])) {
							$send_datas[] = $group_info[$this->config->get('config_language_id')]['name'];
						}
					}
					
					if (!empty($send_datas)) {
						$send_data = implode(', ', $send_datas);
					} else {
						$send_data = '';
					}

				} elseif ($mailing['send_to'] == 'send_group') {
					$msend_groups = explode(',', $mailing['send_to_data']);
					$send_datas = array();
					
					foreach($msend_groups as $msend_group) {
						$sgroup_info = $this->model_marketing_contacts->getSendGroup($msend_group);
						
						if (!empty($sgroup_info) && isset($sgroup_info['name'])) {
							$send_datas[] = $sgroup_info['name'];
						}
					}
					
					if (!empty($send_datas)) {
						$send_data = implode(', ', $send_datas);
					} else {
						$send_data = '';
					}
					
				} else {
					$send_data = '';
				}
				
				$email_open = $this->model_marketing_contacts->getTotalViewsfromSend($mailing['send_id']);
				$email_click = $this->model_marketing_contacts->getTotalClicksfromSend($mailing['send_id']);
				$email_unsub = $this->model_marketing_contacts->getTotalUnsubscribesfromSend($mailing['send_id']);
				
				$data['mailings'][] = array(
					'send_id'        => $mailing['send_id'],
					'date_added'     => date('d.m.Y', strtotime($mailing['date_added'])),
					'send_to'        => $this->language->get('text_' . $mailing['send_to']),
					'send_data'      => $send_data,
					'subject'        => html_entity_decode($mailing['subject'], ENT_QUOTES, 'UTF-8'),
					'send_region'    => $mailing['send_region'],
					'invers_region'  => $mailing['invers_region'],
					'invers_product' => $mailing['invers_product'],
					'country_name'   => $country_name,
					'country_iso'    => $country_iso,
					'zone_name'      => $zone_name,
					'zone_code'      => $zone_code,
					'language'       => $language,
					'lang_code'      => $lang_code,
					'products'       => $mailing['send_products'],
					'attachments'    => ($mailing['attachments']) ? $mailing['attachments'] : $mailing['attachments_cat'],
					'unsub_url'      => $mailing['unsub_url'],
					'control_unsub'  => $mailing['control_unsub'],
					'email_total'    => $mailing['email_total'],
					'email_open'     => $email_open,
					'email_click'    => $email_click,
					'email_unsub'    => $email_unsub
				);
			}
		}
		
		$pagination = new Pagination();
		$pagination->total = $mailings_total;
		$pagination->page = $page;
		$pagination->limit = $contacts_admin_limit;
		$pagination->url = $this->url->link('marketing/contacts/statistics', 'token=' . $this->session->data['token'] . '&page={page}', 'SSL');

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($mailings_total) ? (($page - 1) * $contacts_admin_limit) + 1 : 0, ((($page - 1) * $contacts_admin_limit) > ($mailings_total - $contacts_admin_limit)) ? $mailings_total : ((($page - 1) * $contacts_admin_limit) + $contacts_admin_limit), $mailings_total, ceil($mailings_total / $contacts_admin_limit));
		
		$this->response->setOutput($this->load->view('marketing/contacts_statistics.tpl', $data));
	}
	
	public function newsletters() {
    	$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');

		$data['column_email'] = $this->language->get('column_email');
		$data['column_ngroup_name'] = $this->language->get('column_ngroup_name');
		$data['column_ncustomer'] = $this->language->get('column_ncustomer');
		$data['column_ncustomer_group'] = $this->language->get('column_ncustomer_group');
		$data['column_nsubscribe'] = $this->language->get('column_nsubscribe');
		$data['column_action'] = $this->language->get('column_action');
		
		$data['text_no_data'] = $this->language->get('text_no_data');
		$data['text_clear_filter'] = $this->language->get('text_clear_filter');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		
		$data['token'] = $this->session->data['token'];
		
		$data['customer_groups'] = $this->model_marketing_contacts->getCustomersGroups();
		$data['groups'] = $this->model_marketing_contacts->getSendGroups();
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_email'])) {
			$filter_email = $this->request->get['filter_email'];
		} else {
			$filter_email = '';
		}
		
		if (isset($this->request->get['filter_group_id'])) {
			$filter_group_id = $this->request->get['filter_group_id'];
		} else {
			$filter_group_id = '';
		}
		
		if (isset($this->request->get['filter_customer_group_id'])) {
			$filter_customer_group_id = $this->request->get['filter_customer_group_id'];
		} else {
			$filter_customer_group_id = '';
		}
		
		if (isset($this->request->get['filter_unsubscribe'])) {
			$filter_unsubscribe = $this->request->get['filter_unsubscribe'];
		} else {
			$filter_unsubscribe = null;
		}
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'cemail';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}
		
		if ($this->config->get('contacts_admin_limit') && ($this->config->get('contacts_admin_limit') > 0)) {
			$contacts_admin_limit = $this->config->get('contacts_admin_limit');
		} else {
			$contacts_admin_limit = 10;
		}
		
		$data['newsletters'] = array();
		
		$newsletters_data = array(
			'filter_name'              => $filter_name,
			'filter_email'             => $filter_email,
			'filter_customer_group_id' => $filter_customer_group_id,
			'filter_group_id'          => $filter_group_id,
			'filter_unsubscribe'       => $filter_unsubscribe,
			'sort'                     => $sort,
			'order'                    => $order,
			'start'                    => ($page - 1) * $contacts_admin_limit,
			'limit'                    => $contacts_admin_limit
		);
		
		$newsletters = $this->model_marketing_contacts->getNewsletters($newsletters_data);
		$newsletters_total = $this->model_marketing_contacts->getTotalNewsletters($newsletters_data);

		if (!empty($newsletters)) {
			foreach ($newsletters as $newsletter) {
				$action = array();
				
				$action[] = array(
					'text'  => $this->language->get('text_subs'),
					'clss'  => 'btn btn-msubscr',
					'onclk' => 'tognewsletter(1, ' . $newsletter['newsletter_id'] . ')'
				);
				
				$action[] = array(
					'text'  => $this->language->get('text_unsubs'),
					'clss'  => 'btn btn-munsubscr',
					'onclk' => 'tognewsletter(2, ' . $newsletter['newsletter_id'] . ')'
				);
				
				$action[] = array(
					'text'  => $this->language->get('text_delete'),
					'clss'  => 'btn btn-mremove',
					'onclk' => 'tognewsletter(3, ' . $newsletter['newsletter_id'] . ')'
				);
				
				$subscriber = true;
				
				if ($newsletter['customer_id'] && !$newsletter['newsletter']) {
					$subscriber = false;
				}
				
				if ($newsletter['unsubscribe_id']) {
					$subscriber = false;
				}
				
				$data['newsletters'][] = array(
					'newsletter_id'  => $newsletter['newsletter_id'],
					'email'          => $newsletter['cemail'],
					'group'          => $newsletter['cgroup'],
					'customer_id'    => $newsletter['customer_id'],
					'name'           => !empty($newsletter['cname']) ? $newsletter['cname'] : $newsletter['nname'],
					'subscriber'     => $subscriber,
					'customer_group' => $newsletter['customer_group'],
					'action'         => $action
				);
			}
		}
		
		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}
		
		if (isset($this->request->get['filter_group_id'])) {
			$url .= '&filter_group_id=' . $this->request->get['filter_group_id'];
		}
		
		if (isset($this->request->get['filter_unsubscribe'])) {
			$url .= '&filter_unsubscribe=' . $this->request->get['filter_unsubscribe'];
		}
		
		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$data['sort_name'] = $this->url->link('marketing/contacts/newsletters', 'token=' . $this->session->data['token'] . '&sort=cname' . $url, 'SSL');
		$data['sort_email'] = $this->url->link('marketing/contacts/newsletters', 'token=' . $this->session->data['token'] . '&sort=cemail' . $url, 'SSL');
		$data['sort_customer_group'] = $this->url->link('marketing/contacts/newsletters', 'token=' . $this->session->data['token'] . '&sort=customer_group' . $url, 'SSL');
		$data['sort_group'] = $this->url->link('marketing/contacts/newsletters', 'token=' . $this->session->data['token'] . '&sort=cgroup' . $url, 'SSL');
		
		$data['page'] = $page;
		$data['sort'] = $sort;
		$data['order'] = $order;
		
		$data['filter_name'] = $filter_name;
		$data['filter_email'] = $filter_email;
		$data['filter_customer_group_id'] = $filter_customer_group_id;
		$data['filter_group_id'] = $filter_group_id;
		$data['filter_unsubscribe'] = $filter_unsubscribe;
		
		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}
		
		if (isset($this->request->get['filter_group_id'])) {
			$url .= '&filter_group_id=' . $this->request->get['filter_group_id'];
		}
		
		if (isset($this->request->get['filter_unsubscribe'])) {
			$url .= '&filter_unsubscribe=' . $this->request->get['filter_unsubscribe'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		$pagination = new Pagination();
		$pagination->total = $newsletters_total;
		$pagination->page = $page;
		$pagination->limit = $contacts_admin_limit;
		$pagination->url = $this->url->link('marketing/contacts/newsletters', 'token=' . $this->session->data['token'] . $url . '&page={page}', 'SSL');

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($newsletters_total) ? (($page - 1) * $contacts_admin_limit) + 1 : 0, ((($page - 1) * $contacts_admin_limit) > ($newsletters_total - $contacts_admin_limit)) ? $newsletters_total : ((($page - 1) * $contacts_admin_limit) + $contacts_admin_limit), $newsletters_total, ceil($newsletters_total / $contacts_admin_limit));

		$this->response->setOutput($this->load->view('marketing/contacts_newsletters.tpl', $data));
  	}
	
	public function filter_newsletters() {
		$json = array();
		
    	$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_email'])) {
			$filter_email = $this->request->get['filter_email'];
		} else {
			$filter_email = '';
		}
		
		if (isset($this->request->get['filter_group_id'])) {
			$filter_group_id = $this->request->get['filter_group_id'];
		} else {
			$filter_group_id = '';
		}
		
		if (isset($this->request->get['filter_customer_group_id'])) {
			$filter_customer_group_id = $this->request->get['filter_customer_group_id'];
		} else {
			$filter_customer_group_id = '';
		}
		
		if (isset($this->request->get['filter_unsubscribe'])) {
			$filter_unsubscribe = $this->request->get['filter_unsubscribe'];
		} else {
			$filter_unsubscribe = null;
		}
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'cemail';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}
		
		if ($this->config->get('contacts_admin_limit') && ($this->config->get('contacts_admin_limit') > 0)) {
			$contacts_admin_limit = $this->config->get('contacts_admin_limit');
		} else {
			$contacts_admin_limit = 10;
		}
		
		$json['newsletters'] = array();
		
		$newsletters_data = array(
			'filter_name'              => $filter_name,
			'filter_email'             => $filter_email,
			'filter_customer_group_id' => $filter_customer_group_id,
			'filter_group_id'          => $filter_group_id,
			'filter_unsubscribe'       => $filter_unsubscribe,
			'sort'                     => $sort,
			'order'                    => $order,
			'start'                    => ($page - 1) * $contacts_admin_limit,
			'limit'                    => $contacts_admin_limit
		);
		
		$newsletters = $this->model_marketing_contacts->getNewsletters($newsletters_data);
		$newsletters_total = $this->model_marketing_contacts->getTotalNewsletters($newsletters_data);

		if (!empty($newsletters)) {
			foreach ($newsletters as $newsletter) {
				$action = array();
				
				$action[] = array(
					'text'  => $this->language->get('text_subs'),
					'clss'  => 'btn btn-msubscr',
					'onclk' => 'tognewsletter(1, ' . $newsletter['newsletter_id'] . ')'
				);
				
				$action[] = array(
					'text'  => $this->language->get('text_unsubs'),
					'clss'  => 'btn btn-munsubscr',
					'onclk' => 'tognewsletter(2, ' . $newsletter['newsletter_id'] . ')'
				);
				
				$action[] = array(
					'text'  => $this->language->get('text_delete'),
					'clss'  => 'btn btn-mremove',
					'onclk' => 'tognewsletter(3, ' . $newsletter['newsletter_id'] . ')'
				);
				
				$subscriber = true;
				
				if ($newsletter['customer_id'] && !$newsletter['newsletter']) {
					$subscriber = false;
				}
				
				if ($newsletter['unsubscribe_id']) {
					$subscriber = false;
				}
				
				$json['newsletters'][] = array(
					'newsletter_id'  => $newsletter['newsletter_id'],
					'email'          => $newsletter['cemail'],
					'group'          => $newsletter['cgroup'],
					'customer_id'    => $newsletter['customer_id'],
					'name'           => !empty($newsletter['cname']) ? $newsletter['cname'] : $newsletter['nname'],
					'subscriber'     => $subscriber,
					'customer_group' => $newsletter['customer_group'],
					'action'         => $action
				);
			}
		}
		
		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}
		
		if (isset($this->request->get['filter_group_id'])) {
			$url .= '&filter_group_id=' . $this->request->get['filter_group_id'];
		}
		
		if (isset($this->request->get['filter_unsubscribe'])) {
			$url .= '&filter_unsubscribe=' . $this->request->get['filter_unsubscribe'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		$pagination = new Pagination();
		$pagination->total = $newsletters_total;
		$pagination->page = $page;
		$pagination->limit = $contacts_admin_limit;
		$pagination->url = $this->url->link('marketing/contacts/newsletters', 'token=' . $this->session->data['token'] . $url . '&page={page}', 'SSL');

		$json['pagination'] = $pagination->render();
		$json['results'] = sprintf($this->language->get('text_pagination'), ($newsletters_total) ? (($page - 1) * $contacts_admin_limit) + 1 : 0, ((($page - 1) * $contacts_admin_limit) > ($newsletters_total - $contacts_admin_limit)) ? $newsletters_total : ((($page - 1) * $contacts_admin_limit) + $contacts_admin_limit), $newsletters_total, ceil($newsletters_total / $contacts_admin_limit));

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
  	}
	
	public function checkcrons() {
    	$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
		
		$data['column_date_start'] = $this->language->get('column_date_start');
		$data['column_send_to'] = $this->language->get('column_send_to');
		$data['column_check_total'] = $this->language->get('column_send_total');
		$data['column_good_total'] = $this->language->get('column_good_total');
		$data['column_novalid_total'] = $this->language->get('column_novalid_total');
		$data['column_bad_total'] = $this->language->get('column_bad_total');
		$data['column_suspect_total'] = $this->language->get('column_suspect_total');
		$data['column_action'] = $this->language->get('column_action');
		
		$data['text_view_logs'] = $this->language->get('text_view_logs');
		$data['text_no_data'] = $this->language->get('text_no_data');
		
		$data['token'] = $this->session->data['token'];
		
		$data['check_crons'] = array();
		
		$data_crons = array(
			'sort'     => 'cron_id',
			'order'    => 'DESC',
			'checking' => 1,
			'start'    => 0,
			'limit'    => 10
		);

		$check_crons = $this->model_marketing_contacts->getCrons($data_crons);
		
		if (!empty($check_crons)) {
			foreach ($check_crons as $cron) {
				$send_to = '';
				$send_data = '';
				
				$cron_info = $this->model_marketing_contacts->getDataCron($cron['cron_id']);
				
				if (!empty($cron_info)) {
					$send_to = $this->language->get('text_' . $cron_info['send_to']);
					
					if ($cron_info['send_to'] == 'customer_group') {
						$mcustomer_groups = explode(',', $cron_info['send_to_data']);
						$send_datas = array();
						
						foreach($mcustomer_groups as $mcustomer_group) {
							$group_info = $this->model_marketing_contacts->getCustomerGroupDescriptions($mcustomer_group);
							
							if (!empty($group_info) && isset($group_info[$this->config->get('config_language_id')]['name'])) {
								$send_datas[] = $group_info[$this->config->get('config_language_id')]['name'];
							}
						}
						
						if (!empty($send_datas)) {
							$send_data = implode(', ', $send_datas);
						}
					}
					
					if ($cron_info['send_to'] == 'send_group') {
						$msend_groups = explode(',', $cron_info['send_to_data']);
						$send_datas = array();
						
						foreach($msend_groups as $msend_group) {
							$sgroup_info = $this->model_marketing_contacts->getSendGroup($msend_group);
							
							if (!empty($sgroup_info) && isset($sgroup_info['name'])) {
								$send_datas[] = html_entity_decode($sgroup_info['name'], ENT_QUOTES, 'UTF-8');
							}
						}
						
						if (!empty($send_datas)) {
							$send_data = implode(', ', $send_datas);
						}
					}
					
					$send_total = $this->model_marketing_contacts->getCronSendEmailTotal($cron['cron_id']);
					$check_results = $this->model_marketing_contacts->getCheckCronResult($cron['cron_id']);
					
					$data['check_crons'][] = array(
						'cron_id'       => $cron['cron_id'],
						'send_to'       => $send_to,
						'send_data'     => $send_data,
						'date_start'    => $cron['date_start'],
						'check_total'   => $send_total,
						'good_total'    => isset($check_results['good']) ? $check_results['good'] : '',
						'novalid_total' => isset($check_results['novalid']) ? $check_results['novalid'] : '',
						'bad_total'     => isset($check_results['bad']) ? $check_results['bad'] : '',
						'suspect_total' => isset($check_results['suspect']) ? $check_results['suspect'] : ''
					);
				}
			}
		}
		
		$this->response->setOutput($this->load->view('marketing/contacts_check.tpl', $data));
	}
	
	public function checkmode() {
		set_time_limit(360);
		$this->config->set('config_error_display', 0);
		$json = array();
		
		$this->load->language('marketing/contacts');
		
		$file = DIR_LOGS . 'checkmode.log';
		$handle = fopen($file, 'w+');
		fclose($handle);
		
		$contacts_log = new Log('checkmode.log');
		require_once(DIR_SYSTEM . 'library/mail_cc.php');
		
		$contacts_log->write($this->language->get('text_start_send'));
		
		$email = 'info@opencart-group.ru';
		
		if (($this->config->get('contacts_mail_from')) && ($this->config->get('contacts_mail_from') != '')) {
			$senders = explode(',', preg_replace('/\s/', '', $this->config->get('contacts_mail_from')));
		} else {
			$senders = array($this->config->get('config_email'));
		}
		
		$mail = new Mail_CC();
		$mail->setTo($email);
		$mail->setFrom($senders[0]);
		$mail->setTestmode(1);
		$mail->setMode(2);
		$mail->setDebag(1);

		$contacts_log->write($this->language->get('text_check_email') . $email);
		$check_status = $mail->check_email();
		
		if ($check_status) {
			$status_arr = explode('|', $check_status);
			$check_text = $status_arr[0];
			$check_reply = isset($status_arr[1]) ? $status_arr[1] : '';

			if (substr($check_text, 0, 5) == 'mcokk') {
				$json['success'] = $this->language->get('success_checkmode');
			} else {
				$json['error'] = $this->language->get('error_checkmode');
				$contacts_log->write($this->language->get('error_check_' . substr($check_text, 5, 2)));
			}
			
			if ($check_reply) {
				$contacts_log->write($this->language->get('result_check_mode') . $check_reply);
			}
			
		} else {
			$contacts_log->write($this->language->get('error_check_00'));
			$json['error'] = $this->language->get('error_checkmode');
		}
		
		$contacts_log->write($this->language->get('text_end_send'));

		if (file_exists($file)) {
			$json['log'] = file_get_contents($file, FILE_USE_INCLUDE_PATH, null);
		} else {
			$json['log'] = '';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
  	}
	
	public function misssend() {
		set_time_limit(100);
		$this->config->set('config_error_display', 0);
		
		$json = array();
		$json['error'] = array();
		$json['attention'] = array();
		
		$this->load->language('marketing/contacts');
		$this->load->model('marketing/contacts');
		
		$contacts_log = new Log('contacts.log');
		require_once(DIR_SYSTEM . 'library/mail_cs.php');
		
		if (!$this->validate()) {
			$json['error'][] = $this->language->get('error_permission');
		}
		
		if(!$this->config->get('contacts_allow_sendcron')) {
			$run_crons = $this->model_marketing_contacts->getRunCron();
			if ($run_crons) {
				$json['error'][] = $this->language->get('error_send_iscron');
			}
		}
		
		if (isset($this->request->get['msid'])) {
			$msend_id = $this->request->get['msid'];
			$missing_send = $this->model_marketing_contacts->getDataSend($msend_id);
		} else {
			$msend_id = 0;
			$missing_send = '';
			$json['error'][] = $this->language->get('error_msid');
		}

		if (!empty($missing_send)) {
			if (!$missing_send['subject'] || trim($missing_send['subject'] == '')) {
				$json['error'][] = $this->language->get('error_subject');
			}
			if (!$missing_send['message'] || trim($missing_send['message'] == '')) {
				$json['error'][] = $this->language->get('error_message');
			}
		} else {
			$json['error'][] = $this->language->get('error_msid_data');
		}
		
		if (!$json['error']) {
			if ($this->config->get('contacts_global_limith') && $this->config->get('contacts_global_limitd')) {
				$total_mails = $this->model_marketing_contacts->getCountMails();
				
				if ($total_mails['hour'] >= $this->config->get('contacts_global_limith')) {
					$contacts_log->write(strip_tags($this->language->get('error_limit_hour')));
					$json['error'][] = $this->language->get('error_limit_hour');
					$json['stop_send'] = $msend_id ? $msend_id : '';
				}
				if ($total_mails['day'] >= $this->config->get('contacts_global_limitd')) {
					$contacts_log->write(strip_tags($this->language->get('error_limit_day')));
					$json['error'][] = $this->language->get('error_limit_day');
					$json['stop_send'] = $msend_id ? $msend_id : '';
				}
			}
		}

		if (!$json['error']) {
			$this->load->model('setting/store');
			$store_info = $this->model_setting_store->getStore($missing_send['store_id']);			
			
			if ($store_info) {
				$store_name = $store_info['name'];
				$store_url = $store_info['url'];
			} else {
				$store_name = $this->config->get('config_name');
				$store_url = HTTP_CATALOG;
			}

			if (!empty($missing_send['language_id'])) {
				$this->load->model('setting/setting');
				
				$store_config = $this->model_setting_setting->getSetting('config', $missing_send['store_id']);
				
				if (!empty($store_config['config_langdata'][$missing_send['language_id']]['name'])) {
					$store_name = $store_config['config_langdata'][$missing_send['language_id']]['name'];
				}
			}

			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
				$this->cache->delete('contacts');
				$this->model_marketing_contacts->ClearErrorsSend($msend_id);
				$contacts_log->write($this->language->get('text_start_missresend'));
			}
			
			if ($this->config->get('contacts_mail_protocol') && ($this->config->get('contacts_mail_protocol') == 'smtp')) {
				$contacts_mail_protocol = 'smtp';
			} else {
				$contacts_mail_protocol = 'mail';
			}
			
			$contacts_smtp_port = $this->config->get('contacts_smtp_port') ? $this->config->get('contacts_smtp_port') : 25;
			$contacts_smtp_timeout = $this->config->get('contacts_smtp_timeout') ? $this->config->get('contacts_smtp_timeout') : 5;
			$contacts_count_message = $this->config->get('contacts_count_message') ? $this->config->get('contacts_count_message') : 1;
			$contacts_sleep_time = $this->config->get('contacts_sleep_time') ? $this->config->get('contacts_sleep_time') : 4;
			$contacts_count_error = $this->config->get('contacts_count_send_error') ? $this->config->get('contacts_count_send_error') : 10;
			
			$precedence = $this->config->get('contacts_add_precedence') ? $this->config->get('contacts_add_precedence') : '';
			
			if ($missing_send['unsub_url']) {
				$set_unsubscribe = $missing_send['unsub_url'];
			} else {
				$set_unsubscribe = false;
			}
			
			$country_info = $this->model_marketing_contacts->getCountry($this->config->get('config_country_id'));
			$shop_country = !empty($country_info) ? $country_info['name'] : '';
			
			$zone_info = $this->model_marketing_contacts->getZone($this->config->get('config_zone_id'));
			$shop_zone = !empty($zone_info) ? $zone_info['name'] : '';
			
			$store_id = $missing_send['store_id'];
			$cgroup_id = $this->config->get('config_customer_group_id');
			
			$reply_badem = explode('|', $this->config->get('contacts_reply_badem'));
			$bad_email_action = $this->config->get('contacts_bad_eaction') ? $this->config->get('contacts_bad_eaction') : 0;
			
			if ($missing_send['send_products']) {
				$send_products = $missing_send['send_products'];
			} else {
				$send_products = false;
			}
			
			if ($missing_send['language_id']) {
				$lang_id = $missing_send['language_id'];
			} else {
				$lang_id = $this->config->get('config_language_id');
			}
			
			$special = '';
			$bestseller = '';
			$latest = '';
			$featured = '';
			$selproducts = '';
			$catproducts = '';
			
			if ($send_products) {
				$send_product_data = $this->model_marketing_contacts->getProductSend($msend_id);
				
				foreach ($send_product_data as $send_product) {
					if ($send_product['type'] == 'special') {
						if ($send_product['qty'] && ($send_product['qty'] > 0)) {
							$special_limit = $send_product['qty'];
						} else {
							$special_limit = 4;
						}

						$special_products = array();
						
						$special_cache_data = $this->cache->get('contacts.special.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$special_limit);
						
						if (!$special_cache_data) {
							$specials = $this->model_marketing_contacts->getSpecialsProducts($special_limit, $lang_id);
							if (!empty($specials)) {
								$special_products = $this->getMailProducts($specials);
							}
							$this->cache->set('contacts.special.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$special_limit, $special_products);
						} else {
							$special_products = $special_cache_data;
						}

						if ($special_products) {
							if ($send_product['title']) {
								$sdata['title'] = $send_product['title'];
							} else {
								$sdata['title'] = $this->language->get('special_title');
							}
							
							$sdata['products'] = $special_products;
							$special = $this->load->view('mail/contacts_products.tpl', $sdata);
						}
						
					}
					
					if ($send_product['type'] == 'bestseller') {
						if ($send_product['qty'] && ($send_product['qty'] > 0)) {
							$bestseller_limit = $send_product['qty'];
						} else {
							$bestseller_limit = 4;
						}
						
						$bestseller_products = array();
						
						$bestseller_cache_data = $this->cache->get('contacts.bestseller.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$bestseller_limit);
						
						if (!$bestseller_cache_data) {
							$bestsellers = $this->model_marketing_contacts->getBestSellerProducts($bestseller_limit, $lang_id);
							if (!empty($bestsellers)) {
								$bestseller_products = $this->getMailProducts($bestsellers);
							}
							$this->cache->set('contacts.bestseller.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$bestseller_limit, $bestseller_products);
						} else {
							$bestseller_products = $bestseller_cache_data;
						}
						
						if ($bestseller_products) {							
							if ($send_product['title']) {
								$bdata['title'] = $send_product['title'];
							} else {
								$bdata['title'] = $this->language->get('bestseller_title');
							}
						
							$bdata['products'] = $bestseller_products;
							$bestseller = $this->load->view('mail/contacts_products.tpl', $bdata);
						}
						
					}
					
					if ($send_product['type'] == 'latest') {
						if ($send_product['qty'] && ($send_product['qty'] > 0)) {
							$latest_limit = $send_product['qty'];
						} else {
							$latest_limit = 4;
						}
						
						$latest_products = array();
						
						$latest_cache_data = $this->cache->get('contacts.latest.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$latest_limit);
						
						if (!$latest_cache_data) {
							$latests = $this->model_marketing_contacts->getLatestProducts($latest_limit, $lang_id);
							if (!empty($latests)) {
								$latest_products = $this->getMailProducts($latests);
							}
							$this->cache->set('contacts.latest.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$latest_limit, $latest_products);
						} else {
							$latest_products = $latest_cache_data;
						}
						
						if ($latest_products) {							
							if ($send_product['title']) {
								$ldata['title'] = $send_product['title'];
							} else {
								$ldata['title'] = $this->language->get('latest_title');
							}
						
							$ldata['products'] = $latest_products;
							$latest = $this->load->view('mail/contacts_products.tpl', $ldata);
						}

					}
					
					if ($send_product['type'] == 'featured') {
						if ($send_product['qty'] && ($send_product['qty'] > 0)) {
							$featured_limit = $send_product['qty'];
						} else {
							$featured_limit = 4;
						}
						
						$featured_products = array();
						
						$featured_cache_data = $this->cache->get('contacts.featured.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$featured_limit);
						
						if (!$featured_cache_data) {
							$featureds = $this->model_marketing_contacts->getFeaturedProducts($featured_limit, $lang_id);
							if (!empty($featureds)) {
								$featured_products = $this->getMailProducts($featureds);
							}
							$this->cache->set('contacts.featured.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$featured_limit, $featured_products);
						} else {
							$featured_products = $featured_cache_data;
						}

						if ($featured_products) {							
							if ($send_product['title']) {
								$fdata['title'] = $send_product['title'];
							} else {
								$fdata['title'] = $this->language->get('featured_title');
							}
						
							$fdata['products'] = $featured_products;
							$featured = $this->load->view('mail/contacts_products.tpl', $fdata);
						}
				
					}
					
					if ($send_product['type'] == 'selproducts') {
						$selected_products = array();
						
						$selected_cache_data = $this->cache->get('contacts.selected.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id);
						
						if (!$selected_cache_data) {
							$selectproducts = $this->model_marketing_contacts->getProductsToSend($msend_id, $send_product['type'], $lang_id);
							
							if (!empty($selectproducts)) {
								$selected_products = $this->getMailProducts($selectproducts);
							}
							
							$this->cache->set('contacts.selected.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id, $selected_products);
						} else {
							$selected_products = $selected_cache_data;
						}

						if ($selected_products) {
							if ($send_product['title']) {
								$spdata['title'] = $send_product['title'];
							} else {
								$spdata['title'] = $this->language->get('selproducts_title');
							}
						
							$spdata['products'] = $selected_products;
							$selproducts = $this->load->view('mail/contacts_products.tpl', $spdata);
						}
				
					}
					
					if ($send_product['type'] == 'catproducts') {
						if ($send_product['qty'] && ($send_product['qty'] > 0)) {
							$catproducts_limit = $send_product['qty'];
						} else {
							$catproducts_limit = 4;
						}
						
						$category_products = array();
						$catproducts_each = false;
						
						$catproduct_cache_data = $this->cache->get('contacts.catproduct.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$catproducts_limit);

						if (!$catproduct_cache_data) {
							$pcategories = explode(',', $send_product['cat_id']);
							
							if ($send_product['cat_each']) {
								foreach ($pcategories as $pcategory_id) {
									$allcatproducts[] = $this->model_marketing_contacts->getProductsFromCat($pcategory_id, $catproducts_limit, $lang_id);
								}
								foreach ($allcatproducts as $pid) {
									foreach ($pid as $key => $value) {
										$selcatproducts[$key] = $value;
									}
								}
							} else {
								$selcatproducts = $this->model_marketing_contacts->getCatSelectedProducts($pcategories, $catproducts_limit, $lang_id);
							}						
							
							if (!empty($selcatproducts)) {
								$category_products = $this->getMailProducts($selcatproducts);
							}
							$this->cache->set('contacts.catproduct.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$msend_id . '.' . (int)$catproducts_limit, $category_products);
						} else {
							$category_products = $catproduct_cache_data;
						}

						if ($category_products) {
							if ($send_product['title']) {
								$scdata['title'] = $send_product['title'];
							} else {
								$scdata['title'] = $this->language->get('catproducts_title');
							}
						
							$scdata['products'] = $category_products;
							$catproducts = $this->load->view('mail/contacts_products.tpl', $scdata);
						}
					}
				}
			}

			$left_total = 0;
			$emails = array();
			$attachments = array();
			$attachments_cat = array();
			
			if ($missing_send['attachments']) {
				$send_attachments = explode(',', $missing_send['attachments']);
				
				foreach ($send_attachments as $attachment) {
					if ((trim($attachment) != '') && file_exists(DIR_DOWNLOAD . $attachment)) {
						$attachments[] = array(
							'path' => DIR_DOWNLOAD . $attachment
						);
					}
				}
			}
			
			if ($missing_send['attachments_cat']) {
				$files_catalog = str_ireplace('/system/', $missing_send['attachments_cat'], DIR_SYSTEM);
				
				if(is_dir($files_catalog)) {
					$files = scandir($files_catalog);
					
					if($files) {
						foreach ($files as $attachment) {
							if(!preg_match("/^[\.]{1,2}$/", $attachment)) {
								$attachments_cat[] = array(
									'path' => $files_catalog . $attachment
								);
							}
						}
					}
				}
			}
			
			$results = $this->model_marketing_contacts->getEmailsToSend($msend_id, $contacts_count_message);

			foreach ($results as $result) {
				$emails[$result['email']] = array(
					'customer_id'   => $result['customer_id'],
					'firstname'     => $result['firstname'],
					'lastname'      => $result['lastname'],
					'country'       => $result['country'],
					'zone'          => $result['zone'],
					'date_added'    => $result['date_added']
				);
			}
			
			$left_total = $this->model_marketing_contacts->getTotalEmailsToSend($msend_id);

			if ($emails) {
				if ($page == 1) {
					$contacts_log->write(sprintf($this->language->get('text_count_email'), $left_total));
				}
				if ($page > 1) {
					sleep($contacts_sleep_time);
				} else {
					sleep(2);
				}
				
				$count_emails = count($emails);
				$count_send_error = $this->model_marketing_contacts->getErrorsSend($msend_id);
				$lastsend = 0;
				$error_limit = false;
				
				if ($count_emails < $left_total) {
					$json['success'] = sprintf($this->language->get('text_miss_sent'), $left_total);
				} else {
					$json['success'] = $this->language->get('text_success') . '<br />' . $this->language->get('text_end_send');
					$lastsend = 1;
				}
				
				if ($count_emails < $left_total) {
					$json['next'] = str_replace('&amp;', '&', $this->url->link('marketing/contacts/misssend', 'msid=' . $msend_id . '&token=' . $this->session->data['token'] . '&page=' . ($page + 1), 'SSL'));
				} else {
					$json['next'] = '';
				}
				
				if (($this->config->get('contacts_mail_from')) && (trim($this->config->get('contacts_mail_from')) != '')) {
					$senders = explode(',', preg_replace('/\s/', '', $this->config->get('contacts_mail_from')));
				} else {
					$senders = array($this->config->get('config_email'));
				}
				
				$sender_names = array($store_name);
				
				if (!$store_id) {
					if (($this->config->get('contacts_mail_fromname')) && (trim($this->config->get('contacts_mail_fromname')) != '')) {
						$sender_names = explode('|', $this->config->get('contacts_mail_fromname'));
					}
				}
				
				$subjects = explode('|', $missing_send['subject']);
				
				if (($this->config->get('contacts_retpath_email')) && (trim($this->config->get('contacts_retpath_email')) != '')) {
					$retpath_email = trim($this->config->get('contacts_retpath_email'));
				} else {
					$retpath_email = false;
				}

				foreach ($emails as $email => $customer) {
					if ($count_send_error < $contacts_count_error) {
						if ($this->config->get('contacts_global_limith') && $this->config->get('contacts_global_limitd')) {
							$total_mails = $this->model_marketing_contacts->getCountMails();
							
							if ($total_mails['hour'] >= $this->config->get('contacts_global_limith')) {
								$contacts_log->write(strip_tags($this->language->get('error_limit_hour')));
								$json['error'][] = $this->language->get('error_limit_hour');
								$error_limit = true;
							}
							if ($total_mails['day'] >= $this->config->get('contacts_global_limitd')) {
								$contacts_log->write(strip_tags($this->language->get('error_limit_day')));
								$json['error'][] = $this->language->get('error_limit_day');
								$error_limit = true;
							}
							
							$json['hour'] = $this->config->get('contacts_global_limith') - $total_mails['hour'];
							$json['day'] = $this->config->get('contacts_global_limitd') - $total_mails['day'];
						}
						
						if (!$error_limit) {
							if ($this->checkValidEmail($email)) {
								$firstname = $customer['firstname'] ? $customer['firstname'] : '';
								$lastname = $customer['lastname'] ? $customer['lastname'] : '';
								
								if ($customer['firstname'] && $customer['lastname']) {
									$name = $customer['firstname'] . ' ' . $customer['lastname'];
								} elseif ($customer['firstname'] && !$customer['lastname']) {
									$name = $customer['firstname'];
								} elseif (!$customer['firstname'] && $customer['lastname']) {
									$name = $customer['lastname'];
								} else {
									$name = $this->language->get('text_client');
								}
								
								$country = $customer['country'] ? $customer['country'] : $shop_country;
								$zone = $customer['zone'] ? $customer['zone'] : $shop_zone;
								
								if (count($sender_names) > 1) {
									$number = mt_rand(0, count($sender_names) - 1);
									$store_name = trim($sender_names[$number]);
								} else {
									$store_name = trim($sender_names[0]);
								}
								
								$controlsumm = md5($email . $this->config->get('contacts_unsub_pattern'));
								
								if ($customer['customer_id']) {
									$sid = base64_encode($msend_id . '|' . $email . '|' . $controlsumm . '|' . $customer['customer_id']);
								} else {
									$sid = base64_encode($msend_id . '|' . $email . '|' . $controlsumm . '|0');
								}
								
								$unsubscribe_url = HTTP_CATALOG . 'index.php?route=account/success&sid=' . $sid;
								
								if ($set_unsubscribe) {
									$unsub = sprintf($this->language->get('text_unsubscribe'), $unsubscribe_url);
								} else {
									$unsub = '';
								}

								$shopname = $store_name;
								$shopurl = '<a href="' . $store_url . '">' . $store_name . '</a>';
								
								$tegi_subject = array('{firstname}','{lastname}','{name}','{country}','{zone}','{shopname}');
								$tegi_message = array('{firstname}','{lastname}','{name}','{country}','{zone}','{shopname}','{shopurl}','{special}','{bestseller}','{latest}','{featured}','{selproducts}','{catproducts}','{unsub}');
								
								$replace_subject = array($firstname, $lastname, $name, $country, $zone, $shopname);
								$replace_message = array($firstname, $lastname, $name, $country, $zone, $shopname, $shopurl, $special, $bestseller, $latest, $featured, $selproducts, $catproducts, $unsub);
								
								if (count($subjects) > 1) {
									$number = mt_rand(0, count($subjects) - 1);
									$orig_subject = trim($subjects[$number]);
								} else {
									$orig_subject = trim($subjects[0]);
								}
								
								$orig_message = $missing_send['message'];
							
								$subject_to_send = str_replace($tegi_subject, $replace_subject, $orig_subject);
								$message_to_send = str_replace($tegi_message, $replace_message, $orig_message);

								$message  = '<html dir="ltr" lang="en">' . "\n";
								$message .= ' <head>' . "\n";
								$message .= '  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . "\n";
								$message .= '  <title>' . html_entity_decode($subject_to_send, ENT_QUOTES, 'UTF-8') . '</title>' . "\n";
								$message .= ' </head>' . "\n";

								$controlimage = HTTP_CATALOG . 'index.php?route=feed/stats/images&sid=' . $sid;
								$message .= ' <body><table style="width:98%; background:url(' . $controlimage . '); margin-left:auto; margin-right:auto;"><tr><td>' . "\n";
								$message .= html_entity_decode($message_to_send, ENT_QUOTES, 'UTF-8') . "\n\n";
								
								$message .= '  <table style="width:100%; background:#efefef; font-size:12px;"><tr><td style="padding:5px; text-align:center;">' . "\n";
								
								if ($set_unsubscribe) {
									$message .= sprintf($this->language->get('text_unsubscribe'), $unsubscribe_url) . "\n";
								} else {
									$message .= $shopurl . "\n";
								}
								$message .= '  </td></tr></table>' . "\n";

								$message .= ' </td></tr></table></body>' . "\n";
								$message .= '</html>' . "\n";
								
								libxml_use_internal_errors(true);
								$doc = new DOMDocument;
								$doc->loadHTML($message);
								
								foreach ($doc->getElementsByTagName('a') as $ateg) {
									if ($ateg->hasAttribute('href')) {
										$ateg_href = $ateg->getAttribute('href');
										$pos = strpos($ateg_href, 'account/success');
										if($pos === false) {
											$ateg_url = base64_encode($ateg_href);
											$new_url = HTTP_CATALOG . 'index.php?route=feed/stats/clck&sid=' . $sid . '&link=' . $ateg_url;
											$ateg->setAttribute('href', $new_url);
										}
									}
								}
								
								$newmessage = $doc->saveHTML();
								libxml_clear_errors();

								if (count($senders) > 1) {
									$number = mt_rand(0, count($senders) - 1);
									$sender = $senders[$number];
								} else {
									$sender = $senders[0];
								}

								$mail = new Mail_CS();
								$mail->protocol = $contacts_mail_protocol;
								$mail->parameter = $this->config->get('contacts_mail_parameter');
								$mail->hostname = $this->config->get('contacts_smtp_host');
								$mail->username = $this->config->get('contacts_smtp_username');
								$mail->password = html_entity_decode($this->config->get('contacts_smtp_password'), ENT_QUOTES, 'UTF-8');
								$mail->port = $contacts_smtp_port;
								$mail->timeout = $contacts_smtp_timeout;
								
								$mail->setTo($email);
								$mail->setFrom($sender);
								$mail->setMid($sid);
								if ($this->config->get('contacts_add_listid')) {
									$mail->setListid($msend_id);
								}
								if ($precedence) {
									$mail->setPrecedence($precedence);
								}
								if ($retpath_email) {
									$mail->setRetpath($retpath_email);
								}
								$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
								if ($set_unsubscribe) {
									$mail->setUnsubscribe($unsubscribe_url);
								}
								if ($attachments) {
									foreach ($attachments as $attachment) {
										$mail->addAttachment($attachment['path']);
									}
								}
								if ($attachments_cat) {
									foreach ($attachments_cat as $attachment) {
										$mail->addAttachment($attachment['path']);
									}
								}
								$mail->setSubject(html_entity_decode($subject_to_send, ENT_QUOTES, 'UTF-8'));
								$mail->setHtml($newmessage);
								$contacts_log->write($this->language->get('text_send_email') . $email);
								$send_status = $mail->send();
								
								if ($send_status == 55) {
									$this->model_marketing_contacts->removeEmailSend($msend_id, $email);
								} elseif (substr($send_status, 0, 4) == 'cerr') {
									$lastsend = 0;
									$json['success'] = '';
									$json['next'] = '';
									$json['error'][] = $this->language->get('error_send_attention') . '<br />' . $this->language->get('error_send_' . substr($send_status, 4, 2)) . '<br />' . $this->language->get('text_stop_send');
									$json['stop_send'] = $msend_id;
									break;
								} elseif (substr($send_status, 0, 4) == 'nerr') {
									$json['attention'][] = $this->language->get('error_send_attention') . '<br />' . $this->language->get('error_send_' . substr($send_status, 4, 2)) . '<br />' . $this->language->get('text_continues_send');
									$bad_email = false;
									
									if (substr($send_status, 4, 2) == '24') {
										$this->model_marketing_contacts->removeEmailSend($msend_id, $email);
									}
									
									if ((substr($send_status, 4, 2) == '21') || (substr($send_status, 4, 2) == '22') || (substr($send_status, 4, 2) == '23')) {
										$this->model_marketing_contacts->removeEmailSend($msend_id, $email);
										
										$send_replies = explode('|', $send_status);
										
										if (!empty($send_replies[1]) && !empty($reply_badem)) {
											foreach ($reply_badem as $bad_reply) {
												$bad_text = trim($bad_reply);

												if ($bad_text != '') {
													$pos = stripos($send_replies[1], $bad_text);
													if ($pos !== false) {
														$bad_email = true;
														break;
													}
												}
											}
										}
									}
									
									if ($bad_email) {
										if ($bad_email_action == '1') {
											$this->model_marketing_contacts->addUnsubscribe($email, $msend_id, $customer['customer_id']);
											$contacts_log->write($this->language->get('text_bad_email_unsub'));
										}
										if ($bad_email_action == '2') {
											$this->model_marketing_contacts->addUnsubscribe($email, $msend_id, $customer['customer_id']);
											$this->model_marketing_contacts->delNewsletterFromEmail($email);
											$contacts_log->write($this->language->get('text_bad_email_remove'));
										}
									} else {
										$this->model_marketing_contacts->addErrorSend($msend_id);
										$count_send_error++;
									}
								} else {
									$this->model_marketing_contacts->addErrorSend($msend_id);
									$count_send_error++;
								}
								$this->model_marketing_contacts->addCountMails($msend_id, 0, 1);
								$json['hour']--;
								$json['day']--;
							} else {
								$contacts_log->write($this->language->get('text_bad_email') . $email);
								$this->model_marketing_contacts->removeEmailSend($msend_id, $email);
								
								if ($bad_email_action == '1') {
									$this->model_marketing_contacts->addUnsubscribe($email, $msend_id, $customer['customer_id']);
									$contacts_log->write($this->language->get('text_bad_email_unsub'));
								}
								if ($bad_email_action == '2') {
									$this->model_marketing_contacts->addUnsubscribe($email, $msend_id, $customer['customer_id']);
									$this->model_marketing_contacts->delNewsletterFromEmail($email);
									$contacts_log->write($this->language->get('text_bad_email_remove'));
								}
							}
						} else {
							$lastsend = 0;
							$json['success'] = '';
							$json['next'] = '';
							$json['stop_send'] = $msend_id;
							break;
						}						
					} else {
						$contacts_log->write(strip_tags($this->language->get('error_send_count')));
						$lastsend = 0;
						$json['success'] = '';
						$json['next'] = '';
						$json['error'][] = $this->language->get('error_send_count');
						$json['stop_send'] = $msend_id;
						break;
					}
				}
			
				if($lastsend == 1) {
					$this->cache->delete('contacts');
					$contacts_log->write($this->language->get('text_end_send'));

					$this->model_marketing_contacts->setCompleteDataSend($msend_id);
					$this->model_marketing_contacts->delProductSend($msend_id);
					$this->model_marketing_contacts->delEmailsSend($msend_id);
					
					if ($attachments) {
						foreach ($attachments as $attachment) {
							if (file_exists($attachment['path'])) {
								@unlink($attachment['path']);
							}
						}
					}
				}

			} else {
				$this->cache->delete('contacts');
				$contacts_log->write($this->language->get('error_noemails'));
				$json['error'][] = $this->language->get('error_noemails');
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function send() {
		set_time_limit(100);
		$this->config->set('config_error_display', 0);
		
		$json = array();
		$json['error'] = array();
		$json['attention'] = array();
		
		$this->load->language('marketing/contacts');
		
		$contacts_log = new Log('contacts.log');
		require_once(DIR_SYSTEM . 'library/mail_cs.php');

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			$this->load->model('marketing/contacts');
			
			if (!$this->validate()) {
				$json['error']['warning'] = $this->language->get('error_permission');
			}
			
			if(!$this->config->get('contacts_allow_sendcron')) {
				$run_crons = $this->model_marketing_contacts->getRunCron();
				if ($run_crons) {
					$json['error']['warning'] = $this->language->get('error_send_iscron');
				}
			}

			if (!$this->request->post['subject']) {
				$json['error']['subject'] = $this->language->get('error_subject');
			}

			if (!$this->request->post['message']) {
				$json['error']['message'] = $this->language->get('error_message');
			}
			
			if (!empty($this->request->post['set_period'])) {
				if (!empty($this->request->post['date_start'])) {
					if (date('Y-m-d', strtotime($this->request->post['date_start'])) != $this->request->post['date_start']) {
						$json['error']['warning'] = $this->language->get('error_date_start');
					}
				}
				if (!empty($this->request->post['date_end'])) {
					if (date('Y-m-d', strtotime($this->request->post['date_end'])) != $this->request->post['date_end']) {
						$json['error']['warning'] = $this->language->get('error_date_start');
					}
				}
			}
			
			if (!empty($this->request->post['set_limit'])) {
				if (!empty($this->request->post['limit_start']) && !empty($this->request->post['limit_end'])) {
					if ((int)$this->request->post['limit_start'] >= (int)$this->request->post['limit_end']) {
						$json['error']['warning'] = $this->language->get('error_set_limit');
					}
					if ((int)$this->request->post['limit_end'] < 1) {
						$json['error']['warning'] = $this->language->get('error_set_limit');
					}
				}
			}
			
			if (!isset($this->request->get['add_cron']) && !$json['error']) {
				if ($this->config->get('contacts_global_limith') && $this->config->get('contacts_global_limitd')) {
					$total_mails = $this->model_marketing_contacts->getCountMails();
					
					if ($total_mails['hour'] >= $this->config->get('contacts_global_limith')) {
						$contacts_log->write(strip_tags($this->language->get('error_limit_hour')));
						$json['error']['warning'] = $this->language->get('error_limit_hour');
						$json['stop_send'] = isset($this->request->get['sid']) ? $this->request->get['sid'] : '';
					}
					if ($total_mails['day'] >= $this->config->get('contacts_global_limitd')) {
						$contacts_log->write(strip_tags($this->language->get('error_limit_day')));
						$json['error']['warning'] = $this->language->get('error_limit_day');
						$json['stop_send'] = isset($this->request->get['sid']) ? $this->request->get['sid'] : '';
					}
				}
			}

			if (!$json['error']) {
				$this->load->model('setting/store');
			
				$store_info = $this->model_setting_store->getStore($this->request->post['store_id']);			
				
				if (!empty($store_info)) {
					$store_name = $store_info['name'];
					$store_url = $store_info['url'];
				} else {
					$store_name = $this->config->get('config_name');
					$store_url = HTTP_CATALOG;
				}
				
				if (!empty($this->request->post['set_language']) && !empty($this->request->post['language_id'])) {
					$this->load->model('setting/setting');
					
					$store_config = $this->model_setting_setting->getSetting('config', $this->request->post['store_id']);
					
					if (!empty($store_config['config_langdata'][$this->request->post['language_id']]['name'])) {
						$store_name = $store_config['config_langdata'][$this->request->post['language_id']]['name'];
					}
				}
				
				$send_id = isset($this->request->get['sid']) ? $this->request->get['sid'] : 0;
				$spam_check = isset($this->request->get['spam_check']) ? 1 : false;
				
				if (isset($this->request->get['add_cron'])) {
					$add_cron = true;
				} else {
					$add_cron = false;
					$cron_id = 0;
				}

				if (isset($this->request->get['page'])) {
					$page = $this->request->get['page'];
				} else {
					$page = 1;
					$this->cache->delete('contacts');
					if ($spam_check) {
						$contacts_log->write($this->language->get('text_start_check'));
					} elseif ($add_cron) {
						$data_cron = array(
							'name'     => $this->language->get('text_new_cron'),
							'checking' => 0,
							'status'   => 0
						);
						$cron_id = $this->model_marketing_contacts->addNewCron($data_cron);
					} else {
						$contacts_log->write($this->language->get('text_start_send'));
						$send_id = $this->model_marketing_contacts->addNewSend($this->request->post['store_id'], 1);
					}
				}

				if ($this->config->get('contacts_mail_protocol') && ($this->config->get('contacts_mail_protocol') == 'smtp')) {
					$contacts_mail_protocol = 'smtp';
				} else {
					$contacts_mail_protocol = 'mail';
				}
				
				$contacts_smtp_port = $this->config->get('contacts_smtp_port') ? $this->config->get('contacts_smtp_port') : 25;
				$contacts_smtp_timeout = $this->config->get('contacts_smtp_timeout') ? $this->config->get('contacts_smtp_timeout') : 5;
				$contacts_count_message = $this->config->get('contacts_count_message') ? $this->config->get('contacts_count_message') : 1;
				$contacts_sleep_time = $this->config->get('contacts_sleep_time') ? $this->config->get('contacts_sleep_time') : 4;
				$contacts_count_error = $this->config->get('contacts_count_send_error') ? $this->config->get('contacts_count_send_error') : 10;
				
				$precedence = $this->config->get('contacts_add_precedence') ? $this->config->get('contacts_add_precedence') : '';
				
				$set_region = !empty($this->request->post['set_region']) ? 1 : false;
				if ($set_region) {
					$country_id = !empty($this->request->post['country_id']) ? $this->request->post['country_id'] : false;
					$zone_id = !empty($this->request->post['zone_id']) ? $this->request->post['zone_id'] : false;
					$invers_region = !empty($this->request->post['invers_region']) ? 1 : false;
				} else {
					$country_id = false;
					$zone_id = false;
					$invers_region = false;
				}
				
				$set_period = !empty($this->request->post['set_period']) ? 1 : false;
				if ($set_period) {
					$date_start = !empty($this->request->post['date_start']) ? $this->request->post['date_start'] : false;
					$date_end = !empty($this->request->post['date_end']) ? $this->request->post['date_end'] : false;
				} else {
					$date_start = false;
					$date_end = false;
				}
				
				$set_limit = !empty($this->request->post['set_limit']) ? 1 : false;
				if ($set_limit) {
					$limit_start = !empty($this->request->post['limit_start']) ? $this->request->post['limit_start'] : false;
					$limit_end = !empty($this->request->post['limit_end']) ? $this->request->post['limit_end'] : false;
				} else {
					$limit_start = false;
					$limit_end = false;
				}
				
				$invers_product = !empty($this->request->post['invers_product']) ? 1 : false;
				$invers_category = !empty($this->request->post['invers_category']) ? 1 : false;
				
				$invers_customer = !empty($this->request->post['invers_customer']) ? 1 : false;
				$invers_client = !empty($this->request->post['invers_client']) ? 1 : false;
				$invers_affiliate = !empty($this->request->post['invers_affiliate']) ? 1 : false;
				
				$static = !empty($this->request->post['static']) ? $this->request->post['static'] : 'dinamic';
				$send_products = !empty($this->request->post['insert_products']) ? 1 : false;

				$set_unsubscribe = !empty($this->request->post['set_unsubscribe']) ? 1 : false;
				$control_unsubscribe = !empty($this->request->post['control_unsubscribe']) ? 1 : false;
				
				$dopurl = !empty($this->request->post['dopurl']) ? $this->request->post['dopurl'] : '';
				
				if (!empty($this->request->post['set_language']) && !empty($this->request->post['language_id'])) {
					$language_id = $this->request->post['language_id'];
					$lang_id = $language_id;
				} else {
					$language_id = false;
					$lang_id = $this->config->get('config_language_id');
				}

				$country_info = $this->model_marketing_contacts->getCountry($this->config->get('config_country_id'));
				$shop_country = !empty($country_info) ? $country_info['name'] : '';
				
				$zone_info = $this->model_marketing_contacts->getZone($this->config->get('config_zone_id'));
				$shop_zone = !empty($zone_info) ? $zone_info['name'] : '';
				
				$store_id = $this->request->post['store_id'];
				$cgroup_id = $this->config->get('config_customer_group_id');
				
				$reply_badem = explode('|', $this->config->get('contacts_reply_badem'));
				$bad_email_action = $this->config->get('contacts_bad_eaction') ? $this->config->get('contacts_bad_eaction') : 0;
				
				$special = '';
				$bestseller = '';
				$latest = '';
				$featured = '';
				$selproducts = '';
				$catproducts = '';
				
				if ($send_products) {
					if (!empty($this->request->post['special'])) {
						if ($this->request->post['special_limit'] && ($this->request->post['special_limit'] > 0)) {
							$special_limit = $this->request->post['special_limit'];
						} else {
							$special_limit = 4;
						}
						
						if ($this->request->post['special_title']) {
							$special_title = $this->request->post['special_title'];
						} else {
							$special_title = $this->language->get('special_title');
						}
						
						$special_products = array();
						
						if (!$add_cron) {
							$special_cache_data = $this->cache->get('contacts.special.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$special_limit);
							
							if (!$special_cache_data) {
								$specials = $this->model_marketing_contacts->getSpecialsProducts($special_limit, $lang_id);
								if (!empty($specials)) {
									$special_products = $this->getMailProducts($specials);
								}
								$this->cache->set('contacts.special.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$special_limit, $special_products);
							} else {
								$special_products = $special_cache_data;
							}
						}

						if ($special_products) {
							$sdata['title'] = $special_title;
							$sdata['products'] = $special_products;
							$special = $this->load->view('mail/contacts_products.tpl', $sdata);
						}
						
						if ($page == 1) {
							$data_special = array(
								'type'     => 'special',
								'title'    => $special_title,
								'qty'      => $special_limit,
								'cat_id'   => '',
								'cat_each' => '',
								'products' => ''
							);
							
							$this->model_marketing_contacts->setProductToSend($send_id, $cron_id, $data_special);
						}
					}
					
					if (!empty($this->request->post['bestseller'])) {
						if ($this->request->post['bestseller_limit'] && ($this->request->post['bestseller_limit'] > 0)) {
							$bestseller_limit = $this->request->post['bestseller_limit'];
						} else {
							$bestseller_limit = 4;
						}
						
						if ($this->request->post['bestseller_title']) {
							$bestseller_title = $this->request->post['bestseller_title'];
						} else {
							$bestseller_title = $this->language->get('bestseller_title');
						}
						
						$bestseller_products = array();
						
						if (!$add_cron) {
							$bestseller_cache_data = $this->cache->get('contacts.bestseller.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$bestseller_limit);
							
							if (!$bestseller_cache_data) {
								$bestsellers = $this->model_marketing_contacts->getBestSellerProducts($bestseller_limit, $lang_id);
								if (!empty($bestsellers)) {
									$bestseller_products = $this->getMailProducts($bestsellers);
								}
								$this->cache->set('contacts.bestseller.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$bestseller_limit, $bestseller_products);
							} else {
								$bestseller_products = $bestseller_cache_data;
							}
						}
						
						if ($bestseller_products) {
							$bdata['title'] = $bestseller_title;
							$bdata['products'] = $bestseller_products;
							$bestseller = $this->load->view('mail/contacts_products.tpl', $bdata);
						}
						
						if ($page == 1) {
							$data_bestseller = array(
								'type'     => 'bestseller',
								'title'    => $bestseller_title,
								'qty'      => $bestseller_limit,
								'cat_id'   => '',
								'cat_each' => '',
								'products' => ''
							);
							
							$this->model_marketing_contacts->setProductToSend($send_id, $cron_id, $data_bestseller);
						}
					}
					
					if (!empty($this->request->post['latest'])) {
						if ($this->request->post['latest_limit'] && ($this->request->post['latest_limit'] > 0)) {
							$latest_limit = $this->request->post['latest_limit'];
						} else {
							$latest_limit = 4;
						}
						
						if ($this->request->post['latest_title']) {
							$latest_title = $this->request->post['latest_title'];
						} else {
							$latest_title = $this->language->get('latest_title');
						}
						
						$latest_products = array();
						
						if (!$add_cron) {
							$latest_cache_data = $this->cache->get('contacts.latest.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$latest_limit);
							
							if (!$latest_cache_data) {
								$latests = $this->model_marketing_contacts->getLatestProducts($latest_limit, $lang_id);
								if (!empty($latests)) {
									$latest_products = $this->getMailProducts($latests);
								}
								$this->cache->set('contacts.latest.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$latest_limit, $latest_products);
							} else {
								$latest_products = $latest_cache_data;
							}
						}
						
						if ($latest_products) {
							$ldata['title'] = $latest_title;
							$ldata['products'] = $latest_products;
							$latest = $this->load->view('mail/contacts_products.tpl', $ldata);
						}
						
						if ($page == 1) {
							$data_latest = array(
								'type'     => 'latest',
								'title'    => $latest_title,
								'qty'      => $latest_limit,
								'cat_id'   => '',
								'cat_each' => '',
								'products' => ''
							);
							
							$this->model_marketing_contacts->setProductToSend($send_id, $cron_id, $data_latest);
						}
					}
					
					if (!empty($this->request->post['featured'])) {
						if ($this->request->post['featured_limit'] && ($this->request->post['featured_limit'] > 0)) {
							$featured_limit = $this->request->post['featured_limit'];
						} else {
							$featured_limit = 4;
						}
						
						if ($this->request->post['featured_title']) {
							$featured_title = $this->request->post['featured_title'];
						} else {
							$featured_title = $this->language->get('featured_title');
						}
						
						$featured_products = array();
						
						if (!$add_cron) {
							$featured_cache_data = $this->cache->get('contacts.featured.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$featured_limit);
						
							if (!$featured_cache_data) {
								$featureds = $this->model_marketing_contacts->getFeaturedProducts($featured_limit, $lang_id);
								if (!empty($featureds)) {
									$featured_products = $this->getMailProducts($featureds);
								}
								$this->cache->set('contacts.featured.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$featured_limit, $featured_products);
							} else {
								$featured_products = $featured_cache_data;
							}
						}

						if ($featured_products) {
							$fdata['title'] = $featured_title;
							$fdata['products'] = $featured_products;
							$featured = $this->load->view('mail/contacts_products.tpl', $fdata);
						}
						
						if ($page == 1) {
							$data_featured = array(
								'type'     => 'featured',
								'title'    => $featured_title,
								'qty'      => $featured_limit,
								'cat_id'   => '',
								'cat_each' => '',
								'products' => ''
							);
							
							$this->model_marketing_contacts->setProductToSend($send_id, $cron_id, $data_featured);
						}
					}

					if (!empty($this->request->post['selectproducts']) && isset($this->request->post['selproducts']) && is_array($this->request->post['selproducts'])) {
						if ($this->request->post['selproducts_title']) {
							$selproducts_title = $this->request->post['selproducts_title'];
						} else {
							$selproducts_title = $this->language->get('selproducts_title');
						}
						
						$selected_products = array();
						
						if (!$add_cron) {
							$selected_cache_data = $this->cache->get('contacts.selected.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id);
							
							if (!$selected_cache_data) {
								$selecteds = $this->model_marketing_contacts->getSelectedProducts($this->request->post['selproducts'], $lang_id);
								if (!empty($selecteds)) {
									$selected_products = $this->getMailProducts($selecteds);
								}
								$this->cache->set('contacts.selected.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id, $selected_products);
							} else {
								$selected_products = $selected_cache_data;
							}
						}

						if ($selected_products) {
							$spdata['title'] = $selproducts_title;
							$spdata['products'] = $selected_products;
							$selproducts = $this->load->view('mail/contacts_products.tpl', $spdata);
						}
						
						if ($page == 1) {
							$data_selproducts = array(
								'type'     => 'selproducts',
								'title'    => $selproducts_title,
								'qty'      => '',
								'cat_id'   => '',
								'cat_each' => '',
								'products' => implode(',', $this->request->post['selproducts'])
							);
							
							$this->model_marketing_contacts->setProductToSend($send_id, $cron_id, $data_selproducts);
						}
					}
					
					if (!empty($this->request->post['catselectproducts']) && isset($this->request->post['catproducts']) && is_array($this->request->post['catproducts'])) {
						if ($this->request->post['catproducts_limit'] && ($this->request->post['catproducts_limit'] > 0)) {
							$catproducts_limit = $this->request->post['catproducts_limit'];
						} else {
							$catproducts_limit = 4;
						}
						
						if ($this->request->post['catproducts_title']) {
							$catproducts_title = $this->request->post['catproducts_title'];
						} else {
							$catproducts_title = $this->language->get('catproducts_title');
						}
						
						if (isset($this->request->post['catproducts_each'])) {
							$catproducts_each = 1;
						} else {
							$catproducts_each = 0;
						}
						
						$category_products = array();
						
						if (!$add_cron) {
							$catproduct_cache_data = $this->cache->get('contacts.catproduct.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$catproducts_limit);
							
							if (!$catproduct_cache_data) {
								if ($catproducts_each) {
									foreach ($this->request->post['catproducts'] as $pcategory_id) {
										$allcatproducts[] = $this->model_marketing_contacts->getProductsFromCat($pcategory_id, $catproducts_limit, $lang_id);
									}
									foreach ($allcatproducts as $pid) {
										foreach ($pid as $key => $value) {
											$selcatproducts[$key] = $value;
										}
									}
								} else {
									$selcatproducts = $this->model_marketing_contacts->getCatSelectedProducts($this->request->post['catproducts'], $catproducts_limit, $lang_id);
								}						
								
								if (!empty($selcatproducts)) {
									$category_products = $this->getMailProducts($selcatproducts);
								}
								$this->cache->set('contacts.catproduct.' . (int)$lang_id . '.' . (int)$store_id . '.' . (int)$cgroup_id . '.' . (int)$send_id . '.' . (int)$catproducts_limit, $category_products);
							} else {
								$category_products = $catproduct_cache_data;
							}
						}

						if ($category_products) {
							$scdata['title'] = $catproducts_title;
							$scdata['products'] = $category_products;
							$catproducts = $this->load->view('mail/contacts_products.tpl', $scdata);
						}
						
						if ($page == 1) {
							$data_catproducts = array(
								'type'     => 'catproducts',
								'title'    => $catproducts_title,
								'qty'      => $catproducts_limit,
								'cat_id'   => implode(',', $this->request->post['catproducts']),
								'cat_each' => $catproducts_each,
								'products' => ''
							);
							
							$this->model_marketing_contacts->setProductToSend($send_id, $cron_id, $data_catproducts);
						}
					}
				}
	
				$left_total = 0;
				$emails = array();
				$attachments = array();
				$attachments_cat = array();
				$send_to_data = '';
				$send_attachments = '';
				$send_attachments_cat = '';
				$manual = '';
				
				if (isset($this->request->post['attachments']) && is_array($this->request->post['attachments'])) {
					foreach ($this->request->post['attachments'] as $attachment) {
						if (file_exists(DIR_DOWNLOAD . $attachment)) {
							$attachments[] = array(
								'path' => DIR_DOWNLOAD . $attachment
							);
						}
					}
					if ($attachments) {
						$send_attachments = implode(',', $this->request->post['attachments']);
					}
				}
				
				if (!empty($this->request->post['attachments_cat'])) {
					$send_attachments_cat = $this->request->post['attachments_cat'];
					$files_catalog = str_ireplace('/system/', $this->request->post['attachments_cat'], DIR_SYSTEM);
					
					if(is_dir($files_catalog)) {
						$files = scandir($files_catalog);
						
						if($files) {
							foreach ($files as $attachment) {
								if(!preg_match("/^[\.]{1,2}$/", $attachment)) {
									$attachments_cat[] = array(
										'path' => $files_catalog . $attachment
									);
								}
							}
						}
					}
				}
				
				if ($spam_check) {
					if ($this->config->get('contacts_spamtest_url') == 'www.isnotspam.com') {
						$check_page = file_get_contents('http://www.isnotspam.com/');
						if($check_page !== false) {
							libxml_use_internal_errors(true);
							$blank = new DOMDocument;
							$blank->loadHTML($check_page);
							
							foreach ($blank->getElementsByTagName('input') as $input) {
								if ($input->hasAttribute('name')) {
									$input_name = $input->getAttribute('name');
									$ipos = strpos($input_name, 'email');
									if($ipos !== false) {
										$check_email = $input->getAttribute('value');
										$check_url = 'http://www.isnotspam.com/newlatestreport.php?email=' . urlencode($check_email);
										
										$emails[$check_email] = array(
											'customer_id'   => '',
											'firstname'     => 'Gordon',
											'lastname'      => 'Freeman',
											'country'       => '',
											'zone'          => '',
											'date_added'    => ''
										);
										
										break;
									}
								}
							}
							
							libxml_clear_errors();
							
							if ($emails) {
								$email_total = count($emails);
								$json['check_url'] = $check_url;
							} else {
								$this->cache->delete('contacts');
								$json['error']['warning'] = $this->language->get('error_spam_check');
							}
							
						} else {
							$this->cache->delete('contacts');
							$json['error']['warning'] = $this->language->get('error_spam_check');
						}
					
					} else {
						
						$rmail = '';
						$possible = '1234567890abcdifghjklmnoprstyvwz';
						$lpossible = mb_strlen($possible, 'UTF-8');
						$length = 5;
						
						for ($i = 0; $i < $length;) {
							$char = substr($possible, mt_rand(0, $lpossible-1), 1);
							if (!strstr($rmail, $char)) {
								$rmail .= $char;
								$i++;
							}
						}
						
						$check_email = 'web-' . $rmail . '@mail-tester.com';
						$check_url = 'https://www.mail-tester.com/web-' . $rmail;
						
						$emails[$check_email] = array(
							'customer_id'   => '',
							'firstname'     => 'Gordon',
							'lastname'      => 'Freeman',
							'country'       => '',
							'zone'          => '',
							'date_added'    => ''
						);
						
						$email_total = count($emails);
						$json['check_url'] = $check_url;
					}
				}
				
				if (!$spam_check && $page == 1) {
					if ($this->request->post['to'] == 'customer_select') {
						if (!empty($this->request->post['customer']) && is_array($this->request->post['customer'])) {
							$send_to_data = implode(',', $this->request->post['customer']);
							if (!$invers_customer) {
								$static = 'static';
							}
						}
					}
					if (($this->request->post['to'] == 'customer_group') || ($this->request->post['to'] == 'client_group')) {
						if (!empty($this->request->post['customer_group_id']) && is_array($this->request->post['customer_group_id'])) {
							$send_to_data = implode(',', $this->request->post['customer_group_id']);
						}
					}
					if ($this->request->post['to'] == 'client_select') {
						if (!empty($this->request->post['client']) && is_array($this->request->post['client'])) {
							$post_clients = array();
							foreach ($this->request->post['client'] as $client) {
								$post_clients[] = $client['email'];
							}
							if ($post_clients) {
								$send_to_data = implode(',', $post_clients);
							}
							if (!$invers_client) {
								$static = 'static';
							}
						}
					}
					if ($this->request->post['to'] == 'send_group') {
						if (!empty($this->request->post['send_group_id']) && is_array($this->request->post['send_group_id'])) {
							$send_to_data = implode(',', $this->request->post['send_group_id']);
							$static = 'dinamic';
						}
					}
					if ($this->request->post['to'] == 'affiliate') {
						if (!empty($this->request->post['affiliate']) && is_array($this->request->post['affiliate'])) {
							$send_to_data = implode(',', $this->request->post['affiliate']);
							if (!$invers_affiliate) {
								$static = 'static';
							}
						}
					}
					if ($this->request->post['to'] == 'product') {
						if (!empty($this->request->post['product']) && is_array($this->request->post['product'])) {
							$send_to_data = implode(',', $this->request->post['product']);
						}
					}
					if ($this->request->post['to'] == 'category') {
						if (!empty($this->request->post['category']) && is_array($this->request->post['category'])) {
							$send_to_data = implode(',', $this->request->post['category']);
						}
					}
					if ($this->request->post['to'] == 'manual') {
						if (!empty($this->request->post['manual'])) {
							$manual = $this->request->post['manual'];
							$static = 'static';
						}
					}

					$data_send = array(
						'store_id'         => $this->request->post['store_id'],
						'send_to'          => $this->request->post['to'],
						'manual'           => $manual,
						'send_to_data'     => $send_to_data,
						'date_start'       => $date_start,
						'date_end'         => $date_end,
						'send_region'      => $set_region,
						'send_country_id'  => $country_id,
						'send_zone_id'     => $zone_id,
						'invers_region'    => $invers_region,
						'invers_customer'  => $invers_customer,
						'invers_client'    => $invers_client,
						'invers_affiliate' => $invers_affiliate,
						'invers_product'   => $invers_product,
						'invers_category'  => $invers_category,
						'send_products'    => $send_products,
						'language_id'      => $language_id,
						'subject'          => $this->request->post['subject'],
						'message'          => $this->request->post['message'],
						'attachments'      => $send_attachments,
						'attachments_cat'  => $send_attachments_cat,
						'dopurl'           => $dopurl,
						'static'           => $static,
						'unsub_url'        => $set_unsubscribe,
						'control_unsub'    => $control_unsubscribe,
						'limit_start'      => $limit_start,
						'limit_end'        => $limit_end
					);
					
					$all_emails = $this->getAllEmails($data_send);
					
					$email_total = count($all_emails);
					
					$data_send['email_total'] = $email_total;
					$data_send['manual'] = '';
					
					if ($add_cron) {
						if ($static == 'static') {
							if ($all_emails) {
								$this->model_marketing_contacts->addDataCron($cron_id, $data_send);
								$this->model_marketing_contacts->saveEmailsToCron($cron_id, $all_emails);
								$contacts_log->write($this->language->get('text_add_cron'));
								$json['add_cron'] = 1;
								$json['success'] = $this->language->get('text_success_cron');
							} else {
								$this->model_marketing_contacts->delCron($cron_id);
								$contacts_log->write($this->language->get('error_noemails'));
								$json['error']['warning'] = $this->language->get('error_noemails');
							}
						} else {
							$this->model_marketing_contacts->addDataCron($cron_id, $data_send);
							$contacts_log->write($this->language->get('text_add_cron'));
							$json['add_cron'] = 1;
							$json['success'] = $this->language->get('text_success_cron');
						}
						$this->cache->delete('contacts');
					} else {
						if ($all_emails) {
							$this->model_marketing_contacts->setDataNewSend($send_id, $data_send);
							$this->model_marketing_contacts->saveEmailsToSend($send_id, $all_emails);
							$contacts_log->write(sprintf($this->language->get('text_count_email'), $email_total));
						} else {
							$this->cache->delete('contacts');
							$this->model_marketing_contacts->delDataSend($send_id);
							$contacts_log->write($this->language->get('error_noemails'));
							$json['error']['warning'] = $this->language->get('error_noemails');
						}
					}
				}
				
				if (!$json['error']) {
					if (!$spam_check && !$add_cron) {
						$results = $this->model_marketing_contacts->getEmailsToSend($send_id, $contacts_count_message);

						foreach ($results as $result) {
							$emails[$result['email']] = array(
								'customer_id'   => $result['customer_id'],
								'firstname'     => $result['firstname'],
								'lastname'      => $result['lastname'],
								'country'       => $result['country'],
								'zone'          => $result['zone'],
								'date_added'    => $result['date_added']
							);
						}
						
						$left_total = $this->model_marketing_contacts->getTotalEmailsToSend($send_id);
					}

					if ($emails) {
						if ($page > 1) {
							sleep($contacts_sleep_time);
						} else {
							sleep(2);
						}

						$lastsend = 0;
						$count_emails = count($emails);
						$savemessage = '';
						$error_limit = false;
						
						if ($spam_check) {
							$count_send_error = 0;
						} else {
							$count_send_error = $this->model_marketing_contacts->getErrorsSend($send_id);
						}
						
						if (isset($email_total)) {
							$json['info'] = sprintf($this->language->get('text_send_info'), $email_total);
						}
						
						if ($count_emails < $left_total) {
							$json['success'] = sprintf($this->language->get('text_send'), $left_total);
						} else {
							$json['success'] = $this->language->get('text_success') . '<br />' . $this->language->get('text_end_send');
							$lastsend = 1;
						}
						
						if ($count_emails < $left_total) {
							$json['next'] = str_replace('&amp;', '&', $this->url->link('marketing/contacts/send', 'sid=' . $send_id . '&token=' . $this->session->data['token'] . '&page=' . ($page + 1), 'SSL'));
						} else {
							$json['next'] = '';
						}
						
						if ($spam_check) {
							$json['next'] = '';
						}
						
						if (($this->config->get('contacts_mail_from')) && (trim($this->config->get('contacts_mail_from')) != '')) {
							$senders = explode(',', preg_replace('/\s/', '', $this->config->get('contacts_mail_from')));
						} else {
							$senders = array($this->config->get('config_email'));
						}
						
						$sender_names = array($store_name);
						
						if (!$store_id) {
							if (($this->config->get('contacts_mail_fromname')) && (trim($this->config->get('contacts_mail_fromname')) != '')) {
								$sender_names = explode('|', $this->config->get('contacts_mail_fromname'));
							}
						}
						
						$subjects = explode('|', $this->request->post['subject']);
						
						if (($this->config->get('contacts_retpath_email')) && (trim($this->config->get('contacts_retpath_email')) != '')) {
							$retpath_email = trim($this->config->get('contacts_retpath_email'));
						} else {
							$retpath_email = false;
						}

						foreach ($emails as $email => $customer) {
							if ($count_send_error < $contacts_count_error) {
								if ($this->config->get('contacts_global_limith') && $this->config->get('contacts_global_limitd')) {
									$total_mails = $this->model_marketing_contacts->getCountMails();
									
									if ($total_mails['hour'] >= $this->config->get('contacts_global_limith')) {
										$contacts_log->write(strip_tags($this->language->get('error_limit_hour')));
										$json['error']['warning'] = $this->language->get('error_limit_hour');
										$error_limit = true;
									}
									if ($total_mails['day'] >= $this->config->get('contacts_global_limitd')) {
										$contacts_log->write(strip_tags($this->language->get('error_limit_day')));
										$json['error']['warning'] = $this->language->get('error_limit_day');
										$error_limit = true;
									}
									
									$json['hour'] = $this->config->get('contacts_global_limith') - $total_mails['hour'];
									$json['day'] = $this->config->get('contacts_global_limitd') - $total_mails['day'];
								}
								
								if (!$error_limit) {
									if ($this->checkValidEmail($email)) {
										$firstname = $customer['firstname'] ? $customer['firstname'] : '';
										$lastname = $customer['lastname'] ? $customer['lastname'] : '';
										
										if ($customer['firstname'] && $customer['lastname']) {
											$name = $customer['firstname'] . ' ' . $customer['lastname'];
										} elseif ($customer['firstname'] && !$customer['lastname']) {
											$name = $customer['firstname'];
										} elseif (!$customer['firstname'] && $customer['lastname']) {
											$name = $customer['lastname'];
										} else {
											$name = $this->language->get('text_client');
										}
										
										$country = $customer['country'] ? $customer['country'] : $shop_country;
										$zone = $customer['zone'] ? $customer['zone'] : $shop_zone;
										
										if (count($sender_names) > 1) {
											$number = mt_rand(0, count($sender_names) - 1);
											$store_name = trim($sender_names[$number]);
										} else {
											$store_name = trim($sender_names[0]);
										}
										
										$controlsumm = md5($email . $this->config->get('contacts_unsub_pattern'));
										
										if ($customer['customer_id']) {
											$sid = base64_encode($send_id . '|' . $email . '|' . $controlsumm . '|' . $customer['customer_id']);
										} else {
											$sid = base64_encode($send_id . '|' . $email . '|' . $controlsumm . '|0');
										}
										
										$unsubscribe_url = HTTP_CATALOG . 'index.php?route=account/success&sid=' . $sid;
										
										if ($set_unsubscribe) {
											$unsub = sprintf($this->language->get('text_unsubscribe'), $unsubscribe_url);
										} else {
											$unsub = '';
										}

										$shopname = $store_name;
										$shopurl = '<a href="' . $store_url . '">' . $store_name . '</a>';
										
										$tegi_subject = array('{firstname}','{lastname}','{name}','{country}','{zone}','{shopname}');
										$tegi_message = array('{firstname}','{lastname}','{name}','{country}','{zone}','{shopname}','{shopurl}','{special}','{bestseller}','{latest}','{featured}','{selproducts}','{catproducts}','{unsub}');
										
										$replace_subject = array($firstname, $lastname, $name, $country, $zone, $shopname);
										$replace_message = array($firstname, $lastname, $name, $country, $zone, $shopname, $shopurl, $special, $bestseller, $latest, $featured, $selproducts, $catproducts, $unsub);
										
										if (count($subjects) > 1) {
											$number = mt_rand(0, count($subjects) - 1);
											$orig_subject = trim($subjects[$number]);
										} else {
											$orig_subject = trim($subjects[0]);
										}
										
										$orig_message = $this->request->post['message'];
									
										$subject_to_send = str_replace($tegi_subject, $replace_subject, $orig_subject);
										$message_to_send = str_replace($tegi_message, $replace_message, $orig_message);
										
										$message  = '<html dir="ltr" lang="en">' . "\n";
										$message .= ' <head>' . "\n";
										$message .= '  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . "\n";
										$message .= '  <title>' . html_entity_decode($subject_to_send, ENT_QUOTES, 'UTF-8') . '</title>' . "\n";
										$message .= ' </head>' . "\n";
										
										$savemessage = $message;
										$savemessage .= ' <body><table style="width:98%; margin-left:auto; margin-right:auto;"><tr><td>' . "\n";
										$savemessage .= html_entity_decode($message_to_send, ENT_QUOTES, 'UTF-8') . "\n";
										$savemessage .= ' </td></tr></table></body>' . "\n";
										$savemessage .= '</html>' . "\n";
										
										$controlimage = HTTP_CATALOG . 'index.php?route=feed/stats/images&sid=' . $sid;
										$message .= ' <body><table style="width:98%; background:url(' . $controlimage . '); margin-left:auto; margin-right:auto;"><tr><td>' . "\n";
										$message .= html_entity_decode($message_to_send, ENT_QUOTES, 'UTF-8') . "\n\n";
		
										$message .= '  <table style="width:100%; background:#efefef; font-size:12px;"><tr><td style="padding:5px; text-align:center;">' . "\n";
										
										if ($set_unsubscribe) {
											$message .= sprintf($this->language->get('text_unsubscribe'), $unsubscribe_url) . "\n";
										} else {
											$message .= $shopurl . "\n";
										}
										$message .= '  </td></tr></table>' . "\n";

										$message .= ' </td></tr></table></body>' . "\n";
										$message .= '</html>' . "\n";
										
										libxml_use_internal_errors(true);
										$doc = new DOMDocument;
										$doc->loadHTML($message);
										
										foreach ($doc->getElementsByTagName('a') as $ateg) {
											if ($ateg->hasAttribute('href')) {
												$ateg_href = $ateg->getAttribute('href');
												$pos = strpos($ateg_href, 'account/success');
												if($pos === false) {
													$ateg_url = base64_encode($ateg_href);
													$new_url = HTTP_CATALOG . 'index.php?route=feed/stats/clck&sid=' . $sid . '&link=' . $ateg_url;
													$ateg->setAttribute('href', $new_url);
												}
											}
										}
										
										$newmessage = $doc->saveHTML();
										libxml_clear_errors();

										if (count($senders) > 1) {
											$number = mt_rand(0, count($senders) - 1);
											$sender = $senders[$number];
										} else {
											$sender = $senders[0];
										}

										$mail = new Mail_CS();
										$mail->protocol = $contacts_mail_protocol;
										$mail->parameter = $this->config->get('contacts_mail_parameter');
										$mail->hostname = $this->config->get('contacts_smtp_host');
										$mail->username = $this->config->get('contacts_smtp_username');
										$mail->password = html_entity_decode($this->config->get('contacts_smtp_password'), ENT_QUOTES, 'UTF-8');
										$mail->port = $contacts_smtp_port;
										$mail->timeout = $contacts_smtp_timeout;
										
										$mail->setTo($email);
										$mail->setFrom($sender);
										$mail->setMid($sid);
										if ($this->config->get('contacts_add_listid')) {
											$mail->setListid($send_id);
										}
										if ($precedence) {
											$mail->setPrecedence($precedence);
										}
										if ($retpath_email) {
											$mail->setRetpath($retpath_email);
										}
										$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
										if ($set_unsubscribe) {
											$mail->setUnsubscribe($unsubscribe_url);
										}
										if ($attachments) {
											foreach ($attachments as $attachment) {
												$mail->addAttachment($attachment['path']);
											}
										}
										if ($attachments_cat) {
											foreach ($attachments_cat as $attachment) {
												$mail->addAttachment($attachment['path']);
											}
										}
										$mail->setSubject(html_entity_decode($subject_to_send, ENT_QUOTES, 'UTF-8'));
										$mail->setHtml($newmessage);
										$contacts_log->write($this->language->get('text_send_email') . $email);
										$send_status = $mail->send();
										
										if ($send_status == 55) {
											$this->model_marketing_contacts->removeEmailSend($send_id, $email);
										} elseif (substr($send_status, 0, 4) == 'cerr') {
											$lastsend = 0;
											$json['success'] = '';
											$json['next'] = '';
											$json['error']['warning'] = $this->language->get('error_send_attention') . '<br />' . $this->language->get('error_send_' . substr($send_status, 4, 2)) . '<br />' . $this->language->get('text_stop_send');
											$json['stop_send'] = $send_id;
											break;
										} elseif (substr($send_status, 0, 4) == 'nerr') {
											$json['attention'][] = $this->language->get('error_send_attention') . '<br />' . $this->language->get('error_send_' . substr($send_status, 4, 2)) . '<br />' . $this->language->get('text_continues_send');
											$bad_email = false;
											
											if (substr($send_status, 4, 2) == '24') {
												$this->model_marketing_contacts->removeEmailSend($send_id, $email);
											}
											
											if ((substr($send_status, 4, 2) == '21') || (substr($send_status, 4, 2) == '22') || (substr($send_status, 4, 2) == '23')) {
												$this->model_marketing_contacts->removeEmailSend($send_id, $email);
												
												$send_replies = explode('|', $send_status);
												
												if (!empty($send_replies[1]) && !empty($reply_badem)) {
													foreach ($reply_badem as $bad_reply) {
														$bad_text = trim($bad_reply);

														if ($bad_text != '') {
															$pos = stripos($send_replies[1], $bad_text);
															if ($pos !== false) {
																$bad_email = true;
																break;
															}
														}
													}
												}
											}
											
											if ($bad_email) {
												if ($bad_email_action == '1') {
													$this->model_marketing_contacts->addUnsubscribe($email, $send_id, $customer['customer_id']);
													$contacts_log->write($this->language->get('text_bad_email_unsub'));
												}
												if ($bad_email_action == '2') {
													$this->model_marketing_contacts->addUnsubscribe($email, $send_id, $customer['customer_id']);
													$this->model_marketing_contacts->delNewsletterFromEmail($email);
													$contacts_log->write($this->language->get('text_bad_email_remove'));
												}
											} else {
												$this->model_marketing_contacts->addErrorSend($send_id);
												$count_send_error++;
											}
										} else {
											$this->model_marketing_contacts->addErrorSend($send_id);
											$count_send_error++;
										}
										$this->model_marketing_contacts->addCountMails($send_id, 0, 1);
										$json['hour']--;
										$json['day']--;
									} else {
										$contacts_log->write($this->language->get('text_bad_email') . $email);
										$this->model_marketing_contacts->removeEmailSend($send_id, $email);
										
										if ($bad_email_action == '1') {
											$this->model_marketing_contacts->addUnsubscribe($email, $msend_id, $customer['customer_id']);
											$contacts_log->write($this->language->get('text_bad_email_unsub'));
										}
										if ($bad_email_action == '2') {
											$this->model_marketing_contacts->addUnsubscribe($email, $msend_id, $customer['customer_id']);
											$this->model_marketing_contacts->delNewsletterFromEmail($email);
											$contacts_log->write($this->language->get('text_bad_email_remove'));
										}
									}
								} else {
									$lastsend = 0;
									$json['success'] = '';
									$json['next'] = '';
									$json['stop_send'] = $send_id;
									break;
								}
							} else {
								$contacts_log->write($this->language->get('error_send_count'));
								$lastsend = 0;
								$json['success'] = '';
								$json['next'] = '';
								$json['error']['warning'] = $this->language->get('error_send_count');
								$json['stop_send'] = $send_id;
								break;
							}
						}

						if(!$spam_check && ($page == 1)) {
							$this->model_marketing_contacts->setNewMessageDataSend($send_id, $savemessage);
						}
						
						if($lastsend == 1) {
							$this->cache->delete('contacts');
							$contacts_log->write($this->language->get('text_end_send'));
							if(!$spam_check) {
								$this->model_marketing_contacts->setCompleteDataSend($send_id);
								$this->model_marketing_contacts->delProductSend($send_id);
								$this->model_marketing_contacts->delEmailsSend($send_id);
							
								if ($attachments) {
									foreach ($attachments as $attachment) {
										if (file_exists($attachment['path'])) {
											@unlink($attachment['path']);
										}
									}
								}
							}
						}
					}
				}
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function checkemail() {
		$json = array();

		$contacts_log = new Log('contacts.log');
		$this->load->language('marketing/contacts');

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			$this->load->model('marketing/contacts');
	
			if (!$this->validate()) {
				$json['error'] = $this->language->get('error_permission');
			}
	
			if (!$json) {
				$static = isset($this->request->post['static']) ? $this->request->post['static'] : 'dinamic';
				$control_unsubscribe = isset($this->request->post['control_unsubscribe']) ? 1 : 0;
	
				$emnovalid_action = isset($this->request->post['emnovalid_action']) ? $this->request->post['emnovalid_action'] : 0;
				$embad_action = isset($this->request->post['embad_action']) ? $this->request->post['embad_action'] : 0;
				$emsuspect_action = isset($this->request->post['emsuspect_action']) ? $this->request->post['emsuspect_action'] : 0;

				$manual = '';
				$send_to_data = '';
				$emails = array();
	
				$data_cron = array(
					'name'     => $this->language->get('text_checke_cron'),
					'checking' => 1,
					'status'   => 0
				);
	
				$cron_id = $this->model_marketing_contacts->addNewCron($data_cron);
	
				if (($this->request->post['to_check'] == 'customer_group') || ($this->request->post['to_check'] == 'client_group')) {
					if (!empty($this->request->post['customer_group_id']) && is_array($this->request->post['customer_group_id'])) {
						$send_to_data = implode(',', $this->request->post['customer_group_id']);
					}
				}
				if ($this->request->post['to_check'] == 'send_group') {
					if (!empty($this->request->post['send_group_id']) && is_array($this->request->post['send_group_id'])) {
						$send_to_data = implode(',', $this->request->post['send_group_id']);
						$static = 'dinamic';
					}
				}
				if ($this->request->post['to_check'] == 'manual') {
					if (!empty($this->request->post['manual'])) {
						$manual = $this->request->post['manual'];
						$static = 'static';
					}
				}
	
				$data_send = array(
					'store_id'         => 0,
					'send_to'          => $this->request->post['to_check'],
					'manual'           => $manual,
					'send_to_data'     => $send_to_data,
					'date_start'       => '',
					'date_end'         => '',
					'send_region'      => '',
					'send_country_id'  => '',
					'send_zone_id'     => '',
					'invers_region'    => '',
					'invers_product'   => '',
					'invers_category'  => '',
					'invers_customer'  => '',
					'invers_client'    => '',
					'invers_affiliate' => '',
					'send_products'    => '',
					'language_id'      => '',
					'subject'          => '1',
					'message'          => '1',
					'attachments'      => '',
					'attachments_cat'  => '',
					'dopurl'           => '',
					'static'           => $static,
					'unsub_url'        => '',
					'control_unsub'    => $control_unsubscribe,
					'limit_start'      => '',
					'limit_end'        => '',
					'emnovalid_action' => $emnovalid_action,
					'embad_action'     => $embad_action,
					'emsuspect_action' => $emsuspect_action
				);
	
				$emails = $this->getAllEmails($data_send);
	
				if ($emails && $this->config->get('contacts_ignore_servers')) {
					$fi_emails = $emails;
					$config_ignore_servers = preg_replace('/\s/', '', $this->config->get('contacts_ignore_servers'));
	
					if ($config_ignore_servers != '') {
						$ignore_servers = explode('|', $this->config->get('contacts_ignore_servers'));

						if (!empty($ignore_servers)) {
							foreach($emails as $email => $value){
								$email_part = explode('@', $email);

								if (isset($email_part[1])) {
									$email_host = '@' . $email_part[1];
	
									if (in_array($email_host, array_map('trim', $ignore_servers))) {
										if (array_key_exists($email, $fi_emails)) {
											unset($fi_emails[$email]);
										}
									}
								}
							}
							$emails = $fi_emails;
						}
					}
				}
	
				$email_total = count($emails);
	
				$data_send['email_total'] = $email_total;
				$data_send['manual'] = '';
	
				if ($static == 'static') {
					if ($emails) {
						$this->model_marketing_contacts->addDataCron($cron_id, $data_send);
						$this->model_marketing_contacts->saveEmailsToCron($cron_id, $emails);
						$contacts_log->write($this->language->get('text_add_croncke'));
						$json['success'] = sprintf($this->language->get('text_success_croncke'), $email_total);
					} else {
						$this->model_marketing_contacts->delCron($cron_id);
						$json['error'] = $this->language->get('error_noemails');
					}
				} else {
					$this->model_marketing_contacts->addDataCron($cron_id, $data_send);
					$contacts_log->write($this->language->get('text_add_croncke'));
					$json['success'] = sprintf($this->language->get('text_success_croncke'), $email_total);
				}
			}
		}
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function viewcheckresult() {
		$this->load->language('marketing/contacts');
	
		$message = '<div style="width:400px;text-align:center;padding:10px 0;">' . $this->language->get('text_no_data') . '</div>';

		if (isset($this->request->get['cid']) && isset($this->request->get['cst'])) {
			$this->load->model('marketing/contacts');
	
			$data = array(
				'check_status' => $this->request->get['cst']
			);
	
			$emails = $this->model_marketing_contacts->getCheckCronResultEmails($this->request->get['cid'], $data);
	
			if (!empty($emails)) {
				$message = '<div>';
				$message .= '<div style="overflow:auto;width:700px;margin:5px 20px 5px 5px;position:relative;">';
				$message .= '<table id="checks_' . $this->request->get['cid'] . '" class="list info-table">';
				$message .= '<thead>';
				$message .= '<tr><td>' . $this->language->get('column_email') . '</td><td style="width:88px;">' . $this->language->get('column_action') . '</td><td>' . $this->language->get('column_check_text') . '</td></tr>';
				$message .= '</thead>';
				$message .= '<tbody>';
	
				foreach($emails as $email){
					$unsub = $this->model_marketing_contacts->checkEmailUnsubscribe($email['email']);
	
					$message .= '<tr>';
					$message .= '<td>' . $email['email'] . '</td>';
					$message .= '<td class="right">';
					if (!$unsub) {
						$message .= '<a onclick="togcheckemails(1,\'' . $email['email'] . '\');$(this).hide();" class="btn btn-munsubscr" title="' . $this->language->get('text_unsubs') . '"></a>';
					}
					$message .= '<a onclick="togcheckemails(2,\'' . $email['email'] . '\');$(this).hide().parent().parent().css(\'opacity\',\'0.5\');" class="btn btn-mremove" title="' . $this->language->get('text_delete') . '"></a></td>';
					$message .= '<td class="right">' . $email['check_text'] . '</td>';
					$message .= '</tr>';
				}
	
				$message .= '</tbody>';
				$message .= $this->getgrouphtml($this->request->get['cid'], 'checks', $this->request->get['cst']);
				$message .= '</table>';
				$message .= '<div id="action_info"></div>';
				$message .= '</div></div>';
			}
		}
		$this->response->setOutput($message);
	}
	
	public function togcheckresult() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if ($this->validate()) {
			if (isset($this->request->get['mode']) && isset($this->request->get['email'])) {
				$this->load->model('marketing/contacts');
				if ($this->request->get['mode'] == '1') {
					$this->model_marketing_contacts->addUnsubscribe($this->request->get['email']);
					$json['success'] = $this->language->get('text_unsubs_ok');
				} elseif ($this->request->get['mode'] == '2') {
					$this->model_marketing_contacts->delNewsletterFromEmail($this->request->get['email']);
					$json['success'] = $this->language->get('text_delete_ok');
				} else {
					$json['error'] = $this->language->get('error_operation');
				}
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function updatemisssend() {
		$json = array();
		$this->load->language('marketing/contacts');

		if (isset($this->request->get['sid'])) {
			$this->load->model('marketing/contacts');

			$msend_info = $this->model_marketing_contacts->getDataSend($this->request->get['sid']);
			
			if (!empty($msend_info)) {
				$count_miss_emails = $this->model_marketing_contacts->getTotalEmailsToSend($this->request->get['sid']);
			
				$json['send_id'] = $msend_info['send_id'];
				$json['send_alarm'] = $this->language->get('missins_send_error');
				$json['send_date'] = sprintf($this->language->get('missins_send_date'), $msend_info['date_added']);
				$json['send_title'] = sprintf($this->language->get('missins_send_title'), utf8_substr(html_entity_decode($msend_info['subject'], ENT_QUOTES, 'UTF-8'), 0, 30) . '..');
				$json['send_to'] = sprintf($this->language->get('missins_send_to'), $this->language->get('text_' . $msend_info['send_to']));
				$json['send_count'] = sprintf($this->language->get('missins_send_count'), $count_miss_emails, $msend_info['email_total']);
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function misstocomplete() {
		$json = array();
		$this->load->language('marketing/contacts');

		if (isset($this->request->get['msid']) && $this->validate()) {
			$send_id = $this->request->get['msid'];
			$this->load->model('marketing/contacts');
			
			$msend_info = $this->model_marketing_contacts->getDataSend($send_id);
			$emails_total = $msend_info['email_total'];

			$count_miss_emails = $this->model_marketing_contacts->getTotalEmailsToSend($send_id);
			
			$result = $emails_total - $count_miss_emails;
			
			$this->model_marketing_contacts->setCompleteDataSend($send_id, $result);
			$this->model_marketing_contacts->delProductSend($send_id);
			$this->model_marketing_contacts->delEmailsSend($send_id);

			$json['success'] = $this->language->get('text_misstocomplete_ok');

		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function delmailing() {
		$json = array();
		$this->load->language('marketing/contacts');

		if (isset($this->request->get['sid']) && $this->validate()) {
			$this->load->model('marketing/contacts');
			
			$this->model_marketing_contacts->delDataSend($this->request->get['sid']);
			$json['success'] = $this->language->get('text_missremove_ok');

		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function viewmessage() {
		$this->load->language('marketing/contacts');
	
		$message = '<div style="width:400px;text-align:center;padding:10px 0;">' . $this->language->get('text_no_data') . '</div>';
	
		if (isset($this->request->get['sid'])) {
			$this->load->model('marketing/contacts');

			if(!empty($this->request->get['new'])) {
				$send_message = $this->model_marketing_contacts->getNewMessageSend($this->request->get['sid']);
			} else {
				$send_message = $this->model_marketing_contacts->getMessageSend($this->request->get['sid']);
			}
			
			if ($send_message) {
				$message = '<div>';
				$message .= '<div style="overflow:auto;margin:5px 20px 5px 5px;position:relative;">' . html_entity_decode($send_message, ENT_QUOTES, 'UTF-8') . '</div>';
				$message .= '</div>';
			}
		}
		
		$this->response->setOutput($message);
	}
	
	public function viewunsubscribes() {
		$this->load->language('marketing/contacts');
		
		$message = '<div style="width:400px;text-align:center;padding:10px 0;">' . $this->language->get('text_no_data') . '</div>';

		if (isset($this->request->get['sid'])) {
			$this->load->model('marketing/contacts');

			$unsubscribes = $this->model_marketing_contacts->getUnsubscribesfromSend($this->request->get['sid']);
			
			if (!empty($unsubscribes)) {
				$message = '<div>';
				$message .= '<div style="overflow:auto;width:600px;margin:5px 20px 5px 5px;position:relative;">';
				$message .= '<table id="unsubs_' . $this->request->get['sid'] . '" class="list info-table">';
				$message .= '<thead>';
				$message .= '<tr><td>' . $this->language->get('column_email') . '</td><td>' . $this->language->get('column_date_added') . '</td><td style="width:48px;">' . $this->language->get('column_customer_id') . '</td></tr>';
				$message .= '</thead>';
				$message .= '<tbody>';
				
				foreach($unsubscribes as $unsubscribe){
					$message .= '<tr>';
					$message .= '<td>' . $unsubscribe['email'] . '</td>';
					$message .= '<td class="center">' . $unsubscribe['date_added'] . '</td>';
					$message .= '<td class="center">' . $unsubscribe['customer_id'] . '</td>';
					$message .= '</tr>';
				}
				
				$message .= '</tbody>';
				$message .= $this->getgrouphtml($this->request->get['sid'], 'unsubs', '0');
				$message .= '</table></div></div>';
			}
		}
		$this->response->setOutput($message);
	}
	
	public function viewopens() {
		$this->load->language('marketing/contacts');
		
		$message = '<div style="width:400px;text-align:center;padding:10px 0;">' . $this->language->get('text_no_data') . '</div>';

		if (isset($this->request->get['sid'])) {
			$this->load->model('marketing/contacts');

			$views = $this->model_marketing_contacts->getViewsfromSend($this->request->get['sid']);
			
			if (!empty($views)) {
				$message = '<div>';
				$message .= '<div style="overflow:auto;width:600px;margin:5px 20px 5px 5px;position:relative;">';
				$message .= '<table id="views_' . $this->request->get['sid'] . '" class="list info-table">';
				$message .= '<thead>';
				$message .= '<tr><td>' . $this->language->get('column_email') . '</td><td width:90px;>' . $this->language->get('column_date_added') . '</td><td style="width:48px;">' . $this->language->get('column_customer_id') . '</td></tr>';
				$message .= '</thead>';
				$message .= '<tbody>';
	
				foreach($views as $view){
					$message .= '<tr>';
					$message .= '<td>' . $view['email'] . '</td>';
					$message .= '<td class="center">' . $view['date_added'] . '</td>';
					$message .= '<td class="center">' . $view['customer_id'] . '</td>';
					$message .= '</tr>';
				}
	
				$message .= '</tbody>';
				$message .= $this->getgrouphtml($this->request->get['sid'], 'views', '0');
				$message .= '</table></div></div>';
			}
		}
		$this->response->setOutput($message);
	}
	
	public function viewclicks() {
		$this->load->language('marketing/contacts');
		
		$message = '<div style="width:400px;text-align:center;padding:10px 0;">' . $this->language->get('text_no_data') . '</div>';

		if (isset($this->request->get['sid'])) {
			$this->load->model('marketing/contacts');

			$clicks = $this->model_marketing_contacts->getClicksfromSend($this->request->get['sid']);
			
			if (!empty($clicks)) {
				$message = '<div>';
				$message .= '<div style="overflow:auto;width:700px;margin:5px 20px 5px 5px;position:relative;">';
				$message .= '<table id="clicks_' . $this->request->get['sid'] . '" class="list info-table">';
				$message .= '<thead>';
				$message .= '<tr><td>' . $this->language->get('column_email') . '</td><td>' . $this->language->get('column_url') . '</td><td style="width:90px;">' . $this->language->get('column_date_added') . '</td><td style="width:48px;">' . $this->language->get('column_customer_id') . '</td></tr>';
				$message .= '</thead>';
				$message .= '<tbody>';
	
				foreach($clicks as $click){
					$message .= '<tr>';
					$message .= '<td>' . $click['email'] . '</td>';
					$message .= '<td>' . $click['target'] . '</td>';
					$message .= '<td class="center">' . $click['date_added'] . '</td>';
					$message .= '<td class="center">' . $click['customer_id'] . '</td>';
					$message .= '</tr>';
				}
	
				$message .= '</tbody>';
				$message .= $this->getgrouphtml($this->request->get['sid'], 'clicks', '0');
				$message .= '</table></div></div>';
			}
		}
		$this->response->setOutput($message);
	}
	
	public function getgrouphtml($sid, $smode, $cst) {
		$message = '';
	
		$groups = $this->model_marketing_contacts->getSendGroups();
	
		if (!empty($groups)) {
			$colspan = ($smode == 'clicks') ? 4 : 3;
			$message .= '<tfoot>';
			$message .= '<tr><td class="action" colspan="' . $colspan . '">';

			$message .= '<span>' . $this->language->get('text_action_togroup') . '</span>';
	
			$message .= '<select class="for_amode">';
			$message .= ' <option value="1">' . $this->language->get('text_add') . '</option>';
			$message .= ' <option value="2">' . $this->language->get('text_move') . '</option>';
			$message .= '</select>';
	
			$message .= '<span>' . $this->language->get('text_togroup') . '</span>';
	
			$message .= '<select class="for_groups">';
			foreach($groups as $group){
				$message .= ' <option value="' . $group['group_id'] . '">' . $group['name'] . '</option>';
			}
			$message .= '</select>';
	
			$message .= '<a onclick="import_from_stat(' . $sid . ', \'' . $smode . '\', \'' . $cst . '\');" class="btn btn-msuccess">' . $this->language->get('text_run') . '</a>';
	
			$message .= '</td></tr>';
			$message .= '</tfoot>';
		}
		return $message;
	}
	
	public function uploadattach() {
		$json = array();
		$json['error'] = array();
		
		$this->load->language('marketing/contacts');
		
		if (!$this->validate()) {
			$json['error'][] = $this->language->get('error_permission');
		} else {
			$this->load->model('marketing/contacts');
			$json['files_path'] = array();

			foreach($_FILES as $file){
				if (!empty($file['name'])) {
					$filename = html_entity_decode($file['name'], ENT_QUOTES, 'UTF-8');

					if ($file['error'] != UPLOAD_ERR_OK) {
						$json['error'][] = $this->language->get('error_upload_' . $file['error']) . ' ' . $filename;
					
					} else {
						if (is_uploaded_file($file['tmp_name']) && file_exists($file['tmp_name'])) {
							$path = 'cfiles/' . $filename;
							$files_catalog = DIR_DOWNLOAD . 'cfiles/';
							if(!is_dir($files_catalog)) {
								@mkdir($files_catalog, 0755);
							}
							
							move_uploaded_file($file['tmp_name'], $files_catalog . $filename);

							$json['files_path'][] = array(
								'filename' => $filename,
								'path'     => $path
							);
			
							$json['success'] = $this->language->get('text_upload_ok');
	
						} else {
							$json['error'][] = $this->language->get('error_upload') . ' ' . $filename;
						}
					}
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function updatelog() {
		$json = array();
		$this->load->language('marketing/contacts');
		
		if ($this->validate()) {
			$file = DIR_LOGS . 'contacts.log';
			
			if (file_exists($file)) {
				$json['log'] = file_get_contents($file, FILE_USE_INCLUDE_PATH, null);
			} else {
				$json['log'] = '';
			}
		
			$json['success'] = $this->language->get('text_update_log');
		
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function clearlog() {
		$json = array();
		$this->load->language('marketing/contacts');
		
		if ($this->validate()) {
			$file = DIR_LOGS . 'contacts.log';
			$handle = fopen($file, 'w+');
			fclose($handle);
			$json['success'] = $this->language->get('text_delete_log');
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getcron() {
		$json = array();

		if (isset($this->request->get['cron_id'])) {
			$this->load->model('marketing/contacts');
			$cron_data = $this->model_marketing_contacts->getCron($this->request->get['cron_id']);
			
			if (!empty($cron_data)) {
				$json['name'] = $cron_data['name'];
				$json['date_start'] = $cron_data['date_start'];
				$json['period'] = $cron_data['period'];
				$json['status'] = $cron_data['status'];
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function savecron() {
		$json = array();
		$this->load->language('marketing/contacts');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if ((utf8_strlen($this->request->post['cron_name']) < 1) || (utf8_strlen($this->request->post['cron_name']) > 255)) {
				$json['error'] = $this->language->get('error_cron_name');
			}
			
			if (date('Y-m-d H:i:s', strtotime($this->request->post['cron_date_start'])) != $this->request->post['cron_date_start']) {
				$json['error'] = $this->language->get('error_date_start');
			}
			
			$cron_period = !empty($this->request->post['cron_period']) ? $this->request->post['cron_period'] : 0;
			$cron_status = !empty($this->request->post['cron_status']) ? $this->request->post['cron_status'] : 0;
			
			if (!$json) {
				$data = array(
					'name'        => $this->request->post['cron_name'],
					'date_start'  => $this->request->post['cron_date_start'],
					'period'      => $cron_period,
					'status'      => $cron_status
				);
				
				if (isset($this->request->get['cron_id'])) {
					$this->load->model('marketing/contacts');
					$this->model_marketing_contacts->editCron($this->request->get['cron_id'], $data);
				}
				
				$json['success'] = $this->language->get('text_success_data');
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function delcron() {
		$json = array();
		$this->load->language('marketing/contacts');
		
		if ($this->validate()) {
			if (isset($this->request->get['cron_id'])) {
				$this->load->model('marketing/contacts');
				$this->model_marketing_contacts->delCron($this->request->get['cron_id']);
				$json['success'] = 1;
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function viewcronlogs() {
		$json = array();
		$json['logs'] = array();

		if (isset($this->request->get['cron_id'])) {
			$this->load->model('marketing/contacts');

			$logs = $this->model_marketing_contacts->getCronLogs($this->request->get['cron_id']);
			
			if (!empty($logs)) {
				foreach($logs as $log){
					$fullname = explode('/', $log);
					$name = array_pop($fullname);
					$json['logs'][] = $name;
				}
			}
		}
	
		if ($json['logs']) {
			natsort($json['logs']);
			$clogs = array_reverse($json['logs']);
			$json['logs'] = $clogs;
		}
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function viewcronlog() {
		$json = array();
		
		if (isset($this->request->get['cronlog']) && file_exists(DIR_LOGS . $this->request->get['cronlog'])) {
			$json['log'] = file_get_contents(DIR_LOGS . $this->request->get['cronlog'], FILE_USE_INCLUDE_PATH, null);
		} else {
			$json['log'] = '';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function delcronlog() {
		$json = array();
		
		if (isset($this->request->get['cronlog'])) {
			if (file_exists(DIR_LOGS . $this->request->get['cronlog'])) {
				unlink(DIR_LOGS . $this->request->get['cronlog']);
			}
			$json['success'] = 1;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function viewhistory() {
		$this->load->language('marketing/contacts');
		
		$message = '<div style="width:400px;text-align:center;padding:10px 0;">' . $this->language->get('text_no_data') . '</div>';

		if (isset($this->request->get['cron_id'])) {
			$this->load->model('marketing/contacts');

			$histories = $this->model_marketing_contacts->getCronHistories($this->request->get['cron_id']);
			
			if (!empty($histories)) {
				$message = '<div>';
				$message .= '<div style="overflow:auto;width:600px;margin:5px 20px 5px 5px;position:relative;">';
				$message .= '<table class="list info-table">';
				$message .= '<thead>';
				$message .= '<tr><td>' . $this->language->get('column_date_start') . '</td><td>' . $this->language->get('column_date_end') . '</td><td style="width:60px;">' . $this->language->get('column_email_total') . '</td><td>' . $this->language->get('column_cron_status') . '</td></tr>';
				$message .= '</thead>';
				$message .= '<tbody>';
				
				foreach($histories as $history){
					if ($history['cron_status']) {
						$text_cron_status = $this->language->get('text_cstatus' . $history['cron_status']);
					} else {
						$text_cron_status = '';
					}
					$message .= '<tr>';
					$message .= '<td>' . $history['date_cronrun'] . '</td>';
					$message .= '<td>' . $history['date_cronstop'] . '</td>';
					$message .= '<td class="center">' . $history['count_emails'] . '</td>';
					$message .= '<td class="center">' . $text_cron_status . '</td>';
					$message .= '</tr>';
				}
				
				$message .= '</tbody></table>';
				$message .= '</div></div>';
			}
		}
		
		$this->response->setOutput($message);
	}
	
	public function getsendgroup() {
		$json = array();

		$this->load->model('marketing/contacts');

		if (isset($this->request->get['group_id'])) {
			$this->load->model('marketing/contacts');
			$group_data = $this->model_marketing_contacts->getSendGroup($this->request->get['group_id']);
	
			if (!empty($group_data)) {
				$json['name'] = html_entity_decode($group_data['name'], ENT_QUOTES, 'UTF-8');
				$json['description'] = html_entity_decode($group_data['description'], ENT_QUOTES, 'UTF-8');
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getsendgroups() {
		$json = array();
		$json['groups'] = array();
	
		$this->load->model('marketing/contacts');
		$results = $this->model_marketing_contacts->getSendGroups();
	
		if ($results) {
			foreach ($results as $result) {
				$json['groups'][] = array(
					'group_id' => $result['group_id'],
					'name'     => html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')
				);					
			}
		}
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function savegroup() {
		$json = array();
		$this->load->language('marketing/contacts');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if ((utf8_strlen($this->request->post['group_name']) < 1) || (utf8_strlen($this->request->post['group_name']) > 64)) {
				$json['error'] = $this->language->get('error_group_name');
			}
			
			if (utf8_strlen($this->request->post['group_description']) > 255) {
				$json['error'] = $this->language->get('error_group_description');
			}
			
			if (!$json) {
				$this->load->model('marketing/contacts');
				
				$data = array(
					'name'        => $this->request->post['group_name'],
					'description' => $this->request->post['group_description']
				);
				
				if (isset($this->request->get['group_id'])) {
					$this->model_marketing_contacts->editSendGroup($this->request->get['group_id'], $data);
				} else {
					$json['group_id'] = $this->model_marketing_contacts->addSendGroup($data);					
				}
				
				$json['success'] = $this->language->get('text_success_data');
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function delgroup() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if ($this->validate()) {
			if (isset($this->request->get['group_id'])) {
				$this->load->model('marketing/contacts');
				$this->model_marketing_contacts->delSendGroup($this->request->get['group_id']);
				$json['success'] = 1;
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function importfromstat() {
		$json = array();
	
		$this->load->language('marketing/contacts');
	
		if (!empty($this->request->get['gid']) && !empty($this->request->get['sid']) && !empty($this->request->get['gmode'])) {
			if (!$this->validate()) {
				$json['error'] = $this->language->get('error_permission');
			}
	
			if (!$json) {
				$this->load->model('marketing/contacts');
	
				$group_id = $this->request->get['gid'];
				$sid = $this->request->get['sid'];
				$gmode = $this->request->get['gmode'];
				$amode = $this->request->get['amode'];
				$cst = $this->request->get['cst'];
	
				$results = array();
				$news_data = array();
	
				$oldnews = $this->model_marketing_contacts->getEmailsNewslettersFromGroup($group_id);
	
				if ($gmode == 'clicks') {
					$results = $this->model_marketing_contacts->getClicksfromSend($sid);
				} elseif($gmode == 'views') {
					$results = $this->model_marketing_contacts->getViewsfromSend($sid);
				} elseif($gmode == 'unsubs') {
					$results = $this->model_marketing_contacts->getUnsubscribesfromSend($sid);
				} elseif($gmode == 'checks') {
					$check_data = array('check_status' => $cst);
					$results = $this->model_marketing_contacts->getCheckCronResultEmails($sid, $check_data);
				}
	
				if ($results) {
					foreach ($results as $result) {
						$customer_info = $this->model_marketing_contacts->getCustomerFromEmail($result['email']);
						$newsletters_info = $this->model_marketing_contacts->getNewslettersFromEmail($result['email']);

						$customer_id = 0;
						$cfirstname = '';
						$clastname = '';
						
						if ($customer_info) {
							$customer_id = $customer_info['customer_id'];
							$cfirstname = (trim($customer_info['firstname']) != '') ? $customer_info['firstname'] : '';
							$clastname = (trim($customer_info['lastname']) != '') ? $customer_info['lastname'] : '';
						}
						
						$nfirstname = '';
						$nlastname = '';
						
						if ($newsletters_info) {
							foreach ($newsletters_info as $newsletter) {
								if ($newsletter['firstname']) {
									$nfirstname = (trim($newsletter['firstname']) != '') ? $newsletter['firstname'] : '';
								}
								if ($newsletter['lastname']) {
									$nlastname = (trim($newsletter['firstname']) != '') ? $newsletter['firstname'] : '';
								}
							}
						}
						
						if ($nfirstname) {
							$firstname = trim($nfirstname);
						} elseif ($cfirstname) {
							$firstname = trim($cfirstname);
						} else {
							$firstname = '';
						}
						
						if ($nlastname) {
							$lastname = trim($nlastname);
						} elseif (!$nfirstname && $cfirstname) {
							$lastname = trim($cfirstname);
						} else {
							$lastname = '';
						}

						$news_data[$result['email']] = array(
							'customer_id'  => $customer_id,
							'email'        => $result['email'],
							'firstname'    => $firstname ? mb_convert_case($firstname, MB_CASE_TITLE, 'UTF-8') : '',
							'lastname'     => $lastname ? mb_convert_case($lastname, MB_CASE_TITLE, 'UTF-8') : ''
						);
					}
				}
	
				if($news_data) {
					$total_add = 0;
					$news = array();
					
					if ($amode == '1') {
						foreach ($news_data as $key => $value) {
							if (!in_array(utf8_strtolower($key), $oldnews)) {
								$news[] = array(
									'customer_id'  => $value['customer_id'],
									'email'        => $value['email'],
									'firstname'    => $value['firstname'],
									'lastname'     => $value['lastname']
								);
							}
						}
						
						if ($news) {
							$total_add = $this->model_marketing_contacts->addNewsletters($group_id, $news);
						}

					} else {
						foreach ($news_data as $key => $value) {
							$news[] = array(
								'customer_id'  => $value['customer_id'],
								'email'        => $value['email'],
								'firstname'    => $value['firstname'],
								'lastname'     => $value['lastname']
							);
						}
						
						if ($news) {
							$total_add = $this->model_marketing_contacts->addNewsletters($group_id, $news, 1);
						}
					}
					
					$json['success'] = sprintf($this->language->get('text_import_email_total'), $total_add);

				} else {
					$json['error'] = $this->language->get('error_noemails');
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function import_newsletters() {
		$json = array();
	
		$this->load->language('marketing/contacts');
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if (!$this->validate()) {
				$json['error'] = $this->language->get('error_permission');
			}
	
			if (!isset($this->request->post['filter_for_group']) || !$this->request->post['filter_for_group']) {
				$json['error'] = $this->language->get('error_for_group');
			}
	
			if (!$json) {
				$this->load->model('marketing/contacts');
	
				$group_id = $this->request->post['filter_for_group'];
	
				$set_region = !empty($this->request->post['from_set_region']) ? 1 : false;
				if ($set_region) {
					$country_id = !empty($this->request->post['from_country_id']) ? $this->request->post['from_country_id'] : false;
					$zone_id = !empty($this->request->post['from_zone_id']) ? $this->request->post['from_zone_id'] : false;
					$invers_region = !empty($this->request->post['invers_region']) ? 1 : false;
				} else {
					$country_id = false;
					$zone_id = false;
					$invers_region = false;
				}
	
				$set_period = !empty($this->request->post['set_period']) ? 1 : false;
				if ($set_period) {
					$date_start = !empty($this->request->post['date_start']) ? $this->request->post['date_start'] : false;
					$date_end = !empty($this->request->post['date_end']) ? $this->request->post['date_end'] : false;
				} else {
					$date_start = false;
					$date_end = false;
				}
	
				$set_limit = !empty($this->request->post['set_limit']) ? 1 : false;
				if ($set_limit) {
					$limit_start = !empty($this->request->post['limit_start']) ? $this->request->post['limit_start'] : false;
					$limit_end = !empty($this->request->post['limit_end']) ? $this->request->post['limit_end'] : false;
				} else {
					$limit_start = false;
					$limit_end = false;
				}
	
				$invers_product = !empty($this->request->post['invers_product']) ? 1 : false;
				$invers_category = !empty($this->request->post['invers_category']) ? 1 : false;
	
				$invers_customer = !empty($this->request->post['invers_customer']) ? 1 : false;
				$invers_client = !empty($this->request->post['invers_client']) ? 1 : false;
				$invers_affiliate = !empty($this->request->post['invers_affiliate']) ? 1 : false;

				$control_unsubscribe = !empty($this->request->post['control_unsubscribe']) ? 1 : false;
	
				if (!empty($this->request->post['from_set_language']) && !empty($this->request->post['from_language_id'])) {
					$language_id = $this->request->post['from_language_id'];
				} else {
					$language_id = false;
				}
	
				$send_to_data = '';
				$manual = '';
	
				if ($this->request->post['from'] == 'customer_select') {
					if (!empty($this->request->post['from_customer']) && is_array($this->request->post['from_customer'])) {
						$send_to_data = implode(',', $this->request->post['from_customer']);
					}
				}
				if (($this->request->post['from'] == 'customer_group') || ($this->request->post['from'] == 'client_group')) {
					if (!empty($this->request->post['from_customer_group_id']) && is_array($this->request->post['from_customer_group_id'])) {
						$send_to_data = implode(',', $this->request->post['from_customer_group_id']);
					}
				}
				if ($this->request->post['from'] == 'client_select') {
					if (!empty($this->request->post['from_client']) && is_array($this->request->post['from_client'])) {
						$post_clients = array();
	
						foreach ($this->request->post['from_client'] as $client) {
							$post_clients[] = $client['email'];
						}
						if ($post_clients) {
							$send_to_data = implode(',', $post_clients);
						}
					}
				}
				if ($this->request->post['from'] == 'send_group') {
					if (!empty($this->request->post['from_send_group_id']) && is_array($this->request->post['from_send_group_id'])) {
						$send_to_data = implode(',', $this->request->post['from_send_group_id']);
					}
				}
				if ($this->request->post['from'] == 'affiliate') {
					if (!empty($this->request->post['from_affiliate']) && is_array($this->request->post['from_affiliate'])) {
						$send_to_data = implode(',', $this->request->post['from_affiliate']);
					}
				}
				if ($this->request->post['from'] == 'product') {
					if (!empty($this->request->post['from_product']) && is_array($this->request->post['from_product'])) {
						$send_to_data = implode(',', $this->request->post['from_product']);
					}
				}
				if ($this->request->post['from'] == 'category') {
					if (!empty($this->request->post['from_category']) && is_array($this->request->post['from_category'])) {
						$send_to_data = implode(',', $this->request->post['from_category']);
					}
				}
				if ($this->request->post['from'] == 'manual') {
					if (!empty($this->request->post['from_manual'])) {
						$manual = $this->request->post['from_manual'];
					}
				}
				if ($this->request->post['from'] == 'sql_manual') {
					$sql_manual = array(
						'sql_table'         => isset($this->request->post['from_sql_table']) ? $this->request->post['from_sql_table'] : '',
						'sql_col_email'     => isset($this->request->post['from_sql_email']) ? $this->request->post['from_sql_email'] : '',
						'sql_col_firstname' => isset($this->request->post['from_sql_firstname']) ? $this->request->post['from_sql_firstname'] : '',
						'sql_col_lastname'  => isset($this->request->post['from_sql_lastname']) ? $this->request->post['from_sql_lastname'] : '',
						'filter_start'      => $limit_start,
						'filter_limit'      => $limit_end
					);
				} else {
					$sql_manual = array();
				}
	
				$news_data = array();
	
				$oldnews = $this->model_marketing_contacts->getEmailsNewslettersFromGroup($group_id);
	
				$data_send = array(
					'send_to'          => $this->request->post['from'],
					'manual'           => $manual,
					'sql_manual'       => $sql_manual,
					'send_to_data'     => $send_to_data,
					'date_start'       => $date_start,
					'date_end'         => $date_end,
					'send_country_id'  => $country_id,
					'send_zone_id'     => $zone_id,
					'invers_region'    => $invers_region,
					'invers_customer'  => $invers_customer,
					'invers_client'    => $invers_client,
					'invers_affiliate' => $invers_affiliate,
					'invers_product'   => $invers_product,
					'invers_category'  => $invers_category,
					'language_id'      => $language_id,
					'control_unsub'    => $control_unsubscribe,
					'limit_start'      => $limit_start,
					'limit_end'        => $limit_end
				);
	
				$results = $this->getAllEmails($data_send);

				foreach ($results as $email => $result) {
					if (!in_array(utf8_strtolower($email), $oldnews)) {
						$news_data[] = array(
							'customer_id'  => $result['customer_id'],
							'email'        => $email,
							'firstname'    => $result['firstname'],
							'lastname'     => $result['lastname']
						);
					}
				}
	
				if($news_data) {
					$total_add = $this->model_marketing_contacts->addNewsletters($group_id, $news_data);
					$json['email_total'] = sprintf($this->language->get('text_import_email_total'), $total_add);
				} else {
					$json['error'] = $this->language->get('error_noemails');
				}
			}
		}
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function delnewsletter() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if ($this->validate()) {
			if (isset($this->request->get['newsletter_id'])) {
				$this->load->model('marketing/contacts');
				$this->model_marketing_contacts->delNewsletter($this->request->get['newsletter_id']);
				$json['success'] = 1;
			}
		} else {
			$json['error'] = $this->language->get('error_newsl_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function delnewsletters() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if ($this->validate()) {
			if (!empty($this->request->post['nselected']) && is_array($this->request->post['nselected'])) {
				$this->load->model('marketing/contacts');
	
				foreach($this->request->post['nselected'] as $newsletter_id) {
					$this->model_marketing_contacts->delNewsletter($newsletter_id);
					$json['newsdell'][] = $newsletter_id;
				}
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function movenewsletters() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if ($this->validate()) {
			if ($this->request->get['group_id']) {
				if (!empty($this->request->post['nselected']) && is_array($this->request->post['nselected'])) {
					$this->load->model('marketing/contacts');
					$this->model_marketing_contacts->movedNewsletters($this->request->get['group_id'], $this->request->post['nselected']);
					$json['success'] = $this->language->get('text_success_data');
				} else {
					$json['error'] = $this->language->get('error_sel_newsletter');
				}
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function tognewsletter() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if ($this->validate()) {
			if (isset($this->request->get['newsletter_id'])) {
				$this->load->model('marketing/contacts');
				$newsletter_info = $this->model_marketing_contacts->getNewsletter($this->request->get['newsletter_id']);
	
				if ($newsletter_info && $newsletter_info['email']) {
					if ($this->request->get['nmode'] == '1') {
						$this->model_marketing_contacts->setSubscribe($newsletter_info['email']);
						$json['success'] = $this->language->get('text_subs_ok');
					} elseif ($this->request->get['nmode'] == '2') {
						$this->model_marketing_contacts->addUnsubscribe($newsletter_info['email'], 0, $newsletter_info['customer_id']);
						$json['success'] = $this->language->get('text_unsubs_ok');
					}
				}
			}
		} else {
			$json['error'] = $this->language->get('error_newsl_permission');
		}
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function gettemplate() {
		$json = array();

		if (isset($this->request->get['template_id'])) {
			$this->load->model('marketing/contacts');
			$message_data = $this->model_marketing_contacts->getTemplate($this->request->get['template_id']);
	
			if (!empty($message_data)) {
				$json['template_id'] = $message_data['template_id'];
				$json['name'] = html_entity_decode($message_data['name'], ENT_QUOTES, 'UTF-8');
				$json['message'] = html_entity_decode($message_data['message'], ENT_QUOTES, 'UTF-8');
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function gettemplates() {
		$json = array();
		$json['templates'] = array();
	
		$this->load->model('marketing/contacts');
		$results = $this->model_marketing_contacts->getTemplates();
	
		if ($results) {
			foreach ($results as $result) {
				$json['templates'][] = array(
					'template_id' => $result['template_id'],
					'name'        => html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')
				);					
			}
		}
	
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function deltemplate() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if ($this->validate()) {
			if (isset($this->request->get['template_id'])) {
				$this->load->model('marketing/contacts');
	
				$this->model_marketing_contacts->deleteTemplate($this->request->get['template_id']);
				$json['success'] = $this->language->get('text_delete_template');
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function edittemplate() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('marketing/contacts');
	
			if ((utf8_strlen($this->request->post['temp_name']) < 1) || (utf8_strlen($this->request->post['temp_name']) > 255)) {
				$json['error'] = $this->language->get('error_name_template');
			} else {
				if (isset($this->request->get['template_id'])) {
					$data = array(
						'name'    => $this->request->post['temp_name'],
						'message' => $this->request->post['temp_message']
					);
					$this->model_marketing_contacts->editTemplate($this->request->get['template_id'], $data);
					$json['success'] = $this->language->get('text_success_data');
				}
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function addtemplate() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('marketing/contacts');
	
			if (isset($this->request->post['temp_name'])) {
				$template_name = $this->request->post['temp_name'];
			} elseif (isset($this->request->post['new_temp_name'])) {
				$template_name = $this->request->post['new_temp_name'];
			} else {
				$template_name = '';
			}
	
			if (isset($this->request->post['temp_message'])) {
				$message = $this->request->post['temp_message'];
			} elseif (isset($this->request->post['message'])) {
				$message = $this->request->post['message'];
			} else {
				$message = '';
			}
	
			if ((utf8_strlen($template_name) < 1) || (utf8_strlen($template_name) > 255)) {
				$json['error'] = $this->language->get('error_name_template');
			} else {
				$data = array(
					'name'    => $template_name,
					'message' => $message
				);
				$json['template_id'] = $this->model_marketing_contacts->addTemplate($data);
				$json['success'] = $this->language->get('text_success_data');
			}
		} else {
			$json['error'] = $this->language->get('error_permission');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function savesetting() {
		$json = array();
		$this->load->language('marketing/contacts');
	
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('setting/setting');
	
			$data = $this->request->post;
			$data['contacts_unsub_pattern'] = $this->config->get('contacts_unsub_pattern');
	
			$this->model_setting_setting->editSetting('contacts', $data);
	
			$json['success'] = $this->language->get('text_success_setting');
		} else {
			$json['error'] = $this->language->get('error_save_setting');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getclients() {
		$json = array();
	
		if (isset($this->request->get['filter_name'])) {
			$this->load->model('marketing/contacts');
	
			$data = array(
				'filter_name'  => $this->request->get['filter_name'],
				'filter_email' => $this->request->get['filter_name'],
				'filter_phone' => $this->request->get['filter_name']
			);
	
			$results = $this->model_marketing_contacts->getClients($data);
	
			foreach ($results as $result) {
				$json[] = array(
					'name'  => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'email' => $result['email']
				);					
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function customersearch() {
		$json = array();

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_email'])) {
			if (isset($this->request->get['filter_name'])) {
				$filter_name = $this->request->get['filter_name'];
			} else {
				$filter_name = '';
			}

			if (isset($this->request->get['filter_email'])) {
				$filter_email = $this->request->get['filter_email'];
			} else {
				$filter_email = '';
			}

			$this->load->model('marketing/contacts');

			$filter_data = array(
				'filter_name'  => $filter_name,
				'filter_email' => $filter_email,
				'start'        => 0,
				'limit'        => 10
			);

			$results = $this->model_marketing_contacts->getShopCustomers($filter_data);

			foreach ($results as $result) {
				$json[] = array(
					'customer_id' => $result['customer_id'],
					'name'        => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getAllEmails($data = array()) {
		$emails = array();
	
		if ($data) {
			$this->load->model('marketing/contacts');
	
			switch ($data['send_to']) {
				case 'customer_all':
					$customer_data = array(
						'filter_newsletter'  => $data['control_unsub'],
						'filter_country_id'  => $data['send_country_id'],
						'filter_zone_id'     => $data['send_zone_id'],
						'invers_region'      => $data['invers_region'],
						'filter_date_start'  => $data['date_start'],
						'filter_date_end'    => $data['date_end'],
						'filter_start'       => $data['limit_start'],
						'filter_limit'       => $data['limit_end']
					);

					$results = $this->model_marketing_contacts->getEmailCustomers($customer_data);

					foreach ($results as $result) {
						$email = preg_replace('/\s/', '', $result['email']);
						if ($email != '') {
							if (!$data['control_unsub'] || !$this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
								$emails[$email] = array(
									'customer_id'   => $result['customer_id'],
									'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
									'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
									'country'       => $result['country'],
									'zone'          => $result['zone'],
									'date_added'    => $result['date_added']
								);
							}
						}
					}
					break;
				case 'customer_select':
					if (!empty($data['send_to_data'])) {
						$filter_customer_id = explode(',', $data['send_to_data']);

						$customer_data = array(
							'filter_newsletter'  => $data['control_unsub'],
							'filter_country_id'  => $data['send_country_id'],
							'filter_zone_id'     => $data['send_zone_id'],
							'invers_region'      => $data['invers_region'],
							'filter_customer_id' => $filter_customer_id,
							'invers_customer'    => $data['invers_customer'],
							'filter_date_start'  => $data['date_start'],
							'filter_date_end'    => $data['date_end']
						);

						$results = $this->model_marketing_contacts->getEmailCustomers($customer_data);

						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['email']);
							if ($email != '') {
								if (!$data['control_unsub'] || !$this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
									$emails[$email] = array(
										'customer_id'   => $result['customer_id'],
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => $result['date_added']
									);
								}
							}
						}
					}
					break;
				case 'customer_group':
					if (!empty($data['send_to_data'])) {
						$filter_customer_group_id = explode(',', $data['send_to_data']);

						$customer_data = array(
							'filter_customer_group_id' => $filter_customer_group_id,
							'filter_country_id'        => $data['send_country_id'],
							'filter_zone_id'           => $data['send_zone_id'],
							'filter_newsletter'        => $data['control_unsub'],
							'invers_region'            => $data['invers_region'],
							'filter_date_start'        => $data['date_start'],
							'filter_date_end'          => $data['date_end'],
							'filter_start'             => $data['limit_start'],
							'filter_limit'             => $data['limit_end']
						);

						$results = $this->model_marketing_contacts->getEmailCustomers($customer_data);

						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['email']);
							if ($email != '') {
								if (!$data['control_unsub'] || !$this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
									$emails[$email] = array(
										'customer_id'   => $result['customer_id'],
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => $result['date_added']
									);
								}
							}
						}
					}
					break;
				case 'customer_noorder':
					$customer_data = array(
						'filter_country_id'        => $data['send_country_id'],
						'filter_zone_id'           => $data['send_zone_id'],
						'filter_newsletter'        => $data['control_unsub'],
						'invers_region'            => $data['invers_region'],
						'filter_date_start'        => $data['date_start'],
						'filter_date_end'          => $data['date_end'],
						'filter_start'             => $data['limit_start'],
						'filter_limit'             => $data['limit_end'],
						'filter_noorder'           => 1
					);

					$results = $this->model_marketing_contacts->getEmailCustomers($customer_data);

					foreach ($results as $result) {
						$email = preg_replace('/\s/', '', $result['email']);
						if ($email != '') {
							if (!$data['control_unsub'] || !$this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
								$emails[$email] = array(
									'customer_id'   => $result['customer_id'],
									'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
									'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
									'country'       => $result['country'],
									'zone'          => $result['zone'],
									'date_added'    => $result['date_added']
								);
							}
						}
					}
					break;
				case 'client_all':
					$client_data = array(
						'filter_country_id'  => $data['send_country_id'],
						'filter_zone_id'     => $data['send_zone_id'],
						'invers_region'      => $data['invers_region'],
						'filter_language_id' => $data['language_id'],
						'filter_date_start'  => $data['date_start'],
						'filter_date_end'    => $data['date_end'],
						'filter_start'       => $data['limit_start'],
						'filter_limit'       => $data['limit_end']
					);
	
					$results = $this->model_marketing_contacts->getEmailsByOrdereds($client_data);

					foreach ($results as $result) {
						$email = preg_replace('/\s/', '', $result['email']);
						if ($email != '') {
							$unsuber = false;
	
							if ($data['control_unsub']) {
								if ($this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
									$unsuber = true;
								} else {
									if ($result['customer_id'] && !$this->model_marketing_contacts->checkCustomerNewsletter($result['customer_id'])) {
										$unsuber = true;
									}
								}
							}
	
							if (!$unsuber) {
								$emails[$email] = array(
									'customer_id'   => $result['customer_id'],
									'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
									'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
									'country'       => $result['country'],
									'zone'          => $result['zone'],
									'date_added'    => $result['date_added']
								);
							}
						}
					}
					break;
				case 'client_select':
					if (!empty($data['send_to_data'])) {
						$filter_client = explode(',', $data['send_to_data']);

						$client_data = array(
							'filter_country_id'  => $data['send_country_id'],
							'filter_zone_id'     => $data['send_zone_id'],
							'invers_region'      => $data['invers_region'],
							'filter_client'      => $filter_client,
							'invers_client'      => $data['invers_client'],
							'filter_language_id' => $data['language_id'],
							'filter_date_start'  => $data['date_start'],
							'filter_date_end'    => $data['date_end']
						);
	
						$results = $this->model_marketing_contacts->getEmailsByOrdereds($client_data);
	
						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['email']);
							if ($email != '') {
								$unsuber = false;
	
								if ($data['control_unsub']) {
									if ($this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
										$unsuber = true;
									} else {
										if ($result['customer_id'] && !$this->model_marketing_contacts->checkCustomerNewsletter($result['customer_id'])) {
											$unsuber = true;
										}
									}
								}
	
								if (!$unsuber) {
									$emails[$email] = array(
										'customer_id'   => $result['customer_id'],
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => $result['date_added']
									);
								}
							}
						}
					}
					break;
				case 'client_group':
					if (!empty($data['send_to_data'])) {
						$filter_customer_group_id = explode(',', $data['send_to_data']);

						$client_data = array(
							'filter_customer_group_id' => $filter_customer_group_id,
							'filter_country_id'        => $data['send_country_id'],
							'filter_zone_id'           => $data['send_zone_id'],
							'invers_region'            => $data['invers_region'],
							'filter_language_id'       => $data['language_id'],
							'filter_date_start'        => $data['date_start'],
							'filter_date_end'          => $data['date_end'],
							'filter_start'             => $data['limit_start'],
							'filter_limit'             => $data['limit_end']
						);
	
						$results = $this->model_marketing_contacts->getEmailsByOrdereds($client_data);
	
						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['email']);
							if ($email != '') {
								$unsuber = false;
	
								if ($data['control_unsub']) {
									if ($this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
										$unsuber = true;
									} else {
										if ($result['customer_id'] && !$this->model_marketing_contacts->checkCustomerNewsletter($result['customer_id'])) {
											$unsuber = true;
										}
									}
								}
	
								if (!$unsuber) {
									$emails[$email] = array(
										'customer_id'   => $result['customer_id'],
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => $result['date_added']
									);
								}
							}
						}
					}
					break;
				case 'send_group':
					if (!empty($data['send_to_data'])) {
						$filter_group_id = explode(',', $data['send_to_data']);

						$customer_data = array(
							'filter_group_id'       => $filter_group_id,
							'filter_unsubscribe'    => $data['control_unsub'],
							'filter_start'          => $data['limit_start'],
							'filter_limit'          => $data['limit_end']
						);

						$results = $this->model_marketing_contacts->getNewsletters($customer_data);
	
						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['cemail']);
							if ($email != '') {
								if (trim($result['firstname']) != '') {
									$firstname = mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8');
								} elseif (trim($result['nfirstname']) != '') {
									$firstname = mb_convert_case($result['nfirstname'], MB_CASE_TITLE, 'UTF-8');
								} else {
									$firstname = '';
								}
								
								if (trim($result['lastname']) != '') {
									$lastname = mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8');
								} elseif (trim($result['nlastname']) != '') {
									$lastname = mb_convert_case($result['nlastname'], MB_CASE_TITLE, 'UTF-8');
								} else {
									$lastname = '';
								}
								
								$emails[$email] = array(
									'customer_id'   => $result['customer_id'],
									'firstname'     => $firstname,
									'lastname'      => $lastname,
									'country'       => '',
									'zone'          => '',
									'date_added'    => ''
								);
							}
						}
					}
					break;
				case 'affiliate_all':
					$affiliate_data = array(
						'filter_country_id'  => $data['send_country_id'],
						'filter_zone_id'     => $data['send_zone_id'],
						'invers_region'      => $data['invers_region'],
						'filter_date_start'  => $data['date_start'],
						'filter_date_end'    => $data['date_end'],
						'filter_start'       => $data['limit_start'],
						'filter_limit'       => $data['limit_end']
					);
	
					$results = $this->model_marketing_contacts->getEmailAffiliates($affiliate_data);
	
					foreach ($results as $result) {
						$email = preg_replace('/\s/', '', $result['email']);
						if ($email != '') {
							if (!$data['control_unsub'] || !$this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
								$emails[$email] = array(
										'customer_id'   => '',
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => ''
								);
							}
						}
					}
					break;
				case 'affiliate':
					if (!empty($data['send_to_data'])) {
						$filter_affiliate_id = explode(',', $data['send_to_data']);

						$affiliate_data = array(
							'filter_country_id'   => $data['send_country_id'],
							'filter_zone_id'      => $data['send_zone_id'],
							'invers_region'       => $data['invers_region'],
							'filter_affiliate_id' => $filter_affiliate_id,
							'invers_affiliate'    => $data['invers_affiliate'],
							'filter_date_start'   => $data['date_start'],
							'filter_date_end'     => $data['date_end']
						);
	
						$results = $this->model_marketing_contacts->getEmailAffiliates($affiliate_data);
	
						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['email']);
							if ($email != '') {
								if (!$data['control_unsub'] || !$this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
									$emails[$email] = array(
										'customer_id'   => '',
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => ''
									);
								}
							}
						}
					}
					break;
				case 'product':
					if (!empty($data['send_to_data'])) {
						$filter_products = explode(',', $data['send_to_data']);

						$product_data = array(
							'filter_products'    => $filter_products,
							'filter_country_id'  => $data['send_country_id'],
							'filter_zone_id'     => $data['send_zone_id'],
							'invers_region'      => $data['invers_region'],
							'invers_product'     => $data['invers_product'],
							'filter_language_id' => $data['language_id'],
							'filter_date_start'  => $data['date_start'],
							'filter_date_end'    => $data['date_end'],
							'filter_start'       => $data['limit_start'],
							'filter_limit'       => $data['limit_end']
						);

						$results = $this->model_marketing_contacts->getEmailsByOrdereds($product_data);

						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['email']);
							if ($email != '') {
								$unsuber = false;
	
								if ($data['control_unsub']) {
									if ($this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
										$unsuber = true;
									} else {
										if ($result['customer_id'] && !$this->model_marketing_contacts->checkCustomerNewsletter($result['customer_id'])) {
											$unsuber = true;
										}
									}
								}
	
								if (!$unsuber) {
									$emails[$email] = array(
										'customer_id'   => $result['customer_id'],
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => $result['date_added']
									);
								}
							}
						}
					}
					break;
				case 'category':
					if (!empty($data['send_to_data'])) {
						$filter_category = explode(',', $data['send_to_data']);

						$product_data = array(
							'filter_category'      => $filter_category,
							'filter_country_id'    => $data['send_country_id'],
							'filter_zone_id'       => $data['send_zone_id'],
							'invers_region'        => $data['invers_region'],
							'invers_category'      => $data['invers_category'],
							'filter_language_id'   => $data['language_id'],
							'filter_date_start'    => $data['date_start'],
							'filter_date_end'      => $data['date_end'],
							'filter_start'         => $data['limit_start'],
							'filter_limit'         => $data['limit_end']
						);

						$results = $this->model_marketing_contacts->getEmailsByOrdereds($product_data);

						foreach ($results as $result) {
							$email = preg_replace('/\s/', '', $result['email']);
							if ($email != '') {
								$unsuber = false;
	
								if ($data['control_unsub']) {
									if ($this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
										$unsuber = true;
									} else {
										if ($result['customer_id'] && !$this->model_marketing_contacts->checkCustomerNewsletter($result['customer_id'])) {
											$unsuber = true;
										}
									}
								}
	
								if (!$unsuber) {
									$emails[$email] = array(
										'customer_id'   => $result['customer_id'],
										'firstname'     => (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '',
										'lastname'      => (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '',
										'country'       => $result['country'],
										'zone'          => $result['zone'],
										'date_added'    => $result['date_added']
									);
								}
							}
						}
					}
					break;
				case 'manual':
					if (!empty($data['manual'])) {
						$post_manuals = explode(',', $data['manual']);
	
						if (!empty($data['limit_end'])) {
							if (!empty($data['limit_start']) && ((int)$data['limit_start'] > 0)) {
								$limit_start = (int)$data['limit_start'];
							} else {
								$limit_start = 0;
							}
	
							if (((int)$data['limit_end'] > 1) && ((int)$data['limit_end'] > $limit_start)) {
								$limit_end = (int)$data['limit_end'] - (int)$limit_start;
							} else {
								$limit_end = 1;
							}
	
							$manuals = array_slice($post_manuals, $limit_start, $limit_end);
						} else {
							$manuals = $post_manuals;
						}
	
						foreach ($manuals as $post_manual) {
							if (trim($post_manual) != '') {
								$data_manuals = explode('|', $post_manual);
	
								if (isset($data_manuals[0]) && (stripos($data_manuals[0], '@') > 0)) {
									$email = preg_replace('/\s/', '', $data_manuals[0]);

									$unsuber = false;
									$customer_info = $this->model_marketing_contacts->getCustomerFromEmail($email);
	
									if ($customer_info) {
										$customer_id = $customer_info['customer_id'];
									} else {
										$customer_id = 0;
									}

									if ($data['control_unsub']) {
										if ($this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
											$unsuber = true;
										} else {
											if (!empty($customer_info) && !$customer_info['newsletter']) {
												$unsuber = true;
											}
										}
									}
	
									if (!$unsuber) {
										$mfirstname = '';
										if (isset($data_manuals[1]) && (trim($data_manuals[1]) != '')) {
											$mfirstname = preg_replace('/\s+/', ' ', $data_manuals[1]);
											$mfirstname = trim($mfirstname);
											$firstname = mb_convert_case($mfirstname, MB_CASE_TITLE, 'UTF-8');
										} elseif (!empty($customer_info) && $customer_info['firstname']) {
											$firstname = (trim($customer_info['firstname']) != '') ? mb_convert_case($customer_info['firstname'], MB_CASE_TITLE, 'UTF-8') : '';
										} else {
											$firstname = '';
										}
										if (isset($data_manuals[2]) && (trim($data_manuals[2]) != '')) {
											$mlastname = preg_replace('/\s+/', ' ', $data_manuals[2]);
											$mlastname = trim($mlastname);
											$lastname = mb_convert_case($mlastname, MB_CASE_TITLE, 'UTF-8');
										} elseif (!$mfirstname && !empty($customer_info) && $customer_info['lastname']) {
											$lastname = (trim($customer_info['lastname']) != '') ? mb_convert_case($customer_info['lastname'], MB_CASE_TITLE, 'UTF-8') : '';
										} else {
											$lastname = '';
										}
	
										if (!array_key_exists($email, $emails)) {
											$emails[$email] = array(
												'customer_id'   => $customer_id,
												'firstname'     => $firstname,
												'lastname'      => $lastname,
												'country'       => '',
												'zone'          => '',
												'date_added'    => ''
											);
										}
									}
								}
							}
						}
					}
					break;
				case 'sql_manual':
					if (!empty($data['sql_manual'])) {
						$results = $this->model_marketing_contacts->getEmailsFromSqlManual($data['sql_manual']);

						if (!empty($results)) {
							foreach ($results as $result) {
								$email = preg_replace('/\s/', '', $result['email']);
								if ($email != '') {
									$unsuber = false;
									$customer_info = $this->model_marketing_contacts->getCustomerFromEmail($email);
	
									if ($customer_info) {
										$customer_id = $customer_info['customer_id'];
									} else {
										$customer_id = 0;
									}

									if ($data['control_unsub']) {
										if ($this->model_marketing_contacts->checkEmailUnsubscribe($email)) {
											$unsuber = true;
										} else {
											if (!empty($customer_info) && !$customer_info['newsletter']) {
												$unsuber = true;
											}
										}
									}
	
									if (!$unsuber) {
										if (!array_key_exists($email, $emails)) {
											$qfirstname = '';
											if (!empty($result['firstname'])) {
												$qfirstname = (trim($result['firstname']) != '') ? mb_convert_case($result['firstname'], MB_CASE_TITLE, 'UTF-8') : '';
												$firstname = $qfirstname;
											} elseif (!empty($customer_info) && $customer_info['firstname']) {
												$firstname = (trim($customer_info['firstname']) != '') ? mb_convert_case($customer_info['firstname'], MB_CASE_TITLE, 'UTF-8') : '';
											} else {
												$firstname = '';
											}
											if (!empty($result['lastname'])) {
												$lastname = (trim($result['lastname']) != '') ? mb_convert_case($result['lastname'], MB_CASE_TITLE, 'UTF-8') : '';
											} elseif (!$qfirstname && !empty($customer_info) && $customer_info['lastname']) {
												$lastname = (trim($customer_info['lastname']) != '') ? mb_convert_case($customer_info['lastname'], MB_CASE_TITLE, 'UTF-8') : '';
											} else {
												$lastname = '';
											}
	
											$emails[$email] = array(
												'customer_id'   => $customer_id,
												'firstname'     => $firstname,
												'lastname'      => $lastname,
												'country'       => '',
												'zone'          => '',
												'date_added'    => ''
											);
										}
									}
								}
							}
						}
					}
					break;
			}
		}
		return $emails;
	}
	
	public function getMailProducts($results) {
		$products = array();
		
		if ($this->config->get('contacts_product_currency')) {
			$currency = $this->config->get('contacts_product_currency');
		} else {
			$currency = $this->config->get('config_currency');
		}
		
		$this->load->model('tool/image');
		
		if ($this->config->get('contacts_pimage_width') && ($this->config->get('contacts_pimage_width') > 0)) {
			$iwidth = $this->config->get('contacts_pimage_width');
		} else {
			$iwidth = 150;
		}
		
		if ($this->config->get('contacts_pimage_height') && ($this->config->get('contacts_pimage_height') > 0)) {
			$iheight = $this->config->get('contacts_pimage_height');
		} else {
			$iheight = 150;
		}
		
		foreach ($results as $result) {
			if ($result['image'] && file_exists(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], $iwidth, $iheight);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', $iwidth, $iheight);
			}

			if ((float)$result['special'] && (float)$result['price']) {
				$special = $this->currency->format($result['special'], $currency);
				$discount = floor((($result['price']-$result['special'])/$result['price'])*100);
			} else {
				$special = false;
				$discount = false;
			}
			
			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$products[] = array(
				'product_id' => $result['product_id'],
				'thumb'   	 => $image,
				'discount'   => isset($discount)?'-'.$discount.'%':'',
				'name'    	 => html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'),
				'price'   	 => $this->currency->format($result['price'], $currency),
				'model'    	 => $result['model'],
				'sku'    	 => $result['sku'],
				'special' 	 => $special,
				'rating'     => $rating,
				'href'    	 => str_replace(HTTP_SERVER, HTTP_CATALOG, $this->url->link('product/product', 'product_id=' . $result['product_id']))
			);
		}
			
		return $products;
	}
	
	public function checkValidEmail($email) {
		if ($this->config->get('contacts_email_pattern') && ($this->config->get('contacts_email_pattern') != '')) {
			$pattern = $this->config->get('contacts_email_pattern');
			
			if (preg_match($pattern, $email)) {
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	}
	
	protected function validate() {
		$this->load->language('marketing/contacts');
		
		if (!$this->user->hasPermission('modify', 'marketing/contacts')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}
	
	public function getcountry() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
?>