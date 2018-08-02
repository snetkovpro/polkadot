<?php
class ControllerAccountSuccess extends Controller {
	public function index() {
		$this->load->language('account/success');

		
		$unsub = false;
		$check = false;
		
		if (isset($this->request->get['sid']) && ($this->request->get['sid'] != '')) {
			$unsub = true;
			$this->document->setTitle($this->language->get('heading_unsubscribe'));
			
			$this->load->model('account/customer');
			
			$sid = base64_decode($this->request->get['sid']);
			$sid_data = explode('|', $sid);
			
			$send_id = $sid_data[0];
            $email = $sid_data[1];
			$check = $sid_data[2];
			$customer_id = $sid_data[3];
			
			$controlsumm = md5($email . $this->config->get('contacts_unsub_pattern'));
			
			if ($controlsumm == $check) {
				$this->model_account_customer->unsubscribe($email, $send_id, $customer_id);
				$check = true;
			}

		} else {
			$this->document->setTitle($this->language->get('heading_title'));
		}
		

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', 'SSL')
		);

		
		if (!$unsub) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_success'),
				'href' => $this->url->link('account/success')
			);
		}
		

		$data['heading_title'] = $this->language->get('heading_title');

		$this->load->model('account/customer_group');

		$customer_group_info = $this->model_account_customer_group->getCustomerGroup($this->config->get('config_customer_group_id'));

		if ($customer_group_info && !$customer_group_info['approval']) {
			$data['text_message'] = sprintf($this->language->get('text_message'), $this->url->link('information/contact'));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_approval'), $this->config->get('config_name'), $this->url->link('information/contact'));
		}

		$data['button_continue'] = $this->language->get('button_continue');

		if ($unsub) {
			$data['heading_title'] = $this->language->get('heading_unsubscribe');
			if ($check) {
				$data['text_message'] = $this->language->get('text_success_unsubscribe');
			} else {
				$data['text_message'] = $this->language->get('text_error_unsubscribe');
			}
		}
		

		if ($this->cart->hasProducts()) {
			$data['continue'] = $this->url->link('checkout/cart');
		} else {
			$data['continue'] = $this->url->link('account/account', '', 'SSL');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/success.tpl')) {
			$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/common/success.tpl', $data));
		} else {
			$this->response->setOutput($this->load->view('default/template/common/success.tpl', $data));
		}
	}
}