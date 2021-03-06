<?php
/**
 * Campaign Monitor for MODx
 *
 * Copyright 2012 by Justin Vogel <justin@butter.com.hk>
 *
 * Campaign Monitor for MODx is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Campaign Monitor for MODx is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * cmx; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package cmx
 */
/**
 * Default English Lexicon Entries for cmx
 *
 * @package cmx
 * @subpackage lexicon
 */
$_lang['cmx'] = 'Campaign Monitor for MODx';
$_lang['cmx.menu_desc'] = 'Manage and send email campaigns.';
$_lang['cmx.items'] = 'Items';
$_lang['cmx.item_create'] = 'Create Item';
$_lang['cmx.item_err_ae'] = 'An Item already exists with that name.';
$_lang['cmx.item_err_nf'] = 'Item not found.';
$_lang['cmx.item_err_ns'] = 'Item not specified.';
$_lang['cmx.item_err_remove'] = 'An error occurred while trying to remove the Item.';
$_lang['cmx.item_err_save'] = 'An error occurred while trying to save the Item.';
$_lang['cmx.item_remove'] = 'Remove Item';
$_lang['cmx.item_remove_confirm'] = 'Are you sure you want to remove this Item?';
$_lang['cmx.item_update'] = 'Update Item';
$_lang['cmx.intro_msg'] = 'Manage your items.';

$_lang['cmx.campaign_id'] = 'Campaign ID';
$_lang['cmx.campaign_name'] = 'Name';
$_lang['cmx.campaign_subject'] = 'Email Subject';
$_lang['cmx.sent_date'] = 'Sent Date';
$_lang['cmx.total_recipients'] = 'Total Recipients';
$_lang['cmx.web_url'] = 'Web Version URL';
$_lang['cmx.view_web'] = 'View Web Version';
$_lang['cmx.view_web_preview'] = 'View Web Preview';
$_lang['cmx.sent_campaigns'] = 'Sent Campaigns';
$_lang['cmx.sent_campaigns_intro'] = 'View Sent Campaigns';
$_lang['cmx.date_created'] = 'Date Created';
$_lang['cmx.preview_url'] = 'Preview URL';
$_lang['cmx.get_info'] = 'Get Campaign Details';
$_lang['cmx.campaign_info'] = 'Campaign Details';
$_lang['cmx.delete_campaign'] = 'Delete Campaign';
$_lang['cmx.refresh'] = 'Refresh All from Server';
$_lang['cmx.remove_campaign'] = 'Delete Campaign';
$_lang['cmx.remove_campaign_confirm'] = 'Are you sure you want to delete this campaign?';
$_lang['cmx.remove_campaign_success'] = 'Campaign deleted';
$_lang['cmx.unschedule_campaign'] = 'Unschedule Campaign';
$_lang['cmx.unschedule_campaign_confirm'] = 'Are you sure you want to unschedule this campaign? The campaign will be moved back to drafts.';
$_lang['cmx.unschedule_campaign_success'] = 'Campaign Unscheduled';
$_lang['cmx.schedule_campaign_menuitem'] = 'Schedule Campaign';

$_lang['cmx.date_scheduled'] = 'Scheduled Date';

$_lang['cmx.draft_campaigns'] = 'Draft Campaigns';
$_lang['cmx.draft_campaigns_intro'] = 'View Draft Campaigns';

$_lang['cmx.scheduled_campaigns'] = 'Scheduled Campaigns';
$_lang['cmx.scheduled_campaigns_intro'] = 'View Scheduled Campaigns';

// campaign form buttons
$_lang['cmx.save_draft'] = 'Save Draft';
$_lang['cmx.confirm_save_draft'] = 'Are you sure you want to save this campaign draft?  This will lock the campaign and content tabs, and allow you to schedule and preview the campaign.';
$_lang['cmx.edit_draft'] = 'Edit Draft';
$_lang['cmx.send_campaign'] = 'Send Campaign';
$_lang['cmx.send_confirm_confirm'] = 'Are you sure you want to publish this campaign?  If no scheduled publish time has been set, the campaign will be sent immediately.';
$_lang['cmx.test_campaign'] = 'Send Preview';
$_lang['cmx.test_campaign_confirm'] = 'This will send a test campaign to the preview recipients specified.';
$_lang['cmx.test_campaign_success'] = 'Test Campaign has been successfully sent.';

// campaign form tabs
$_lang['cmx.new_campaign'] = 'New Campaign';
$_lang['cmx.create_campaign'] = 'Create Campaign';
$_lang['cmx.campaign'] = 'Campaign';
$_lang['cmx.campaign_content'] = 'Content';
$_lang['cmx.lists'] = 'Lists';
$_lang['cmx.segments_label'] = 'Segments';
$_lang['cmx.schedule_preview'] = 'Schedule and Test Campaign';
$_lang['cmx.lists_intro'] = 'Subscriber Lists to send to.';

// campaign tab content
$_lang['cmx.campaign_intro'] = 'Campaign Details';
$_lang['cmx.campaign_name_label'] = 'Name the campaign';
$_lang['cmx.campaign_subject_label'] = 'Enter the email subject for this campaign';
$_lang['cmx.campaign_from_name_label'] = 'The name of the sender of this campaign';
$_lang['cmx.campaign_from_email_label'] = 'The email address of the sender of this campaign';
$_lang['cmx.campaign_replyto_label'] = 'Replies should be sent to';
$_lang['cmx.lists_label'] = 'Lists';

// content tab content
$_lang['cmx.campaign_content_intro'] = 'Campaign Content';
$_lang['cmx.campaign_content_label'] = 'Campaign Content';

// schedule tab content
$_lang['cmx.form_schedule_label'] = 'Schedule Campaign';
$_lang['cmx.form_preview_recipients_label'] = 'Test Campaign';
$_lang['cmx.confirmation_email_label'] = 'Email address to send the confirmation email to';
$_lang['cmx.schedule_campaign'] = 'Schedule the campaign to be sent at';
$_lang['cmx.preview_recipients_label'] = 'Preview recipients (separate email addresses by a comma)';

// campaign summary
$_lang['cmx.recipients'] = 'Recipients';
$_lang['cmx.total_opened'] = 'Total Opened';
$_lang['cmx.clicks'] = 'Clicks';
$_lang['cmx.unsubscribed'] = 'Unsubscribed';
$_lang['cmx.bounced'] = 'Bounced';
$_lang['cmx.unique_opened'] = 'Unique Opened';
$_lang['cmx.web_version_url'] = 'Web Version URL';
$_lang['cmx.web_version_url'] = 'Web Version URL';
$_lang['cmx.forwards'] = 'Forwards';
$_lang['cmx.likes'] = 'Likes';
$_lang['cmx.mentions'] = 'Mentions';
$_lang['cmx.bounce_tab'] = 'Bounce Stats';


// buttons
$_lang['cmx.back'] = 'Cancel';