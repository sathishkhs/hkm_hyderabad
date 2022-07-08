

      
    <section class="explore-area pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center " id="gallery-holder-618422">
            <?php if(empty($galleries)){ ?>
            <div class="col-md-12">
            <div class="title-wrapper mb-1 text-center">
              <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
              <h2 class="title mb-0">No Galleries Found</h2>
            </div>
            </div>
          <?php }else{ ?>
            <div class="col-12">
            <div class="section-title text-center">
                        <span>Gallery</span>
                    
                    </div>
            </div>

            <?php foreach($galleries as $gallery){ ?>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="explore-projects-item mt-30">
                        <div class="explore-projects-thumb">
                            <img src="<?php echo GALLERY_UPLOAD_PATH . $gallery->category_img_path  ; ?>" alt="explore-projects">
                           
                        </div>
                        <div class="explore-projects-content">
                          
                            <a href="<?php echo 'gallery/gallery_images/'.$gallery->gallery_id .'/'. $gallery->category_id; ?>"><h3 class="title"><?php echo $gallery->gallery_name; ?></h3></a>
                          
                          
                        </div>
                    </div>
                </div>
                <?php } ?>   
                <?php } ?>     
            </div>
        </div>
    </section>