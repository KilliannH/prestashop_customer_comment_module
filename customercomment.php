<?php

require_once _PS_MODULE_DIR_."customercomment/models/CommentModel.php";

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
            && $this->registerHook('displayCustomerAccount')
            && $this->createTable();
    }

    public function hookDisplayCustomerAccount($params) {

        return $this->display(__FILE__, 'customer_comment.tpl');
    }

    public $tabs = array(
            array(
                'name' => array(
                    'en' => 'Customer comment', // Default value should be first
                    'fr' => 'Commentaire client',
        ),
        'class_name' => 'AdminCustomers',
        'parent_class_name' => 'ShopParameters',
    ));

    public function createTable() {
        $db = Db::getInstance();

        $db->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."comments;");
        
        return $db->execute("CREATE TABLE "._DB_PREFIX_."comments(id_comment INT AUTO_INCREMENT PRIMARY KEY, comment TEXT,
        date_add DATE, id_customer INT, rate INT);");
    }
}