<?php
/**
 * @package    OptimBlog
 * @version    3.0.0.1
 * @author     Dmitriy Khokhlov <admin@optimlab.com>
 * @copyright  Copyright (c) 2018, Dmitriy Khokhlov. (http://optimlab.com/)
 * @license	   https://opensource.org/licenses/GPL-3.0
 * @link       http://optimlab.com
 */
class ControllerExtensionModuleBestSellerInformation extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/bestseller_information');

		$this->load->model('catalog/information');

		$this->load->model('tool/image');

		$data['informations'] = array();

		$filter_data = array(
			'filter_category_id' => $setting['category_id'],
			'sort'               => $setting['sort'],
			'order'              => 'DESC',
			'start'              => 0,
			'limit'              => $setting['limit']
		);

		$results = $this->model_catalog_information->getInformations($filter_data);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = false;
				}

				if ($this->config->get('information_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$data['informations'][] = array(
					'information_id' => $result['information_id'],
					'thumb'          => $image,
					'title'          => $result['title'],
					'description'    => !empty($result['short_description']) ? trim(html_entity_decode($result['short_description'], ENT_QUOTES, 'UTF-8')) : utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('information_description_length')) . '..',
					'user_id'        => $result['user_id'],
					'author'         => $result['author'],
					'date_added'     => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
					'reviews'        => sprintf($this->language->get('text_review'), $result['reviews']),
					'rating'         => $result['rating'],
					'href'           => $this->url->link('information/information', '&information_id=' . $result['information_id'])
				);
			}

			if ($setting['title'][$this->config->get('config_language_id')]) {
				$data['heading_title'] = html_entity_decode($setting['title'][$this->config->get('config_language_id')]);
			}

			$data['author'] = $this->config->get('information_category_author');
			$data['date'] = $this->config->get('information_category_date');
			$data['review'] = $this->config->get('information_category_review');

			return $this->load->view('extension/module/bestseller_information', $data);
		}
	}
}
