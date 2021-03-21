<?php

require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51IXLVDGd7aaYQi1p5pAlrycqc8OR8T7J0zGHzEY5pDS5N4vC0PtChdZzvryUATE6rHIkhMKxJhiqmLCTifjvMqgV00FGdJu71g');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 2000,
      'product_data' => [
        'name' => 'Stubborn Attachments',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

echo json_encode(['id' => $checkout_session->id]);