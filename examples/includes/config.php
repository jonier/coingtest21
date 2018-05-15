<?php

const CLIENT_ID     = '868cba4474aa2bab4409289f70b8555d16729a8a6d6d3a43bda64f12bf9f7573';
const CLIENT_SECRET = 'a17dbe53b6e9eda56e4ba6873a6daf1a2d36c286be2a926bed7fa4bd3c33dfc1';
const REDIRECT_URL  = 'https://www.fanpicks.com';
const SCOPE         = 'user_read invoice_read_write';
//const SCOPE         = 'account_read user_read user_read_write user_password_write merchant_read merchant_read_write invoice_read invoice_write invoice_read_write oauth_read oauth_read_write';

//pick a token, any token
$TOKENS = array(
  'basic' => 'e7471472090fbc4507b6418b361e8290b1630666900e3f6ac8d5ed19819a2779',
  'dashboard' => 'e7471472090fbc4507b6418b361e8290b1630666900e3f6ac8d5ed19819a2779',
  'full_access' => 'e7471472090fbc4507b6418b361e8290b1630666900e3f6ac8d5ed19819a2779',
);


//a user id and other constants to use for testing/examples
const USER_ID         = '5f04bf88-1f23-4093-b1f6-8771c61f9028';
const USER_EMAIL      = 'jonierm@gmail.com';
const PW_RESET_TOKEN  = '';
const CONFIRM_TOKEN   = '';

//merchant constants for testing
const MERCHANT_ID = '07c68b85-5b65-44df-89e3-4db03782e273';
const CONVERSION_ID = false;
const INVOICE_ID = false; //'9451585e-eebd-445d-9212-b1be638cee36';