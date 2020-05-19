<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
//checkbox    
    //1.Выгодное предложение
    'tx_pbnewsjobs_predlog' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_predlog',
        'config' => array(
            'type' => 'check',
            'default' => 0
        )
    ),
//input
    //2.Оценка.число
    'tx_pbnewsjobs_goodnum' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_goodnum',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    //3.Оценка.слово
    'tx_pbnewsjobs_goodword' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_goodword',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    //4.Цена "от"
    'tx_pbnewsjobs_price' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_price',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
    //5.Звезды
    'tx_pbnewsjobs_stars' => array (
        'exclude' => 0,
        'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_stars',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:stars.1', 1),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:stars.2', 2),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:stars.3', 3),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:stars.4', 4),
                array('LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:stars.5', 5),
            ),
        ),
  ),    
    //6.Количество отзывов
    'tx_pbnewsjobs_commentsnum' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_commentsnum',
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
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_treatment',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
		)
	),
    //8.Проживание
	'tx_pbnewsjobs_habitation' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_habitation',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
            )
	),
    //9.Питание
	'tx_pbnewsjobs_food' => array(
//		'exclude' => 1,
			'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_food',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
		)
	),
    //10.Отзывы
	'tx_pbnewsjobs_comments' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_comments',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
		)
	),
    //11.Инфраструктура
	'tx_pbnewsjobs_infra' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_infra',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
		)
	),
    //12.Проезд
	'tx_pbnewsjobs_proezd' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_proezd',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
		)
	),
    //13.Прайсы НГ
	'tx_pbnewsjobs_priceny' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_priceny',
		'config' => array(
			'type' => 'text',
			'cols' => 30,
			'rows' => 5,
				'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
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

    //16. Html code for detail sanatorium page
    'tx_pbnewsjobs_htmlcode' => array(
		'exclude' => 1,
        'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_pbnewsjobs_htmlcode',
        'config' => array(
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
        )
    ),
	
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns, true);


//Добавляем новый тип новостей
#$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['type']['config']['items'][] = Array('Новый тип новостей', 3);

$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['type']['config']['items']['3'] =
    ['News', 3] ;

$GLOBALS['TCA']['tx_news_domain_model_news']['types']['3'] = [
    'showitem' => 'title, bodytext,tx_pbnewsjobs_goodnum,tx_pbnewsjobs_goodword,tx_pbnewsjobs_price,tx_pbnewsjobs_stars,tx_pbnewsjobs_commentsnum,tx_pbnewsjobs_priceny'
  ];
/*
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news','tx_pbnewsjobs_entrydate;;;;1-1-1, tx_pbnewsjobs_location, tx_pbnewsjobs_area, tx_pbnewsjobs_position, tx_pbnewsjobs_jobnumber, tx_pbnewsjobs_payment;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_tasks;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_requirements;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_contact;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/]');
*/