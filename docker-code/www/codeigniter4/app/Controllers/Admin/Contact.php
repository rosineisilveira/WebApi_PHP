<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contact extends BaseController{

    public function listContacts(){
        $ContactModel = new ContactModel();
        $ContactModel ->findAll();
        $data = [
            'arrayContacts' =>$ContactModel -> findAll()
        ];
        echo view('admin/templates/header');
        echo view('admin/contact/listContacts',$data);
        echo view('admin/templates/footer');    
    }
}