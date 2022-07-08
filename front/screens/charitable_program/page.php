<style>
  .btn {
    color: #838694;
    font-size: 0.9rem;
  }

  body {
    color: #838694;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6{
    color: #838694;
  }
  ul{
    list-style-type: disc;
  }
  li{
    font-size: 18px;
line-height: 36px;
color: #838694;
  }
  .thm-text-1 {
    color: #ffb410;
  }

  .small-text {
    font-size: 14px;
    line-height: 18px;
  }

  .btn-thm {
    background: #f35526;
  }

  .btn-thm-outline {
    border: 1px solid #f35526;
  }

  .card {
    border-radius: 24px !important;
    border: 0px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
  }

  .card-header {
    height: 90px;
    background-color: #ffb410;
    border-top-left-radius: 24px !important;
    border-top-right-radius: 24px !important;
    padding-top: 5px;
  }

  .card-body {
    padding: 0.4rem 1.25rem;
    overflow-y: scroll;
    max-height: calc(100vh - 18rem);
  }

  .on-banner {
    /*top: 60px;*/
    right: 20px;
    position: absolute;
    color: #fff;
    z-index: 996;
    margin-top: 30px;
  }


  .on-header {
    bottom: 0;
    left: 0;
  }

  .campaign-wrap img,
  .customer-logos img {
    width: 100% !important;
  }

  .col_fourth {
    width: 16.5%;
  }

  @media(max-width: 1280px) {
    .card-header {
      height: 90px;
    }
  }

  @media(max-width: 1040px) {
    .col-lg-6 {
      width: 63%;
    }

    .on-banner {
      position: static;
    }

    .on-banner>h4 {
      color: #ffb410 !important;
    }

    .card-header {
      height: 140px;
    
    }


    .tab .nav-tabs .nav-item {
      width: 100% !important;
    }
  }

  @media (max-width:768px) {
    .col_fourth {
      width: 50%
    }

    .card-header {
      height: 130px;
    }

  }

  .tab {
    font-family: 'Raleway', sans-serif;
    padding: 5px 15px;
  }

  .tab .nav-tabs {
    /* padding: 0 10px; */
    margin: 0;
    border: none;
    width: 100%;
    flex-wrap: nowrap !important;
  }

  .nav-tabs .nav-link.active {
    color: #ffb410 !important;

  }

  .nav-tabs .nav-link.active:after {
    content: '\f058';
    font: normal normal normal 16px FontAwesome;
    margin-left: 5px;
    color: #28a745;
  }

  .nav-tabs .nav-item.show .nav-link,
  .nav-tabs .nav-link.active {
    background: #fff !important;
  }

  .tab .nav-tabs li a {
    color: #fff;
    background: #ffb410;
    font-size: 18px;
    font-weight: 400;
    text-align: center;
    text-transform: capitalize;
    padding: 1px 30px 1px;
    margin-left: 10px;
    border: none;
    border-radius: 20px 20px 0 0;
    overflow: hidden;
    position: relative;
    z-index: 1;
    /* transition: all 0.3s ease 0.15s; */
  }

  .tab .nav-tabs li.active a,
  .tab .nav-tabs li a:hover,
  .tab .nav-tabs li.active a:hover {
    color: #fff;
    background: #ffb410;
    border: none;
    box-shadow: 0 -3px 7px rgba(0, 0, 0, 0.15);
  }

  .tab .nav-tabs li a:before {
    content: "";
    background: #fff;
    height: 100%;
    width: 100%;
    border-radius: 8px 8px 0 0;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease-out 0s;
  }

  .btn.btn-twitter {
    background: #e0e5e3;
    border-color: #e0e5e3;
    /* color: #ffb410; */
  }

  .btn.btn-round {
    border-radius: 40px;
  }

  .btn.btn-active {
    background-color: #ffb410;
    color: #fff;
    border-color: 1px solid #ffb410;
  }

  .inp {
    position: relative;
    margin: auto;
    width: 100%;
    max-width: 280px;
    border-radius: 3px;
    /* overflow: hidden; */
  }

  .inp .label {
    position: absolute;
    top: 15px;
    left: 20px;
    font-size: 20px;
    color: rgba(0, 0, 0, 0.5);
    font-weight: 500;
    transform-origin: 0 0;
    transform: translate3d(0, 0, 0);
    transition: all 0.2s ease;
    pointer-events: none;
    transform: translate3d(0, -27px, 0) scale(0.75);
    background-color: #fff;
  }

  .inp .focus-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background: rgba(0, 0, 0, 0.05); */
    /* z-index: -1; */
    transform: scaleX(0);
    transform-origin: left;
  }

  .inp input {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%;
    border: 0;
    font-family: inherit;
    padding: 10px 12px 12px 22px;
    height: 48px;
    font-size: 16px;
    font-weight: 400;
    /* background: rgba(0, 0, 0, 0.02); */
    border: 1px solid #aeaeae;
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.3);
    color: #000;
    transition: all 0.15s ease;
    /* border-radius: 28px; */
  }

  .inp input:hover {
    /* background: rgba(0, 0, 0, 0.04); */
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.5);
    box-shadow: inset 0 -2px 0 #ffb410;
  }

  .inp input:not(:-moz-placeholder-shown)+.label {
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(0, -22px, 0) scale(0.75);
  }

  .inp input:not(:-ms-input-placeholder)+.label {
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(0, -22px, 0) scale(0.75);
  }

  .inp input:not(:placeholder-shown)+.label {
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(0, -22px, 0) scale(0.75);
  }

  .inp input:focus {
    /* background: rgba(0, 0, 0, 0.05); */
    outline: none;
    box-shadow: inset 0 -2px 0 #ffb410;
  }

  .inp input:focus+.label {
    color: #ffb410;
    transform: translate3d(0, -27px, 0) scale(0.75);
  }

  .inp input:focus+.label+.focus-bg {
    transform: scaleX(1);
    transition: all 0.1s ease;
  }

  .cbx {
    -webkit-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    cursor: pointer;
  }

  .cbx span {
    display: inline-block;
    vertical-align: middle;
    transform: translate3d(0, 0, 0);
  }

  .cbx span:first-child {
    position: relative;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    transform: scale(1);
    vertical-align: middle;
    border: 1px solid #B9B8C3;
    transition: all 0.2s ease;
  }

  .cbx span:first-child svg {
    position: absolute;
    z-index: 1;
    top: 6px;
    left: 4px;
    fill: none;
    stroke: white;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 16px;
    stroke-dashoffset: 16px;
    transition: all 0.3s ease;
    transition-delay: 0.1s;
    transform: translate3d(0, 0, 0);
  }

  .cbx span:first-child:before {
    content: "";
    width: 100%;
    height: 100%;
    background: #506EEC;
    display: block;
    transform: scale(0);
    opacity: 1;
    border-radius: 50%;
    transition-delay: 0.2s;
  }

  .cbx span:last-child {
    margin-left: 8px;
    color: #a9a8a3;
    font-size: 13px;
  }

  /* .cbx span:last-child:after {
        content: "";
        position: absolute;
        top: 10px;
        left: 0;
        height: 1px;
        width: 100%;
        background: #B9B8C3;
        transform-origin: 0 0;
        transform: scaleX(1);
    } */

  .cbx:hover span:first-child {
    border-color: #ffb410;
  }

  .inp-cbx:checked+.cbx span:first-child {
    border-color: #ffb410;
    background: #ffb410;
    animation: check 0.6s ease;
  }

  .inp-cbx:checked+.cbx span:first-child svg {
    stroke-dashoffset: 0;
  }

  .inp-cbx:checked+.cbx span:first-child:before {
    transform: scale(2.2);
    opacity: 0;
    transition: all 0.6s ease;
  }

  .inp-cbx:checked+.cbx span:last-child {
    color: #ffb410;
    transition: all 0.3s ease;
    font-weight: 600;
  }

  .inp-cbx:checked+.cbx span:last-child:after {
    transform: scaleX(0);
    transition: all 0.3s ease;
  }

  @keyframes check {
    50% {
      transform: scale(1.2);
    }
  }


  .a-box {
    display: inline-block;
    width: 100%;
    text-align: center;
    height: 170px;
    margin-top: 30px;
  }

  .img-container {
    /* height: 230px;
        width: 200px;
        overflow: hidden; */
    margin-top: -80px;
    border-radius: 0px 0px 20px 20px;
    display: inline-block;
  }

  .img-container img {
    width: 80px !important;
    height: 80px;
  }



  .text-container {
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    /* padding: 20px 20px 20px 20px; */
    border-radius: 20px;
    background: #fff;
    line-height: 19px;
    font-size: 14px;
  }

  .text-container h3 {
    margin: 20px 0px 10px 0px;
    color: #04bcff;
    font-size: 18px;
  }

  #program {
    border: 2px solid #ffb410;
    color: #ffb410;
    appearance: listbox;
  }

  #grad1 {
    background-color: #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA);
  }

  /*form styles*/
  .msform {
    text-align: center;
    position: relative;
    /* margin-top: 20px; */
  }

  .msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;

    /*stacking fieldsets above each other*/
    position: relative;
  }

  .msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;

    /*stacking fieldsets above each other*/
    position: relative;
  }

  /*Hide all except first fieldset*/
  .msform fieldset:not(:first-of-type) {
    display: none;
  }

  .msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E;
  }





  /*Previous Buttons*/
  .msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    /* border-radius: 0px; */
    cursor: pointer;
    /* padding: 10px 5px;
    margin: 10px 5px; */
  }

  /* .msform .action-button-previous:hover, .msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
} */

  /*Dropdown List Exp Date*/
  select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px;
  }

  select.list-dt:focus {
    border-bottom: 2px solid skyblue;
  }

  /*The background card*/
  .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
  }

  /*FieldSet headings*/
  .fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left;
  }

  /*progressbar*/
  #progressbar {
    /* margin-bottom: 30px; */
    overflow: hidden;
    color: lightgrey;
  }

  #progressbar .active {
    color: #000000;
  }

  #progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 50%;
    float: left;
    position: relative;
  }

  /*Icons in the ProgressBar*/
  #progressbar #account:before {
    font-family: "Font Awesome 5 Free";
    content: "₹";
  }

  #progressbar #personal:before {
    font-family: "Font Awesome 5 Free";
    content: "\f007";
  }

  #progressbar #payment:before {
    font-family: "Font Awesome 5 Free";
    content: "\f007";
  }

  #progressbar #confirm:before {
    font-family: "Font Awesome 5 Free";
    content: "\f00c";
  }

  /*ProgressBar before any progress*/
  #progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 35px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
  }

  /*ProgressBar connectors*/
  #progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1;
  }

  /*Color number of the step and the connector before it*/
  #progressbar li.active:before,
  #progressbar li.active:after {
    background: skyblue;
  }

  /*Imaged Radio Buttons*/
  .radio-group {
    position: relative;
    margin-bottom: 25px;
  }

  .placeholder {
    padding: 1rem .86rem;
    margin: 6px;
  }

  .placeholder::placeholder {
    color: #ffb410 !important;
    opacity: 1;
    /* Firefox */
    font-weight: 700;

  }

  .placeholder:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color: #ffb410;
  }

  .placeholder::-ms-input-placeholder {
    /* Microsoft Edge */
    color: #ffb410;
  }

  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }
  .error{
    color: #434343;
  }
</style>


<div class="container-fluid">
  <div class="row position-relative">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <?php if (!empty($page_items->display_image) && file_exists((CHARITABLE_PROGRAM_BANNER_PATH . $page_items->banner))) { ?>
        <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $page_items->banner; ?>" alt="donate-banner">
      <?php } ?>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-4 mx-auto on-banner ">
      <div class="card pb-0">


        <div class="card-header position-relative tab">
          <p class="text-light "><i class="fa fa-heart text-danger"></i> You can make a big difference to their lives!</p>


          <div class="row">
          </div>

          <ul class="nav nav-tabs position-absolute on-header " id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Donate Today</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Donate Month</a>
            </li>

          </ul>
        </div>
        <div class="card-body">

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

              <form id="donate-meals-form" class="msform" action="donations/donate" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="donation_type" value="charitable_program">
                <input type="hidden" name="table_name" value="payments">
                <input type="hidden" name="slug" value="<?php echo $page_items->page_slug; ?>">
                <input type="hidden" id="festival" name="festival" value="-">
                <input type="hidden" id="seva_name" name="seva_name" value="<?php echo $page_items->title; ?>" >
                <!-- <input class="currency" type="hidden" name="currency" value="INR">
                <input id="citizen" type="hidden" name="citizen" value="INDIAN"> -->
                <!-- progressbar -->
                <!-- <ul id="progressbar">
                                    <li class="active" id="account"><strong>Donate</strong></li>
                                    <li id="payment"><strong>User</strong></li>
                                </ul> -->
                <!-- fieldsets -->
                <p><i class="fa fa-lock text-success"></i> Choose an amount to donate</p>
                <fieldset>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="donate-meals-input btn btn-round btn-twitter text-left w-100 mb-2" value="1000">
                          <b> &#8377; 1,000/- </b>
                        </button>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="donate-meals-input btn btn-round btn-twitter text-left w-100 mb-2" value="2000">
                          <b> &#8377; 2,000/- </b>
                        </button>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="donate-meals-input btn btn-round btn-twitter text-left w-100 mb-2" value="3000">
                          <b> &#8377; 3,000/- </b>
                        </button>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="donate-meals-input btn btn-round btn-twitter text-left w-100 mb-2 btn-active" value="5000">
                          <b>&#8377; 5,000/- </b>
                        </button>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-12 mx-auto text-center">
                        <h6 class="thm-text mt-1"><i class="fa fa-hands"></i> How will my donation help?</h6>
                        <p class="thm-text mt-1 small-text">Ensure 6 out- of- school children are enrolled back in school</p>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <label for="inp" class="inp w-100">
                          <input type="number" id="donate-meals-amount" placeholder="&nbsp;" name="amount" value="">
                          <span class="label">Other Amount (&#8377;)</span>
                          <span class="focus-bg"></span>
                        </label>

                      </div>

                    </div>

                    <div class="row mt-2">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <button type="button" class="btn btn-round  btn-thm w-100 text-white next action-button"><b> &nbsp; &nbsp;DONATE NOW</b></button>
                      </div>

                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-12">
                        <h4 style="color: #ffb410; text-align:center">Your donations are tax exempted </h4>
                        <h4 style="color: #ffb410; text-align:center">under 80G of the Indian Income Tax Act</h4>
                      </div>
                    </div>
                  </div>
                  <!-- <input type="button" name="next" class=" btn-thm w-100 text-white next action-button btn btn-round " value="Next Step"/> -->
                </fieldset>

                <fieldset>
                  <h4 style="color: #5a5a5a; align-items: left">Enter Your Details</h4>
                  <div class="d-flex flex-wrap">
                    <div class="form-group w-50 p-1">
                      <input class="form-control placeholder name" type="text" name="full_name" placeholder="Full Name*" required>
                      <div class="invalid-feedback">Full name field cannot be blank!</div>
                    </div>

                    <div class="form-group w-50 p-1">
                      <input id="mobile_number" class="form-control number  placeholder mobile-number" type="text" name="phone_number" placeholder="Mobile Number*" required>
                      <div class="invalid-feedback">Mobile Number field cannot be blank!</div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap">
                    <!-- <div class="form-group w-50 p-1">
                                            <input class="form-control placeholder dob" type="text" name="dob" placeholder="Date Of Birth*" required onfocus="(this.type='date')">
                                            <div class="invalid-feedback">Date of Birth field cannot be blank!</div>

                                        </div> -->
                    <div class="form-group w-50 p-1">
                      <input class="form-control placeholder email" type="email" name="email" placeholder="Email*" required>
                      <div class="invalid-feedback">Email field cannot be blank!</div>

                    </div>
                    <div class="form-group w-50 p-1">
                      <input class="form-control placeholder pan" type="text" name="pan_number" placeholder="Pan Number*" required>
                      <div class="invalid-feedback">Pan Number field cannot be blank!</div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap">
                    <div class="form-group w-100 p-1">
                      <input class="form-control placeholder address" type="text" name="address" placeholder="Address">
                      <div class="invalid-feedback">Address field cannot be blank!</div>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-6">

                      <button type="button" name="previous" class="btn btn-round  btn-thm-outline w-100 text-white previous action-button-previous" value="Previous"><i class="fa fa-arrow-left"></i> &nbsp; &nbsp; Previous</button>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">

                      <button type="submit" name="submit" class="btn btn-round  btn-thm w-100 text-white " value="donate-meals"><i class="fa fa-check"></i> &nbsp; &nbsp; Confirm</button>
                    </div>
                  </div>

                </fieldset>

              </form>



            </div>




            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              <form id="monthly-meals-form" class="msform" action="donations/donate" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="table_name" value="payments">
                <input class="currency" type="hidden" name="currency" value="INR">
                <input type="hidden" name="citizen" value="INDIAN">
                <input type="hidden" name="sem" value="<?php echo !empty($this->input->get('sem')) ? $this->input->get('sem') : '' ?>">
                <input class="display_amount" type="hidden" name="display_amount" value="">
                <!-- progressbar -->
                <!-- <ul id="progressbar">
                                    <li class="active" id="account"><strong>Donate</strong></li>
                                    <li id="payment"><strong>User</strong></li>
                                </ul> -->
                <!-- fieldsets -->
                <p><i class="fa fa-lock text-success"></i> Choose an amount to donate</p>
                <fieldset>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="monthly-meals-input btn btn-round btn-twitter text-left w-100 mb-3" value="5000">
                          <b>&#8377; 5,000/- </b>
                        </button>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="monthly-meals-input btn btn-round btn-twitter text-left w-100 mb-3 btn-active" value="10000">
                          <b>&#8377; 10,000/- </b>
                        </button>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="monthly-meals-input btn btn-round btn-twitter text-left w-100 mb-3 " value="25000">
                          <b>&#8377; 25,000/- </b>
                        </button>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <button type="button" class="monthly-meals-input btn btn-round btn-twitter text-left w-100 mb-3" value="50000">
                          <b>&#8377; 50,000/- </b>
                        </button>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-10 mx-auto text-center">
                        <h6 class="thm-text mt-3"><i class="fa fa-hands"></i> How will my donation help?</h6>
                        <p class="thm-text mt-3 small-text">Ensure 6 out- of- school children are enrolled back in school</p>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <label for="inp" class="inp w-100">
                          <input type="number" id="monthly-meals-amount" placeholder="&nbsp;" name="amount" value="">

                          <span class="label">Other Amount (&#8377;)</span>
                          <span class="focus-bg"></span>
                        </label>


                      </div>

                    </div>

                    <div class="row mt-2">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <button type="button" class="btn btn-round  btn-thm w-100 text-white next action-button"><b> &nbsp; &nbsp;DONATE NOW</b></button>
                      </div>

                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-12">
                        <h4 style="color: #ffb410; text-align:center">Your donations are tax exempted </h4>
                        <h4 style="color: #ffb410; text-align:center">under 80G of the Indian Income Tax Act</h4>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset>
                  <h4 style="color: #5a5a5a; align-items: left">Enter Your Details</h4>
                  <div class="d-flex flex-wrap">
                    <div class="form-group w-50 p-1">
                      <input class="form-control placeholder name" type="text" name="name" placeholder="Full Name*" required>
                      <div class="invalid-feedback">Full name field cannot be blank!</div>
                    </div>

                    <div class="form-group w-50 p-1">
                      <input id="mobile_number" class="form-control number  placeholder mobile_number" type="text" name="mobile_number" placeholder="Mobile Number*" required>
                      <div class="invalid-feedback">Mobile Number field cannot be blank!</div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap">
                    <!-- <div class="form-group w-50 p-1">
                                            <input class="form-control placeholder dob" type="text" name="dob" placeholder="Date Of Birth*" required onfocus="(this.type='date')">
                                            <div class="invalid-feedback">DOB field cannot be blank!</div>

                                        </div> -->
                    <div class="form-group w-50 p-1">
                      <input class="form-control placeholder email" type="email" name="email" placeholder="Email*" required>
                      <div class="invalid-feedback">Email field cannot be blank!</div>

                    </div>
                    <div class="form-group w-50 p-1">
                      <input class="form-control placeholder pan" type="text" name="pan" placeholder="Pan Number*" required>
                      <div class="invalid-feedback">Pan Number field cannot be blank!</div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap">
                    <div class="form-group w-100 p-1">
                      <input class="form-control placeholder address" type="text" name="address" placeholder="Address">
                      <div class="invalid-feedback">Address field cannot be blank!</div>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-6">

                      <button type="button" name="previous" class="btn btn-round  btn-thm-outline w-100 text-white previous action-button-previous" value="Previous"><i class="fa fa-arrow-left"></i> &nbsp; &nbsp; Previous</button>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">

                      <button type="submit" name="submit" class="btn btn-round  btn-thm w-100 text-white " value="monthly-meals"><i class="fa fa-check"></i> &nbsp; &nbsp; Confirm</button>
                    </div>
                  </div>

                </fieldset>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="blog-details__main">

          <div class="blog-details__content">

            <?php echo $page_items->left_description; ?>
          </div><!-- /.blog-details__content -->

        </div><!-- /.blog-details__main -->



      </div>

    </div>
  </div>
</div>

<button id="rzp-button1" class="d-none"></button>
<div id="failed-form"></div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>




<script>
  $(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function() {
      if ($(this).parent().parent().prev().find($('[name="amount"]')).val() == '') {
        alert('Please enter donation amount to continue');
      } else {

        current_fs = $(this).parent().parent().parent().parent();
        next_fs = $(this).parent().parent().parent().parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
          opacity: 0
        }, {
          step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
              'display': 'none',
              'position': 'relative'
            });
            next_fs.css({
              'opacity': opacity
            });
          },
          duration: 600
        });
      }
    });

    $(".previous").click(function() {

      current_fs = $(this).parent().parent().parent();
      previous_fs = $(this).parent().parent().parent().prev();

      //Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();

      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0
      }, {
        step: function(now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          previous_fs.css({
            'opacity': opacity
          });
        },
        duration: 600
      });
    });

    $('.radio-group .radio').click(function() {
      $(this).parent().find('.radio').removeClass('selected');
      $(this).addClass('selected');
    });

    $(".submit").click(function() {
      return false;
    })

  });


  function checkOffset() {
    // alert('sas')
    if ($('.on-banner').offset().top + $('.on-banner').height() >=
      $('.footer-area').offset().top - 10)
      $('.on-banner').css('position', 'absolute');
     
    if ($(document).scrollTop() + window.innerHeight < $('.footer-area').offset().top)
      $('.on-banner').css('position','fixed'); // restore when you scroll up
      // restore when you scroll up
    //   $('.on-banner').css('top','100px'); // restore when you scroll up
    // $('.on-banner').text($(document).scrollTop() + window.innerHeight);
  }
  $(document).scroll(function() {
    var width = window.innerWidth;
    if(width > 990){
    checkOffset();
    }
  });
</script>