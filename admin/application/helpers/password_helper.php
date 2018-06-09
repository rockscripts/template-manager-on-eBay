<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('hash_password')) {
    /**
     *
     * hash_password: obscure password with specially designed salt - site_key combo in sha512
     *
     * @param string $password the password to be validated
     * @param string $nonce the nonce that is unique to this member
     * @return string
     *
     */
    function hash_password($password, $nonce) {
        return hash_hmac('sha512', $password . $nonce, SITE_KEY);
    }
}

/* End of file password_helper.php */
/* Location: ./application/helpers/password_helper.php */