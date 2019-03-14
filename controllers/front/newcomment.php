<?php

/**
 * Created by PhpStorm.
 * User: killiann
 * Date: 14/03/19
 * Time: 11:17
 */

class customercommentnewcommentModuleFrontController extends ModuleFrontController {
    public function initContent()
    {
        $this->setTemplate('module:customercomment/views/templates/front/newcomment.tpl');
        parent::initContent();
    }
}