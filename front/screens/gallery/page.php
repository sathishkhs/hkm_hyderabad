

<style>
   .holder {
    margin:15px 0;
    display:flex;
    justify-content: center;
}
.holder a {
    font-size:16px;
    cursor:pointer;
    margin:0 5px;
    color:#333;
    padding:6px 12px;
}
.holder a:hover {
    background-color:#348f7a;  
    color:#fff;
}
.holder a.jp-previous {
    margin-right:15px;
}
.holder a.jp-next {
    margin-left:15px;
}
.holder a.jp-current,a.jp-current:hover {
    color:#efc94c;
    font-weight:bold;
}
.holder a.jp-disabled,a.jp-disabled:hover {
    color:#bbb;
}
.holder a.jp-current,a.jp-current:hover,.holder a.jp-disabled,a.jp-disabled:hover {
    cursor:default;
    background:none;
}
.holder span {
    margin: 0 5px;
}
.holder a.jp-current{
  background: #348f7a;

}
.holder a:hover{
  color:#fff!important;
}
  </style>






 
<div class="gallery-page-area gallery-holder-618422">
        <div class="container">
          <?php if(empty($gallery_images)){ ?>
            <div class="row">
            <div class="col-md-12">
            <div class="title-wrapper mb-1 text-center">
              <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
              <h2 class="title mb-0">No Images Found</h2>
            </div>
            </div>
          </div>
          <?php }else{ ?>
   <div class="section-title text-center">
                        <span><?php echo $this->db->where('gallery_id',$gallery_id)->get('gallery')->row()->gallery_name; ?></span>
                        
                    </div>
            <div class="row">

 <?php if(!empty($gallery_images)){ 
          foreach($gallery_images as $image){  ?>

                <div class="col-lg-4 col-md-6 col-sm-6 <?php echo str_replace(' ','-', $this->db->where('category_id',$image->gallery_id)->get('gallery')->row()->gallery_name); ?>">
                    <div class="portfolio-item mt-30">
                        <img src="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" alt="">
                        <div class="portfolio-overlay">
                            <a class="image-popup" href="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>"><i class="flaticon-add"></i></a>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </div>
            <?php } ?>
        </div>
        </div>
    </div>

    
    <div class="holder">
</div>
