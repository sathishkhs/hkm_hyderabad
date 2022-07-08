
	<meta charset="utf-8">
    <title><?php echo $page_items->meta_title; ?></title>
    <meta name="title" content="<?php echo $page_items->meta_title; ?>"/>
    <meta name="keywords" content="<?php echo $page_items->meta_keywords; ?>"/>
    <meta name="description" content="<?php echo $page_items->meta_description; ?>"/>
    <base href="<?php echo base_url(); ?>"/>
    <?php $parts = $this->uri->segment(1); ?>
    <?php if (!empty($page_url) && $page_url > 1) {
        ?>   <link rel="canonical" href="<?php echo base_url() . $parts . '/' . $page_url; ?>"/>
    <?php } else if (!empty($page_items->canonical_url)) { ?>
        <link rel="canonical" href="<?php echo $page_items->canonical_url; ?>"/>
        <?php
    } if (!empty($page_items->redirection_link)) {
        header('Location:' . $page_items->redirection_link);
    }
    ?>
    <?php echo $page_items->other_meta_tags; ?>
    <?php
    $robots = array();
    if (!empty($page_items->nofollow_ind)) {
        $robots[] = 'NOINDEX';
    }
    if (!empty($page_items->noindex_ind)) {
        $robots[] = 'NOFOLLOW';
    }
    if (count($robots) > 0):
        ?>
        <META NAME="ROBOTS" CONTENT="<?php echo implode(', ', $robots); ?>" />
    <?php endif ?>

    <meta name="author" content="Sathish-Kumar">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--<link rel="shortcut icon" href="<?php echo $settings->FAVICON_IMAGE ?>" type="image/x-icon">-->
	<link rel="icon" href="<?php echo SETTINGS_UPLOAD_PATH.$settings->FAVICON_IMAGE ?>" type="image/png">
 
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    
    <!--====== odometer css ======-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    
    <!--====== magnific popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>