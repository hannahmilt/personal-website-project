<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "14d4835a9cb816f2369aa38b165ad5c9-f135b0f1-6bf38e5d";
$mailgunDomain = "sandboxb823ce2002cc466891918e6f1b226f7d.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LekBewUAAAAALedoCSq-5XmMzmSO2efs1KmZ2GL';
$secret = '6LekBewUAAAAAJItN715iFQ2eJ6rC_azdoGvuJxD';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "hannahmilt@gmail.com" => "Hannah Miltenberger"];
$MAIL_RECIPIENT = ["hannahmilt@gmail.com"];