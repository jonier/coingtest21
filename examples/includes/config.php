<?php

const CLIENT_ID     = '3ba01d9d17fb7e20d54694607037f5577adcb7f0536021709a98b3ab2890b3f9';
const CLIENT_SECRET = 'f75e4f6ac5258eba48cb447c432608104f54de5f5ddb1f52facbfd945c796278';
const REDIRECT_URL  = 'https://www.fanpicks.com';
const SCOPE         = 'invoice_read_write';
//const SCOPE         = 'account_read user_read user_read_write user_password_write merchant_read merchant_read_write invoice_read invoice_write invoice_read_write oauth_read oauth_read_write';

//pick a token, any token
$TOKENS = array(
  'basic' => 'b57710e6b343046e99ce77ce527f8463e8d10643bdb7f6c54cbe3eabf24511d1',
  'dashboard' => '',
  'full_access' => '',
);


//a user id and other constants to use for testing/examples
const USER_ID         = '5f04bf88-1f23-4093-b1f6-8771c61f9028';
const USER_EMAIL      = 'jonierm@gmail.com';
const PW_RESET_TOKEN  = ''; //28d0d0ae7567be17fcc563630dcce0d00e58f9ef
const CONFIRM_TOKEN   = ''; //28d0d0ae7567be17fcc563630dcce0d00e58f9ef

//merchant constants for testing
const MERCHANT_ID = '07c68b85-5b65-44df-89e3-4db03782e273';
const CONVERSION_ID = '';
const INVOICE_ID = '9451585e-eebd-445d-9212-b1be638cee36'; //'9451585e-eebd-445d-9212-b1be638cee36';