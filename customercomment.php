<?php

class customercomment extends Module {
    public function  __construct()
    {
        $this->name = 'customercomment';
        $this->author = 'IMIE';
        $this->displayName = $this->l('Customer comment');
        $this->description = $this->l('This module allows users to post comment about our shop.');
        $this->version = '1.0.0';

        parent::__construct();
    }

    //on met le hook dans l'installateur car tous les hooks n'y sont pas forcément
    public function install()
    {
        return parent::install()
            && $this->registerHook('displayCustomerAccount');
    }

    //
    public function hookDisplayCustomerAccount($params) {

        return $this->display(__FILE__, 'customer_comment.tpl');
    }

}