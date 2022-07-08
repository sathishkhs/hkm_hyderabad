<?php if ( !empty($page_items->display_image) && file_exists((BANNER_IMAGE_PATH . $page_items->banner_image))) { ?>
<section class="page-title-area bg_cover" style="background-image: url(<?php echo BANNER_IMAGE_PATH . $page_items->banner_image; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h3 class="title"></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                                <li class="breadcrumb-item active" aria-current="page"></li>
                                <li class="breadcrumb-item active" aria-current="page"></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>