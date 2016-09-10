<?php
/**
 * Recurring Transaction
 */

require_once('Class.PayFlow.php');

// Recurring Transaction
$PayFlow = new PayFlow('LiveLoveAloha', 'PayPal', 'LiveLoveAloha', 'dswtech1', 'recurring');

$PayFlow->setEnvironment('live');                           // test or live
$PayFlow->setTransactionType('R');                          // S = Sale transaction, R = Recurring, C = Credit, A = Authorization, D = Delayed Capture, V = Void, F = Voice Authorization, I = Inquiry, N = Duplicate transaction
$PayFlow->setPaymentMethod('C');                            // A = Automated clearinghouse, C = Credit card, D = Pinless debit, K = Telecheck, P = PayPal.
$PayFlow->setPaymentCurrency('USD');                        // 'USD', 'EUR', 'GBP', 'CAD', 'JPY', 'AUD'.

// Only used for recurring transactions
$PayFlow->setProfileAction('A');
$PayFlow->setProfileName('Test Payment');
$PayFlow->setProfileStartDate(date('mdY', strtotime("+1 day")));
$PayFlow->setProfilePayPeriod('MONT');
$PayFlow->setProfileTerm(0);

$PayFlow->setCustomerFirstName($_REQUEST['firstname']);
$PayFlow->setCustomerLastName($_REQUEST['lastname']);
$PayFlow->setCustomerAddress($_REQUEST['address']);
$PayFlow->setCustomerCity($_REQUEST['city']);
$PayFlow->setCustomerState($_REQUEST['state']);
$PayFlow->setCustomerZip($_REQUEST['zip']);
$PayFlow->setCustomerCountry($_REQUEST['country']);
$PayFlow->setCustomerPhone($_REQUEST['phone']);
$PayFlow->setCustomerEmail($_REQUEST['email']);
$PayFlow->setPaymentComment('Recurring Payment');


$PayFlow->setAmount('1.00', FALSE);
$PayFlow->setCCNumber($_REQUEST['CardNumbers']);
$PayFlow->setCVV($_REQUEST['CuvNos']);
$PayFlow->setExpiration($_REQUEST['ExpMonths'].$_REQUEST['ExpYears']);
$PayFlow->setPaymentComment('Recurring Payment');

if($PayFlow->processTransaction()):
  echo('Transaction Processed Successfully!');
else:
  echo('Transaction could not be processed at this time.');
endif;

echo('<h2>Name Value Pair String:</h2>');
echo('<pre>');
print_r($PayFlow->debugNVP('array'));
echo('</pre>');

echo('<h2>Response From Paypal:</h2>');
echo('<pre>');
print_r($PayFlow->getResponse());
echo('</pre>');

unset($PayFlow);
?>



