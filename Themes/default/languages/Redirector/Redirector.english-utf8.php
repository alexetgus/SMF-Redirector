<?php
/**
 * @package SMF Redirector
 * @file Redirector.english-utf8.php
 * @author digger <digger@mysmf.ru> <http://mysmf.ru>
 * @copyright Copyright (c) 2015-2017, digger
 * @license The MIT License (MIT) https://opensource.org/licenses/MIT
 * @version 1.2
 */

$txt['redirector_description']               = 'Redirect and hiding for external links. You should add to your robots.txt file<br> 
Disallow: /*action=go;';
$txt['redirector_admin_menu']                = 'Links Redirector';
$txt['redirector_enabled']                   = 'Enable redirect';
$txt['redirector_guest_only']                = 'For guests only';
$txt['redirector_check_referer']             = 'Redirect to main page for empty or foreign referrals';
$txt['redirector_mode']                      = 'Redirect mode';
$txt['redirector_mode_immediate']            = 'instant';
$txt['redirector_mode_delayed']              = 'delayed';
$txt['redirector_delay']                     = 'Delay for seconds';
$txt['redirector_whitelist']                 = 'Domains white list';
$txt['redirector_whitelist_sub']             = 'One domain on every row';
$txt['redirector_page_title']                = 'Redirect to external link';
$txt['redirector_hide_links_title']          = 'Hide links';
$txt['redirector_hide_guest_links']          = 'Hide links (except white list) for guests';
$txt['redirector_hide_guest_message']        = '[Login or Register]';
$txt['redirector_hide_guest_custom_message'] = 'Message to show when link is hided';
$txt['whoall_go']                            = 'Go to external link';
$txt['redirector_nofollow_links']            = 'Add rel="nofollow noopener noreferrer" for links';
$txt['redirector_page_text']                 = '<div class="information"><p>You go to the external link. You will be redirected in {TIME} sec.</p><p>{LINK}</p></div>';
$txt['redirector_page_settings_title']       = 'Redirect page';
$txt['redirector_page_guests_text']          = 'Template for guests';
$txt['redirector_page_members_text']         = 'Template for members';
$txt['redirector_page_text_sub']             = 'You can use HTML tags, {link} for link url and {TIME} for seconds';
