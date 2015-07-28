<?php

namespace WeiseUndStark;

class MarksaleScriptInjector
{
    /**
     * @param string $strBuffer
     * @return string
     */
    public static function addMarksaleScriptToDynamicScriptTags($strBuffer)
    {
        if (TL_MODE == 'FE') {
            /* @var $objPage \Contao\PageModel */
            global $objPage;

            $objParentPage = \PageModel::findOneBy(array('id=?', 'type=?'), array($objPage->rootId, 'root'));

            $objTemplate = new \FrontendTemplate('analytics_marksale');
            $objTemplate->mstcId = $objParentPage->mstcId;
            $GLOBALS['TL_BODY'][] = $objTemplate->parse();
        }

        return $strBuffer;
    }
}
