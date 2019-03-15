<?php

/**
 * Created by PhpStorm.
 * User: killiann
 * Date: 14/03/19
 * Time: 11:17
 */

class customercommentnewcommentModuleFrontController extends ModuleFrontController {

    public function initContent() {

        if(Tools::isSubmit('comment_submit')) {
            $commentModel = new CommentModel;
            $commentModel->comment = Tools::getValue('comment_input');
            $commentModel->rate = Tools::getValue('rate_input');
            //var_dump($commentModel);
            $customerId = $this->context->customer->id;
            $commentModel->id_customer = $customerId;

            $commentModel->save();
        }

        $this->context->controller->addCSS(_PS_MODULE_DIR_."customercomment/views/css/newcomment.css");
        $this->context->controller->addJS(_PS_MODULE_DIR_."customercomment/views/js/newcomment.js");
        $this->setTemplate('module:customercomment/views/templates/front/newcomment.tpl');
        parent::initContent();
    }
}