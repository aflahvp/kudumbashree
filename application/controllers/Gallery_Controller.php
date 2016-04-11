<?php
/**
 * Created by PhpStorm.
 * User: noushi
 * Date: 11/4/16
 * Time: 4:20 PM
 */

require_once(APPPATH . 'controllers/Check_Logged.php');
class Gallery_Controller extends Check_Logged{

    public function __construct()
    {
        parent::__construct();
    }

    public function view_all()
    {
        $data['message'] = 'unable to process at this time try again later';
        $this->load->view('admin/view_gallery');
    }

}