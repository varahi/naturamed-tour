<?php
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_realurl_pathsegment';
$domain = 'https://naturamed-tour.ru';
$rootPageUid = 1;

#$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'][$domain] = array(
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = array(
    'pagePath' => array(
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'expireDays' => '3',
            'rootpage_id' => $rootPageUid,
            'firstHitPathCache' => 1
    ),
    'init' => array(
            'enableCHashCache' => TRUE,
            'respectSimulateStaticURLs' => 0,
            'appendMissingSlash' => 'ifNotFile,redirect',
            'adminJumpToBackend' => TRUE,
            'enableUrlDecodeCache' => TRUE,
            'enableUrlEncodeCache' => TRUE,
            'emptyUrlReturnValue' => '/',
    ),
    'fileName' => array(
            'defaultToHTMLsuffixOnPrev' => 0,
            'acceptHTMLsuffix' => 1,
            'index' => array(
#                        'feed.rss' => array(
#                                'keyValues' => array(
#                                       'type' => $rssFeedPageType,
#                               )
#                        )
            )
    ),
    'preVars' => array(
            array(
                    'GETvar' => 'L',
                    'valueMap' => array(
#                                'en' => '1',
                    ),
                    'noMatch' => 'bypass',
            ),
            array(
                    'GETvar' => 'no_cache',
                    'valueMap' => array(
                            'nc' => 1,
                    ),
                    'noMatch' => 'bypass',
            ),
    ),
    'fixedPostVars' => array(
            'newsDetailConfiguration' => array(
                array(
                    'GETvar' => 'tx_news_pi1[action]',
                    'valueMap' => array(
                        'detail' => '',
                    ),
                    'noMatch' => 'bypass'
                ),
                array(
                    'GETvar' => 'tx_news_pi1[controller]',
                    'valueMap' => array(
                        'News' => '',
                    ),
                    'noMatch' => 'bypass'
                ),
                array(
                    'GETvar' => 'tx_news_pi1[news]',
                    'lookUpTable' => array(
                        'table' => 'tx_news_domain_model_news',
                        'id_field' => 'uid',
                        'alias_field' => "CONCAT(uid, '-', IF(path_segment!='',path_segment,title))",
                        /** OR ***************/
                        'alias_field' => 'IF(path_segment!="",path_segment,title)',
                        /** OR ***************/
                        'alias_field' => "CONCAT(uid, '-', title)",

                        'addWhereClause' => ' AND NOT deleted',
                        'useUniqueCache' => 1, # 1?
                        'useUniqueCache_conf' => array(
                            'strtolower' => 1,
                            'spaceCharacter' => '-'
                        ),
                        'languageGetVar' => 'L',
                        'languageExceptionUids' => '',
                        'languageField' => 'sys_language_uid',
                        'transOrigPointerField' => 'l10n_parent',
                        'expireDays' => 180,

                    ),
                    #Depends ?  
                    array(
                        'GETvar' => 'tx_news_pi1[day]',
                        'noMatch' => 'bypass',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[month]',
                        'noMatch' => 'bypass',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[year]',
                        'noMatch' => 'bypass',
                    ),
                ),
                'newsCategoryConfiguration' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][categories]',
                        'lookUpTable' => array(
                            'table' => 'sys_category',
                            'id_field' => 'uid',
                            'alias_field' => 'title',
                            'addWhereClause' => ' AND NOT deleted',
                            'useUniqueCache' => 1,
                            'useUniqueCache_conf' => array(
                                'strtolower' => 1,
                                'spaceCharacter' => '-'
                            )
                        )
                    )
                ),
                'newsTagConfiguration' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][tags]',
                        'lookUpTable' => array(
                            'table' => 'tx_news_domain_model_tag',
                            'id_field' => 'uid',
                            'alias_field' => 'title',
                            'addWhereClause' => ' AND NOT deleted',
                            'useUniqueCache' => 1,
                            'useUniqueCache_conf' => array(
                                'strtolower' => 1,
                                'spaceCharacter' => '-'
                            )
                        )
                    )
                ),
                #'45' => 'newsDetailConfiguration', // For additional detail pages, add their uid as well
                #'49' => 'newsDetailConfiguration', // For additional detail pages, add their uid as well
                #'71' => 'newsTagConfiguration',
                #'72' => 'newsCategoryConfiguration',
        ),
        'postVarSets' => array(
            '_DEFAULT' => array(
                #'controller' => array(
                #    array(
                #        'GETvar' => 'tx_news_pi1[action]',
                #        'noMatch' => 'bypass'
                #    ),
                #    array(
                #        'GETvar' => 'tx_news_pi1[controller]',
                #        'noMatch' => 'bypass'
                #    )
                #),

                #'dateFilter' => array(
                #    array(
                #        'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
                #    ),
                #    array(
                #        'GETvar' => 'tx_news_pi1[overwriteDemand][month]',
                #    ),
                #),
                'page' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[@widget_0][currentPage]',
                    ),
                ),
            ),
        ),
    )
);
?>