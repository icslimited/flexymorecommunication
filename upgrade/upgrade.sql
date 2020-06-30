INSERT INTO `gr_defaults` (`type`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `tms`) select DISTINCT 'default', 'update_list_periodically', 'disable', '0', '0', '0', '0', '0', NULL FROM gr_defaults WHERE NOT EXISTS(Select DISTINCT v1 From gr_defaults where v1='update_list_periodically');

INSERT INTO `gr_defaults` (`type`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `tms`) select DISTINCT 'default', 'force_https', 'disable', '0', '0', '0', '0', '0', NULL FROM gr_defaults WHERE NOT EXISTS(Select DISTINCT v1 From gr_defaults where v1='force_https');

INSERT INTO `gr_defaults` (`type`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `tms`) select DISTINCT 'default', 'pingroup', '', '0', '0', '0', '0', '0', NULL FROM gr_defaults WHERE NOT EXISTS(Select DISTINCT v1 From gr_defaults where v1='pingroup');


INSERT INTO `gr_defaults` (`type`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `tms`) select DISTINCT 'default', 'send_btn_visible', 'enable', '0', '0', '0', '0', '0', NULL FROM gr_defaults WHERE NOT EXISTS(Select DISTINCT v1 From gr_defaults where v1='send_btn_visible');

INSERT INTO `gr_defaults` (`type`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `tms`) select DISTINCT 'default', 'non_latin_usernames', 'disable', '0', '0', '0', '0', '0', NULL FROM gr_defaults WHERE NOT EXISTS(Select DISTINCT v1 From gr_defaults where v1='non_latin_usernames');

INSERT INTO `gr_defaults` (`type`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `tms`) select DISTINCT 'default', 'sending_limit', 'Off', '0', '0', '0', '0', '0', NULL FROM gr_defaults WHERE NOT EXISTS(Select DISTINCT v1 From gr_defaults where v1='sending_limit');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','is_typing','is typing','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='is_typing');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','update_list_periodically','Real-time Individual Unread Count','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='update_list_periodically');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','force_https','Force HTTPS','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='force_https');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','pingroup','Pin Group','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='pingroup');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','pinned_group','Pinned','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='pinned_group');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','unleavable','Unleavable','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='unleavable');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','unleavable_group','Unleavable Group','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='unleavable_group');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','changed_leavable_group','Changed to Leavable','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='changed_leavable_group');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','changed_unleavable_group','Changed to Unleavable','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='changed_unleavable_group');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','send_btn_visible','Send Button','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='send_btn_visible');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','non_latin_usernames','Non Latin Usernames','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='non_latin_usernames');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','sending_limit','Sending Limit (Per Minute)','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='sending_limit');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','sending_limit_reached','Sending Limit Reached. Please wait : ','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='sending_limit_reached');

INSERT INTO gr_phrases (type,short,full,lid) select DISTINCT 'phrase','seconds','Seconds','1' FROM gr_phrases WHERE NOT EXISTS(Select DISTINCT short From gr_phrases where short='seconds');

INSERT INTO `gr_customize` (`name`, `element`, `device`, `type`, `v1`, `v2`, `xtra`) select DISTINCT 'send_btn_color', '.swr-grupo .panel > .textbox > .box > i', 'all', 'background', '#E91E63', '#9C27B0', 'easyedit' FROM gr_customize WHERE NOT EXISTS(Select DISTINCT name From gr_customize where name='send_btn_color');
