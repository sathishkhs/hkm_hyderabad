<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
   
class Gallery extends MY_Controller {
    public $class_name;
    public $api;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->model('index_model');
    
    }
    public function index() {
        $template_path = $this->pagewisecontent('image-gallery');
        $data = $this->data;
        $this->index_model->primary_key = array('status_ind'=>1);
        $data['categories'] = $this->index_model->view_data('category_gallery');
        $data['head'] = 'templates/includes/custom/head';
        $data['mobile_nav'] = 'templates/includes/custom/mobile_nav';
        $data['topbar'] = 'templates/includes/custom/topbar';
        $data['navbar'] = 'templates/includes/custom/navbar';
        $data['banner'] = 'templates/includes/custom/banner';
        $data['footer'] = 'templates/includes/custom/footer';
        $data['view_path'] = "gallery/image_gallery"; 
        $data['javascripts'] = 'templates/includes/gallery/scripts';
        $this->index_model->primary_key = array('status_ind'=>1);
        $data['banners'] = $this->index_model->view_data('banners');
        $data['scripts'] = array('assets/javascripts/index.js');
        $this->load->view('templates/gallery_page', $data);
    }

    public function show_gallery($category_id) {
        $template_path = $this->pagewisecontent('image-gallery');
        $data = $this->data;
        $this->index_model->primary_key = array('category_id'=>$category_id,'status_ind'=>1);
        $data['galleries'] = $this->index_model->view_data('gallery');
        $data['view_path'] = "gallery/show_gallery"; 
        $this->index_model->primary_key = array('status_ind'=>1);
        $data['banners'] = $this->index_model->view_data('banners');
        $data['head'] = 'templates/includes/custom/head';
        $data['mobile_nav'] = 'templates/includes/custom/mobile_nav';
        $data['topbar'] = 'templates/includes/custom/topbar';
        $data['navbar'] = 'templates/includes/custom/navbar';
        $data['banner'] = 'templates/includes/custom/banner';
        $data['footer'] = 'templates/includes/custom/footer';
        $data['javascripts'] = 'templates/includes/gallery/scripts';
        $data['scripts'] = array('assets/javascripts/index.js');
        $this->load->view('templates/gallery_page', $data);
    }

    public function gallery_images($gallery_id, $category_id){
        $template_path = $this->pagewisecontent('image-gallery');
        $data = $this->data;
        $this->index_model->primary_key = array('category_id'=>$category_id,'gallery_id'=>$gallery_id, 'status_ind'=>1);
        $data['gallery_images'] = $this->index_model->view_data('gallery_images');
       $data['gallery_id'] = $gallery_id;
       $data['category_id'] = $category_id;
        $data['view_path'] = "gallery/page"; 
        $this->index_model->primary_key = array('status_ind'=>1);
        $data['banners'] = $this->index_model->view_data('banners');
        $data['gallery_id'] = $gallery_id;
        $data['head'] = 'templates/includes/custom/head';
        $data['mobile_nav'] = 'templates/includes/custom/mobile_nav';
        $data['topbar'] = 'templates/includes/custom/topbar';
        $data['navbar'] = 'templates/includes/custom/navbar';
        $data['banner'] = 'templates/includes/custom/banner';
        $data['footer'] = 'templates/includes/custom/footer';   
        $data['javascripts'] = 'templates/includes/gallery/scripts';
        $data['scripts'] = array('assets/javascripts/index.js');
        $this->load->view('templates/gallery_page', $data);
    }
}