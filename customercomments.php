<?php

require_once _PS_MODULE_DIR_."customercomments/models/CommentModel.php";

class customercomments extends Module {

    public function  __construct()
    {
        $this->name = 'customercomments';
        $this->author = 'IMIE';
        $this->displayName = $this->l('Customer comments');
        $this->description = $this->l('This module allows users to post comments about your shop.');
        $this->version = '1.0.0';

        parent::__construct();
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayCustomerAccount')
            && $this->createTable();
    }

    public function hookDisplayCustomerAccount($params) {

        return $this->display(__FILE__, 'customercomments.tpl');
    }

    public $tabs = array(
            array(
                'name' => array(
                    'en' => 'Comments', // Default value should be first
                    'fr' => 'Commentaires',
        ),
        'class_name' => 'AdminPostComment',
        'parent_class_name' => 'AdminParentCustomer',
    ));

    public function createTable() {
        $db = Db::getInstance();

        $db->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."comments;");
        
        return $db->execute("CREATE TABLE "._DB_PREFIX_."comments(id_comment INT AUTO_INCREMENT PRIMARY KEY, comment TEXT,
        date_add DATE, id_customer INT, rate INT);");
    }
}