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
            //var_dump($commentModel);
            $customerId = $this->context->customer->id;
            $commentModel->id_customer = $customerId;

            $commentModel->save();
        }

        $this->setTemplate('module:customercomment/views/templates/front/newcomment.tpl');
        parent::initContent();
    }
}