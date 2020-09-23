<?php

namespace T3Dev\Tmpl\Hooks;

class FlexFormHook
{
    // For 7x
    /**
     * @param array $dataStructArray
     * @param array $conf
     * @param array $row
     * @param string $table
     */
    public function getFlexFormDS_postProcessDS(&$dataStructArray, $conf, $row, $table)
    {
        if ($table === 'tt_content' && $row['CType'] === 'list' && $row['list_type'] === 'news_pi1') {
            $dataStructArray['sheets']['extraEntry'] = 'typo3conf/ext/tmpl/Configuration/FlexForms/News.xml';
        }
    }

    // For 8x
    /**
     * @param array $dataStructure
     * @param array $identifier
     * @return array
     */
    public function parseDataStructureByIdentifierPostProcess(array $dataStructure, array $identifier)
    {
        if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $identifier['dataStructureKey'] === 'news_pi1,list') {
            $file = PATH_site . 'typo3conf/ext/tmpl/Configuration/FlexForms/News.xml';
            $content = file_get_contents($file);
            if ($content) {
                $dataStructure['sheets']['extraEntry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($content);
            }
        }
        return $dataStructure;
    }
}