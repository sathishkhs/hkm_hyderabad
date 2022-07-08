<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    require_once 'vendor/autoload.php';
class Custom_page extends MY_Controller {
    public $class_name;
    public $api;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->model('custom_page_model');
        
    }

    
    public function index($slug) {
       
        $template_path = $this->pagewisecontent($slug);
        $data = $this->data;
        if($slug == 'festivals'){
            // $this->custom_page_model->primary_key = array('page_slug'=>$slug);
            $data['festivals'] = $this->custom_page_model->view_data('festivals');
        }

        $data['head'] = 'templates/includes/custom/head';
        $data['mobile_nav'] = 'templates/includes/custom/mobile_nav';
        $data['topbar'] = 'templates/includes/custom/topbar';
        $data['navbar'] = 'templates/includes/custom/navbar';
        $data['banner'] = 'templates/includes/custom/banner';
        $data['footer'] = 'templates/includes/custom/footer';
        $data['javascripts'] = 'templates/includes/custom/scripts';
        $data['view_path'] = "custom/$slug"; 
        $data['page_heading'] = $data['page_items']->page_title;
        $data['breadcrumb'] = '<b><a href="" class="thm-text">BACK TO HOME</a></b> ';
        $data['scripts'] = array('assets/javascripts/custom_page.js');
        $this->load->view($template_path, $data);
    
    }
    
}