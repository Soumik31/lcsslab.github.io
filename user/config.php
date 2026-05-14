<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require './autoload.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'AfQ89EoEB7SOJeHkHhJ3oRRQXDEJFqcVxwNvD0x2V4leOpVlaZ5uKtK8PiOGoBGqJR0EJVZVuML1fREO',
    'client_secret' => 'EMzUtnIJG_tVy7Vrh5GQjbL8tl4laSaUY-aK0i6j53fEQ7ujezj6hF6fHWoorNpkKWhzrWvJkkYSvTJs',
    'return_url' => 'http://localhost/How-to-Integrate-PayPal-REST-API-Payment-Gateway-in-PHP-main/response.php',
    'cancel_url' => 'http://localhost/How-to-Integrate-PayPal-REST-API-Payment-Gateway-in-PHP-main/payment-cancelled.html'
];

// Database settings. Change these for your database configuration.
$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'producttb'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}
