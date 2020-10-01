<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
//checkbox    
    //1.Выгодное предложение
    'tx_pbnewsjobs_predlog' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_predlog',
        'config' => array(
            'type' => 'check',
            'default' => 0
        )
    ),
//input
    //2.Оценка.число
    'tx_pbnewsjobs_goodnum' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_goodnum',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    //3.Оценка.слово
    'tx_pbnewsjobs_goodword' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_goodword',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    //4.Цена "от"
    'tx_pbnewsjobs_price' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_price',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    //5.Звезды
    'tx_pbnewsjobs_stars' => Array (
        'exclude' => 0,
        'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_stars',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:stars.0', 0),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:stars.1', 1),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:stars.2', 2),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:stars.3', 3),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:stars.4', 4),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:stars.5', 5),
            ),
        ),
  ),    
    //6.Количество отзывов !!участник акции
    'tx_pbnewsjobs_commentsnum' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_commentsnum',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    
//RTE fields Start
    //7.Программы лечения
	'tx_pbnewsjobs_treatment' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_treatment',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
			'wizards' => array(
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing',
					'icon'          => 'wizard_rte2.gif',
//					'script'        => 'wizard_rte.php',
						'module' => array(
							'name' => 'wizard_rte',
						),
				),
			),
		)
	),
    //8.Проживание
	'tx_pbnewsjobs_habitation' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_habitation',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing',
					'icon'          => 'wizard_rte2.gif',
//					'script'        => 'wizard_rte.php',
						'module' => array(
							'name' => 'wizard_rte',
						),
				),
			),
		)
	),
    //9.Питание
	'tx_pbnewsjobs_food' => array(
//		'exclude' => 1,
			'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_food',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing',
					'icon'          => 'wizard_rte2.gif',
//					'script'        => 'wizard_rte.php',
						'module' => array(
							'name' => 'wizard_rte',
						),
				),
			),
		)
	),
    //10.Отзывы
	'tx_pbnewsjobs_comments' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_comments',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing',
					'icon'          => 'wizard_rte2.gif',
//					'script'        => 'wizard_rte.php',
						'module' => array(
							'name' => 'wizard_rte',
						),
				),
			),
		)
	),
    //11.Инфраструктура
	'tx_pbnewsjobs_infra' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_infra',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing',
					'icon'          => 'wizard_rte2.gif',
//					'script'        => 'wizard_rte.php',
						'module' => array(
							'name' => 'wizard_rte',
						),
				),
			),
		)
	),
    //12.Проезд
	'tx_pbnewsjobs_proezd' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_proezd',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing',
					'icon'          => 'wizard_rte2.gif',
//					'script'        => 'wizard_rte.php',
						'module' => array(
							'name' => 'wizard_rte',
						),
				),
			),
		)
	),
    //13.Цены на НГ
	'tx_pbnewsjobs_priceny' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_priceny',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing',
					'icon'          => 'wizard_rte2.gif',
//					'script'        => 'wizard_rte.php',
						'module' => array(
							'name' => 'wizard_rte',
						),
				),
			),
		)
	),
    //14.Выбор кнопки под прайсом
    'tx_pbnewsjobs_btn' => Array (
        'exclude' => 0,
        'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_btn',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:btn.0', 0),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:btn.1', 1),
            ),
        ),
	),    
    //15.Где кликнули input
    'tx_pbnewsjobs_whereclick' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_whereclick',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    //15.Выбор кнопки под прайсом НГ
    'tx_pbnewsjobs_btnny' => Array (
        'exclude' => 0,
        'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_btnny',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:btn.0', 0),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:btn.1', 1),
            ),
        ),
	),    
    //15.Где кликнули input НГ
    'tx_pbnewsjobs_whereclickny' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_whereclick',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	
);
//RTE fields End    


//t3lib_div::loadTCA('tx_news_domain_model_news');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,'Configuration/TypoScript', 'News Jobs');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news',$tempColumns,1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news',
    '--div--;LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tab1,tx_pbnewsjobs_predlog;;;;1-1-1, tx_pbnewsjobs_goodnum,tx_pbnewsjobs_goodword,tx_pbnewsjobs_price,tx_pbnewsjobs_stars,tx_pbnewsjobs_commentsnum,
tx_pbnewsjobs_treatment;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_habitation;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_food;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_infra;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_proezd;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_comments;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_btn,
tx_pbnewsjobs_whereclick,
tx_pbnewsjobs_priceny;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_btnny,
tx_pbnewsjobs_whereclickny,
tx_pbnewsjobs_htmlcode,
tx_pbnewsjobs_show_htmlcode_tabs,
tx_pbnewsjobs_htmlcode_tabs');


//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $metaColumns, 1);
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'tx_pbnewsjobs_custom_meta');
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', '--div--; Seo Tab,tx_pbnewsjobs_custom_meta;;;;1-1-1', '');

//Добавляем новый тип новостей
#$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['type']['config']['items'][] = Array('Новый тип новостей', 3);

#$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['type']['config']['items']['3'] =
#    ['News', 3] ;

#$GLOBALS['TCA']['tx_news_domain_model_news']['types']['3'] = [
#    'showitem' => 'title, bodytext,tx_pbnewsjobs_goodnum,tx_pbnewsjobs_goodword,tx_pbnewsjobs_price,tx_pbnewsjobs_stars,tx_pbnewsjobs_commentsnum'
#  ];

//Прописываем, какие поля должны отображаться в этом типе новостей
$ll = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:';
/*
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['3']['showitem'] = 'l10n_parent, l10n_diffsource,
                    title;;paletteCore,teaser,author;;paletteAuthor,datetime;;paletteArchive,
					bodytext;;;richtext::rte_transform[flag=rte_disabled|mode=ts_css],
					rte_disabled;LLL:EXT:cms/locallang_ttc.xlf:rte_enabled_formlabel,
					content_elements,
				--div--;LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tab1,
tx_pbnewsjobs_predlog;;;;1-1-1, tx_pbnewsjobs_goodnum,tx_pbnewsjobs_goodword,tx_pbnewsjobs_price,tx_pbnewsjobs_stars,tx_pbnewsjobs_commentsnum,

tx_pbnewsjobs_treatment;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_habitation;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_food;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],
tx_pbnewsjobs_comments;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/],

				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;paletteAccess,

				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.options,categories,tags,
				--div--;' . $ll . 'tx_news_domain_model_news.tabs.relations,media,related_files,related_links,related,related_from,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.metatags;metatags,
					--palette--;' . $ll . 'tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
    


';
*/

/*
tx_pbnewsjobs_predlog
tx_pbnewsjobs_goodnum
tx_pbnewsjobs_goodword
tx_pbnewsjobs_price
tx_pbnewsjobs_stars
tx_pbnewsjobs_commentsnum

tx_pbnewsjobs_treatment
tx_pbnewsjobs_habitation
tx_pbnewsjobs_food
tx_pbnewsjobs_comments
tx_pbnewsjobs_infra

Predlog    
Goodnum
Goodword
Price
Stars
Commentsnum

Treatment
Habitation
Food
Comments

$GLOBALS['TCA']['tt_news']['types']['3']['showitem'] = 'hidden, type;;;;1-1-1,title;;;;2-2-2,tx_fitness_shared_office_suitability,tx_fitness_workarea,bodytext;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,tx_fitness_how2;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,
               --div--;LLL:EXT:ttnews_fitness/locallang_db.xml:exercise_info.name,tx_fitness_easier;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,tx_fitness_harder;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,tx_fitness_hints;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,
               --div--;LLL:EXT:ttnews_fitness/locallang_db.xml:exercise_relations, category;;;;3-3-3,tx_fitness_purpose,tx_fitness_equipment,tx_fitness_equivalent_gym_equipment,mainmusclegroups,musclegroups,
               --div--;LLL:EXT:tt_news/locallang_tca.xml:tt_news.tabs.media, tx_damnews_dam_images,tx_fitness_musclegroupimage,tx_fitness_vimeo;;;;1-1-1,
               --div--;LLL:EXT:tt_news/locallang_tca.xml:tt_news.tabs.access, starttime,endtime,fe_group,editlock';
//$GLOBALS['TCA']['tt_news']['columns']['type']['config']['items'][] = Array('LLL:EXT:ttnews_fitness/locallang_db.xml:tt_news.type.I.3', 3);
*/

//LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_location'

//$GLOBALS['TCA']['news']['ctrl']['typeicons']['3'] = t3lib_extMgm::extRelPath($_EXTKEY)."res/ball-ico.gif";



?>