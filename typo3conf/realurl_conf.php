<?php

$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_realurl_pathsegment';

// Adjust to your needs
//$domain = 'naturamed-tour.localhost';
$rootPageUid = 1;
$rssFeedPageType = 9818; // pageType of your RSS feed page

//$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'][$domain] = array(
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = array(
//$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['_DEFAULT'] = array(
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
            'feed.rss' => array(
                'keyValues' => array(
                    'type' => $rssFeedPageType,
                )
            )
        )
    ),
    'preVars' => array(
        array(
            'GETvar' => 'L',
            'valueMap' => array(
                'en' => '1',
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
                    'alias_field' => 'title',
                    'addWhereClause' => ' AND NOT deleted',
                    'useUniqueCache' => 1,
                    'useUniqueCache_conf' => array(
                        'strtolower' => 1,
                        'spaceCharacter' => '-'
                    ),
                    'languageGetVar' => 'L',
                    'languageExceptionUids' => '',
                    'languageField' => 'sys_language_uid',
                    'transOrigPointerField' => 'l10n_parent',
                    'expireDays' => 180,
                )
            )
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
        '44' => 'newsDetailConfiguration',
        '45' => 'newsDetailConfiguration',
        '49' => 'newsDetailConfiguration',
        // Additinal example
        //'71' => 'newsTagConfiguration',
        //'72' => 'newsCategoryConfiguration',
    ),
    'postVarSets' => array(
        '_DEFAULT' => array(
            'controller' => array(
                array(
                    'GETvar' => 'tx_news_pi1[action]',
                    'noMatch' => 'bypass'
                ),
                array(
                    'GETvar' => 'tx_news_pi1[controller]',
                    'noMatch' => 'bypass'
                )
            ),

            'dateFilter' => array(
                array(
                    'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
                ),
                array(
                    'GETvar' => 'tx_news_pi1[overwriteDemand][month]',
                ),
            ),
            'page' => array(
                array(
                    'GETvar' => 'tx_news_pi1[@widget_0][currentPage]',
                ),
            ),
        ),
    ),

);

if (TYPO3_MODE == 'FE') {

    // Automatic get first domain from database
    //debug($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']);
    // Configuration for TYPO3 ver. 8
    //$dbname = $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['dbname'];
    //$host = $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['host'];
    //$user = $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['user'];
    //$password = $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password'];

    $conn = mysqli_connect ( TYPO3_db_host, TYPO3_db_username, TYPO3_db_password, TYPO3_db );
    //$conn = mysqli_connect ($host, $user, $password, $dbname);
    $query = "SELECT pid, domainName FROM sys_domain WHERE hidden=0 ORDER BY sorting";
    $result = mysqli_query ( $conn, $query );
    while ( $row = mysqli_fetch_array ( $result ) ) {

        // echo '<pre>$row="' . print_r($row, true) . '"</pre>';
        $URLArr = parse_url ( 'https://' . $row ['domainName'] );
        // print("\$URLArr['host'] = ". $URLArr['host'] . ' - '. $row['pid'] .'<br>');

        $TYPO3_CONF_VARS ['EXTCONF'] ['realurl'] [$URLArr ['host']] = $TYPO3_CONF_VARS ['EXTCONF'] ['realurl'] ['_DEFAULT'];
        $TYPO3_CONF_VARS ['EXTCONF'] ['realurl'] [$URLArr ['host']] ['pagePath'] ['rootpage_id'] = $row ['pid'];
    }
}

?>
