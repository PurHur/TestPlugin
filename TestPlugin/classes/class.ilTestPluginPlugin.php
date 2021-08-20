<?php

include_once './Services/UIComponent/classes/class.ilUserInterfaceHookPlugin.php';


/**
 * Copyright (c) 2021 Databay AG, Extended GPL, see docs/LICENSE
 *
 * @author Andre Michels <amichels@databay.de>
 * @copyright 2019 Databay AG
 */
class ilTestPluginPlugin extends ilUserInterfaceHookPlugin
{

    /**
     * @const string
     */
    const CTYPE = 'Services';

    /**
     * @const string
     */
    const CNAME = 'UIComponent';

    /**
     * @const string
     */
    const SLOT_ID = 'uihk';

    /**
     * @const string
     */
    const PNAME = 'TestPlugin';

    /**
     * @var \ilCookieAcceptancePlugin
     */
    protected static $instance = null;

    /**
     * @return string
     */
    public function getPluginName()
    {
        return self::PNAME;
    }

    /**
     * @return self|ilPlugin|ilUserInterfaceHookPlugin
     */
    public static function getInstance()
    {
        if (null !== self::$instance) {
            return self::$instance;
        }

        return (self::$instance = ilPluginAdmin::getPluginObject(
            self::CTYPE,
            self::CNAME,
            self::SLOT_ID,
            self::PNAME
        ));
    }
}