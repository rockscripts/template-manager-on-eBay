/* ######################################### Start jQuery ########################################## */

$(function(){


    // http://stackoverflow.com/questions/7131909/facebook-callback-appends-to-return-url

    if (window.location.hash == '#_=_') {

        window.location.hash = ''; // for older browsers, leaves a # behind

        history.pushState('', document.title, window.location.pathname); // nice and clean

        e.preventDefault(); // no page reload

    }



    $.ajaxSetup ({

        cache: false

    });



    /* tooltips */

    $('.tooltip_target').tooltip();



    /* ---------- messages: error, success

     ------------------------------------------------------------------------------------------------ */

    var message_cleanup = function() {

        $("div#error").removeClass('alert alert-error');

        $("div#error").html("");

        $("div#pwd_error").removeClass('alert alert-error');

        $("div#pwd_error").html("");

        $("div#success").removeClass('alert alert-success');

        $("div#success").html("");

    };



    var error_box = function(error) {

        var $error = $("div#error");

        $error.addClass('alert alert-error');

        $error.hide();

        $error.append("<h4>Please verify the following:</h4>" + error);

        $error.fadeIn(200);

        $('.loading').hide();

        $('html, body').animate({scrollTop:0}, 'slow');

    };



    var pwd_error_box = function(error) {

        var $error = $("div#pwd_error");

        $error.addClass('alert alert-error');

        $error.hide();

        $error.append("<h4>Password error:</h4>" + error);

        $error.fadeIn(200);

        $('.loading').hide();

    };



    /* ---------- login field validation

    ------------------------------------------------------------------------------------------------ */

    $("#login_submit").click(function(evt){

        $('.loading').show();

        message_cleanup();



        var error = "";

        if ($("#login_username").val().length == 0){

            error += "<p>" + LANG.fill_out_username + "</p>";

        }

        if ($("#login_password").val().length == 0){

            error += "<p>" + LANG.fill_out_password + "</p>";

        }



        if (error != "") {

            error_box(error);

            evt.preventDefault();

        }

    });



    /* regular or oauth switch */

    $("#regular_login").click(function(){

        message_cleanup();

        $("#oauth_container").hide();

        $(".regular_form").fadeIn();

    });

    $("#oauth_login").click(function(){

        message_cleanup();

        $("#oauth_container").fadeIn();

        $(".regular_form").hide();

    });



    /* ---------- Membership validation

    ------------------------------------------------------------------------------------------------ */

    var regex_encode = /[\*\(\)!%\/]+/; // escape characters not escaped in encodeURIComponent() AND NOT working in PHP rawurldecode().

    var regex_username = /^[a-zA-Z0-9_-]+$/; // username verification



    // when leaving the email field, check for validity and uniqueness

    $('#reg_email').blur(function() {

        var email = $(this).val();



        if(email.length > 0) {



            var email_valid = $("#email_valid");

            var email_taken = $("#email_taken");



            if (!regex_encode.test(email)) {



                email_valid.addClass("checking");

                email_taken.addClass("checking");

                email_valid.text(LANG.checking_validity);

                email_taken.text(LANG.checking_availability);



                $.getJSON(CI.base_url + 'membership/ajax_membership/ajax_is_valid_email/' + $.trim(encodeURIComponent(email)), function(data) {

                    if (data != null) {

                        email_valid.text(LANG.email_is_valid);

                        $("#email_valid").addClass("check_is_ok");

                        $.getJSON(CI.base_url + 'membership/ajax_membership/ajax_is_existing_unique_field/' + $.trim(encodeURIComponent(email)) + '/user/email', function(data) {

                            if (data == null) {

                                email_taken.text(LANG.email_is_taken);

                                email_taken.addClass("check_is_nok");

                            }else{

                                email_taken.text(LANG.email_is_available);

                                email_taken.addClass("check_is_ok");

                            }

                        });

                    }else{

                        email_valid.text(LANG.is_valid_email);

                        email_valid.addClass("check_is_nok");

                        email_taken.removeClass("checking");

                        email_taken.text("");

                    }

                });



            }else{

                email_valid.text(LANG.is_valid_email);

                email_valid.addClass("check_is_nok");

                email_taken.text("");

            }

        }

     });



    // when leaving the reg_username field, check for uniqueness

    $('#reg_username').blur(function() {



        var username = $(this).val();



        if (username.length > 0) {



            var username_taken  = $("#username_taken");

            var username_valid  = $("#username_valid");

            var username_length = $("#username_length");



            if (!regex_encode.test(username)) {

                username_taken.text(LANG.checking_availability);



                if(regex_username.test(username)) {



                    username_valid.text(LANG.username_is_valid);

                    username_valid.addClass("check_is_ok");



                    $.getJSON(CI.base_url + 'membership/ajax_membership/ajax_is_existing_unique_field/' + $.trim(encodeURIComponent(username)) + '/user/username', function(data) {

                        if (data == null) {

                            username_taken.text(LANG.username_exists);

                            username_taken.addClass("check_is_nok");

                        }else{

                            username_taken.text(LANG.username_available);

                            username_taken.addClass("check_is_ok");

                            if (username.length < 6) {

                                username_length.text(LANG.username_minlength);

                                username_length.addClass("check_is_nok");

                            }else if (username.length > 16) {

                                username_length.text(LANG.username_maxlength);

                                username_length.addClass("check_is_nok");

                            }

                        }

                    });

                }else{

                    username_valid.text(LANG.is_valid_username);

                    username_valid.addClass("check_is_nok");

                    username_taken.text("");

                }

            }else{

                username_valid.text(LANG.is_valid_username);

                username_valid.addClass("check_is_nok");

                username_taken.text("");

            }

        }

    });



    // clear field messages when focusing

    $("#reg_email, #profile_email").focus(function() {

        $("#email_taken").text("");

        $("#email_valid").text("");

        $("#email_taken, #email_valid").removeClass("check_is_ok check_is_nok checking");

    });

    $("#reg_username").focus(function() {

        $("#username_taken").text("");

        $("#username_valid").text("");

        $("#username_length").text("");

        $("#username_taken, #username_valid, #username_length").removeClass("check_is_ok check_is_nok checking");

    });



    // membership field validation

    $("#membership_submit").click(function(evt){

        $('.loading').show();

        message_cleanup();



        var error = "";

        var reg_first_name = $("#reg_first_name");

        var reg_last_name  = $("#reg_last_name");

        var email          = $("#reg_email");

        var reg_username   = $("#reg_username");

        var reg_password   = $("#reg_password");



        if (reg_first_name.val().length == 0) {

            error += "<p>" + LANG.fill_out_first_name + "</p>";

        }else if (reg_first_name.val().length < 2) {

            error += "<p>" + LANG.first_name_minlength + "</p>";

        }else if (reg_first_name.val().length > 40) {

            error += "<p>" + LANG.first_name_maxlength + "</p>";

        }



        if (reg_last_name.val().length == 0) {

            error += "<p>" + LANG.fill_out_last_name + "</p>";

        }else if (reg_last_name.val().length < 2) {

            error += "<p>" + LANG.last_name_minlength + "</p>";

        }else if (reg_last_name.val().length > 60) {

            error += "<p>" + LANG.last_name_maxlength + "</p>";

        }



        if (email.val().length == 0) {

            error += "<p>" + LANG.fill_out_email + "</p>";

        }else if (email.val().length > 255) {

            error += "<p>" + LANG.email_maxlength + "</p>";

        }



        if (reg_username.val().length == 0) {

            error += "<p>" + LANG.fill_out_username + "</p>";

        }else if (reg_username.val().length < 6) {

            error += "<p>" + LANG.username_minlength + "</p>";

        }else if (reg_username.val().length > 16) {

            error += "<p>" + LANG.username_maxlength + "</p>";

        }else if(!regex_username.test($('#reg_username').val())) {

            error += "<p>" + LANG.is_valid_username + "</p>";

        }



        if (reg_password.val().length == 0) {

            error += "<p>" + LANG.fill_out_password + "</p>";

        }else if (reg_password.val().length < 9) {

            error += "<p>" + LANG.password_minlength + "</p>";

        }else if (reg_password.val().length > 64) {

            error += "<p>" + LANG.password_maxlength + "</p>";

        }else if (reg_password.val() != $("#password_confirm").val()) {

            error += "<p>" + LANG.password_match + "</p>";

        }

/*

        if ($("#recaptcha_response_field").val().length == 0) {

            error += "<p>" + LANG.recaptcha_required + "</p>";

        }
*/


        if (error != "") {

            error_box(error);

            evt.preventDefault();

        }

    });



    // other membership related validation

    $(".check_email_empty").click(function(evt){

        $('.loading').show();

        message_cleanup();



        var error = "";

        if ($("#email").val().length == 0) {

            error += "<p>" + LANG.email_empty + "</p>";

        }

        if ($("#recaptcha_response_field").val().length == 0) {

            error += "<p>" + LANG.recaptcha_required + "</p>";

        }

        if (error != "") {

            error_box(error);

            evt.preventDefault();

        }

    });



    /* ---------- Profile validation

    ------------------------------------------------------------------------------------------------ */

    // profile validation: update account part

    $("#profile_submit").click(function(evt){

        $('.loading').show();

        message_cleanup();



        var error = "";

        if ($("#profile_first_name").val().length == 0) {

            error += "<p>" + LANG.fill_out_first_name + "</p>";

        }

        if ($("#profile_last_name").val().length == 0) {

            error += "<p>" + LANG.fill_out_last_name + "</p>";

        }

        if ($("#profile_password").val().length == 0) {

            error += "<p>" + LANG.password_profile + "</p>";

        }

        if (error != "") {

            error_box(error);

            evt.preventDefault();

        }

    });



    // profile validation: update password

    $("#profile_pwd_submit").click(function(evt){

        $('.loading').show();

        message_cleanup();



        var error = "";

        var profile_new_password = $("#profile_new_password");

        var new_password_again   = $("#new_password_again");



        if (profile_new_password.val().length < 9) {

            error += "<p>" + LANG.password_new + "</p>";

        }else if (profile_new_password.val().length > 64) {

            error += "<p>" + LANG.password_new_max + "</p>";

        }else if (new_password_again.val().length == 0) {

            error += "<p>" + LANG.password_repeat + "</p>";

        }else if (new_password_again.val() != profile_new_password.val()) {

            error += "<p>" + LANG.password_no_match + "</p>";

        }

        if (error != "") {

            pwd_error_box(error);

            evt.preventDefault();

        }

    });



    /* ---------- OAuth Profile validation

     ------------------------------------------------------------------------------------------------ */

    // profile validation: update account part

    $("#oauth_profile_submit").click(function(evt){

        $('.loading').show();

        message_cleanup();



        var error = "";

        if ($("#first_name").val().length == 0) {

            error += "<p>" + LANG.fill_out_first_name + "</p>";

        }

        if ($("#last_name").val().length == 0) {

            error += "<p>" + LANG.fill_out_last_name + "</p>";

        }

        if ($("#email").val().length == 0) {

            error += "<p>" + LANG.fill_out_email + "</p>";

        }

        if (error != "") {

            error_box(error);

            evt.preventDefault();

        }

    });



    /* ---------- Adminpanel validation

    ------------------------------------------------------------------------------------------------ */



    // list members: search membership validation

    $("#member_search_submit").click(function(evt){

        $('.loading').show();

        message_cleanup();



        var error = "";

        if (($("#username").val().length == 0)

            && ($("#first_name").val().length == 0)

            && ($("#last_name").val().length == 0)

            && ($("#email").val().length == 0)

            )

        {

            error += "<p>" + LANG.search_data + "</p>";

        }

        if (error != "") {

            error_box(error);

            evt.preventDefault();

        }

    });



    /* ---------- Adminpanel bootbox (alerts when clicking buttons on list members page)

     ------------------------------------------------------------------------------------------------ */



    var myBootbox = function($target) {

        $($target).click(function() {

            $("input[type=submit]", $(this).parents("form")).removeAttr("clicked");

            $(this).attr("clicked", "true");

        });

    };



    myBootbox("form#mass_action_form input[type=submit]");



    $("form#mass_action_form").on("click", ".bootbox", function(evt) {

        var $target = $("form#mass_action_form input[type=submit][clicked=true]").attr('id');



        evt.preventDefault();

        bootbox.confirm("Warning: <br>" + $(this).attr("title"), function(confirmed) {

            if (confirmed) {

                $("input#mass_action").val($target);

                $("#mass_action_form").submit();

            }

        });

    });



    $(".confirm_delete").click(function(evt){

        evt.preventDefault();

        return (confirm('Are you sure to delete?')) ? true : false;

    });



    /* ---------- other

    ------------------------------------------------------------------------------------------------ */



    // easy access method for message_cleanup: add to submit buttons to remove messages if any are present

    $(".message_cleanup").click(function(){

        message_cleanup();

    });



    // select all functionality for manipulating multiple items at one go

    $(".select_checkboxes").change(function(){

        var c = this.checked;

        $(':checkbox').prop('checked',c);

    });



});

// ReCaptcha fix for some chrome/safari versions: bug = iframe creates an unintended white space below footer

// use this in case you experience issues with e.g. bottom footers

// no idea whether this bug has ever been fixed, I doubt it!

/*$(window).load(function() {

    var x = $('iframe').get(-1);

    $(x).remove();

});*/
$( document ).ready(function() {
$("#regular_login").click();
});