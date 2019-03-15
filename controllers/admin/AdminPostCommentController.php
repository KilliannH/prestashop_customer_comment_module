<?php
/**
 * Created by PhpStorm.
 * User: killiann
 * Date: 14/03/19
 * Time: 11:14
 */

class AdminPostCommentController extends ModuleAdminController {
    /*displayBackOfficeTop*/
    public $bootstrap = true;
    /** @var array countries list */
    protected $comments_array = array();

    public function __construct()
    {
        $this->table = 'comments';
        $this->className = 'AdminPostComment';
        $this->lang = false;
        $this->deleted = false;
        $this->allow_export = true;
        $this->list_id = 'comments';
        $this->identifier = 'id_comment';
        $this->_defaultOrderBy = 'date_add';
        $this->_defaultOrderWay = 'ASC';

        // par default prestashop fait un SELECT * FROM _TABLE_PREFIX_comments;
        $this->_join = "INNER JOIN ps_customer ON a.id_customer = ps_customer.id_customer;";
        $this->_select = "ps_customer.firstname, ps_customer.lastname";

        parent::__construct();

        $this->fields_list = array(
            'id_comment' => array(
                'title' => $this->trans('ID', array(), 'Admin.Global'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
            ),
            'comment' => array(
                'title' => $this->trans('Title', array(), 'Admin.Global'),
                'orderby' => false,
                'search' => false,
                'align' => 'center',
            ),
            'firstname' => array(
                'title' => $this->trans('Firstname', array(), 'Admin.Global'),
                'width' => 'auto',
            ),
            'lastname' => array(
                'title' => $this->trans('Lastname', array(), 'Admin.Global'),
                'width' => 'auto',
            ),
            'date_add' => array(
                'title' => $this->trans('Date Add', array(), 'Admin.Global'),
                'search' => false,
                'align' => 'center',
            ),
            'rate' => array(
                'title' => $this->trans('Rate', array(), 'Admin.Global'),
                'search' => false,
                'align' => 'center',
            ),
        );

        $this->addRowAction('delete');
    }
}