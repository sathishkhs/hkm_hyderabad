<style>
    .bg-image-he {
        padding-top: 10px;
        padding-bottom: 10px;
        height: 400px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    @media (max-width: 780px) {
        .bg-image-he {
            background-position: right center;
            height: 400px;
        }
    }
</style>
<?php if ($page_items->display_image == 1 && !empty($page_items->display_image) && file_exists((CHARITABLE_PROGRAM_BANNER_PATH . $page_items->banner))) { ?>
    <section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center bg-image-he" data-tm-bg-img="<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $page_items->banner; ?>" style="background-image: url(&quot;<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $page_items->banner; ?>&quot;);">
        <div class="container ">
            <div class="section-content">

            </div>
        </div>
    </section>
<?php } ?>

<div class="row">
    <div class="col-md-12 text-center">
        <?php if (!empty($text_on_banner)) {
            echo $text_on_banner;
        } ?>

    </div>
</div>