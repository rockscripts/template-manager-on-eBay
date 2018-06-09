SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000189065933228

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000154972076416

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000113964080811

SELECT *
FROM (`ebay_design`)
LEFT JOIN `listign_design` ON `ebay_design`.`id_listing_design`  = `listign_design`.`id`
WHERE `ebay_design`.`id_user` =  '29' 
 Execution Time:0.0246779918671

SELECT *
FROM (`ebay_design`)
LEFT JOIN `home_design` ON `ebay_design`.`id_home_design`  = `home_design`.`id_home_design`
WHERE `ebay_design`.`id_user` =  '29' 
 Execution Time:0.0177299976349

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000137805938721

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.231261968613

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000103950500488

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:8.29696655273E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000127077102661

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490917'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000132083892822

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118970870972

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490949'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000128984451294

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490974'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000119924545288

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001220703125

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491014'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.29832458496E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000124931335449

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490985'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000128984451294

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000107049942017

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491055'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000140905380249

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133991241455

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491037'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000196218490601

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00011682510376

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491197'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000113010406494

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491212'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000158071517944

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000125885009766

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491155'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000111103057861

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000105142593384

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491123'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000117778778076

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000102996826172

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491306'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000104904174805

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000148057937622

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491261'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.58442687988E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00011682510376

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491296'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000127077102661

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000159025192261

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491371'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000139951705933

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000136137008667

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491388'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00036096572876

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000102996826172

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491345'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0001060962677

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00075888633728

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491419'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000148057937622

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491475'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.10758972168E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000130891799927

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491504'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000159978866577

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000154972076416

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491570'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000165939331055

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000131130218506

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491543'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000157117843628

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000116109848022

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491432'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000325918197632

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491639'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000993013381958

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000163793563843

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491718'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000129222869873

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108003616333

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491609'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.20295715332E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00012993812561

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491788'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000127077102661

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000168800354004

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491774'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000158071517944

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00016713142395

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491744'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000186920166016

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000549077987671

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491820'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000138998031616

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00010085105896

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491804'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.10758972168E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001060962677

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491879'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000114917755127

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000155925750732

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491891'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000148057937622

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000138998031616

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491901'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000149965286255

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491914'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0001540184021

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491931'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000123977661133

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149965286255

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491961'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000146150588989

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491759'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000236034393311

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000157117843628

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491943'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000128984451294

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000131130218506

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492099'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000144004821777

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144958496094

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492161'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000144958496094

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000113010406494

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492220'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00010085105896

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000311136245728

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492249'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000114917755127

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492199'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000126123428345

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146150588989

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492121'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000140190124512

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000110149383545

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492262'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000164985656738

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00010085105896

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492289'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.3936920166E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000143051147461

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492308'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000136137008667

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00052809715271

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492341'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00160694122314

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000159025192261

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492022'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000118970870972

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000170946121216

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492418'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00014591217041

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000166177749634

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492434'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000216007232666

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000159978866577

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492492'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000186920166016

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000404119491577

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492508'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000158071517944

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492467'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000107049942017

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000119924545288

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492523'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000112056732178

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000103950500488

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492645'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.60826873779E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000103950500488

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492743'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000117063522339

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00011682510376

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492581'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000163078308105

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492713'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000115156173706

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000109910964966

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492758'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000130891799927

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000124931335449

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492852'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000119209289551

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000166893005371

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492918'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00021505355835

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000121116638184

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492995'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000123977661133

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000136852264404

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493034'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000120878219604

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118970870972

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492948'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00013279914856

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000132083892822

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492964'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000142097473145

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00011682510376

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493073'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000102043151855

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000113010406494

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493129'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.08374786377E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.70363616943E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493096'
GROUP BY `seller_list`.`item_id` 
 Execution Time:8.9168548584E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000115156173706

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493161'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000108003616333

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000121116638184

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493146'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000447034835815

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000102996826172

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493019'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000142097473145

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493184'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000118017196655

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001060962677

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042498862'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000104904174805

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042498922'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000137090682983

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000110149383545

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042498849'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000121116638184

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000126123428345

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042498934'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000132083892822

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00017786026001

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499003'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000164985656738

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000102996826172

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499264'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000104904174805

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000124931335449

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499143'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000161170959473

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.70363616943E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499591'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.10758972168E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000113964080811

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499899'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000117063522339

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000109910964966

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499385'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000125885009766

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123023986816

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499806'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000108003616333

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000102043151855

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499952'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000124931335449

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499972'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0001060962677

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000110149383545

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500027'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000119924545288

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000124931335449

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499995'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00011420249939

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499928'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000576972961426

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500090'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000142097473145

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000147104263306

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500045'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000192880630493

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000110149383545

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500064'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00010085105896

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000164031982422

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500121'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00015115737915

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500138'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000149011611938

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000103950500488

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500155'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000110149383545

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500107'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000108957290649

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108003616333

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500209'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000113964080811

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000126838684082

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500147'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000133991241455

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000153064727783

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0630481243134

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000132083892822

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 05:12:56', '90', '29') 
 Execution Time:0.0216147899628

SELECT LAST_INSERT_ID() 
 Execution Time:0.000138998031616

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00208783149719

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:13:05', '232') 
 Execution Time:0.0980370044708

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000229835510254

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000131130218506

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490917'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00145792961121

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000135898590088

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490917'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00053882598877

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490917', 'SKF 99059 Speedie Sleeve Shaft Repair 14.96-15.06mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99059</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>14.96mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>15.06mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>15.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.29mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:13:28', '232') 
 Execution Time:0.000378847122192

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000188112258911

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000123023986816

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000808954238892

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000140905380249

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.08103179932E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490949'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000625848770142

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000168085098267

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490985'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000963926315308

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490985', 'SKF 99080 Speedie Sleeve Shaft Repair 19.81-19.91mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99080</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>19.81mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>19.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>23.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:13:58', '232') 
 Execution Time:0.000275850296021

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.70227813721E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490985'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000618934631348

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000156879425049

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00014591217041

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490974'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000880002975464

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000142097473145

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000240087509155

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491014'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000855207443237

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.89437103271E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491037'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000767946243286

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000115871429443

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491055'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00139307975769

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491055', 'SKF 99098 Speedie Sleeve Shaft Repair 24.94-25.04mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99098</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>24.94mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>25.04mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>24.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>33.02mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:14:51', '232') 
 Execution Time:0.000380039215088

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000134944915771

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.89301300049E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491123'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000708103179932

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000114917755127

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000113964080811

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491055'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000850915908813

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000314950942993

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000102996826172

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491197'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00101590156555

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123023986816

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00011682510376

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491155'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000679969787598

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000174045562744

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491212'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00154995918274

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491212', 'SKF 99120 Speedie Sleeve Shaft Repair 29.31-29.41mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99120</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>29.31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>29.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>29.36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>34.29mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>9.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>17.48mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:15:48', '232') 
 Execution Time:0.000443935394287

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000127077102661

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000117063522339

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491212'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000687122344971

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000120878219604

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.79764556885E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491261'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00064492225647

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000142097473145

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.60555267334E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491306'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000592947006226

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000140190124512

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000102996826172

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491296'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000575065612793

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000211954116821

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491388'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0011088848114

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491388', 'SKF 99146 Speedie Sleeve Shaft Repair 35.84-35.99mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99146</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>35.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>35.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>35.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>45.24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>16.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>24.99mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:16:45', '232') 
 Execution Time:0.000716924667358

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000104188919067

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.01086425781E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491345'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000871181488037

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001220703125

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.10623168945E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491371'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000594854354858

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491419'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000869035720825

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491419', 'SKF 99149 Speedie Sleeve Shaft Repair 38.02-38.18mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99149</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>38.02mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>38.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>38.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>45.24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.81mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:17:14', '232') 
 Execution Time:0.000387907028198

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146865844727

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000128984451294

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491388'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000744104385376

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.70363616943E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491419'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000882863998413

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.60826873779E-5

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.20024108887E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491432'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000678062438965

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000226974487305

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000173091888428

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491475'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000821113586426

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000119924545288

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491543'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000826120376587

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491543', 'SKF 99166 Speedie Sleeve Shaft Repair 41.83-42.01mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99166</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>41.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>42.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>41.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>53.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>11.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>14.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>21.49mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:18:09', '232') 
 Execution Time:0.00025486946106

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000114917755127

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491570'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000754117965698

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491570', 'SKF 99169 Speedie Sleeve Shaft Repair 41.83-42.01mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99169</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>41.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>42.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>41.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>53.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>21.01mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:18:18', '232') 
 Execution Time:0.000373125076294

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146150588989

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000115156173706

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491504'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000766038894653

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00022292137146

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000107049942017

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491570'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00112915039062

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000134944915771

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000149011611938

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491543'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000874042510986

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000161170959473

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491639'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00125408172607

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491639', 'SKF 99176 Speedie Sleeve Shaft Repair 44.73-44.88mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99176</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>44.73mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>44.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>44.86mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>52.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>20.65mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:18:55', '232') 
 Execution Time:0.000363826751709

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000138998031616

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.51154327393E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491609'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000633955001831

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00013279914856

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491639'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000609874725342

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000120878219604

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491744'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000823020935059

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491744', 'SKF 99192 Speedie Sleeve Shaft Repair 48.49-48.64mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99192</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>48.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>48.64mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>48.56mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>56.36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>9.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.4mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:19:27', '232') 
 Execution Time:0.000396966934204

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000127077102661

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.58171081543E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491744'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000565052032471

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000141859054565

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001220703125

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491718'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000787019729614

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000141143798828

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491788'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00200986862183

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491788', 'SKF 99199 Speedie Sleeve Shaft Repair 50.72-50.88mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99199</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>50.72mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>50.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>50.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>61.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.4mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:20:34', '232') 
 Execution Time:0.00046706199646

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000140905380249

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000127077102661

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491759'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000752925872803

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118970870972

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.89165496826E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491788'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000720024108887

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149965286255

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000116109848022

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491804'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000698089599609

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000127077102661

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491820'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000746965408325

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491820', 'SKF 99204 Speedie Sleeve Shaft Repair 51.82-51.99mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99204</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>51.82mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>51.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>51.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>62.71mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>15.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.52mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:21:17', '232') 
 Execution Time:0.000293970108032

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146865844727

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001060962677

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491774'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000764131546021

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000137090682983

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000111103057861

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491879'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00130200386047

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.79900360107E-5

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.01086425781E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491891'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00052285194397

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108003616333

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:6.98566436768E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491901'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000473022460938

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000200986862183

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491914'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00141000747681

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491914', 'SKF 99231 Speedie Sleeve Shaft Repair 58.65-58.8mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99231</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>58.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>58.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>58.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>68.28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:22:12', '232') 
 Execution Time:0.000473022460938

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123023986816

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.70227813721E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491820'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000687122344971

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000116109848022

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491931'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00114703178406

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491931', 'SKF 99233 Speedie Sleeve Shaft Repair 59.11-59.26mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99233</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>59.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>59.26mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>59.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>38.1mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:22:31', '232') 
 Execution Time:0.00032114982605

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146865844727

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000123977661133

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491914'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000766038894653

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000117063522339

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491931'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000609159469604

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000243902206421

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042491961'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00122117996216

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042491961', 'SKF 99237 Speedie Sleeve Shaft Repair 60.3-60.45mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99237</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>60.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>60.45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>60.33mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:23:09', '232') 
 Execution Time:0.0013279914856

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000162839889526

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.41753387451E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491943'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000624895095825

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128030776978

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000117063522339

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042491961'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00060510635376

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000132083892822

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492099'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000633955001831

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.48770141602E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492022'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000805854797363

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000131845474243

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.48770141602E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492121'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000502109527588

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000184059143066

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000118017196655

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492199'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000816106796265

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000157833099365

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492249'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00164103507996

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042492249', 'SKF 99276 Speedie Sleeve Shaft Repair 69.93-70.08mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99276</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>69.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>70.08mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>70mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>79.38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:24:57', '232') 
 Execution Time:0.000858068466187

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001380443573

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492249'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000769138336182

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128030776978

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.79900360107E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492220'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000709056854248

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000113010406494

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492262'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000844955444336

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149011611938

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.98973846436E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492289'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000625848770142

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000142097473145

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492308'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00157189369202

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042492308', 'SKF 99294 Speedie Sleeve Shaft Repair 74.93-75.08mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99294</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>74.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>75.08mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>75.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>83.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>26.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>33.35mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:25:47', '232') 
 Execution Time:0.000480890274048

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000119924545288

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000108003616333

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492308'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000865936279297

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000113964080811

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.51290130615E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492161'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000548124313354

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133991241455

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000154972076416

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492341'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00131011009216

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000162124633789

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492434'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00098180770874

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042492434', 'SKF 99313 Speedie Sleeve Shaft Repair 79.81-80.01mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99313</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>79.81mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>80.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>80.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>89.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:26:29', '232') 
 Execution Time:0.000401973724365

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000105857849121

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492418'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000765085220337

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000102996826172

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.10487365723E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492434'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000587940216064

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001220703125

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.51154327393E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492467'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000697135925293

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000147104263306

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000110864639282

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492492'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000750780105591

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133991241455

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001060962677

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492508'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00290608406067

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000179052352905

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000117063522339

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492523'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0013599395752

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000293970108032

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492581'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00180888175964

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042492581', 'SKF 99339 Speedie Sleeve Shaft Repair 87.25-87.4mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99339</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>87.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>87.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>87.33mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>97.64mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>35.71mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:27:48', '232') 
 Execution Time:0.000408887863159

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00014591217041

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492645'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000881195068359

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042492645', 'SKF 99353 Speedie Sleeve Shaft Repair 89.92-90.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99353</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>89.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>90.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>89.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>101.6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>13.36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>16.94mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>44.45mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:27:58', '232') 
 Execution Time:0.000447034835815

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000126838684082

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000108957290649

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492713'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000784873962402

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000135898590088

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000155210494995

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492581'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000669956207275

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.79900360107E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492743'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000808000564575

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000101089477539

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000163078308105

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492645'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000923871994019

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:6.8187713623E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492758'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000643968582153

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000116109848022

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492852'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00150394439697

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042492852', 'SKF 99412 Speedie Sleeve Shaft Repair 104.7-104.9mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99412</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>104.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>104.9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>104.78mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>113.54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:28:57', '232') 
 Execution Time:0.00035285949707

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000150918960571

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492852'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000746011734009

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000200033187866

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00012993812561

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492918'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000871896743774

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.67979431152E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492948'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000686168670654

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042492964'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000743865966797

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042492964', 'SKF 99491 Speedie Sleeve Shaft Repair 129.97-130.18mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99491</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>129.97mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>130.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>130.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>139.52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>32.51mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:29:39', '232') 
 Execution Time:0.000295162200928

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000131845474243

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.91821289062E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492964'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00066089630127

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000127077102661

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493019'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000606060028076

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042493019', 'SKF 99533 Speedie Sleeve Shaft Repair 134.8-135mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99533</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>134.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>135mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>134.9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>145.67mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:29:59', '232') 
 Execution Time:0.000281095504761

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000104904174805

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.20024108887E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493019'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000530958175659

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000142097473145

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493034'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000725984573364

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042493034', 'SKF 99552 Speedie Sleeve Shaft Repair 139.9-140.11mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99552</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>139.9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>140.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>140mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>151mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:30:20', '232') 
 Execution Time:0.000306129455566

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000110864639282

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.58306884766E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493034'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000672101974487

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000138998031616

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000103950500488

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493073'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000849008560181

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000207901000977

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000115871429443

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042492995'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000776052474976

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000130176544189

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000110149383545

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493096'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000679016113281

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000112056732178

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042493146'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000779867172241

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042493146', 'SKF 99810 Speedie Sleeve Shaft Repair 15.82-15.93mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99810</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>15.82mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>15.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>15.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>10.31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:31:12', '232') 
 Execution Time:0.000308990478516

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000143051147461

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.70227813721E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493146'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000838994979858

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000163078308105

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000135898590088

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493161'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000694990158081

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000105857849121

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.10758972168E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493184'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000643014907837

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000143051147461

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042498849'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00113391876221

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042498849', '302/28J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>58mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>17.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>38 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>41.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>4.4 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>9000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>12000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>41.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>16mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>14mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>35mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>50mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.37</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.6</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:31:54', '232') 
 Execution Time:0.000406980514526

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128030776978

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001540184021

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042498849'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000943899154663

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000117063522339

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042498862'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000696897506714

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042498862', '30203J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>17mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>40mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>13.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>19 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>18.6 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>1.83 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>13000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>18000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>10mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>37mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.35</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.7</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:32:13', '232') 
 Execution Time:0.000339031219482

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000143051147461

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.39097595215E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042498862'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000618934631348

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000193119049072

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000142097473145

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042493129'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000740051269531

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042498934'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000774145126343

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042498934', '30205J2/Q SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>16.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>30.8 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>33.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>3.45 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>10000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>13000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>37.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>44mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>46mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.37</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.6</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:32:46', '232') 
 Execution Time:0.000287055969238

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000124931335449

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042498922'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000753164291382

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000174999237061

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499143'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000897169113159

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042499143', '30209J2/Q SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>20.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>66 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>76.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>8.65 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>6000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>8000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>63mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>19mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>16mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>74mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>78mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>80mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>4.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.5</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:33:06', '232') 
 Execution Time:0.000312089920044

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000121116638184

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.89301300049E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499143'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000740051269531

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000132083892822

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000114917755127

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042498934'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000821113586426

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000176906585693

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000118970870972

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499003'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00148797035217

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000155925750732

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000341892242432

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499385'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000684976577759

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000132083892822

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.98973846436E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499264'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000738859176636

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000155210494995

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499806'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00237703323364

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042499806', '30213J2/Q SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>120mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>24.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>132 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>134 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>16.3 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>4500 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>5600 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>89mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>20mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>78mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>74mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>106mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>113mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>113mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>4.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.5</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:34:05', '232') 
 Execution Time:0.000452041625977

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133991241455

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.98838043213E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499806'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000643968582153

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000127792358398

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.89437103271E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499591'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000701189041138

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00012993812561

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.48770141602E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499928'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000799894332886

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000150203704834

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.79900360107E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499899'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000831842422485

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.89301300049E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499952'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000629901885986

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149011611938

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042499995'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00153779983521

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042499995', '30219J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>170mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>34.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>216 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>275 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>31.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>126mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>32mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>27mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>33mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>110mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>107mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>149mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>158mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>159mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>7.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:35:11', '232') 
 Execution Time:0.000411033630371

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00048303604126

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.70363616943E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499995'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000842094421387

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000155925750732

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500027'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000731945037842

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042500027', '30221J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>105mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>190mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>39mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>270 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>355 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>40 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2600 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3400 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>141mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>30mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>37mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>123mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>117mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>165mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>178mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>177mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:35:29', '232') 
 Execution Time:0.000339984893799

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000108003616333

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500027'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000766038894653

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00016188621521

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500045'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00103521347046

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042500045', '30222J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>110mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>200mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>308 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>405 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>45 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2400 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3200 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>148mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>32mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>39mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>129mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>122mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>174mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>188mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>187mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:35:48', '232') 
 Execution Time:0.00062894821167

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000126123428345

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000136852264404

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500045'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00190496444702

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00014591217041

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500064'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000819206237793

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042500064', '30224J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>120mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>215mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>43.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>341 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>465 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>49 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2200 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>161mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>40mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>43mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>141mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>132mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>187mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>203mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>201mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>9.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:36:06', '232') 
 Execution Time:0.000373125076294

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000137090682983

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.82148742676E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500064'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000777006149292

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500107'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00104284286499

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042500107', '30230 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>150mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>270mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>429 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>560 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>57 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>1800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>2400 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>200mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>50mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>175mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>166mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>234mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>256mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>250mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:36:31', '232') 
 Execution Time:0.000338077545166

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000125885009766

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500090'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000804901123047

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001060962677

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042499972'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000853061676025

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149011611938

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00011682510376

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500121'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000592947006226

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000228881835938

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000123977661133

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500107'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00111794471741

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000130176544189

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500147'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000850915908813

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042500147', '30236J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>180mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>320mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>57mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>583 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>815 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>80 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>1500 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>2000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>239mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>43mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>61mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>211mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>200mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>278mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>303mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>297mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>14mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.44</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.35</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:37:22', '232') 
 Execution Time:0.000383853912354

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000187873840332

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042500155'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000895023345947

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042500155', '30302J2 SKF Metric Taper Bearing', '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>42mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>14.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>22.4 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>20 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>2.08 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>13000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>18000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>27.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>21mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.28</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>2.1</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>1.1</td>  </tr> </tbody></table></div><div>', '2014-06-05 05:37:35', '232') 
 Execution Time:0.000380992889404

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000111103057861

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.6784362793E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500209'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000808954238892

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000118970870972

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500138'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000708103179932

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000169992446899

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000349044799805

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500147'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00105786323547

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00044584274292

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042500155'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00127291679382

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000143051147461

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000139951705933

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490835' 
 Execution Time:0.000532150268555

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490835'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000431060791016

UPDATE `item` SET `ItemID` = '131042490835', `Title` = 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.84', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:01', `EndTime1` = '2014-06-07 13:10:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490835' 
 Execution Time:0.00181794166565

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490835'
AND `from_ebay` =  'true' 
 Execution Time:0.0016040802002

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490835'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000197887420654

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490835', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000858068466187

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000140905380249

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.00950622559E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491014' 
 Execution Time:0.00133991241455

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491014'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00098705291748

UPDATE `item` SET `ItemID` = '131042491014', `Title` = 'SKF 99085 Speedie Sleeve Shaft Repair 21.87-22mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99085</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>21.87mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>30.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>46.02mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '23.1', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99085-Speedie-Sleeve-Shaft-Repair-21-87-22mm-/131042491014', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99085-Speedie-Sleeve-Shaft-Repair-21-87-22mm-/131042491014', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:31', `EndTime1` = '2014-06-07 13:10:31', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491014' 
 Execution Time:0.00125098228455

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491014'
AND `from_ebay` =  'true' 
 Execution Time:0.000389814376831

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491014'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/e10AAOxyLN9SfjRP/$T2eC16N,!)sFIZ(dGR-gBSfjRQC4WQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000296115875244

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491014', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/e10AAOxyLN9SfjRP/$T2eC16N,!)sFIZ(dGR-gBSfjRQC4WQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00120806694031

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000119924545288

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000101804733276

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490985' 
 Execution Time:0.000494956970215

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490985'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000332117080688

UPDATE `item` SET `ItemID` = '131042490985', `Title` = 'SKF 99080 Speedie Sleeve Shaft Repair 19.81-19.91mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99080</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>19.81mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>19.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>23.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.77', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99080-Speedie-Sleeve-Shaft-Repair-19-81-19-91mm-/131042490985', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99080-Speedie-Sleeve-Shaft-Repair-19-81-19-91mm-/131042490985', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:25', `EndTime1` = '2014-06-07 13:10:25', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490985' 
 Execution Time:0.00209593772888

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490985'
AND `from_ebay` =  'true' 
 Execution Time:0.000800132751465

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490985'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/45UAAOxygj5SfjRL/$T2eC16h,!yIFJFMPF51vBSfjRLBbiQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00058388710022

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490985', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/45UAAOxygj5SfjRL/$T2eC16h,!yIFJFMPF51vBSfjRLBbiQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00216293334961

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000152826309204

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000144004821777

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490949' 
 Execution Time:0.00050687789917

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490949'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000262975692749

UPDATE `item` SET `ItemID` = '131042490949', `Title` = 'SKF 99062 Speedie Sleeve Shaft Repair 15.82-15.93mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99062</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>15.82mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>15.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>15.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>10.31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.85', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99062-Speedie-Sleeve-Shaft-Repair-15-82-15-93mm-/131042490949', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99062-Speedie-Sleeve-Shaft-Repair-15-82-15-93mm-/131042490949', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:18', `EndTime1` = '2014-06-07 13:10:18', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490949' 
 Execution Time:0.00134491920471

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490949'
AND `from_ebay` =  'true' 
 Execution Time:0.00542902946472

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490949'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/GQ8AAOxydB1SfjRA/$(KGrHqN,!lkFJv,jlOcmBSfjR!IyOQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000309944152832

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490949', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/GQ8AAOxydB1SfjRA/$(KGrHqN,!lkFJv,jlOcmBSfjR!IyOQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000888824462891

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000138998031616

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000117063522339

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490974' 
 Execution Time:0.000972986221313

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490974'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00075888633728

UPDATE `item` SET `ItemID` = '131042490974', `Title` = 'SKF 99078 Speedie Sleeve Shaft Repair 19.94-20.04mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99078</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>19.94mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>20.04mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>19.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>23.62mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.22', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99078-Speedie-Sleeve-Shaft-Repair-19-94-20-04mm-/131042490974', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99078-Speedie-Sleeve-Shaft-Repair-19-94-20-04mm-/131042490974', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:22', `EndTime1` = '2014-06-07 13:10:22', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490974' 
 Execution Time:0.00930619239807

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490974'
AND `from_ebay` =  'true' 
 Execution Time:0.000895977020264

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490974'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/erwAAOxyLN9SfjRJ/$T2eC16dHJHIFFhl72lCjBSfjRJGK2Q~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000310897827148

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490974', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/erwAAOxyLN9SfjRJ/$T2eC16dHJHIFFhl72lCjBSfjRJGK2Q~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000996828079224

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000169992446899

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000111818313599

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491037' 
 Execution Time:0.000739097595215

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491037'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.0115160942078

UPDATE `item` SET `ItemID` = '131042491037', `Title` = 'SKF 99092 Speedie Sleeve Shaft Repair 23.88-24mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99092</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>23.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>28.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.52', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99092-Speedie-Sleeve-Shaft-Repair-23-88-24mm-/131042491037', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99092-Speedie-Sleeve-Shaft-Repair-23-88-24mm-/131042491037', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '101', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:36', `EndTime1` = '2014-06-07 13:10:36', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491037' 
 Execution Time:0.0032320022583

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491037'
AND `from_ebay` =  'true' 
 Execution Time:0.00120711326599

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491037'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/Qb4AAOxy4t1SfjRQ/$(KGrHqJ,!lQFJhgC-7ufBSfjRQKzKg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000366926193237

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491037', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/Qb4AAOxy4t1SfjRQ/$(KGrHqJ,!lQFJhgC-7ufBSfjRQKzKg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00120186805725

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001060962677

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.08103179932E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491123' 
 Execution Time:0.000667095184326

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491123'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000370025634766

UPDATE `item` SET `ItemID` = '131042491123', `Title` = 'SKF 99100 Speedie Sleeve Shaft Repair 25.35-25.45mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99100</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>25.35mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>25.45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>30.96mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.18', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99100-Speedie-Sleeve-Shaft-Repair-25-35-25-45mm-/131042491123', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99100-Speedie-Sleeve-Shaft-Repair-25-35-25-45mm-/131042491123', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:40', `EndTime1` = '2014-06-07 13:10:40', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491123' 
 Execution Time:0.0018208026886

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491123'
AND `from_ebay` =  'true' 
 Execution Time:0.000694990158081

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491123'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vhwAAMXQWzNSfjRi/$(KGrHqQOKnMFJjhd7FYwBSfjRjImCQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000725984573364

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491123', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vhwAAMXQWzNSfjRi/$(KGrHqQOKnMFJjhd7FYwBSfjRjImCQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00106310844421

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118970870972

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000116109848022

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491055' 
 Execution Time:0.000720024108887

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491055'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000334978103638

UPDATE `item` SET `ItemID` = '131042491055', `Title` = 'SKF 99098 Speedie Sleeve Shaft Repair 24.94-25.04mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99098</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>24.94mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>25.04mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>24.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>33.02mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.16', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99098-Speedie-Sleeve-Shaft-Repair-24-94-25-04mm-/131042491055', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99098-Speedie-Sleeve-Shaft-Repair-24-94-25-04mm-/131042491055', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:38', `EndTime1` = '2014-06-07 13:10:38', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491055' 
 Execution Time:0.00170803070068

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491055'
AND `from_ebay` =  'true' 
 Execution Time:0.000658988952637

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491055'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/42sAAOxyzi9SfjRS/$(KGrHqF,!nsFJvBiBVv5BSfjRSwJsQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000427007675171

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491055', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/42sAAOxyzi9SfjRS/$(KGrHqF,!nsFJvBiBVv5BSfjRSwJsQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00344300270081

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000121116638184

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.79764556885E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490917' 
 Execution Time:0.000426054000854

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490917'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000280141830444

UPDATE `item` SET `ItemID` = '131042490917', `Title` = 'SKF 99059 Speedie Sleeve Shaft Repair 14.96-15.06mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99059</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>14.96mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>15.06mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>15.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.29mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '23.36', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99059-Speedie-Sleeve-Shaft-Repair-14-96-15-06mm-/131042490917', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99059-Speedie-Sleeve-Shaft-Repair-14-96-15-06mm-/131042490917', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:14', `EndTime1` = '2014-06-07 13:10:14', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490917' 
 Execution Time:0.00131011009216

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490917'
AND `from_ebay` =  'true' 
 Execution Time:0.000640869140625

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490917'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/QEoAAOxy4t1SfjRA/$T2eC16h,!yYFIb4UWckqBSfjR!3eVQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000252962112427

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490917', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/QEoAAOxy4t1SfjRA/$T2eC16h,!yYFIb4UWckqBSfjR!3eVQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000756025314331

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000156164169312

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000102996826172

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491197' 
 Execution Time:0.00147104263306

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491197'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000558137893677

UPDATE `item` SET `ItemID` = '131042491197', `Title` = 'SKF 99116 Speedie Sleeve Shaft Repair 28.52-28.63mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99116</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>28.52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>28.63mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>28.57mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>38.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>9.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>17.48mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.14', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99116-Speedie-Sleeve-Shaft-Repair-28-52-28-63mm-/131042491197', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99116-Speedie-Sleeve-Shaft-Repair-28-52-28-63mm-/131042491197', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:53', `EndTime1` = '2014-06-07 13:10:53', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491197' 
 Execution Time:0.00121593475342

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491197'
AND `from_ebay` =  'true' 
 Execution Time:0.000507831573486

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491197'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vh0AAMXQWzNSfjRi/$T2eC16V,!yMFIb-EFc3LBSfjRjV)!g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000648021697998

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491197', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vh0AAMXQWzNSfjRi/$T2eC16V,!yMFIb-EFc3LBSfjRjV)!g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00147795677185

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000218868255615

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000117063522339

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491296' 
 Execution Time:0.00230407714844

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491296'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000339031219482

UPDATE `item` SET `ItemID` = '131042491296', `Title` = 'SKF 99131 Speedie Sleeve Shaft Repair 33.27-33.43mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99131</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>33.27mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>33.43mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>33.35mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>40.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>15.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>20.65mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.7', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99131-Speedie-Sleeve-Shaft-Repair-33-27-33-43mm-/131042491296', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99131-Speedie-Sleeve-Shaft-Repair-33-27-33-43mm-/131042491296', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:05', `EndTime1` = '2014-06-07 13:11:05', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491296' 
 Execution Time:0.00138401985168

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491296'
AND `from_ebay` =  'true' 
 Execution Time:0.000761032104492

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491296'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/ftUAAOxyLN9SfjR3/$T2eC16N,!wsFJQ25V(syBSfjR3eLig~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000411987304688

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491296', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/ftUAAOxyLN9SfjR3/$T2eC16N,!wsFJQ25V(syBSfjR3eLig~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000923156738281

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001060962677

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.00950622559E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491155' 
 Execution Time:0.000457048416138

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491155'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000232934951782

UPDATE `item` SET `ItemID` = '131042491155', `Title` = 'SKF 99106 Speedie Sleeve Shaft Repair 26.92-27.03mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99106</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>26.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>27.03mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>27mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>33.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>46.81mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.69', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99106-Speedie-Sleeve-Shaft-Repair-26-92-27-03mm-/131042491155', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99106-Speedie-Sleeve-Shaft-Repair-26-92-27-03mm-/131042491155', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:45', `EndTime1` = '2014-06-07 13:10:45', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491155' 
 Execution Time:0.0012891292572

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491155'
AND `from_ebay` =  'true' 
 Execution Time:0.000699996948242

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491155'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/pTcAAMXQfvlSfjRi/$T2eC16Z,!yIFJB0kD,hiBSfjRiBJ!g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000341892242432

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491155', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/pTcAAMXQfvlSfjRi/$T2eC16Z,!yIFJB0kD,hiBSfjRiBJ!g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00115990638733

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000153064727783

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000112056732178

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491212' 
 Execution Time:0.000341892242432

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491212'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000269889831543

UPDATE `item` SET `ItemID` = '131042491212', `Title` = 'SKF 99120 Speedie Sleeve Shaft Repair 29.31-29.41mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99120</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>29.31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>29.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>29.36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>34.29mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>9.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>17.48mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.39', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99120-Speedie-Sleeve-Shaft-Repair-29-31-29-41mm-/131042491212', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99120-Speedie-Sleeve-Shaft-Repair-29-31-29-41mm-/131042491212', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:56', `EndTime1` = '2014-06-07 13:10:56', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491212' 
 Execution Time:0.00138521194458

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491212'
AND `from_ebay` =  'true' 
 Execution Time:0.000424861907959

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491212'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/q8QAAOxy3NBSfjRm/$T2eC16NHJI!FHR1jYmUWBSfjRmQ0,g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000220060348511

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491212', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/q8QAAOxy3NBSfjRm/$T2eC16NHJI!FHR1jYmUWBSfjRmQ0,g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000483989715576

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000112056732178

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.60691070557E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491261' 
 Execution Time:0.000384092330933

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491261'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000307083129883

UPDATE `item` SET `ItemID` = '131042491261', `Title` = 'SKF 99125 Speedie Sleeve Shaft Repair 31.67-31.83mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99125</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>31.67mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>31.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>31.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>38.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>17.48mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.99', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99125-Speedie-Sleeve-Shaft-Repair-31-67-31-83mm-/131042491261', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99125-Speedie-Sleeve-Shaft-Repair-31-67-31-83mm-/131042491261', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:01', `EndTime1` = '2014-06-07 13:11:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491261' 
 Execution Time:0.00159502029419

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491261'
AND `from_ebay` =  'true' 
 Execution Time:0.000531911849976

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491261'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/9jcAAOxypNtSfjRo/$T2eC16V,!yUFIb7Qvu(1BSfjRpEiU!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000250101089478

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491261', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/9jcAAOxypNtSfjRo/$T2eC16V,!yUFIb7Qvu(1BSfjRpEiU!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00067400932312

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.70092010498E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491306' 
 Execution Time:0.000480175018311

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491306'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000253915786743

UPDATE `item` SET `ItemID` = '131042491306', `Title` = 'SKF 99133 Speedie Sleeve Shaft Repair 34.82-34.98mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99133</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>34.82mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>34.98mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>34.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>41.61mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>20.65mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.74', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99133-Speedie-Sleeve-Shaft-Repair-34-82-34-98mm-/131042491306', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99133-Speedie-Sleeve-Shaft-Repair-34-82-34-98mm-/131042491306', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:07', `EndTime1` = '2014-06-07 13:11:07', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491306' 
 Execution Time:0.00182318687439

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491306'
AND `from_ebay` =  'true' 
 Execution Time:0.000801086425781

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491306'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/HiAAAOxydB1SfjR4/$T2eC16VHJIgFHSIb8zw!BSfjR42LDg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000319004058838

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491306', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/HiAAAOxydB1SfjR4/$T2eC16VHJIgFHSIb8zw!BSfjR42LDg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000852108001709

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000142812728882

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000109910964966

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491371' 
 Execution Time:0.000507116317749

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491371'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000261068344116

UPDATE `item` SET `ItemID` = '131042491371', `Title` = 'SKF 99144 Speedie Sleeve Shaft Repair 36.45-36.6mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99144</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>36.45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>36.6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>36.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>45.24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>9.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.81mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '25.14', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99144-Speedie-Sleeve-Shaft-Repair-36-45-36-6mm-/131042491371', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99144-Speedie-Sleeve-Shaft-Repair-36-45-36-6mm-/131042491371', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:16', `EndTime1` = '2014-06-07 13:11:16', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491371' 
 Execution Time:0.00122594833374

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491371'
AND `from_ebay` =  'true' 
 Execution Time:0.000532865524292

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491371'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/2tAAAOxyTjNSfjR7/$T2eC16N,!wsFJQ25V(syBSfjR7zr5w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000225782394409

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491371', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/2tAAAOxyTjNSfjR7/$T2eC16N,!wsFJQ25V(syBSfjR7zr5w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00315880775452

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108003616333

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000124931335449

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491419' 
 Execution Time:0.000476121902466

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491419'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000895023345947

UPDATE `item` SET `ItemID` = '131042491419', `Title` = 'SKF 99149 Speedie Sleeve Shaft Repair 38.02-38.18mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99149</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>38.02mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>38.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>38.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>45.24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.81mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '28.31', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99149-Speedie-Sleeve-Shaft-Repair-38-02-38-18mm-/131042491419', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99149-Speedie-Sleeve-Shaft-Repair-38-02-38-18mm-/131042491419', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:23', `EndTime1` = '2014-06-07 13:11:23', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491419' 
 Execution Time:0.000792980194092

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491419'
AND `from_ebay` =  'true' 
 Execution Time:0.000288009643555

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491419'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/rgwAAOxy3NBSfjR~/$T2eC16F,!ycFIduMs9WYBSfjR+T5,g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000227928161621

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491419', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/rgwAAOxy3NBSfjR~/$T2eC16F,!ycFIduMs9WYBSfjR+T5,g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000996828079224

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133037567139

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0025041103363

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491388' 
 Execution Time:0.000521898269653

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491388'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000313997268677

UPDATE `item` SET `ItemID` = '131042491388', `Title` = 'SKF 99146 Speedie Sleeve Shaft Repair 35.84-35.99mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99146</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>35.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>35.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>35.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>45.24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>16.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>24.99mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '26.9', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99146-Speedie-Sleeve-Shaft-Repair-35-84-35-99mm-/131042491388', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99146-Speedie-Sleeve-Shaft-Repair-35-84-35-99mm-/131042491388', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:18', `EndTime1` = '2014-06-07 13:11:18', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491388' 
 Execution Time:0.00156402587891

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491388'
AND `from_ebay` =  'true' 
 Execution Time:0.00253510475159

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491388'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/HoAAAOxydB1SfjR8/$(KGrHqR,!nYFJ)HsTSP1BSfjR9!bYg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00065279006958

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491388', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/HoAAAOxydB1SfjR8/$(KGrHqR,!nYFJ)HsTSP1BSfjR9!bYg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000922918319702

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00012993812561

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.01222229004E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491475' 
 Execution Time:0.00048303604126

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491475'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000931024551392

UPDATE `item` SET `ItemID` = '131042491475', `Title` = 'SKF 99155 Speedie Sleeve Shaft Repair 39.34-39.5mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99155</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>39.34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>39.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>39.42mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>47.22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.81mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '27.38', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99155-Speedie-Sleeve-Shaft-Repair-39-34-39-5mm-/131042491475', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99155-Speedie-Sleeve-Shaft-Repair-39-34-39-5mm-/131042491475', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '101', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:30', `EndTime1` = '2014-06-07 13:11:30', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491475' 
 Execution Time:0.00188112258911

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491475'
AND `from_ebay` =  'true' 
 Execution Time:0.000734090805054

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491475'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/ekEAAMXQUmFSfjSa/$T2eC16FHJH!FFlg8Ys4BBSfjS,mFy!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000263214111328

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491475', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/ekEAAMXQUmFSfjSa/$T2eC16FHJH!FFlg8Ys4BBSfjS,mFy!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000825881958008

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000157833099365

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000123977661133

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491543' 
 Execution Time:0.000761032104492

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491543'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000635862350464

UPDATE `item` SET `ItemID` = '131042491543', `Title` = 'SKF 99166 Speedie Sleeve Shaft Repair 41.83-42.01mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99166</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>41.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>42.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>41.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>53.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>11.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>14.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>21.49mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '27.12', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99166-Speedie-Sleeve-Shaft-Repair-41-83-42-01mm-/131042491543', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99166-Speedie-Sleeve-Shaft-Repair-41-83-42-01mm-/131042491543', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:42', `EndTime1` = '2014-06-07 13:11:42', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491543' 
 Execution Time:0.00103497505188

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491543'
AND `from_ebay` =  'true' 
 Execution Time:0.000546932220459

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491543'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/xhsAAOxy3zNSfjST/$T2eC16hHJIkFHR8BBTKfBSfjST3qb!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000661134719849

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491543', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/xhsAAOxy3zNSfjST/$T2eC16hHJIkFHR8BBTKfBSfjST3qb!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000613927841187

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00010085105896

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491432' 
 Execution Time:0.00153207778931

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491432'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00128602981567

UPDATE `item` SET `ItemID` = '131042491432', `Title` = 'SKF 99150 Speedie Sleeve Shaft Repair 38.02-38.18mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99150</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>38.02mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>38.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>38.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>45.24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>9.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.81mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '26.81', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99150-Speedie-Sleeve-Shaft-Repair-38-02-38-18mm-/131042491432', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99150-Speedie-Sleeve-Shaft-Repair-38-02-38-18mm-/131042491432', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:25', `EndTime1` = '2014-06-07 13:11:25', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491432' 
 Execution Time:0.00174498558044

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491432'
AND `from_ebay` =  'true' 
 Execution Time:0.000595808029175

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491432'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/wI0AAMXQWzNSfjR~/$(KGrHqJ,!k4FJz+HJl+lBSfjS!E68!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00139021873474

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491432', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/wI0AAMXQWzNSfjR~/$(KGrHqJ,!k4FJz+HJl+lBSfjS!E68!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00132417678833

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000171899795532

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.41753387451E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491345' 
 Execution Time:0.000429153442383

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491345'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000293016433716

UPDATE `item` SET `ItemID` = '131042491345', `Title` = 'SKF 99139 Speedie Sleeve Shaft Repair 34.92-35.08mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99139</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>34.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>35.08mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>34.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>41.61mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>16mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>20.65mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '26.29', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99139-Speedie-Sleeve-Shaft-Repair-34-92-35-08mm-/131042491345', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99139-Speedie-Sleeve-Shaft-Repair-34-92-35-08mm-/131042491345', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:14', `EndTime1` = '2014-06-07 13:11:14', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491345' 
 Execution Time:0.00388097763062

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491345'
AND `from_ebay` =  'true' 
 Execution Time:0.00082802772522

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491345'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/5p8AAOxyzi9SfjR2/$(KGrHqYOKp0FJh4OkYmRBSfjR2K2o!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000377178192139

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491345', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/5p8AAOxyzi9SfjR2/$(KGrHqYOKp0FJh4OkYmRBSfjR2K2o!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00108194351196

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000168085098267

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000118017196655

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491570' 
 Execution Time:0.000476121902466

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491570'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000319957733154

UPDATE `item` SET `ItemID` = '131042491570', `Title` = 'SKF 99169 Speedie Sleeve Shaft Repair 41.83-42.01mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99169</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>41.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>42.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>41.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>53.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>21.01mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '27.42', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99169-Speedie-Sleeve-Shaft-Repair-41-83-42-01mm-/131042491570', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99169-Speedie-Sleeve-Shaft-Repair-41-83-42-01mm-/131042491570', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:46', `EndTime1` = '2014-06-07 13:11:46', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491570' 
 Execution Time:0.00220394134521

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491570'
AND `from_ebay` =  'true' 
 Execution Time:0.000785112380981

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491570'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/xkQAAOxy3zNSfjSV/$(KGrHqN,!rUFJm92ykL,BSfjSVewlg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00025486946106

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491570', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/xkQAAOxy3zNSfjSV/$(KGrHqN,!rUFJm92ykL,BSfjSVewlg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000827074050903

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000102996826172

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491504' 
 Execution Time:0.00279092788696

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491504'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000331878662109

UPDATE `item` SET `ItemID` = '131042491504', `Title` = 'SKF 99161 Speedie Sleeve Shaft Repair 41.2-41.35mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99161</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>41.2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>41.35mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>41.27mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>47.63mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.81mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '27.1', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99161-Speedie-Sleeve-Shaft-Repair-41-2-41-35mm-/131042491504', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99161-Speedie-Sleeve-Shaft-Repair-41-2-41-35mm-/131042491504', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:34', `EndTime1` = '2014-06-07 13:11:34', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491504' 
 Execution Time:0.000876188278198

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491504'
AND `from_ebay` =  'true' 
 Execution Time:0.000600099563599

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491504'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/qL8AAMXQfvlSfjSN/$(KGrHqZHJBoFJfGTBIQCBSfjSNkr7!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000869035720825

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491504', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/qL8AAMXQfvlSfjSN/$(KGrHqZHJBoFJfGTBIQCBSfjSNkr7!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00128316879272

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000112056732178

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.39233398438E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491609' 
 Execution Time:0.000373840332031

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491609'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000283002853394

UPDATE `item` SET `ItemID` = '131042491609', `Title` = 'SKF 99174 Speedie Sleeve Shaft Repair 44.37-44.53mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99174</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>44.37mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>44.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>44.45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>52.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>20.65mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '27.83', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99174-Speedie-Sleeve-Shaft-Repair-44-37-44-53mm-/131042491609', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99174-Speedie-Sleeve-Shaft-Repair-44-37-44-53mm-/131042491609', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '103', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:53', `EndTime1` = '2014-06-07 13:11:53', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491609' 
 Execution Time:0.00243711471558

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491609'
AND `from_ebay` =  'true' 
 Execution Time:0.000854015350342

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491609'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/6pUAAOxyzi9SfjSg/$(KGrHqV,!pEFJ6IjnSlgBSfjSgjwjg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000410079956055

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491609', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/6pUAAOxyzi9SfjSg/$(KGrHqV,!pEFJ6IjnSlgBSfjSgjwjg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.0188269615173

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146150588989

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001220703125

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491718' 
 Execution Time:0.000514030456543

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491718'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000266790390015

UPDATE `item` SET `ItemID` = '131042491718', `Title` = 'SKF 99188 Speedie Sleeve Shaft Repair 47.55-47.7mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99188</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>47.55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>47.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>47.63mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>55.96mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>10.54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>18.9mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '28.74', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99188-Speedie-Sleeve-Shaft-Repair-47-55-47-7mm-/131042491718', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99188-Speedie-Sleeve-Shaft-Repair-47-55-47-7mm-/131042491718', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:07', `EndTime1` = '2014-06-07 13:12:07', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491718' 
 Execution Time:0.00172519683838

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491718'
AND `from_ebay` =  'true' 
 Execution Time:0.000883102416992

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491718'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/q-4AAMXQfvlSfjSx/$T2eC16NHJIgFHR-NehKmBSfjS)om(!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000274181365967

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491718', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/q-4AAMXQfvlSfjSx/$T2eC16NHJIgFHR-NehKmBSfjS)om(!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00120806694031

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.6784362793E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491639' 
 Execution Time:0.000586032867432

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491639'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00023889541626

UPDATE `item` SET `ItemID` = '131042491639', `Title` = 'SKF 99176 Speedie Sleeve Shaft Repair 44.73-44.88mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99176</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>44.73mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>44.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>44.86mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>52.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>20.65mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '28.07', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99176-Speedie-Sleeve-Shaft-Repair-44-73-44-88mm-/131042491639', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99176-Speedie-Sleeve-Shaft-Repair-44-73-44-88mm-/131042491639', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:11:57', `EndTime1` = '2014-06-07 13:11:57', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491639' 
 Execution Time:0.00281190872192

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491639'
AND `from_ebay` =  'true' 
 Execution Time:0.000715970993042

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491639'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/gvkAAOxyLN9SfjSn/$T2eC16FHJG!FFmu4mPHgBSfjSn(qTQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000532150268555

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491639', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/gvkAAOxyLN9SfjSn/$T2eC16FHJG!FFmu4mPHgBSfjSn(qTQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000782012939453

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000113964080811

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000104904174805

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491774' 
 Execution Time:0.000576972961426

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491774'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000262975692749

UPDATE `item` SET `ItemID` = '131042491774', `Title` = 'SKF 99196 Speedie Sleeve Shaft Repair 49.91-50.06mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99196</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>49.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>50.06mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>50.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>57mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>16.97mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>24.99mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '28.54', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99196-Speedie-Sleeve-Shaft-Repair-49-91-50-06mm-/131042491774', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99196-Speedie-Sleeve-Shaft-Repair-49-91-50-06mm-/131042491774', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:17', `EndTime1` = '2014-06-07 13:12:17', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491774' 
 Execution Time:0.00226020812988

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491774'
AND `from_ebay` =  'true' 
 Execution Time:0.00089693069458

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491774'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7OAAAOxyzi9SfjS5/$T2eC16R,!zgFIc,z,-U3BSfjS5SeJw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000258922576904

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491774', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7OAAAOxyzi9SfjS5/$T2eC16R,!zgFIc,z,-U3BSfjS5SeJw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00122094154358

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.51154327393E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491744' 
 Execution Time:0.000546932220459

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491744'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000355958938599

UPDATE `item` SET `ItemID` = '131042491744', `Title` = 'SKF 99192 Speedie Sleeve Shaft Repair 48.49-48.64mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99192</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>48.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>48.64mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>48.56mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>56.36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>9.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.4mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '29.54', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99192-Speedie-Sleeve-Shaft-Repair-48-49-48-64mm-/131042491744', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99192-Speedie-Sleeve-Shaft-Repair-48-49-48-64mm-/131042491744', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:12', `EndTime1` = '2014-06-07 13:12:12', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491744' 
 Execution Time:0.00131416320801

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491744'
AND `from_ebay` =  'true' 
 Execution Time:0.000639915466309

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491744'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/gzMAAOxyRNJSfjSu/$(KGrHqR,!rQFJq2wu7GwBSfjSvCQ4w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000289916992188

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491744', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/gzMAAOxyRNJSfjSu/$(KGrHqR,!rQFJq2wu7GwBSfjSvCQ4w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00059986114502

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000160217285156

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000108957290649

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491759' 
 Execution Time:0.000535011291504

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491759'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000378847122192

UPDATE `item` SET `ItemID` = '131042491759', `Title` = 'SKF 99193 Speedie Sleeve Shaft Repair 49.12-49.28mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99193</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>49.12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>49.28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>49.23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>56.36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.4mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '30.22', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99193-Speedie-Sleeve-Shaft-Repair-49-12-49-28mm-/131042491759', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99193-Speedie-Sleeve-Shaft-Repair-49-12-49-28mm-/131042491759', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:14', `EndTime1` = '2014-06-07 13:12:14', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491759' 
 Execution Time:0.00154209136963

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491759'
AND `from_ebay` =  'true' 
 Execution Time:0.000702142715454

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491759'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/36oAAOxyTjNSfjSz/$(KGrHqF,!q8FJ2Wo903OBSfjSzK2SQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000355958938599

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491759', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/36oAAOxyTjNSfjSz/$(KGrHqF,!q8FJ2Wo903OBSfjSzK2SQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00104689598083

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149965286255

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000131130218506

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491804' 
 Execution Time:0.000553131103516

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491804'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00037693977356

UPDATE `item` SET `ItemID` = '131042491804', `Title` = 'SKF 99200 Speedie Sleeve Shaft Repair 50.72-50.88mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99200</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>50.72mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>50.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>50.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>61.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>22.23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.4mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '32.12', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99200-Speedie-Sleeve-Shaft-Repair-50-72-50-88mm-/131042491804', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99200-Speedie-Sleeve-Shaft-Repair-50-72-50-88mm-/131042491804', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:22', `EndTime1` = '2014-06-07 13:12:22', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491804' 
 Execution Time:0.001797914505

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491804'
AND `from_ebay` =  'true' 
 Execution Time:0.000885009765625

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491804'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/S68AAOxy4t1SfjS7/$T2eC16Z,!yIFJB0kD,hiBSfjS8LT+!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000714063644409

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491804', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/S68AAOxy4t1SfjS7/$T2eC16Z,!yIFJB0kD,hiBSfjS8LT+!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000670194625854

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123023986816

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.20024108887E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491820' 
 Execution Time:0.000491857528687

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491820'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000282049179077

UPDATE `item` SET `ItemID` = '131042491820', `Title` = 'SKF 99204 Speedie Sleeve Shaft Repair 51.82-51.99mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99204</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>51.82mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>51.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>51.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>62.71mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>15.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.52mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '34.66', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99204-Speedie-Sleeve-Shaft-Repair-51-82-51-99mm-/131042491820', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99204-Speedie-Sleeve-Shaft-Repair-51-82-51-99mm-/131042491820', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:24', `EndTime1` = '2014-06-07 13:12:24', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491820' 
 Execution Time:0.00179386138916

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491820'
AND `from_ebay` =  'true' 
 Execution Time:0.000984191894531

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491820'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/M-4AAOxyXDhSfjS-/$(KGrHqF,!q8FJ2Wo903OBSfjS-LoKQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000268220901489

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491820', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/M-4AAOxyXDhSfjS-/$(KGrHqF,!q8FJ2Wo903OBSfjS-LoKQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00102400779724

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000147104263306

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000108003616333

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491788' 
 Execution Time:0.000341892242432

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491788'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000262022018433

UPDATE `item` SET `ItemID` = '131042491788', `Title` = 'SKF 99199 Speedie Sleeve Shaft Repair 50.72-50.88mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99199</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>50.72mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>50.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>50.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>61.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>25.4mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '31.9', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99199-Speedie-Sleeve-Shaft-Repair-50-72-50-88mm-/131042491788', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99199-Speedie-Sleeve-Shaft-Repair-50-72-50-88mm-/131042491788', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:19', `EndTime1` = '2014-06-07 13:12:19', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491788' 
 Execution Time:0.00116896629333

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491788'
AND `from_ebay` =  'true' 
 Execution Time:0.00056004524231

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491788'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/~VwAAOxypNtSfjS3/$T2eC16VHJF4FFkswbkGjBSfjS3(b7w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00145101547241

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491788', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/~VwAAOxypNtSfjS3/$T2eC16VHJF4FFkswbkGjBSfjS3(b7w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00390195846558

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146865844727

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000125885009766

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491879' 
 Execution Time:0.000556945800781

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491879'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00103878974915

UPDATE `item` SET `ItemID` = '131042491879', `Title` = 'SKF 99215 Speedie Sleeve Shaft Repair 54.91-55.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99215</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>54.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>55.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>54.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>62mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '31.39', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99215-Speedie-Sleeve-Shaft-Repair-54-91-55-07mm-/131042491879', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99215-Speedie-Sleeve-Shaft-Repair-54-91-55-07mm-/131042491879', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '102', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:31', `EndTime1` = '2014-06-07 13:12:31', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491879' 
 Execution Time:0.00348305702209

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491879'
AND `from_ebay` =  'true' 
 Execution Time:0.000845193862915

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491879'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7ioAAOxyzi9SfjTJ/$T2eC16N,!)MFIcRi3BoEBSfjTJOwwQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000303983688354

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491879', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7ioAAOxyzi9SfjTJ/$T2eC16N,!)MFIcRi3BoEBSfjTJOwwQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000802993774414

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149965286255

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00011420249939

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491914' 
 Execution Time:0.00042200088501

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491914'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000240087509155

UPDATE `item` SET `ItemID` = '131042491914', `Title` = 'SKF 99231 Speedie Sleeve Shaft Repair 58.65-58.8mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99231</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>58.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>58.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>58.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>68.28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '31.43', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99231-Speedie-Sleeve-Shaft-Repair-58-65-58-8mm-/131042491914', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99231-Speedie-Sleeve-Shaft-Repair-58-65-58-8mm-/131042491914', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:37', `EndTime1` = '2014-06-07 13:12:37', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491914' 
 Execution Time:0.00188899040222

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491914'
AND `from_ebay` =  'true' 
 Execution Time:0.000583171844482

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491914'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/hdQAAOxyRNJSfjTM/$(KGrHqN,!rUFJm92ykL,BSfjTMdgN!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000230073928833

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491914', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/hdQAAOxyRNJSfjTM/$(KGrHqN,!rUFJm92ykL,BSfjTMdgN!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000545978546143

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000156879425049

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000115156173706

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491901' 
 Execution Time:0.000432968139648

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491901'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000893115997314

UPDATE `item` SET `ItemID` = '131042491901', `Title` = 'SKF 99227 Speedie Sleeve Shaft Repair 57.12-57.28mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99227</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>57.12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>57.28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>57.15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>64.29mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>33.35mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '33.67', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99227-Speedie-Sleeve-Shaft-Repair-57-12-57-28mm-/131042491901', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99227-Speedie-Sleeve-Shaft-Repair-57-12-57-28mm-/131042491901', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:35', `EndTime1` = '2014-06-07 13:12:35', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491901' 
 Execution Time:0.00265693664551

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491901'
AND `from_ebay` =  'true' 
 Execution Time:0.000949144363403

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491901'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/JSQAAOxydB1SfjTG/$T2eC16JHJFsFFSQJ7RohBSfjTGiFJg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000273942947388

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491901', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/JSQAAOxydB1SfjTG/$T2eC16JHJFsFFSQJ7RohBSfjTGiFJg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00201320648193

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000107049942017

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.39097595215E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491891' 
 Execution Time:0.000743865966797

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491891'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000242948532104

UPDATE `item` SET `ItemID` = '131042491891', `Title` = 'SKF 99225 Speedie Sleeve Shaft Repair 57.12-57.28mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99225</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>57.12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>57.28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>57.15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>64.29mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>33.35mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '33.04', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99225-Speedie-Sleeve-Shaft-Repair-57-12-57-28mm-/131042491891', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99225-Speedie-Sleeve-Shaft-Repair-57-12-57-28mm-/131042491891', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:33', `EndTime1` = '2014-06-07 13:12:33', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491891' 
 Execution Time:0.0019109249115

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491891'
AND `from_ebay` =  'true' 
 Execution Time:0.000709056854248

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491891'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/~0cAAOxypNtSfjTP/$(KGrHqJ,!rQFJrC8BN8EBSfjTPPJH!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000756978988647

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491891', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/~0cAAOxypNtSfjTP/$(KGrHqJ,!rQFJrC8BN8EBSfjTPPJH!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000664949417114

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000147819519043

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000142097473145

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491931' 
 Execution Time:0.000976085662842

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491931'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000886917114258

UPDATE `item` SET `ItemID` = '131042491931', `Title` = 'SKF 99233 Speedie Sleeve Shaft Repair 59.11-59.26mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99233</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>59.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>59.26mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>59.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>38.1mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '33.98', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99233-Speedie-Sleeve-Shaft-Repair-59-11-59-26mm-/131042491931', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99233-Speedie-Sleeve-Shaft-Repair-59-11-59-26mm-/131042491931', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:40', `EndTime1` = '2014-06-07 13:12:40', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491931' 
 Execution Time:0.000664234161377

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491931'
AND `from_ebay` =  'true' 
 Execution Time:0.00087308883667

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491931'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/hl0AAOxyRNJSfjTR/$(KGrHqIOKo0FJfZfc)nuBSfjTRvlwQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00020694732666

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491931', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/hl0AAOxyRNJSfjTR/$(KGrHqIOKo0FJfZfc)nuBSfjTRvlwQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000422954559326

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000119924545288

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.41753387451E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492022' 
 Execution Time:0.000361919403076

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492022'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000402927398682

UPDATE `item` SET `ItemID` = '131042492022', `Title` = 'SKF 99242 Speedie Sleeve Shaft Repair 61.85-62mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99242</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>61.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>62mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>61.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>71.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>15.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>36.2mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '32.84', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99242-Speedie-Sleeve-Shaft-Repair-61-85-62mm-/131042492022', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99242-Speedie-Sleeve-Shaft-Repair-61-85-62mm-/131042492022', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:51', `EndTime1` = '2014-06-07 13:12:51', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492022' 
 Execution Time:0.000842094421387

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492022'
AND `from_ebay` =  'true' 
 Execution Time:0.000773906707764

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492022'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/NnoAAOxyXDhSfjTe/$(KGrHqRHJ!4FJugTdIYZBSfjTeOsz!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000258922576904

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492022', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/NnoAAOxyXDhSfjTe/$(KGrHqRHJ!4FJugTdIYZBSfjTeOsz!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000486135482788

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000107049942017

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.79764556885E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491961' 
 Execution Time:0.000513076782227

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491961'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00029182434082

UPDATE `item` SET `ItemID` = '131042491961', `Title` = 'SKF 99237 Speedie Sleeve Shaft Repair 60.3-60.45mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99237</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>60.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>60.45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>60.33mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '34.04', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99237-Speedie-Sleeve-Shaft-Repair-60-3-60-45mm-/131042491961', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99237-Speedie-Sleeve-Shaft-Repair-60-3-60-45mm-/131042491961', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:44', `EndTime1` = '2014-06-07 13:12:44', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491961' 
 Execution Time:0.00147199630737

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491961'
AND `from_ebay` =  'true' 
 Execution Time:0.000655174255371

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491961'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/NYcAAOxyXDhSfjTS/$(KGrHqR,!jYFJvRnmyIUBSfjTSY3Rg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000294923782349

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491961', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/NYcAAOxyXDhSfjTS/$(KGrHqR,!jYFJvRnmyIUBSfjTSY3Rg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000690937042236

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00011682510376

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000105142593384

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042491943' 
 Execution Time:0.000609874725342

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042491943'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000699996948242

UPDATE `item` SET `ItemID` = '131042491943', `Title` = 'SKF 99235 Speedie Sleeve Shaft Repair 59.92-60.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99235</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>59.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>60.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>59.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>70.74mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '32.1', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99235-Speedie-Sleeve-Shaft-Repair-59-92-60-07mm-/131042491943', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99235-Speedie-Sleeve-Shaft-Repair-59-92-60-07mm-/131042491943', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:42', `EndTime1` = '2014-06-07 13:12:42', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042491943' 
 Execution Time:0.00102305412292

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042491943'
AND `from_ebay` =  'true' 
 Execution Time:0.000806093215942

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042491943'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/rpAAAMXQfvlSfjTP/$(KGrHqF,!k8FJlR29NWMBSfjTRNJ0w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000280857086182

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042491943', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/rpAAAMXQfvlSfjTP/$(KGrHqF,!k8FJlR29NWMBSfjTRNJ0w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00101709365845

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00014591217041

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000113010406494

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492099' 
 Execution Time:0.000588178634644

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492099'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000385999679565

UPDATE `item` SET `ItemID` = '131042492099', `Title` = 'SKF 99253 Speedie Sleeve Shaft Repair 63.42-63.58mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99253</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>63.42mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>63.58mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>63.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>71.63mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>16.51mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>22.61mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '28.6', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99253-Speedie-Sleeve-Shaft-Repair-63-42-63-58mm-/131042492099', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99253-Speedie-Sleeve-Shaft-Repair-63-42-63-58mm-/131042492099', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:12:59', `EndTime1` = '2014-06-07 13:12:59', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492099' 
 Execution Time:0.00106906890869

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492099'
AND `from_ebay` =  'true' 
 Execution Time:0.00043511390686

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492099'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7~sAAOxyzi9SfjTh/$(KGrHqYOKpkFJsyPK904BSfjTh(n)g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000226020812988

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492099', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7~sAAOxyzi9SfjTh/$(KGrHqYOKpkFJsyPK904BSfjTh(n)g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00104999542236

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00019383430481

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.20295715332E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492199' 
 Execution Time:0.000725030899048

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492199'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000262975692749

UPDATE `item` SET `ItemID` = '131042492199', `Title` = 'SKF 99269 Speedie Sleeve Shaft Repair 69.85-70mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99269</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>70mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>79.38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>28.57mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>31.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>33.32mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '29.63', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99269-Speedie-Sleeve-Shaft-Repair-69-85-70mm-/131042492199', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99269-Speedie-Sleeve-Shaft-Repair-69-85-70mm-/131042492199', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:12', `EndTime1` = '2014-06-07 13:13:12', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492199' 
 Execution Time:0.00188207626343

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492199'
AND `from_ebay` =  'true' 
 Execution Time:0.00110101699829

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492199'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/gasAAMXQUmFSfjTx/$T2eC16FHJGoFFvm9KS6iBSfjT)65pQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00105094909668

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492199', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/gasAAMXQUmFSfjTx/$T2eC16FHJGoFFvm9KS6iBSfjT)65pQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00213813781738

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000116109848022

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.70227813721E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492161' 
 Execution Time:0.000730037689209

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492161'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00031590461731

UPDATE `item` SET `ItemID` = '131042492161', `Title` = 'SKF 99262 Speedie Sleeve Shaft Repair 66.67-66.83mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99262</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>66.67mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>66.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>66.67mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>77.39mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '30.41', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99262-Speedie-Sleeve-Shaft-Repair-66-67-66-83mm-/131042492161', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99262-Speedie-Sleeve-Shaft-Repair-66-67-66-83mm-/131042492161', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:08', `EndTime1` = '2014-06-07 13:13:08', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492161' 
 Execution Time:0.00193095207214

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492161'
AND `from_ebay` =  'true' 
 Execution Time:0.00112199783325

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492161'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/8poAAOxygj5SfjT0/$T2eC16R,!y4FI,bZtFWEBSfjTzvtCg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000269889831543

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492161', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/8poAAOxygj5SfjT0/$T2eC16R,!y4FI,bZtFWEBSfjTzvtCg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000802993774414

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000241994857788

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000519037246704

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492121' 
 Execution Time:0.00150513648987

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492121'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000846147537231

UPDATE `item` SET `ItemID` = '131042492121', `Title` = 'SKF 99259 Speedie Sleeve Shaft Repair 65.91-66.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99259</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>65.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>66.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>65.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>75.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '36.17', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99259-Speedie-Sleeve-Shaft-Repair-65-91-66-07mm-/131042492121', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99259-Speedie-Sleeve-Shaft-Repair-65-91-66-07mm-/131042492121', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:03', `EndTime1` = '2014-06-07 13:13:03', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492121' 
 Execution Time:0.0022120475769

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492121'
AND `from_ebay` =  'true' 
 Execution Time:0.000554084777832

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492121'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/5B0AAOxyTjNSfjTn/$T2eC16F,!)0FI,PYhL3CBSfjTnDvwg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00290989875793

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492121', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/5B0AAOxyTjNSfjTn/$T2eC16F,!)0FI,PYhL3CBSfjTnDvwg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000606060028076

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123023986816

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.60691070557E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492220' 
 Execution Time:0.000550031661987

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492220'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000409126281738

UPDATE `item` SET `ItemID` = '131042492220', `Title` = 'SKF 99272 Speedie Sleeve Shaft Repair 69.85-70mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99272</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>70mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>69.85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>79.38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>10.31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '35.18', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99272-Speedie-Sleeve-Shaft-Repair-69-85-70mm-/131042492220', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99272-Speedie-Sleeve-Shaft-Repair-69-85-70mm-/131042492220', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:15', `EndTime1` = '2014-06-07 13:13:15', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492220' 
 Execution Time:0.00112199783325

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492220'
AND `from_ebay` =  'true' 
 Execution Time:0.000504016876221

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492220'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/t9cAAOxy3NBSfjTw/$(KGrHqNHJBMFJiUqq3SIBSfjTwt4ug~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000275850296021

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492220', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/t9cAAOxy3NBSfjTw/$(KGrHqNHJBMFJiUqq3SIBSfjTwt4ug~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000595092773438

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000190019607544

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001220703125

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492262' 
 Execution Time:0.000379085540771

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492262'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000458002090454

UPDATE `item` SET `ItemID` = '131042492262', `Title` = 'SKF 99281 Speedie Sleeve Shaft Repair 71.35-71.5mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99281</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>71.35mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>71.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>71.45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>80.98mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>15.09mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '31.76', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99281-Speedie-Sleeve-Shaft-Repair-71-35-71-5mm-/131042492262', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99281-Speedie-Sleeve-Shaft-Repair-71-35-71-5mm-/131042492262', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:22', `EndTime1` = '2014-06-07 13:13:22', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492262' 
 Execution Time:0.00120782852173

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492262'
AND `from_ebay` =  'true' 
 Execution Time:0.000820159912109

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492262'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/8f8AAOxyzi9SfjT4/$T2eC16V,!)cFIeRjtM(nBSfjT5CSFQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000505924224854

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492262', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/8f8AAOxyzi9SfjT4/$T2eC16V,!)cFIeRjtM(nBSfjT5CSFQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.0244998931885

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.29832458496E-5

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.79628753662E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492249' 
 Execution Time:0.000557899475098

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492249'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00028920173645

UPDATE `item` SET `ItemID` = '131042492249', `Title` = 'SKF 99276 Speedie Sleeve Shaft Repair 69.93-70.08mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99276</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>69.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>70.08mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>70mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>79.38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '32.76', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99276-Speedie-Sleeve-Shaft-Repair-69-93-70-08mm-/131042492249', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99276-Speedie-Sleeve-Shaft-Repair-69-93-70-08mm-/131042492249', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:19', `EndTime1` = '2014-06-07 13:13:19', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492249' 
 Execution Time:0.00171709060669

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492249'
AND `from_ebay` =  'true' 
 Execution Time:0.00106287002563

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492249'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/uD8AAOxy3NBSfjT1/$(KGrHqV,!qMFJl3-)SFQBSfjT1m-(g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000261068344116

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492249', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/uD8AAOxy3NBSfjT1/$(KGrHqV,!qMFJl3-)SFQBSfjT1m-(g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00126791000366

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000111103057861

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.39233398438E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492418' 
 Execution Time:0.000647068023682

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492418'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000319004058838

UPDATE `item` SET `ItemID` = '131042492418', `Title` = 'SKF 99311 Speedie Sleeve Shaft Repair 79.25-79.4mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99311</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>79.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>79.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>79.38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>89.69mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '33.11', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99311-Speedie-Sleeve-Shaft-Repair-79-25-79-4mm-/131042492418', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99311-Speedie-Sleeve-Shaft-Repair-79-25-79-4mm-/131042492418', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:41', `EndTime1` = '2014-06-07 13:13:41', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492418' 
 Execution Time:0.00149393081665

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492418'
AND `from_ebay` =  'true' 
 Execution Time:0.000509977340698

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492418'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jKMAAOxyLN9SfjUZ/$(KGrHqV,!lsFJjvjlcb9BSfjUZ(hUQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000229835510254

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492418', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jKMAAOxyLN9SfjUZ/$(KGrHqV,!lsFJjvjlcb9BSfjUZ(hUQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00082802772522

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123023986816

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.70363616943E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492289' 
 Execution Time:0.000777006149292

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492289'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000292062759399

UPDATE `item` SET `ItemID` = '131042492289', `Title` = 'SKF 99289 Speedie Sleeve Shaft Repair 74.93-75.08mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99289</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>74.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>75.08mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>75.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>83.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>15.09mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>27.51mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '35.86', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99289-Speedie-Sleeve-Shaft-Repair-74-93-75-08mm-/131042492289', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99289-Speedie-Sleeve-Shaft-Repair-74-93-75-08mm-/131042492289', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:26', `EndTime1` = '2014-06-07 13:13:26', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492289' 
 Execution Time:0.00147008895874

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492289'
AND `from_ebay` =  'true' 
 Execution Time:0.000418901443481

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492289'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/ilQAAOxyLN9SfjT-/$T2eC16N,!)MFIcRi3BoEBSfjT-rD5g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00138211250305

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492289', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/ilQAAOxyLN9SfjT-/$T2eC16N,!)MFIcRi3BoEBSfjT-rD5g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000498056411743

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000316143035889

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000117063522339

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492434' 
 Execution Time:0.000447034835815

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492434'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000261783599854

UPDATE `item` SET `ItemID` = '131042492434', `Title` = 'SKF 99313 Speedie Sleeve Shaft Repair 79.81-80.01mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99313</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>79.81mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>80.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>80.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>89.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '33.94', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99313-Speedie-Sleeve-Shaft-Repair-79-81-80-01mm-/131042492434', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99313-Speedie-Sleeve-Shaft-Repair-79-81-80-01mm-/131042492434', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:43', `EndTime1` = '2014-06-07 13:13:43', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492434' 
 Execution Time:0.00199699401855

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492434'
AND `from_ebay` =  'true' 
 Execution Time:0.000750064849854

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492434'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/uiEAAOxy3NBSfjUK/$(KGrHqJ,!l4FJ7qKrKvpBSfjUKrvp!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000245809555054

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492434', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/uiEAAOxy3NBSfjUK/$(KGrHqJ,!l4FJ7qKrKvpBSfjUKrvp!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00071907043457

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000134944915771

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000110149383545

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492492' 
 Execution Time:0.00102496147156

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492492'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00112700462341

UPDATE `item` SET `ItemID` = '131042492492', `Title` = 'SKF 99322 Speedie Sleeve Shaft Repair 82.47-82.63mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99322</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>82.47mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>82.63mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>82.55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>91.29mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '35.22', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99322-Speedie-Sleeve-Shaft-Repair-82-47-82-63mm-/131042492492', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99322-Speedie-Sleeve-Shaft-Repair-82-47-82-63mm-/131042492492', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:50', `EndTime1` = '2014-06-07 13:13:50', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492492' 
 Execution Time:0.00133395195007

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492492'
AND `from_ebay` =  'true' 
 Execution Time:0.000862121582031

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492492'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/zXQAAMXQWzNSfjUa/$T2eC16N,!yMFIbzs2)QkBSfjUbDDS!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000241041183472

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492492', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/zXQAAMXQWzNSfjUa/$T2eC16N,!yMFIbzs2)QkBSfjUbDDS!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000658988952637

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.89301300049E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492308' 
 Execution Time:0.000411987304688

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492308'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000760078430176

UPDATE `item` SET `ItemID` = '131042492308', `Title` = 'SKF 99294 Speedie Sleeve Shaft Repair 74.93-75.08mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99294</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>74.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>75.08mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>75.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>83.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>26.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>33.35mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '35.47', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99294-Speedie-Sleeve-Shaft-Repair-74-93-75-08mm-/131042492308', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99294-Speedie-Sleeve-Shaft-Repair-74-93-75-08mm-/131042492308', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:28', `EndTime1` = '2014-06-07 13:13:28', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492308' 
 Execution Time:0.00136685371399

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492308'
AND `from_ebay` =  'true' 
 Execution Time:0.00135588645935

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492308'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/OV8AAOxyXDhSfjT~/$(KGrHqJ,!mIFJps,EdIiBSfjT+c02!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000993967056274

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492308', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/OV8AAOxyXDhSfjT~/$(KGrHqJ,!mIFJps,EdIiBSfjT+c02!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000762939453125

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000111103057861

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.89165496826E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492523' 
 Execution Time:0.000672101974487

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492523'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000506162643433

UPDATE `item` SET `ItemID` = '131042492523', `Title` = 'SKF 99325 Speedie Sleeve Shaft Repair 82.55-82.7mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99325</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>82.55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>82.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>82.55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>91.06mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '34.38', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99325-Speedie-Sleeve-Shaft-Repair-82-55-82-7mm-/131042492523', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99325-Speedie-Sleeve-Shaft-Repair-82-55-82-7mm-/131042492523', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:55', `EndTime1` = '2014-06-07 13:13:55', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492523' 
 Execution Time:0.00174188613892

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492523'
AND `from_ebay` =  'true' 
 Execution Time:0.00157785415649

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492523'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jFYAAOxyLN9SfjUW/$T2eC16d,!y0FI,B2mL(cBSfjUWQz1w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000424861907959

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492523', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jFYAAOxyLN9SfjUW/$T2eC16d,!y0FI,B2mL(cBSfjUWQz1w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000750064849854

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000159978866577

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000115871429443

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492467' 
 Execution Time:0.00446105003357

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492467'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00940799713135

UPDATE `item` SET `ItemID` = '131042492467', `Title` = 'SKF 99317 Speedie Sleeve Shaft Repair 79.91-80.09mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99317</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>79.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>80.09mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>80.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>89.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>15.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '33.91', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99317-Speedie-Sleeve-Shaft-Repair-79-91-80-09mm-/131042492467', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99317-Speedie-Sleeve-Shaft-Repair-79-91-80-09mm-/131042492467', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:48', `EndTime1` = '2014-06-07 13:13:48', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492467' 
 Execution Time:0.0068359375

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492467'
AND `from_ebay` =  'true' 
 Execution Time:0.00148701667786

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492467'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jFoAAOxyRNJSfjUX/$T2eC16V,!)MFIbMjwl-5BSfjUYC(-Q~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000669002532959

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492467', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jFoAAOxyRNJSfjUX/$T2eC16V,!)MFIbMjwl-5BSfjUYC(-Q~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00124287605286

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000135898590088

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.29832458496E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492341' 
 Execution Time:0.000423192977905

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492341'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000288009643555

UPDATE `item` SET `ItemID` = '131042492341', `Title` = 'SKF 99298 Speedie Sleeve Shaft Repair 75.95-76.1mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99298</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>75.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>76.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>76.02mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>85.32mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>14.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '32.75', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99298-Speedie-Sleeve-Shaft-Repair-75-95-76-1mm-/131042492341', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99298-Speedie-Sleeve-Shaft-Repair-75-95-76-1mm-/131042492341', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:33', `EndTime1` = '2014-06-07 13:13:33', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492341' 
 Execution Time:0.00148892402649

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492341'
AND `from_ebay` =  'true' 
 Execution Time:0.000553131103516

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492341'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/8~UAAOxygj5SfjUB/$(KGrHqVHJ!0FJ3DSyLR3BSfjUBWNN!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000288009643555

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492341', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/8~UAAOxygj5SfjUB/$(KGrHqVHJ!0FJ3DSyLR3BSfjUBWNN!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.0020010471344

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000118970870972

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492508' 
 Execution Time:0.00133395195007

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492508'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000324010848999

UPDATE `item` SET `ItemID` = '131042492508', `Title` = 'SKF 99324 Speedie Sleeve Shaft Repair 82.55-82.7mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99324</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>82.55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>82.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>82.55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>90.81mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>15.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>18.26mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '34.19', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99324-Speedie-Sleeve-Shaft-Repair-82-55-82-7mm-/131042492508', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99324-Speedie-Sleeve-Shaft-Repair-82-55-82-7mm-/131042492508', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:13:52', `EndTime1` = '2014-06-07 13:13:52', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492508' 
 Execution Time:0.00144505500793

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492508'
AND `from_ebay` =  'true' 
 Execution Time:0.00068998336792

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492508'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/O3AAAOxyXDhSfjUX/$T2eC16N,!zkFJF7mc--0BSfjU(u8T!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00197196006775

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492508', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/O3AAAOxyXDhSfjUX/$T2eC16N,!zkFJF7mc--0BSfjU(u8T!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000626802444458

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00101494789124

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000123023986816

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492581' 
 Execution Time:0.000529050827026

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492581'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000289916992188

UPDATE `item` SET `ItemID` = '131042492581', `Title` = 'SKF 99339 Speedie Sleeve Shaft Repair 87.25-87.4mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99339</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>87.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>87.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>87.33mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>97.64mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>23.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>35.71mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '33.49', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99339-Speedie-Sleeve-Shaft-Repair-87-25-87-4mm-/131042492581', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99339-Speedie-Sleeve-Shaft-Repair-87-25-87-4mm-/131042492581', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:03', `EndTime1` = '2014-06-07 13:14:03', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492581' 
 Execution Time:0.00222396850586

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492581'
AND `from_ebay` =  'true' 
 Execution Time:0.000864028930664

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492581'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jWMAAOxyRNJSfjUj/$(KGrHqN,!l0FJr,t3bIOBSfjUk!KUg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000839948654175

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492581', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jWMAAOxyRNJSfjUj/$(KGrHqN,!l0FJr,t3bIOBSfjUk!KUg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000851154327393

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000143051147461

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000113964080811

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492713' 
 Execution Time:0.000797033309937

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492713'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000215768814087

UPDATE `item` SET `ItemID` = '131042492713', `Title` = 'SKF 99374 Speedie Sleeve Shaft Repair 95-95.15mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99374</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>95.15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>95.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>102.39mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>8.74mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>12.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>45.72mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '36.97', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99374-Speedie-Sleeve-Shaft-Repair-95-95-15mm-/131042492713', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99374-Speedie-Sleeve-Shaft-Repair-95-95-15mm-/131042492713', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:20', `EndTime1` = '2014-06-07 13:14:20', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492713' 
 Execution Time:0.00183296203613

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492713'
AND `from_ebay` =  'true' 
 Execution Time:0.000612020492554

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492713'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jqgAAOxyRNJSfjUy/$(KGrHqJHJCIFJ3gsF(hMBSfjUyt!3Q~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000664949417114

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492713', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/jqgAAOxyRNJSfjUy/$(KGrHqJHJCIFJ3gsF(hMBSfjUyt!3Q~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000690937042236

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.29696655273E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492743' 
 Execution Time:0.013356924057

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492743'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000349044799805

UPDATE `item` SET `ItemID` = '131042492743', `Title` = 'SKF 99387 Speedie Sleeve Shaft Repair 98.37-98.53mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99387</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>98.37mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>98.53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>98.42mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>107.16mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '39.37', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99387-Speedie-Sleeve-Shaft-Repair-98-37-98-53mm-/131042492743', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99387-Speedie-Sleeve-Shaft-Repair-98-37-98-53mm-/131042492743', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:23', `EndTime1` = '2014-06-07 13:14:23', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492743' 
 Execution Time:0.00105714797974

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492743'
AND `from_ebay` =  'true' 
 Execution Time:0.000541925430298

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492743'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/kC0AAOxyLN9SfjVD/$T2eC16d,!ycFIc59,3olBSfjVGPzRw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000204801559448

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492743', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/kC0AAOxyLN9SfjVD/$T2eC16d,!ycFIc59,3olBSfjVGPzRw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000625848770142

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000136852264404

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000109910964966

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492645' 
 Execution Time:0.00045919418335

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492645'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00034499168396

UPDATE `item` SET `ItemID` = '131042492645', `Title` = 'SKF 99353 Speedie Sleeve Shaft Repair 89.92-90.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99353</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>89.92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>90.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>89.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>101.6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>13.36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>16.94mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>44.45mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '39.1', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99353-Speedie-Sleeve-Shaft-Repair-89-92-90-07mm-/131042492645', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99353-Speedie-Sleeve-Shaft-Repair-89-92-90-07mm-/131042492645', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:11', `EndTime1` = '2014-06-07 13:14:11', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492645' 
 Execution Time:0.00176811218262

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492645'
AND `from_ebay` =  'true' 
 Execution Time:0.000473976135254

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492645'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/9n0AAOxyzi9SfjUt/$(KGrHqN,!lMFJ1ehsFi5BSfjUt3oQ!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000203847885132

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492645', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/9n0AAOxyzi9SfjUt/$(KGrHqN,!lMFJ1ehsFi5BSfjUt3oQ!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00164580345154

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000148057937622

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00010085105896

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492758' 
 Execution Time:0.000566959381104

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492758'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000338077545166

UPDATE `item` SET `ItemID` = '131042492758', `Title` = 'SKF 99393 Speedie Sleeve Shaft Repair 99.95-100.1mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99393</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>99.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>100.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>100.03mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>109.55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>52.07mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '39.89', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99393-Speedie-Sleeve-Shaft-Repair-99-95-100-1mm-/131042492758', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99393-Speedie-Sleeve-Shaft-Repair-99-95-100-1mm-/131042492758', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:25', `EndTime1` = '2014-06-07 13:14:25', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492758' 
 Execution Time:0.00244498252869

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492758'
AND `from_ebay` =  'true' 
 Execution Time:0.000733137130737

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492758'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/j8wAAOxyLN9SfjU-/$(KGrHqJ,!loFJ)PIUG(BBSfjU-)b3w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000330924987793

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492758', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/j8wAAOxyLN9SfjU-/$(KGrHqJ,!loFJ)PIUG(BBSfjU-)b3w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000847101211548

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.29832458496E-5

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.41481781006E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492918' 
 Execution Time:0.000416040420532

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492918'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000257968902588

UPDATE `item` SET `ItemID` = '131042492918', `Title` = 'SKF 99450 Speedie Sleeve Shaft Repair 114.2-114.4mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99450</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>114.2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>114.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>114.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>124.46mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '62.99', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99450-Speedie-Sleeve-Shaft-Repair-114-2-114-4mm-/131042492918', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99450-Speedie-Sleeve-Shaft-Repair-114-2-114-4mm-/131042492918', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:44', `EndTime1` = '2014-06-07 13:14:44', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492918' 
 Execution Time:0.00233697891235

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492918'
AND `from_ebay` =  'true' 
 Execution Time:0.000608921051025

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492918'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/CRoAAOxypNtSfjVH/$(KGrHqV,!qUFJynCoTm,BSfjVH3qWQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00021505355835

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492918', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/CRoAAOxypNtSfjVH/$(KGrHqV,!qUFJynCoTm,BSfjVH3qWQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000596046447754

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000155925750732

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.17911529541E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492948' 
 Execution Time:0.00105404853821

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492948'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000323057174683

UPDATE `item` SET `ItemID` = '131042492948', `Title` = 'SKF 99473 Speedie Sleeve Shaft Repair 119.89-120.09mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99473</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>119.89mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>120.09mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>119.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>129.79mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>24.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>32mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '67.88', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99473-Speedie-Sleeve-Shaft-Repair-119-89-120-09mm-/131042492948', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99473-Speedie-Sleeve-Shaft-Repair-119-89-120-09mm-/131042492948', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:48', `EndTime1` = '2014-06-07 13:14:48', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492948' 
 Execution Time:0.00294995307922

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492948'
AND `from_ebay` =  'true' 
 Execution Time:0.000884056091309

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492948'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/v3gAAOxy3NBSfjVP/$(KGrHqJ,!rQFJrC8BN8EBSfjVO8pn!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000709056854248

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492948', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/v3gAAOxy3NBSfjVP/$(KGrHqJ,!rQFJrC8BN8EBSfjVO8pn!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00369906425476

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000115871429443

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.39233398438E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492852' 
 Execution Time:0.000484943389893

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492852'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000259876251221

UPDATE `item` SET `ItemID` = '131042492852', `Title` = 'SKF 99412 Speedie Sleeve Shaft Repair 104.7-104.9mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99412</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>104.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>104.9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>104.78mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>113.54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>34.92mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '45.53', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99412-Speedie-Sleeve-Shaft-Repair-104-7-104-9mm-/131042492852', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99412-Speedie-Sleeve-Shaft-Repair-104-7-104-9mm-/131042492852', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:33', `EndTime1` = '2014-06-07 13:14:33', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492852' 
 Execution Time:0.000988960266113

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492852'
AND `from_ebay` =  'true' 
 Execution Time:0.00045108795166

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492852'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/PoQAAOxyXDhSfjVA/$(KGrHqR,!lgFJjL!KQu0BSfjV!K(UQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000208854675293

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492852', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/PoQAAOxyXDhSfjVA/$(KGrHqR,!lgFJjL!KQu0BSfjV!K(UQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000394821166992

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.60826873779E-5

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000247955322266

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493019' 
 Execution Time:0.000665903091431

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493019'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00025200843811

UPDATE `item` SET `ItemID` = '131042493019', `Title` = 'SKF 99533 Speedie Sleeve Shaft Repair 134.8-135mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99533</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>134.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>135mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>134.9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>145.67mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '98.12', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99533-Speedie-Sleeve-Shaft-Repair-134-8-135mm-/131042493019', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99533-Speedie-Sleeve-Shaft-Repair-134-8-135mm-/131042493019', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:59', `EndTime1` = '2014-06-07 13:14:59', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493019' 
 Execution Time:0.00151896476746

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493019'
AND `from_ebay` =  'true' 
 Execution Time:0.000620126724243

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493019'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/MZEAAOxydB1SfjVZ/$(KGrHqRHJFUFJ6NQ!iotBSfjVZvmq!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000237941741943

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493019', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/MZEAAOxydB1SfjVZ/$(KGrHqRHJFUFJ6NQ!iotBSfjVZvmq!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000988006591797

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000439882278442

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000123023986816

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492995' 
 Execution Time:0.000400066375732

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492995'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00187802314758

UPDATE `item` SET `ItemID` = '131042492995', `Title` = 'SKF 99498 Speedie Sleeve Shaft Repair 126.95-127.15mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99498</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>126.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>127.15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>127mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>137.16mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>17.48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>36.53mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '70.88', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99498-Speedie-Sleeve-Shaft-Repair-126-95-127-15mm-/131042492995', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99498-Speedie-Sleeve-Shaft-Repair-126-95-127-15mm-/131042492995', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:55', `EndTime1` = '2014-06-07 13:14:55', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492995' 
 Execution Time:0.00148797035217

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492995'
AND `from_ebay` =  'true' 
 Execution Time:0.000581026077271

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492995'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/kYQAAOxyRNJSfjVS/$T2eC16N,!)8FJgLRvB6CBSfjVS0cc!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000221967697144

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492995', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/kYQAAOxyRNJSfjVS/$T2eC16N,!)8FJgLRvB6CBSfjVS0cc!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000535011291504

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128030776978

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000152826309204

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042492964' 
 Execution Time:0.000489950180054

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042492964'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000251054763794

UPDATE `item` SET `ItemID` = '131042492964', `Title` = 'SKF 99491 Speedie Sleeve Shaft Repair 129.97-130.18mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99491</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>129.97mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>130.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>130.18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>139.52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>32.51mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '90.48', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99491-Speedie-Sleeve-Shaft-Repair-129-97-130-18mm-/131042492964', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99491-Speedie-Sleeve-Shaft-Repair-129-97-130-18mm-/131042492964', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:14:50', `EndTime1` = '2014-06-07 13:14:50', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042492964' 
 Execution Time:0.00176119804382

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042492964'
AND `from_ebay` =  'true' 
 Execution Time:0.000879049301147

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042492964'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/MUcAAOxydB1SfjVW/$(KGrHqF,!lUFJbtEMy0LBSfjVWkjpw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000627040863037

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042492964', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/MUcAAOxydB1SfjVW/$(KGrHqF,!lUFJbtEMy0LBSfjVWkjpw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00128602981567

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000216007232666

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000135898590088

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493034' 
 Execution Time:0.000540018081665

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493034'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000268936157227

UPDATE `item` SET `ItemID` = '131042493034', `Title` = 'SKF 99552 Speedie Sleeve Shaft Repair 139.9-140.11mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99552</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>139.9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>140.11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>140mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>151mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>20.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>25.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '103.42', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99552-Speedie-Sleeve-Shaft-Repair-139-9-140-11mm-/131042493034', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99552-Speedie-Sleeve-Shaft-Repair-139-9-140-11mm-/131042493034', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:15:01', `EndTime1` = '2014-06-07 13:15:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493034' 
 Execution Time:0.00213313102722

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493034'
AND `from_ebay` =  'true' 
 Execution Time:0.000601053237915

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493034'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7qwAAOxyTjNSfjVg/$(KGrHqRHJ!4FJugTdIYZBSfjVgR5o!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000271081924438

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493034', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/7qwAAOxyTjNSfjVg/$(KGrHqRHJ!4FJugTdIYZBSfjVgR5o!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00139808654785

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133991241455

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000225067138672

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493129' 
 Execution Time:0.000651121139526

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493129'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000353097915649

UPDATE `item` SET `ItemID` = '131042493129', `Title` = 'SKF 99721 Speedie Sleeve Shaft Repair 179.76-180.01mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99721</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>179.76mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>180.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>180.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>190.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>32.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>44.5mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '218.5', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99721-Speedie-Sleeve-Shaft-Repair-179-76-180-01mm-/131042493129', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99721-Speedie-Sleeve-Shaft-Repair-179-76-180-01mm-/131042493129', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:15:13', `EndTime1` = '2014-06-07 13:15:13', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493129' 
 Execution Time:0.00312900543213

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493129'
AND `from_ebay` =  'true' 
 Execution Time:0.00142192840576

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493129'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/MtUAAOxydB1SfjVn/$T2eC16N,!y8E9s2filYOBSfjVnVrUw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000335216522217

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493129', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/MtUAAOxydB1SfjVn/$T2eC16N,!y8E9s2filYOBSfjVnVrUw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00119805335999

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000115871429443

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493146' 
 Execution Time:0.00351214408875

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493146'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00241088867188

UPDATE `item` SET `ItemID` = '131042493146', `Title` = 'SKF 99810 Speedie Sleeve Shaft Repair 15.82-15.93mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99810</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>15.82mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>15.93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>15.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>19.05mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>10.31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>50.8mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '38.66', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99810-Speedie-Sleeve-Shaft-Repair-15-82-15-93mm-/131042493146', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99810-Speedie-Sleeve-Shaft-Repair-15-82-15-93mm-/131042493146', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:15:15', `EndTime1` = '2014-06-07 13:15:15', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493146' 
 Execution Time:0.00231003761292

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493146'
AND `from_ebay` =  'true' 
 Execution Time:0.000864028930664

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493146'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/lA0AAOxyRNJSfjVu/$(KGrHqF,!q0FJh!Den+KBSfjVuWt2w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00171494483948

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493146', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/lA0AAOxyRNJSfjVu/$(KGrHqF,!q0FJh!Den+KBSfjVuWt2w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00165891647339

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000143051147461

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000101089477539

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493073' 
 Execution Time:0.000562906265259

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493073'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000324010848999

UPDATE `item` SET `ItemID` = '131042493073', `Title` = 'SKF 99606 Speedie Sleeve Shaft Repair 154.74-154.99mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99606</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>154.74mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>154.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>154.86mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>167mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>26.01mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>30mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>32.99mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '106.1', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99606-Speedie-Sleeve-Shaft-Repair-154-74-154-99mm-/131042493073', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99606-Speedie-Sleeve-Shaft-Repair-154-74-154-99mm-/131042493073', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:15:06', `EndTime1` = '2014-06-07 13:15:06', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493073' 
 Execution Time:0.00247597694397

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493073'
AND `from_ebay` =  'true' 
 Execution Time:0.00145292282104

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493073'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/QKkAAOxyXDhSfjVd/$T2eC16F,!ysFJjIouO3JBSfjVdWpF!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000334024429321

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493073', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/QKkAAOxyXDhSfjVd/$T2eC16F,!ysFJjIouO3JBSfjVdWpF!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00104999542236

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000125169754028

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000141859054565

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493161' 
 Execution Time:0.00057578086853

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493161'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00029993057251

UPDATE `item` SET `ItemID` = '131042493161', `Title` = 'SKF 99817 Speedie Sleeve Shaft Repair 31.67-31.83mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99817</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>31.67mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>31.83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>31.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>38.1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>7.95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>11.13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>17.48mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '42.64', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99817-Speedie-Sleeve-Shaft-Repair-31-67-31-83mm-/131042493161', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99817-Speedie-Sleeve-Shaft-Repair-31-67-31-83mm-/131042493161', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:15:18', `EndTime1` = '2014-06-07 13:15:18', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493161' 
 Execution Time:0.00121998786926

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493161'
AND `from_ebay` =  'true' 
 Execution Time:0.000519990921021

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493161'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/1EUAAMXQWzNSfjVo/$(KGrHqZ,!lIFJn2h6KPiBSfjVo536w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00032114982605

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493161', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/1EUAAMXQWzNSfjVo/$(KGrHqZ,!lIFJn2h6KPiBSfjVo536w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00180697441101

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133991241455

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.79900360107E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042498849' 
 Execution Time:0.000571012496948

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042498849'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00025200843811

UPDATE `item` SET `ItemID` = '131042498849', `Title` = '302/28J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>58mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>17.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>38 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>41.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>4.4 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>9000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>12000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>41.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>16mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>14mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>35mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>50mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.37</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.6</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '68.68', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/302-28J2-SKF-Metric-Taper-Bearing-/131042498849', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/302-28J2-SKF-Metric-Taper-Bearing-/131042498849', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:27:42', `EndTime1` = '2014-06-07 13:27:42', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042498849' 
 Execution Time:0.00111985206604

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042498849'
AND `from_ebay` =  'true' 
 Execution Time:0.000880002975464

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042498849'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/bz8AAOxydB1SfjhX/$(KGrHqZ,!nYFJ)Lb5jEtBSfjh(sb8w~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000271797180176

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042498849', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/bz8AAOxydB1SfjhX/$(KGrHqZ,!nYFJ)Lb5jEtBSfjh(sb8w~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000487089157104

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001220703125

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.98838043213E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042498862' 
 Execution Time:0.000713109970093

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042498862'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000913143157959

UPDATE `item` SET `ItemID` = '131042498862', `Title` = '30203J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>17mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>40mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>13.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>19 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>18.6 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>1.83 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>13000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>18000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>10mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>37mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.35</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.7</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '7.11', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30203J2-SKF-Metric-Taper-Bearing-/131042498862', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30203J2-SKF-Metric-Taper-Bearing-/131042498862', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '109', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:27:44', `EndTime1` = '2014-06-07 13:27:44', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042498862' 
 Execution Time:0.00146007537842

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042498862'
AND `from_ebay` =  'true' 
 Execution Time:0.000566005706787

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042498862'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/z00AAOxyLN9SfjhX/$T2eC16Z,!ywFI5l8oiBuBSfjh(pG3g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00180792808533

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042498862', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/z00AAOxyLN9SfjhX/$T2eC16Z,!ywFI5l8oiBuBSfjh(pG3g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000560998916626

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00219702720642

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000126123428345

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493096' 
 Execution Time:0.000478029251099

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493096'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00086498260498

UPDATE `item` SET `ItemID` = '131042493096', `Title` = 'SKF 99640 Speedie Sleeve Shaft Repair 169.75-170mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99640</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>169.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>170mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>169.88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>182.58mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>31.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>44.45mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '168.64', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99640-Speedie-Sleeve-Shaft-Repair-169-75-170mm-/131042493096', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99640-Speedie-Sleeve-Shaft-Repair-169-75-170mm-/131042493096', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:15:08', `EndTime1` = '2014-06-07 13:15:08', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493096' 
 Execution Time:0.00144100189209

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493096'
AND `from_ebay` =  'true' 
 Execution Time:0.000635147094727

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493096'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/k6UAAOxyLN9SfjVo/$T2eC16N,!yEFJ!nwTnzwBSfjVojnn!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000255107879639

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493096', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/k6UAAOxyLN9SfjVo/$T2eC16N,!yEFJ!nwTnzwBSfjVojnn!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00069785118103

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000113964080811

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.98838043213E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042498922' 
 Execution Time:0.000693082809448

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042498922'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000311136245728

UPDATE `item` SET `ItemID` = '131042498922', `Title` = '30204J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>20mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>47mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>15.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>27.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>28 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>3 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>11000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>15000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>33.2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>14mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>27mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>26mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>40mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>43mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.35</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.7</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '9.08', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30204J2-Q-SKF-Metric-Taper-Bearing-/131042498922', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30204J2-Q-SKF-Metric-Taper-Bearing-/131042498922', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '103', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:27:47', `EndTime1` = '2014-06-07 13:27:47', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042498922' 
 Execution Time:0.00274395942688

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042498922'
AND `from_ebay` =  'true' 
 Execution Time:0.00318598747253

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042498922'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/yCEAAMXQUmFSfjhg/$(KGrHqR,!lwFJ7VcUBtqBSfjhhNEBw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00151300430298

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042498922', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/yCEAAMXQUmFSfjhg/$(KGrHqR,!lwFJ7VcUBtqBSfjhhNEBw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00183701515198

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000172853469849

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000108957290649

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499003' 
 Execution Time:0.00914001464844

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499003'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000273942947388

UPDATE `item` SET `ItemID` = '131042499003', `Title` = '30207J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>35mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>72mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>18.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>51.2 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>56 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>6.1 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>7000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>9500 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>51.8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>17mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>44mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>42mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>62mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>67mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.37</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.6</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '13.79', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30207J2-Q-SKF-Metric-Taper-Bearing-/131042499003', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30207J2-Q-SKF-Metric-Taper-Bearing-/131042499003', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '106', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:27:53', `EndTime1` = '2014-06-07 13:27:53', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499003' 
 Execution Time:0.00223016738892

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499003'
AND `from_ebay` =  'true' 
 Execution Time:0.000545024871826

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499003'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/LlwAAOxyTjNSfjh0/$(KGrHqJ,!k4FJz+HJl+lBSfjh0YcGg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000385999679565

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499003', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/LlwAAOxyTjNSfjh0/$(KGrHqJ,!k4FJz+HJl+lBSfjh0YcGg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00088906288147

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000125885009766

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.20295715332E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042498934' 
 Execution Time:0.000488042831421

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042498934'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000250816345215

UPDATE `item` SET `ItemID` = '131042498934', `Title` = '30205J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>16.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>30.8 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>33.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>3.45 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>10000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>13000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>37.4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>44mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>46mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.37</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.6</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '10.07', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30205J2-Q-SKF-Metric-Taper-Bearing-/131042498934', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30205J2-Q-SKF-Metric-Taper-Bearing-/131042498934', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '116', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:27:49', `EndTime1` = '2014-06-07 13:27:49', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042498934' 
 Execution Time:0.00163602828979

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042498934'
AND `from_ebay` =  'true' 
 Execution Time:0.000869035720825

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042498934'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/9xAAAMXQfvlSfjhg/$T2eC16JHJHkFFmGfp5KiBSfjhgJZjQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000258922576904

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042498934', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/9xAAAMXQfvlSfjhg/$T2eC16JHJHkFFmGfp5KiBSfjhgJZjQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000597953796387

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000121831893921

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000450134277344

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042493184' 
 Execution Time:0.000566005706787

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042493184'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000243902206421

UPDATE `item` SET `ItemID` = '131042493184', `Title` = 'SKF 99863 Speedie Sleeve Shaft Repair 54.91-55.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99863</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>54.91mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>55.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>54.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>62mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>19.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>22.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>31.75mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '44.41', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99863-Speedie-Sleeve-Shaft-Repair-54-91-55-07mm-/131042493184', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99863-Speedie-Sleeve-Shaft-Repair-54-91-55-07mm-/131042493184', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:15:22', `EndTime1` = '2014-06-07 13:15:22', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042493184' 
 Execution Time:0.00277185440063

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042493184'
AND `from_ebay` =  'true' 
 Execution Time:0.00066089630127

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042493184'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/-ysAAOxyzi9SfjVv/$(KGrHqRHJFEFJ0R5Vw0mBSfjVvGhc!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000217914581299

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042493184', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/-ysAAOxyzi9SfjVv/$(KGrHqRHJFEFJ0R5Vw0mBSfjVvGhc!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000730037689209

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000728130340576

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499264' 
 Execution Time:0.000768899917603

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499264'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000277996063232

UPDATE `item` SET `ItemID` = '131042499264', `Title` = '30210J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>50mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>90mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>21.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>76.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>91.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>10.4 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>5600 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>7500 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>67.9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>20mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>17mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>19mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>58mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>57mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>79mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>83mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>4.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '23.44', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30210J2-Q-SKF-Metric-Taper-Bearing-/131042499264', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30210J2-Q-SKF-Metric-Taper-Bearing-/131042499264', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:00', `EndTime1` = '2014-06-07 13:28:00', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499264' 
 Execution Time:0.00204801559448

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499264'
AND `from_ebay` =  'true' 
 Execution Time:0.000654935836792

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499264'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/mf4AAOxy4t1Sfjh2/$(KGrHqF,!qsFJgWho7vdBSfjh2Uthw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000248193740845

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499264', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/mf4AAOxy4t1Sfjh2/$(KGrHqF,!qsFJgWho7vdBSfjh2Uthw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000611066818237

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000339031219482

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000137805938721

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499385' 
 Execution Time:0.000448942184448

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499385'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000248908996582

UPDATE `item` SET `ItemID` = '131042499385', `Title` = '30211J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>55mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>100mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>22.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>104 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>106 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>12 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>5300 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>6700 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>74.6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>21mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>20mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>64mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>64mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>88mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>93mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>94mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>4.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.5</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '26.0', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30211J2-Q-SKF-Metric-Taper-Bearing-/131042499385', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30211J2-Q-SKF-Metric-Taper-Bearing-/131042499385', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:03', `EndTime1` = '2014-06-07 13:28:03', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499385' 
 Execution Time:0.00126218795776

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499385'
AND `from_ebay` =  'true' 
 Execution Time:0.000485897064209

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499385'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/cn8AAOxydB1Sfjh~/$(KGrHqQOKpMFJz72C-b6BSfjh+q3NQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000222206115723

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499385', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/cn8AAOxydB1Sfjh~/$(KGrHqQOKpMFJz72C-b6BSfjh+q3NQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000868082046509

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.01222229004E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499143' 
 Execution Time:0.000407934188843

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499143'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000301122665405

UPDATE `item` SET `ItemID` = '131042499143', `Title` = '30209J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>20.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>66 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>76.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>8.65 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>6000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>8000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>63mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>19mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>16mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>18mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>74mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>78mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>80mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>4.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.5</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '15.37', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30209J2-Q-SKF-Metric-Taper-Bearing-/131042499143', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30209J2-Q-SKF-Metric-Taper-Bearing-/131042499143', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '103', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:27:58', `EndTime1` = '2014-06-07 13:27:58', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499143' 
 Execution Time:0.00134015083313

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499143'
AND `from_ebay` =  'true' 
 Execution Time:0.000562906265259

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499143'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/L9EAAOxyTjNSfjiF/$(KGrHqYOKosFJo3hd65(BSfjiF3)DQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00342988967896

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499143', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/L9EAAOxyTjNSfjiF/$(KGrHqYOKosFJo3hd65(BSfjiF3)DQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00296783447266

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144958496094

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000131130218506

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499899' 
 Execution Time:0.000502824783325

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499899'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000261068344116

UPDATE `item` SET `ItemID` = '131042499899', `Title` = '30215J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>130mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>27.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>140 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>176 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>20.4 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>3800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>5000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>99.2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>27mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>86mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>84mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>115mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>122mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>124mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '44.59', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30215J2-Q-SKF-Metric-Taper-Bearing-/131042499899', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30215J2-Q-SKF-Metric-Taper-Bearing-/131042499899', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:12', `EndTime1` = '2014-06-07 13:28:12', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499899' 
 Execution Time:0.00106501579285

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499899'
AND `from_ebay` =  'true' 
 Execution Time:0.000638008117676

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499899'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/2oMAAOxyRNJSfjjY/$T2eC16RHJHcFFk(!8Zq4BSfjjYtkGQ~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00149416923523

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499899', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/2oMAAOxyRNJSfjjY/$T2eC16RHJHcFFk(!8Zq4BSfjjYtkGQ~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000617027282715

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146865844727

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000124931335449

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499806' 
 Execution Time:0.00134205818176

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499806'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000694990158081

UPDATE `item` SET `ItemID` = '131042499806', `Title` = '30213J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>65mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>120mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>24.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>132 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>134 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>16.3 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>4500 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>5600 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>89mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>20mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>78mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>74mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>106mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>113mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>113mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>4.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.5</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '38.23', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30213J2-Q-SKF-Metric-Taper-Bearing-/131042499806', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30213J2-Q-SKF-Metric-Taper-Bearing-/131042499806', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:08', `EndTime1` = '2014-06-07 13:28:08', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499806' 
 Execution Time:0.00201296806335

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499806'
AND `from_ebay` =  'true' 
 Execution Time:0.000845909118652

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499806'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/LvYAAOxyTjNSfjh7/$(KGrHqRHJCwFJgP9ZoeQBSfjh7g3Lw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000725030899048

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499806', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/LvYAAOxyTjNSfjh7/$(KGrHqRHJCwFJgP9ZoeQBSfjh7g3Lw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00086498260498

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000164985656738

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0012149810791

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499591' 
 Execution Time:0.00145602226257

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499591'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000309944152832

UPDATE `item` SET `ItemID` = '131042499591', `Title` = '30212J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>60mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>110mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>23.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>112 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>114 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>13.2 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>5000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>6000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>81.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>19mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>70mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>68mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>96mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>103mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>103mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>4.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.5</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '31.01', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30212J2-Q-SKF-Metric-Taper-Bearing-/131042499591', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30212J2-Q-SKF-Metric-Taper-Bearing-/131042499591', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:05', `EndTime1` = '2014-06-07 13:28:05', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499591' 
 Execution Time:0.00120782852173

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499591'
AND `from_ebay` =  'true' 
 Execution Time:0.000556945800781

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499591'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/GS8AAMXQWzNSfjjO/$(KGrHqR,!ooFJzCZJ7n8BSfjjOVz,g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000283002853394

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499591', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/GS8AAMXQWzNSfjjO/$(KGrHqR,!ooFJzCZJ7n8BSfjjOVz,g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000528812408447

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000116109848022

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499952' 
 Execution Time:6.85940408707

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499952'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.0115859508514

UPDATE `item` SET `ItemID` = '131042499952', `Title` = '30217J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>85mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>150mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>30.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>176 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>220 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>25.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>3200 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>4300 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>112mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>24mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>30mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>97mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>132mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>140mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>141mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>6.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '64.14', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30217J2-Q-SKF-Metric-Taper-Bearing-/131042499952', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30217J2-Q-SKF-Metric-Taper-Bearing-/131042499952', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:17', `EndTime1` = '2014-06-07 13:28:17', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499952' 
 Execution Time:0.00175309181213

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499952'
AND `from_ebay` =  'true' 
 Execution Time:0.00218081474304

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499952'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/I2oAAOxy3zNSfjkL/$(KGrHqYOKp0FJh4OkYmRBSfjkL(rDw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00792384147644

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499952', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/I2oAAOxy3zNSfjkL/$(KGrHqYOKp0FJh4OkYmRBSfjkL(rDw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00353217124939

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000141143798828

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499928' 
 Execution Time:0.000514030456543

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499928'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000469923019409

UPDATE `item` SET `ItemID` = '131042499928', `Title` = '30216J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>80mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>140mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>28.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>151 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>183 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>21.2 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>3400 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>4800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>105mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>26mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>28mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>92mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>90mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>124mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>130mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>132mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '53.0', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30216J2-Q-SKF-Metric-Taper-Bearing-/131042499928', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30216J2-Q-SKF-Metric-Taper-Bearing-/131042499928', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:15', `EndTime1` = '2014-06-07 13:28:15', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499928' 
 Execution Time:0.00203800201416

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499928'
AND `from_ebay` =  'true' 
 Execution Time:0.000758171081543

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499928'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/exMAAOxydB1Sfjjv/$T2eC16JHJHMFH!!BZepOBSfjjydKPw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000288009643555

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499928', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/exMAAOxydB1Sfjjv/$T2eC16JHJHMFH!!BZepOBSfjjydKPw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00104713439941

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001060962677

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499972' 
 Execution Time:0.0013689994812

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499972'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000363111495972

UPDATE `item` SET `ItemID` = '131042499972', `Title` = '30218J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>90mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>160mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>32.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>194 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>245 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>28.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>3000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>4000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>118mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>30mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>26mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>31mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>104mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>101mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>140mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>150mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>150mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>6.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '78.18', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30218J2-SKF-Metric-Taper-Bearing-/131042499972', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30218J2-SKF-Metric-Taper-Bearing-/131042499972', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:19', `EndTime1` = '2014-06-07 13:28:19', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499972' 
 Execution Time:0.00117897987366

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499972'
AND `from_ebay` =  'true' 
 Execution Time:0.000572204589844

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499972'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/L-gAAOxyTjNSfjiG/$(KGrHqF,!rUFJnFNdNQ(BSfjiG7+9Q~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000295162200928

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499972', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/L-gAAOxyTjNSfjiG/$(KGrHqF,!rUFJnFNdNQ(BSfjiG7+9Q~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000670909881592

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000148773193359

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000132083892822

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500027' 
 Execution Time:0.00124311447144

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500027'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000882148742676

UPDATE `item` SET `ItemID` = '131042500027', `Title` = '30221J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>105mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>190mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>39mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>270 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>355 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>40 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2600 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3400 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>141mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>30mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>37mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>123mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>117mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>165mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>178mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>177mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '207.56', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30221J2-SKF-Metric-Taper-Bearing-/131042500027', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30221J2-SKF-Metric-Taper-Bearing-/131042500027', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:26', `EndTime1` = '2014-06-07 13:28:26', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500027' 
 Execution Time:0.0019211769104

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500027'
AND `from_ebay` =  'true' 
 Execution Time:0.000940084457397

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500027'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/E0sAAMXQWzNSfjh~/$(KGrHqFHJB8FJvCbFiKMBSfjh+tBj!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000852108001709

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500027', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/E0sAAMXQWzNSfjh~/$(KGrHqFHJB8FJvCbFiKMBSfjh+tBj!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000867128372192

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000148057937622

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000101089477539

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042499995' 
 Execution Time:0.000452041625977

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042499995'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000250816345215

UPDATE `item` SET `ItemID` = '131042499995', `Title` = '30219J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>95mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>170mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>34.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>216 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>275 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>31.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>126mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>32mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>27mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>33mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>110mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>107mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>149mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>158mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>159mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>7.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '138.49', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30219J2-SKF-Metric-Taper-Bearing-/131042499995', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30219J2-SKF-Metric-Taper-Bearing-/131042499995', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:22', `EndTime1` = '2014-06-07 13:28:22', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042499995' 
 Execution Time:0.00180196762085

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042499995'
AND `from_ebay` =  'true' 
 Execution Time:0.000643968582153

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042499995'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/clIAAOxydB1Sfjh9/$T2eC16NHJHQFFhtL5IfjBSfjh9)phw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000231027603149

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042499995', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/clIAAOxydB1Sfjh9/$T2eC16NHJHQFFhtL5IfjBSfjh9)phw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000576019287109

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000137805938721

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000139951705933

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500045' 
 Execution Time:0.000771999359131

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500045'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000273942947388

UPDATE `item` SET `ItemID` = '131042500045', `Title` = '30222J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>110mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>200mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>308 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>405 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>45 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2400 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3200 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>148mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>32mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>39mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>129mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>122mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>174mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>188mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>187mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '243.76', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30222J2-SKF-Metric-Taper-Bearing-/131042500045', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30222J2-SKF-Metric-Taper-Bearing-/131042500045', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:28', `EndTime1` = '2014-06-07 13:28:28', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500045' 
 Execution Time:0.00163793563843

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500045'
AND `from_ebay` =  'true' 
 Execution Time:0.000586986541748

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500045'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/E50AAMXQWzNSfjiD/$(KGrHqF,!lsFJj06Di7oBSfjiDvP7g~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000180006027222

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500045', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/E50AAMXQWzNSfjiD/$(KGrHqF,!lsFJj06Di7oBSfjiDvP7g~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00069785118103

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000140905380249

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000156164169312

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500064' 
 Execution Time:0.00399899482727

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500064'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000588893890381

UPDATE `item` SET `ItemID` = '131042500064', `Title` = '30224J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>120mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>215mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>43.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>341 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>465 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>49 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>2200 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>3000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>161mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>40mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>34mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>43mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>141mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>132mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>187mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>203mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>201mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>6mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>9.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '315.41', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30224J2-SKF-Metric-Taper-Bearing-/131042500064', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30224J2-SKF-Metric-Taper-Bearing-/131042500064', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:30', `EndTime1` = '2014-06-07 13:28:30', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500064' 
 Execution Time:0.00108504295349

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500064'
AND `from_ebay` =  'true' 
 Execution Time:0.000468015670776

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500064'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/1C4AAOxyRNJSfjiG/$(KGrHqIOKosFJorZFle0BSfjiGRJK!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000937223434448

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500064', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/1C4AAOxyRNJSfjiG/$(KGrHqIOKosFJorZFle0BSfjiGRJK!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000328063964844

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000532150268555

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000226974487305

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500090' 
 Execution Time:0.000533103942871

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500090'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000247001647949

UPDATE `item` SET `ItemID` = '131042500090', `Title` = '30228J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>140mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>250mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>45.75mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>418 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>570 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>58.5 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>1900 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>2600 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>186mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>42mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>47mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>164mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>156mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>219mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>236mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>234mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>9.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '579.83', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30228J2-SKF-Metric-Taper-Bearing-/131042500090', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30228J2-SKF-Metric-Taper-Bearing-/131042500090', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:35', `EndTime1` = '2014-06-07 13:28:35', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500090' 
 Execution Time:0.00110793113708

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500090'
AND `from_ebay` =  'true' 
 Execution Time:0.000475883483887

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500090'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/Gc0AAOxy3zNSfjiN/$(KGrHqUOKpQFJwFyQdDhBSfjiNQhJw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000611782073975

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500090', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/Gc0AAOxy3zNSfjiN/$(KGrHqUOKpQFJwFyQdDhBSfjiNQhJw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000504016876221

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000172853469849

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000128984451294

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500107' 
 Execution Time:0.000478982925415

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500107'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000288009643555

UPDATE `item` SET `ItemID` = '131042500107', `Title` = '30230 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>150mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>270mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>429 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>560 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>57 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>1800 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>2400 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>200mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>45mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>50mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>175mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>166mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>234mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>256mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>250mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '775.78', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30230-SKF-Metric-Taper-Bearing-/131042500107', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30230-SKF-Metric-Taper-Bearing-/131042500107', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:37', `EndTime1` = '2014-06-07 13:28:37', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500107' 
 Execution Time:0.00133895874023

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500107'
AND `from_ebay` =  'true' 
 Execution Time:0.000980854034424

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500107'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/y3AAAMXQUmFSfjiK/$(KGrHqVHJEgFJ5,7Z)ZpBSfjiLIr7Q~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000286102294922

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500107', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/y3AAAMXQUmFSfjiK/$(KGrHqVHJEgFJ5,7Z)ZpBSfjiLIr7Q~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00108313560486

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000159978866577

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.0001220703125

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500121' 
 Execution Time:0.0014328956604

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500121'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000349044799805

UPDATE `item` SET `ItemID` = '131042500121', `Title` = '30232J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>160mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>290mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>528 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>735 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>72 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>1600 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>2200 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>214mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>48mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>40mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>54mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>189mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>176mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>252mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>275mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>269mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>12mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>2.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '1003.97', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30232J2-SKF-Metric-Taper-Bearing-/131042500121', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30232J2-SKF-Metric-Taper-Bearing-/131042500121', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:40', `EndTime1` = '2014-06-07 13:28:40', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500121' 
 Execution Time:0.0016188621521

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500121'
AND `from_ebay` =  'true' 
 Execution Time:0.000747919082642

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500121'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/c9AAAOxydB1SfjiP/$(KGrHqZ,!loFJt8F5szYBSfjiSKH2Q~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000299215316772

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500121', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/c9AAAOxydB1SfjiP/$(KGrHqZ,!loFJt8F5szYBSfjiSKH2Q~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000693082809448

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000119924545288

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500138' 
 Execution Time:0.000536918640137

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500138'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000391006469727

UPDATE `item` SET `ItemID` = '131042500138', `Title` = '30234J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>170mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>310mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>57mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>616 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>865 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>83 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>1500 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>2000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>230mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>43mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>58mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>203mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>190mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>268mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>293mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>288mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>8mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>14mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.43</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.4</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '1399.34', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30234J2-SKF-Metric-Taper-Bearing-/131042500138', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30234J2-SKF-Metric-Taper-Bearing-/131042500138', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:42', `EndTime1` = '2014-06-07 13:28:42', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500138' 
 Execution Time:0.00108003616333

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500138'
AND `from_ebay` =  'true' 
 Execution Time:0.0012469291687

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500138'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/y~oAAMXQUmFSfjiR/$(KGrHqF,!lUFJbtEMy0LBSfjiRztl!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000483989715576

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500138', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/y~oAAMXQUmFSfjiR/$(KGrHqF,!lUFJbtEMy0LBSfjiRztl!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00084400177002

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146865844727

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000146865844727

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500147' 
 Execution Time:0.000445127487183

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500147'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00143599510193

UPDATE `item` SET `ItemID` = '131042500147', `Title` = '30236J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>180mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>320mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>57mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>583 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>815 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>80 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>1500 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>2000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>239mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>52mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>43mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>61mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>211mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>200mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>278mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>303mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>297mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>14mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>4mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.44</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.35</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.8</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '2158.18', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30236J2-SKF-Metric-Taper-Bearing-/131042500147', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30236J2-SKF-Metric-Taper-Bearing-/131042500147', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:44', `EndTime1` = '2014-06-07 13:28:44', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500147' 
 Execution Time:0.00208902359009

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500147'
AND `from_ebay` =  'true' 
 Execution Time:0.00158405303955

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500147'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/FRwAAMXQWzNSfjiW/$T2eC16J,!y4FI,lPmgkLBSfji(IiY!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00588798522949

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500147', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/FRwAAMXQWzNSfjiW/$T2eC16J,!y4FI,lPmgkLBSfji(IiY!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00269222259521

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000164031982422

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.01222229004E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500209' 
 Execution Time:0.00094199180603

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500209'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000221014022827

UPDATE `item` SET `ItemID` = '131042500209', `Title` = '30308J2/Q SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>40mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>90mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>25.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>85.8 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>95 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>10.8 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>6000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>8000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>62.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>23mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>20mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>19mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>53mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>77mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>81mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>82mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1.5mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.35</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>1.7</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>0.9</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '22.97', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30308J2-Q-SKF-Metric-Taper-Bearing-/131042500209', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30308J2-Q-SKF-Metric-Taper-Bearing-/131042500209', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:58', `EndTime1` = '2014-06-07 13:28:58', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500209' 
 Execution Time:0.00177907943726

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500209'
AND `from_ebay` =  'true' 
 Execution Time:0.000770092010498

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500209'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/P2YAAOxygj5Sfjig/$T2eC16h,!wwFJcWi)PvyBSfjiiy+Gw~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000219106674194

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500209', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/P2YAAOxygj5Sfjig/$T2eC16h,!wwFJcWi)PvyBSfjiiy+Gw~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.000756978988647

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000177145004272

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000823020935059

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042500155' 
 Execution Time:0.00110793113708

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042500155'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00106501579285

UPDATE `item` SET `ItemID` = '131042500155', `Title` = '30302J2 SKF Metric Taper Bearing', `Description` = '<br /><br /><br /></div><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Dimensions</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/tapertech.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Inside Diameter:</b></td>   <td>15mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Outside Diameter:</b></td>   <td>42mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Width:</b></td>   <td>14.25mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Dynamic Load Rating:</b></td>   <td>22.4 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Static Load Rating:</b></td>   <td>20 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Fatigue Load Limit:</b></td>   <td>2.08 kN</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Reference Speed:</b></td>   <td>13000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Limiting Speed:</b></td>   <td>18000 r/min</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d :</b></td>   <td>27.7mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b> d1 :</b></td>   <td>13mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>C :</b></td>   <td>11mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r1,2 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>r3,4 (min):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>a :</b></td>   <td>9mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>da (max):</b></td>   <td>22mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>db (min):</b></td>   <td>21mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (min):</b></td>   <td>36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Da (max):</b></td>   <td>36mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Db (min):</b></td>   <td>38mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Ca (min):</b></td>   <td>2mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Cb (min):</b></td>   <td>3mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>ra (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>rb (max):</b></td>   <td>1mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>e :</b></td>   <td>0.28</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Y :</b></td>   <td>2.1</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>Yo :</b></td>   <td>1.1</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '8.91', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/30302J2-SKF-Metric-Taper-Bearing-/131042500155', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/30302J2-SKF-Metric-Taper-Bearing-/131042500155', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100934011', `StoreCategory2ID` = '0', `Quantity` = '128', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:28:47', `EndTime1` = '2014-06-07 13:28:47', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042500155' 
 Execution Time:0.00199508666992

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042500155'
AND `from_ebay` =  'true' 
 Execution Time:0.000823020935059

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042500155'
AND `picture_url` =  'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/dBYAAOxydB1SfjiT/$T2eC16VHJHgFFl-7tVUuBSfjiTdmcg~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000944137573242

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042500155', 'http://i.ebayimg.com/00/s/Nzg2WDEwNDQ=/z/dBYAAOxydB1SfjiT/$T2eC16VHJHgFFl-7tVUuBSfjiTdmcg~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00270199775696

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000104904174805

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0744459629059

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00136780738831

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  ' 131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00465488433838

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000173091888428

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000227928161621

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.00201201438904

SELECT *
FROM (`ebay_design`)
LEFT JOIN `listign_design` ON `ebay_design`.`id_listing_design`  = `listign_design`.`id`
WHERE `ebay_design`.`id_user` =  '29' 
 Execution Time:0.0026638507843

SELECT *
FROM (`ebay_design`)
LEFT JOIN `home_design` ON `ebay_design`.`id_home_design`  = `home_design`.`id_home_design`
WHERE `ebay_design`.`id_user` =  '29' 
 Execution Time:0.0012059211731

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.077262878418

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000115156173706

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 06:43:05', '90', '29') 
 Execution Time:0.000895977020264

SELECT LAST_INSERT_ID() 
 Execution Time:0.000115156173706

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000140905380249

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00119495391846

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 06:43:16', '233') 
 Execution Time:0.00130200386047

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000134944915771

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000113964080811

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0023341178894

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000756025314331

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000531911849976

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490835' 
 Execution Time:0.00239706039429

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490835'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.000534057617188

UPDATE `item` SET `ItemID` = '131042490835', `Title` = 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.84', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:01', `EndTime1` = '2014-06-07 13:10:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490835' 
 Execution Time:0.0410850048065

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490835'
AND `from_ebay` =  'true' 
 Execution Time:0.00172305107117

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490835'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000231027603149

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490835', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00360202789307

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000229120254517

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0961980819702

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000129222869873

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.138772010803

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000177145004272

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0492119789124

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00015115737915

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0234019756317

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00169515609741

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  ' 131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00241899490356

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000108957290649

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0177772045135

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.58442687988E-5

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0308401584625

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000139951705933

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0286750793457

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144958496094

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.056932926178

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000158786773682

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  ' 131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000209093093872

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000279903411865

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  ' 131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000252962112427

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000132083892822

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  ' 131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000219106674194

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000159978866577

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0972208976746

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144958496094

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  ' 131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000230073928833

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000107049942017

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0402419567108

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00144100189209

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  ' 131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00200891494751

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000113010406494

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 09:23:56', '90', '29') 
 Execution Time:0.000914096832275

SELECT LAST_INSERT_ID() 
 Execution Time:7.58171081543E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000149011611938

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00170516967773

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 09:24:07', '234') 
 Execution Time:0.00125002861023

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000157833099365

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.91821289062E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0010929107666

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000394821166992

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:9.98973846436E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490835' 
 Execution Time:0.000450849533081

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490835'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00228905677795

UPDATE `item` SET `ItemID` = '131042490835', `Title` = 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.84', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:01', `EndTime1` = '2014-06-07 13:10:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490835' 
 Execution Time:0.00310587882996

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490835'
AND `from_ebay` =  'true' 
 Execution Time:0.000758171081543

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490835'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000861883163452

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490835', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00147390365601

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000138998031616

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0714659690857

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000165939331055

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0757720470428

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000146150588989

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 09:29:59', '90', '29') 
 Execution Time:0.00105905532837

SELECT LAST_INSERT_ID() 
 Execution Time:0.000133037567139

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000127077102661

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0021390914917

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 09:30:10', '235') 
 Execution Time:0.00116801261902

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128030776978

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:8.9168548584E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000186920166016

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000140190124512

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000102043151855

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490835' 
 Execution Time:0.000149965286255

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490835'
AND `is_deleted_permanently` =  'true' 
 Execution Time:7.39097595215E-5

UPDATE `item` SET `ItemID` = '131042490835', `Title` = 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.84', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:01', `EndTime1` = '2014-06-07 13:10:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490835' 
 Execution Time:0.0017831325531

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490835'
AND `from_ebay` =  'true' 
 Execution Time:0.000429153442383

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490835'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00049901008606

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490835', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00056004524231

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000117778778076

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0442650318146

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000154972076416

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 09:31:45', '90', '29') 
 Execution Time:0.000298023223877

SELECT LAST_INSERT_ID() 
 Execution Time:0.000113010406494

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118970870972

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000149011611938

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000169992446899

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000114917755127

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0014660358429

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 09:32:06', '236') 
 Execution Time:0.000397920608521

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000602006912231

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0706789493561

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000133991241455

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:9.3936920166E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000125169754028

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0943851470947

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000309944152832

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 09:37:15', '90', '29') 
 Execution Time:0.00144791603088

SELECT LAST_INSERT_ID() 
 Execution Time:0.000130891799927

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000118017196655

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000180959701538

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 09:37:28', '237') 
 Execution Time:0.00150203704834

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000130891799927

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0210089683533

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000189065933228

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 09:39:32', '90', '29') 
 Execution Time:0.000806093215942

SELECT LAST_INSERT_ID() 
 Execution Time:0.000128984451294

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00134897232056

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000149965286255

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 09:39:44', '238') 
 Execution Time:0.00115203857422

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000292062759399

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000401973724365

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000305891036987

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.110331058502

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000231027603149

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 09:41:56', '90', '29') 
 Execution Time:0.000205993652344

SELECT LAST_INSERT_ID() 
 Execution Time:9.20295715332E-5

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000148773193359

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000185012817383

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 09:42:06', '239') 
 Execution Time:0.00329685211182

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00141096115112

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000118017196655

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00135493278503

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.0001380443573

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000116109848022

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490835' 
 Execution Time:0.00341796875

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490835'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00366306304932

UPDATE `item` SET `ItemID` = '131042490835', `Title` = 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.84', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:01', `EndTime1` = '2014-06-07 13:10:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490835' 
 Execution Time:0.00068187713623

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490835'
AND `from_ebay` =  'true' 
 Execution Time:0.00273609161377

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490835'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.00284218788147

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490835', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00247502326965

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000134944915771

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0879089832306

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000134944915771

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 10:07:00', '90', '29') 
 Execution Time:0.00119209289551

SELECT LAST_INSERT_ID() 
 Execution Time:0.000112056732178

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000144004821777

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00117206573486

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 10:07:13', '240') 
 Execution Time:0.0011579990387

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000101089477539

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.9870223999E-5

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00277495384216

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000354051589966

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 10:07:26', '90', '29') 
 Execution Time:0.000418186187744

SELECT LAST_INSERT_ID() 
 Execution Time:0.000148057937622

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0237038135529

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000154972076416

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0553359985352

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000109910964966

INSERT INTO `listing_backup_group` (`reazon`, `date_added`, `id_ebay_design`, `id_user`) VALUES ('template installation', '2014-06-05 10:09:18', '90', '29') 
 Execution Time:0.000290870666504

SELECT LAST_INSERT_ID() 
 Execution Time:0.00010085105896

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000123977661133

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item` ON `seller_list`.`item_id` = `item`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `item`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.00019097328186

INSERT INTO `listing_backup` (`item_id`, `title`, `description`, `date_processed`, `listing_backup_group_id`) VALUES ('131042490835', 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', '2014-06-05 10:09:28', '242') 
 Execution Time:0.000710964202881

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000134944915771

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000120878219604

SELECT DISTINCT *
FROM (`seller_list`)
JOIN `item_prepared` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
WHERE `item_prepared`.`ItemID` =  '131042490835'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.000172853469849

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000101804733276

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:7.60555267334E-5

SELECT *
FROM (`item`)
WHERE `ItemID` =  '131042490835' 
 Execution Time:0.000319957733154

SELECT *
FROM (`seller_list`)
WHERE `item_id` =  '131042490835'
AND `is_deleted_permanently` =  'true' 
 Execution Time:0.00127792358398

UPDATE `item` SET `ItemID` = '131042490835', `Title` = 'SKF 99049 Speedie Sleeve Shaft Repair 11.99-12.07mm', `Description` = '<span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">SKF SPEEDI-SLEEVE is a very thin-walled shaft repair sleeve that provides a quicker, more cost-effective alternative to dismantling and re-machining a worn shaft. An SKF SPEEDI-SLEEVE mounts quickly and easily without power tools or heating.<br /><br />Often capable of delivering a better quality counterface for the seal lip than the original shaft, SKF SPEEDI-SLEEVE also:<br />&nbsp;</span></span><ul> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Eliminates expense of replacing or reworking shafts</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Requires no shaft disassembly or machining</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Enables same size replacement seal as original</span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Provides an excellent, wear-resistant sealing surface </span></span></span></li> <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span class=\"list-content\">Installs easily with no power tools or heating</span></li></ul><br /><br />Please see below SKF video:<br /> <a href=\"http://youtu.be/wsIklI3xtME\">SKF Speedi Sleeve</a></div></span></span><font color=\"#FFFFFF\">seperator</font><div class=\"tech-description-title\"> Technical Information</div><div class=\"tech-description\"><p style=\"text-align: center; \">  <img alt=\"\" src=\"http://www.bearingshopuk.eu/media/design/Speedi.jpg\" /><p></p><table width=\"100%\"> <tbody>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>SKF Part Number:</b></td>   <td>CR 99049</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (min):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (max):</b></td>   <td>12.07mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>d1 (nominal):</b></td>   <td>11.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>D (1.6 mm):</b></td>   <td>15.49mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b1 (0,8 mm):</b></td>   <td>5.99mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>b (0,8 mm):</b></td>   <td>8.41mm</td>  </tr>  <tr bgcolor=\"#d3d3d3\">   <td>    <b>B ? :</b></td>   <td>47.63mm</td>  </tr> </tbody></table></div><div>', `ConvertedBuyItNowPriceValue` = '0.0', `ConvertedStartPriceValue` = '24.84', `ConvertedReversePriceValue` = '0.0', `ViewItemURL` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `ViewItemURLForNaturalSearch` = 'http://www.ebay.co.uk/itm/SKF-99049-Speedie-Sleeve-Shaft-Repair-11-99-12-07mm-/131042490835', `LayoutID` = '310000', `ThemeID` = '310', `ListingDuration` = 'GTC', `ListingType` = 'FixedPriceItem', `Location` = 'Rochester', `PaymentMethods` = 'PayPal<>', `PayPalEmailAddress` = 'karl@kentbearings.com', `PrimaryCategoryID` = '1267', `PrimaryCategoryCategoryName` = 'Business, Office & Industrial:Industrial Supply/ MRO:Other Industrial Supply', `ReversePriceValue` = '0.0', `StoreCategoryID` = '5100938011', `StoreCategory2ID` = '0', `Quantity` = '100', `Currency` = 'GBP', `StartTime1` = '2013-11-09 13:10:01', `EndTime1` = '2014-06-07 13:10:01', `ListingStatus` = 'Active', `id_ebay_design` = '90', `id_user` = '29' WHERE `ItemID` =  '131042490835' 
 Execution Time:0.00139379501343

DELETE FROM `item_pictures`
WHERE `item_id` =  '131042490835'
AND `from_ebay` =  'true' 
 Execution Time:0.000342130661011

SELECT *
FROM (`item_pictures`)
WHERE `item_id` =  '131042490835'
AND `picture_url` =  'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007' 
 Execution Time:0.000240087509155

INSERT INTO `item_pictures` (`item_id`, `picture_url`, `id_user`) VALUES ('131042490835', 'http://i.ebayimg.com/00/s/NDA0WDQ3OQ==/z/vSwAAOxy3zNSfjQ0/$T2eC16J,!)!FIdQN2NbqBSfjQ0MkD!~~60_1.JPG?set_id=8800005007', '29') 
 Execution Time:0.00110483169556

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:9.79900360107E-5

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0477869510651

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000970840454102

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0344970226288

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00019907951355

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.00016188621521

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '110'
AND `id_user` =  '48' 
 Execution Time:0.000109910964966

SELECT *
FROM (`ebay_design`)
LEFT JOIN `listign_design` ON `ebay_design`.`id_listing_design`  = `listign_design`.`id`
WHERE `ebay_design`.`id_user` =  '48' 
 Execution Time:0.00214385986328

SELECT *
FROM (`ebay_design`)
LEFT JOIN `home_design` ON `ebay_design`.`id_home_design`  = `home_design`.`id_home_design`
WHERE `ebay_design`.`id_user` =  '48' 
 Execution Time:0.00131893157959

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000174999237061

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000185966491699

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000710964202881

SELECT *
FROM (`store_settings`)
WHERE `id_ebay_design` =  '90'
AND `id_user` =  '29' 
 Execution Time:0.000136137008667

SELECT *
FROM (`ebay_design`)
LEFT JOIN `listign_design` ON `ebay_design`.`id_listing_design`  = `listign_design`.`id`
WHERE `ebay_design`.`id_user` =  '29' 
 Execution Time:0.000125885009766

SELECT *
FROM (`ebay_design`)
LEFT JOIN `home_design` ON `ebay_design`.`id_home_design`  = `home_design`.`id_home_design`
WHERE `ebay_design`.`id_user` =  '29' 
 Execution Time:0.000511884689331

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000128984451294

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '90'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0385990142822

SELECT `login_enabled`, `register_enabled`, `install_enabled`, `members_per_page`, `admin_email`, `home_page`, `active_theme`, `login_attempts`, `recaptcha_theme`, `email_protocol`, `sendmail_path`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `site_title`, `cookie_expires`, `password_link_expires`, `activation_link_expires`, `disable_all`, `site_disabled_text`, `remember_me_enabled`, `recaptcha_enabled`
FROM (`settings`)
LIMIT 1 
 Execution Time:0.000103950500488

SELECT DISTINCT *
FROM (`item_prepared`)
JOIN `seller_list` ON `seller_list`.`item_id` = `item_prepared`.`ItemID`
JOIN `item_pictures` ON `seller_list`.`item_id` = `item_pictures`.`item_id`
WHERE `seller_list`.`id_ebay_design` =  '110'
GROUP BY `seller_list`.`item_id` 
 Execution Time:0.0104839801788

