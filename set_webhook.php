<?php

// This script is used for setting or modifying a Telegram bot webhook
// Change token and webhook URL to your token and URL
// Then run the script using this command: `curl -i https://yourdomain.com/set_webhook.php`
// Telegram's response will be visible in the terminal

$token = 'YOUR_BOT_TOKEN';
$webhookUrl = 'YOUR_WEBHOOK_URL';
setWebhook($token, $webhookUrl);

function setWebhook($token, $webhookUrl) {
    $url = "https://api.telegram.org/bot{$token}/setWebhook?url={$webhookUrl}";
    $update = file_get_contents($url);
    return $update;
}
?>
