<?php

if (empty($siteStrings) || !is_array($siteStrings))
{
	$siteStrings = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Note: all uses of ' in translations should be precended with \, in example: \'
//

$siteStrings = array_merge($siteStrings, array(
	'success'				=> 'Success!',
	'information'			=> 'Information',
	'notice'			=> 'Notice',
	'informationChanged'	=> 'Information changed.',
	'avatarChange'			=> 'Your avatar has been changed.',
	'unsubscribed'			=> 'Unsubscribed',
	'unsubscribed'		=> 'You have been unsubscribed from this thread.',
	'subscribed'			=> 'Subscribed!',
	'subscribedMsg'			=> 'You will now recieve a message when this thread recieves replies.',
	'applied'			=> 'You have successfully applied to Dischan. We should be getting back to you within 24 hours.',
	'messageSent'			=> 'Your message has been sent.',
	'passReset'			=> 'Your password has been reset. You should receive an email with your new password shortly.',
	'newsUnsub'			=> 'You are now unsubscribed from the Dischan newsletter.',
	'resetEmail'		=> 'An email has been sent to your address, please click on the link inside to reset your password.',
	'forumLocked'			=> 'The forum is currently locked for maintenance. Please check back later.',
	'blogLocked'		=> 'The blog is currently locked for maintenance. Please check back later.',
	'storeLocked'		=> 'The store is currently locked for maintenance. Please check back later.',
	'reviewPosted'		=> 'Your review has been posted! Thank you for your opinion.',
	'giftAdded'			=> 'Gift added.',
	'giveBackAdded'			=> 'Your product has been added to your cart. Thank you for choosing to support this developer!',
));

?>