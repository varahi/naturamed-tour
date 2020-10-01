#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
    tx_pbnewsjobs_predlog tinyint(4) DEFAULT '0' NOT NULL,
    tx_pbnewsjobs_predlog tinytext,
    tx_pbnewsjobs_goodnum tinytext,
    tx_pbnewsjobs_goodword tinytext,
    tx_pbnewsjobs_price tinytext,
    tx_pbnewsjobs_stars int(11) DEFAULT '0' NOT NULL,
	tx_pbnewsjobs_commentsnum tinytext,
    tx_pbnewsjobs_treatment text,
    tx_pbnewsjobs_habitation text,
    tx_pbnewsjobs_food text,
    tx_pbnewsjobs_comments text,
    tx_pbnewsjobs_infra text,
    tx_pbnewsjobs_proezd text,
    tx_pbnewsjobs_priceny text,
    tx_pbnewsjobs_btn int(11) DEFAULT '0' NOT NULL,
    tx_pbnewsjobs_whereclick tinytext,
    tx_pbnewsjobs_btnny int(11) DEFAULT '0' NOT NULL,
    tx_pbnewsjobs_whereclickny tinytext,
    tx_pbnewsjobs_htmlcode text,
    tx_pbnewsjobs_custom_meta tinyint(4) DEFAULT '0' NOT NULL,
    tx_pbnewsjobs_htmlcode_tabs text,
    tx_pbnewsjobs_show_htmlcode_tabs tinyint(4) DEFAULT '0' NOT NULL,
);
