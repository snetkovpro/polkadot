<?php
class ControllerModuleCategory extends Controller {
	public function index() {
		$this->load->language('module/category');

		$data['heading_title'] = $this->language->get('heading_title');

		//dev
		// $data['dev'] = $this->request->get['path'];

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}
		
		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}
		
		if (isset($parts[2])) {
			$data['child_lv3_id'] = $parts[2];
		} else {
			$data['child_lv3_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);
        $data['islogged'] = $this->customer->isLogged() ? $this->customer->getGroupId() : 0;

		foreach ($categories as $category) {
			$children_data = array();
			$children_lv3_data = array();
			$children = array();

		//	if ($category['category_id'] == $data['category_id']) {
				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach($children as $child) {
					//$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);
					$children_lv3 = array();
					$children_lv3 = $this->model_catalog_category->getCategories($child['category_id']);

                    if($children_lv3)
                    {    

                    foreach ($children_lv3 as $child_lv3) 
                    {
                        $filter_data_lv3 = array(
                        'filter_category_id'  => $child_lv3['category_id'],
                        'filter_sub_category' => true
                        );
                
                        $children_lv3_data[] = array(
                        'category_id' => $child_lv3['category_id'],
                        'parent_id' => $child['category_id'],
                        'name'  => $child_lv3['name'],
                        'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child_lv3['category_id']),
                        'guest_status' => $child_lv3['guest_status']
                        );
                    }
                
                    $children_data[] = array(
                            'category_id' => $child['category_id'],
                            'children_lv3' => $children_lv3_data,
                            'name'  => $child['name'],
                            'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
                            'guest_status' => $child['guest_status']
                    );
                
                }
                
                else
                {
                
                    $children_data[] = array(
                        'category_id' => $child['category_id'],
                        'name'  => $child['name'],
                        'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
                        'guest_status' => $child['guest_status']
                    );
                }
					
				}
		//	}

			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'],
				'children'    => $children_data,
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id']),
				'guest_status' => $category['guest_status']
			);
		}

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/category.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/category.tpl', $data);
		} else {
			return $this->load->view('default/template/module/category.tpl', $data);
		}
	}
}