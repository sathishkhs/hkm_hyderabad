<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pages extends MY_Controller {
        public $class_name;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        // $this->load->model('doctors_model');
    }

    public function index($slug) {
    $template_path = $this->pagewisecontent($slug);
    $data = $this->data;
    $data['head'] = 'templates/includes/pages/head';
    $data['mobile_nav'] = 'templates/includes/pages/mobile_nav';
    $data['topbar'] = 'templates/includes/pages/topbar';
    $data['navbar'] = 'templates/includes/pages/navbar';
    $data['banner'] = 'templates/includes/pages/banner';
    $data['footer'] = 'templates/includes/pages/footer';
    $data['javascripts'] = 'templates/includes/pages/scripts';
    if(!empty($data['page_items']->video_gallery_id)){
        $this->pages_model->primary_key = array('video_gallery_id'=>$data['page_items']->video_gallery_id);
        $data['gallery_videos'] = $this->pages_model->view_data('gallery_videos');
     
    }
    $data['page_heading'] = $data['page_items']->page_title;
    $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">'.$data['page_items']->page_title.'</span>' ;   
    $data['scripts'] = array('assets/javascripts/index.js','assets/javascripts/'.$slug.'.js');
    // $data['breadcrumb'] = $data['page_items']->page_title;
    $this->load->view($template_path, $data);

    }
    public function festivals(){
        $data = $this->data;
        $data['view_path'] = 'festivals/page';
        $data['festivals'] = $this->pages_model->view_data('sevas_page');
        $data['scripts'] = array('assets/javascripts/index.js'); 
        $this->load->view('templates/inner_page', $data);
    }
}