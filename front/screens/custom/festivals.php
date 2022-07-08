



<section class="explore-area pt-150 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-8 mx-auto">
                    <div class="section-title text-center">
                        <span>Join Us in The Service of Lord</span>
                        <h3 class="title">Offer Seva</h3>
                    </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php if (!empty($festivals)) {
                foreach ($festivals as $festival) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <div class="explore-projects-item mt-30">
                            <div class="explore-projects-thumb">
                                <img src="<?php echo FESTIVAL_BANNER_PATH . $festival->festival_banner; ?>" alt="explore-projects">
                                <a href="<?php echo $festival->page_slug; ?>"><i class="fa fa-heart"></i></a>
                            </div>
                            <div class="explore-projects-content">

                                <a href="<?php echo $festival->page_slug; ?>">
                                    <h3 class="title"><?php echo $festival->festival_title; ?></h3>
                                </a>
                                <div class="projects-range">
                                    <div class="projects-range-content">
                                        <p><?php echo !empty($festival->festival_description) ? substr($festival->festival_description,0,150) : substr($festival->meta_description, 0, 150) . '...'; ?></p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php }
            } else {  ?>
                <div class="section-title text-center">
                    <span>No Festivals Created</span>
                    
                </div>
            <?php } ?>



        </div>
    </div>
</section>