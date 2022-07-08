  <!--====== HEADER PART START ======-->
    

        <div class="main-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-item">
                            <div class="main-header-menus  d-flex justify-content-between align-items-center">

                                <div class="header-logo">
                                    <a href=""><img src="<?php echo SETTINGS_UPLOAD_PATH . $settings->LOGO_IMAGE ?>" alt="logo" style="width:165px"></a>
                                </div>

                                <div class="header-menu d-none d-lg-block">
                                    <ul>
									<?php if (!empty($header_menu)) { ?>
									<?php foreach ($header_menu as $header) { ?>
										<?php if ($header->submenu == null || empty($header->submenu)) { ?>
                                        <li>
                                            <a target="<?php echo $header->menuitem_target; ?>" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link; ?>"><?php echo $header->menuitem_text; ?></a></a>
                                        </li>
										<?php } ?>

										<?php if (!empty($header->submenu)) : ?>
                                        <li>
                                            <a target="<?php echo $header->menuitem_target; ?>" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link; ?>"><?php echo $header->menuitem_text; ?></a>
                                            <ul class="sub-menu">
												<?php foreach ($header->submenu as $submenu) : ?>
                                                <li><a target="<?php echo $submenu->menuitem_target; ?>" href="<?php echo $submenu->menuitem_link; ?>"><?php echo $submenu->menuitem_text; ?></a>
												<?php if (!empty($submenu->submenu)) : ?>
													<ul class="sub-menu">
													<?php foreach ($submenu->submenu as $submenu_2) : ?>
														<li><a target="<?php echo $submenu_2->menuitem_target; ?>" href="<?php echo $submenu_2->menuitem_link ?>"><?php echo $submenu_2->menuitem_text; ?></a></li>
															<?php endforeach; ?>
													</ul>
													<?php endif; ?>
												</li>
												<?php endforeach; ?>
                                            </ul>
                                        </li>
										<?php endif; ?>
										<?php } ?>
								<?php } ?>
                                    </ul>
                                </div>

                                <div class="header-info d-flex align-items-center ">
                                   
                                    <div class="info d-sm-block">
                                       
                                        <a class="main-btn" href="annadana-seva">Make Donation</a>
                                    </div>
                                    <div class="toggle-btn ml-30 canvas_open d-lg-none d-block">
                                        <i class="fa fa-bars"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    
    <!--====== HEADER PART ENDS ======-->

