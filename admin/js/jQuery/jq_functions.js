$(function(){
/* ---------- login field validation
------------------------------------------------------------------------------------------------ */
    $("#login_submit").click(function(){
        if ($("#login_username").val().length == 0){
            $("#errorapp").html(LANG.fill_out_username);
            $("#errorapp").addClass('error_box');
            return false;
        }
        if ($("#login_password").val().length == 0){
            $("#errorapp").html(LANG.fill_out_password);
            $("#errorapp").addClass('error_box');
            return false;
        }
    });

/* ---------- Membership validation
------------------------------------------------------------------------------------------------ */
    var regex_encode = /[\*\(\)!%\/]+/; // escape characters not escaped in encodeURIComponent() AND NOT working in PHP rawurldecode().
    var regex_username = /^[a-zA-Z0-9_-]+$/; // username verification
    
    // when leaving the email field, check for validity and uniqueness
    $('#reg_email, #profile_email').blur(function() {
        var email = $(this).val();
        if(email.length > 0) {
            if (!regex_encode.test(email)) {
                $("#email_taken, #email_valid").addClass("checking");
                $("#email_valid").text(LANG.checking_validity);
                $("#email_taken").text(LANG.checking_availability);
                $.getJSON(CI.base_url + 'membership/ajax_membership/ajax_is_valid_email/' + $.trim(encodeURIComponent(email)), function(data) {
                    if (data != null) {
                        $("#email_valid").text(LANG.email_is_valid);
                        $("#email_valid").addClass("check_is_ok");
                        $.getJSON(CI.base_url + 'membership/ajax_membership/ajax_is_existing_unique_field/' + $.trim(encodeURIComponent(email)) + '/user/email', function(data) {
                            if (data == null) {
                                $("#email_taken").text(LANG.email_is_taken);
                                $("#email_taken").addClass("check_is_nok");
                            }else{
                                $("#email_taken").text(LANG.email_is_available);
                                $("#email_taken").addClass("check_is_ok");
                            }
                        });
                    }else{
                        $("#email_valid").text(LANG.is_valid_email);
                        $("#email_valid").addClass("check_is_nok");
                        $("#email_taken").removeClass("checking");
                        $("#email_taken").text("");
                    }
                });
            }else{
                $("#email_valid").text(LANG.is_valid_email);
                $("#email_valid").addClass("check_is_nok");
                $("#email_taken").text("");
            }
        }
     });

    // when leaving the reg_username field, check for uniqueness
    $('#reg_username').blur(function() {
        var username = $(this).val();
        if (username.length > 0) {
            if (!regex_encode.test(username)) {
                $("#username_taken").text(LANG.checking_availability);
                if(regex_username.test(username)) {
                    $("#username_valid").text(LANG.username_is_valid);
                    $("#username_valid").addClass("check_is_ok");
                    $.getJSON(CI.base_url + 'membership/ajax_membership/ajax_is_existing_unique_field/' + $.trim(encodeURIComponent(username)) + '/user/username', function(data) {
                        if (data == null) {
                            $("#username_taken").text(LANG.username_exists);
                            $("#username_taken").addClass("check_is_nok");
                        }else{
                            $("#username_taken").text(LANG.username_available);
                            $("#username_taken").addClass("check_is_ok");
                            if (username.length < 6) {
                                $("#username_length").text(LANG.username_minlength);
                                $("#username_length").addClass("check_is_nok");
                            }else if (username.length > 16) {
                                $("#username_length").text(LANG.username_maxlength);
                                $("#username_length").addClass("check_is_nok");
                            }
                        }
                    });
                }else{
                    $("#username_valid").text(LANG.is_valid_username);
                    $("#username_valid").addClass("check_is_nok");
                    $("#username_taken").text("");
                }
            }else{
                $("#username_valid").text(LANG.is_valid_username);
                $("#username_valid").addClass("check_is_nok");
                $("#username_taken").text("");
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
    $("#membership_submit").click(function(){
        if ($("#reg_first_name").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_first_name);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_first_name").val().length < 2) {
            $("#errorapp").html(LANG.first_name_minlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_first_name").val().length > 40) {
            $("#errorapp").html(LANG.first_name_maxlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_last_name").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_last_name);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_last_name").val().length < 2) {
            $("#errorapp").html(LANG.last_name_minlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_last_name").val().length > 60) {
            $("#errorapp").html(LANG.last_name_maxlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_email").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_email);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_email").val().length > 255) {
            $("#errorapp").html(LANG.email_maxlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_username").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_username);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_username").val().length < 6) {
            $("#errorapp").html(LANG.username_minlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_username").val().length > 16) {
            $("#errorapp").html(LANG.username_maxlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if(!regex_username.test($('#reg_username').val())) {
            $("#errorapp").html(LANG.is_valid_username);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_password").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_password);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_password").val().length < 9) {
            $("#errorapp").html(LANG.password_minlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_password").val().length > 64) {
            $("#errorapp").html(LANG.password_maxlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#reg_password").val() != $("#password_confirm").val()) {
            $("#errorapp").html(LANG.password_match);
            $("#errorapp").addClass('error_box');
            return false;
        }
        return true;
    });

    // other membership related validation
    $("#resend_activation_submit, #forgot_password_submit, #forgot_username_submit").click(function(){
        if ($("#email").val().length == 0) {
            $("#errorapp").html(LANG.email_empty);
            $("#errorapp").addClass('error_box');
            return false;
        }
    });

/* ---------- Profile validation
------------------------------------------------------------------------------------------------ */
    // profile validation: update account part
    $("#profile_submit").click(function(){
        if ($("#profile_first_name").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_first_name);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#profile_last_name").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_last_name);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#profile_password").val().length == 0) {
            $("#errorapp").html(LANG.password_profile);
            $("#errorapp").addClass('error_box');
            return false;
        }
        return true;
    });

    // profile validation: update password
    $("#profile_pwd_submit").click(function(){
        if ($("#profile_new_password").val().length < 9) {
            $("#pwd_error").html(LANG.password_new);
            $("#pwd_error").addClass('error_box');
            return false;
        }else if ($("#profile_new_password").val().length > 64) {
            $("#pwd_error").html(LANG.password_new_max);
            $("#pwd_error").addClass('error_box');
            return false;
        }else if ($("#new_password_again").val().length == 0) {
            $("#pwd_error").html(LANG.password_repeat);
            $("#pwd_error").addClass('error_box');
            return false;
        }else if ($("#new_password_again").val() != $("#profile_new_password").val()) {
            $("#pwd_error").html(LANG.password_no_match);
            $("#pwd_error").addClass('error_box');
            return false;
        }
        return true;
    });

/* ---------- Adminpanel validation
------------------------------------------------------------------------------------------------ */
    // edit password validation
    $("#edit_password_submit").click(function(){
        if ($("#password").val().length == 0) {
            $("#errorapp").html(LANG.fill_out_password);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#password").val().length < 9) {
            $("#errorapp").html(LANG.password_minlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#password").val().length > 64) {
            $("#errorapp").html(LANG.password_maxlength);
            $("#errorapp").addClass('error_box');
            return false;
        }else if ($("#password").val() != $("#password_confirm").val()) {
            $("#errorapp").html(LANG.password_no_match);
            $("#errorapp").addClass('error_box');
            return false;
        }
    });

    // search membership validation
    $("#member_search_submit").click(function(){
        if (($("#username").val().length == 0)
        && ($("#first_name").val().length == 0)
        && ($("#last_name").val().length == 0)
        && ($("#email").val().length == 0)
        )
        {
            $("#errorapp").html(LANG.search_data);
            $("#errorapp").addClass('error_box');
            return false;
        }
    });

    // confirm member deletion
    $(".m_delete").click(function(){
        return (confirm('Are you sure to delete?')) ? true : false;
    });

});
// recaptcha fix for chrome/safari - iframe creates a white space below footer
$(window).load(function() {
    var x = $('iframe').get(-1);
    $(x).remove();
});