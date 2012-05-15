-- ----------------------------
--  Table structure for `ez_forms_builder`
-- ----------------------------
CREATE TABLE `ez_forms_builder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `form` text NOT NULL,
  `mail` text NOT NULL,
  `mail_2` text NOT NULL,
  `messages` text NOT NULL,
  `additional_settings` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `ez_form_builder_attribute_link` (
  `id` int(11) NOT NULL auto_increment,
  `form_id` int(11) NOT NULL default '0',
  `objectattribute_id` int(11) NOT NULL default '0',
  `objectattribute_version` int(11) NOT NULL default '0',
  `object_id` int(11) NOT NULL default '0',
  PRIMARY KEY ( `id` ),
  KEY `ez_form_builder_keyword_id` ( `form_id` ),
  KEY `ez_form_builder_kid_oaid_oav` ( `form_id`, `objectattribute_id`, `objectattribute_version` ),
  KEY `ez_form_builder_kid_oid` ( `form_id`, `object_id` ),
  KEY `ez_form_builder_oaid_oav` ( `objectattribute_id`, `objectattribute_version` )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;