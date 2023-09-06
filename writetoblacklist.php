<?php
$file = 'blacklist.json';
$userId = $_GET['userId'];
$reason = $_GET['reason'];

$blacklistData = file_get_contents($file);
$blacklistArray = json_decode($blacklistData, true);

error_log($userId)
error_log($reason)

$blacklistArray[$userId] = $reason;
$newBlacklistData = json_encode($blacklistArray);

if (file_put_contents($file, $newBlacklistData)) {
    echo "Blacklist entry added successfully";
} else {
    echo "Error adding blacklist entry";
}
?>
