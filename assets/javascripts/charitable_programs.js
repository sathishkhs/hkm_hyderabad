$(function() {
    $('#donate-meals-amount, #monthly-meals-amount, #adopt-initiative-amount').on('change',function(){
        get_amount($(this).val())
    })
    $('#donate-meals-amount, #monthly-meals-amount, #adopt-initiative-amount').on('keydown',function(){

        $('.custom-text-show').html('Your contribution will feed people who otherwise struggle to secure food for themselves; helping us in our mission to make Mumbai a hunger-free city.')
    })
    $('.adopt-initiative-input, .monthly-meals-input, .donate-meals-input').click(function(){
        $('.custom-text-show').html('')
       get_amount($(this).val())
    })

    $('#citizenradio1').on('click',function(){
        $('#citizenhideblock').html('');
        $('#payable-hidden-block').html('');
        $('#citizen').val('INDIAN');
        $('.currency').val('INR');
        
    })
    $('#citizenradio2').on('click',function(){
       var html = '<label class="form-check-label text-white">Select Currency</label>';
        html += '<select id="from_currency" class="form-control" onchange="set_currency(this.value)" style="height:40px; appearance: menulist !important">';
        html += '<option datasymbol="$" value="USD" selected>USD</option>';
        html += '<option datasymbol="€" value="EUR">EUR</option>';
        html += '<option datasymbol="£" value="GBP">GBP</option>';
        html += '<option datasymbol="A$" value="AUD">AUD</option>';
        html += '<option datasymbol="د.إ" value="AED">AED</option>';
        html += '<option datasymbol="¥" value="JPY">JPY</option>';
        html += '<option datasymbol="C$" value="CAD">CAD</option>';
        html += '</select>';
        // html += '<label class="form-check-label text-white">Payble amount in your currency <span id="symbolshow"></span></label>';
        // html += '<input id="payble_amount_input" type="text" readonly class="form-control" />';

        $('#citizenhideblock').html(html);

        $('.payable-hidden-block').html('<div class="payable-amount-text" style="text-align:left;"></div>');
        $('#citizen').val('FORIEGN');
        set_currency('USD')
    })
    // 128842961421
    $('#program').on('change', function(){
        var program = $(this).val();
        if('paustik-ahara' == program){
            $('#program-text').html('Providing nutritious lunch meals to slum children studying under School on wheels program ');
        }else if('swasthya-ahara' == program){
            $('#program-text').html('Feeding hot nutritious lunch meals to relatives of the patients hospitalized in public hospital');
        }else if('bala-siksha-ahara' == program){
            $('#program-text').html('Providing healthy & nutritious breakfast meal to children studying in BMC Schools');
        }
    })

    $('.donate-meals-input').on('click',function(){
        $('.donate-meals-input.btn-active').removeClass('btn-active');
        $(this).addClass('btn-active');
        var value = $(this).val();
        $('#donate-meals-amount').val(value)
    });

    $('.monthly-meals-input').on('click',function(){
        $('.monthly-meals-input.btn-active').removeClass('btn-active');
        $(this).addClass('btn-active');
        var value = $(this).val();
        $('#monthly-meals-amount').val(value)
    })
    $('.adopt-initiative-input').on('click',function(){
        $('.adopt-initiative-input.btn-active').removeClass('btn-active');
        $(this).addClass('btn-active');
        var value = $(this).val();
        $('#adopt-initiative-amount').val(value)
    })

    $('#donate-meals-form').validate({
        rules: {
            full_name: {
                required: true
            },
            // dob: {
            //     required: true
            // },
            email: {
                required: true,
                email: true
            },
            phone_number: {
                required: true,
                minlength: 10,
                maxlength: 12,
                number: true
            },
            amount: {
                required: true,
                number: true
            },
            pan_number: {
                required: true
            }
    },
    messages: {
        full_name: "Please enter your Name",
        phone_number: {
            required: "Please provide a mobile_number",
            minlength: "Your mobile number must be at least 10 characters long",
            maxlength: "Your mobile number must not be more than 12 characters length",
            number: "Invalid characters are not allowed. Please Enter valid number"
        },
        email: "Please enter a valid email address",
        pan_number: "please enter pan number",
        amount: "Please enter amount",
       
    },

    submitHandler: function(form){
       
        if($('#donate-meals-amount').val() < 500 || $('#donate-meals-amount').val() == ''){
            alert('minimum donation value is Rs. 500');
        }else{
            // form.submit();
            $.ajax ({ 
                type : 'POST', 
                url : 'festivals/create_order', 
                data : $('#donate-meals-form').serialize (),
                complete : function(data){
                    console.log(data)
              
                  var options = {
                          "key": data.responseJSON.keyId, // Enter the Key ID generated from the Dashboard
                          "amount": data.responseJSON.amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                          "currency": data.responseJSON.currency,
                          "name": data.responseJSON.company_name,
                          "description": data.responseJSON.company_description,
                          "image": data.responseJSON.settings.LOGO_IMAGE,
                          "order_id": data.responseJSON.razorpay_order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                          "callback_url": data.responseJSON.callback_url,
                          // "redirect": true,
                          "retry" : {
                            'enabled':false,
                          },
                          "prefill": {
                              "name": data.responseJSON.full_name,
                              "email": data.responseJSON.email,
                              "contact": data.responseJSON.phone_number,
                              "pan_number": data.responseJSON.pan_number,
                              "address": data.responseJSON.address,
                          },
                          "notes": {
                              "address": data.responseJSON.address
                          },
                          "theme": {
                              "color": "#3399cc"
                          }
                      };
                      var rzp1 = new Razorpay(options);
                      rzp1.on('payment.failed', function (response){
                          $('#failed-form').html('<form id="failed_form_submit" action="festivals/failed/'+data.responseJSON.insert_id+'" method="post" style="display:none"><input type="hidden" name="error_code" value="'+response.error.code+'"><input type="hidden" name="error_description" value="'+response.error.description+'"><input type="hidden" name="error_source" value="'+response.error.source+'"><input type="hidden" name="error_reason" value="'+response.error.reason+'"><input type="hidden" name="razorpay_order_id" value="'+response.error.metadata.order_id+'"><input type="hidden" name="razorpay_payment_id" value="'+response.error.metadata.payment_id+'"></form>');
                          $('#failed_form_submit').submit();
                      });
                     
                      $('#rzp-button1').click(); 
                      // $('#rzp-button1').on('click',function(e){
                       
                        rzp1.open();
                        e.preventDefault();
                      // });
                      // document.getElementById('rzp-button1').onclick = function(e){
                      // }
                }
              })
        }
    }
});
    $('#monthly-meals-form').validate({
        rules: {
            name: {
                required: true
            },
            dob: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            mobile_number: {
                required: true,
                minlength: 10,
                maxlength: 12,
                number: true
            },
            amount: {
                required: true,
                number: true
            },
            pan: {
                required: true
            }
    },
    messages: {
        name: "Please enter your Name",
        mobile_number: {
            required: "Please provide a mobile_number",
            minlength: "Your mobile number must be at least 10 characters long",
            maxlength: "Your mobile number must not be more than 12 characters length",
            number: "Invalid characters are not allowed. Please Enter valid number"
        },
        email: "Please enter a valid email address",
        pan: "please enter pan number",
        amount: "Please enter amount",
       
    },
    submitHandler: function(form){
       
        if($('#monthly-meals-amount').val() < 1000 || $('#monthly-meals-amount').val() == ''){
            alert('minimum donation value is Rs. 1000');
        }else{
            form.submit();
        }
    }
    });
   

})


function set_currency(val){
    $('.currency').val(val)
    var key = $("#from_currency option:selected").attr('datasymbol');
  $('.symbolshow').html('( in '+key+' )')
  $('#payble_amount_input').val('');
    // get_amount($('#amount').val())
}

function get_amount(amount) {

    var currency = $('.currency').val();
    $.ajax({
        url: "donations/currency_convert/" + amount + "/" + currency,
      
        success: function(data) {
            // alert(data)
            $('.payable-amount-text').html('<label style="font-weight: 600;">Payable amount <span class="symbolshow"></span> : '+data+' </label>');
            set_currency(currency);
            $('#payble_amount_input').val(data);
            $('.display_amount').val(data)
        }
        
    })
   
}