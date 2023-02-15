<?php

namespace App\Controllers;

use App\Models\ContactModel;


class Contact extends BaseController{

    public function insertContactAction(){
        $data = [
            'name'=> $this -> request -> getVar('name'),
            'email'=> $this -> request -> getVar('email'),
            'message'=> $this -> request -> getVar('message')
        ];
        $ContactModel = new ContactModel();
        $ContactModel ->insert($data);
        return redirect()->to(base_url('/'));
        
       
    }
}