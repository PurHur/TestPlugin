<?php

include_once './Services/UIComponent/classes/class.ilUIHookPluginGUI.php';

/**
 * Copyright (c) 2021 Databay AG, Extended GPL, see docs/LICENSE
 *
 * @author Andre Michels <amichels@databay.de>
 * @copyright 2018 Databay AG
 */
class ilTestPluginUIHookGUI extends ilUIHookPluginGUI
{

    /**
     * @param string $a_comp
     * @param string $a_part
     * @param array $a_par
     * @return array
     */
    public function getHTML($a_comp, $a_part, $a_par = array())
    {

        if (strpos($a_par['html'], "</title>") !== false) {
            $html = $a_par['html'];
            $headContent = '<meta name="Description" CONTENT="Ilias7 with a good plugin">';
            $html = str_replace("</title>", "</title>\n" . $headContent, $html);
            return array(
                'mode' => \ilUIHookPluginGUI::REPLACE,
                'html' => $html,
            );
        }

        return array(
            'mode' => \ilUIHookPluginGUI::KEEP,
            'html' => '',
        );
    }
}
