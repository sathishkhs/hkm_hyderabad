
  

    <section class="about-3-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span>Learn More About the Krowd</span>
                        <h3 class="title">Founded to Empower Innovation</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                    <?php  foreach($gallery_videos as $key=>$video){
                  
                      ?>
                        <div class="col-lg-4">
                    <div class="about-thumb">
                        <img src="<?php echo GALLERY_VIDEO_UPLOAD_PATH.$video->video_cover_path; ?>" alt="thumb">
                        <a class="video-popup" href="<?php echo (!empty($video->gallery_video_path)) ? base_url().GALLERY_VIDEO_UPLOAD_PATH.$video->gallery_video_path : $video->video_link; ?>"><i class="fa fa-play"></i></a>
                    </div>
                </div>


                <?php } ?>


                </div>
        </div>
    </section>
<div class="container my2"></div>



    <script >
$('#video-gallery').lightGallery();
  </script>
