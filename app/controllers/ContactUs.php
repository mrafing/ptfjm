<?php 

class ContactUs extends Controller {
    public function index()
    {
        $data['judul'] = 'Contact Us';
        $this->view('templates/header', $data);
        $this->view('contactus/index', $data);
        $this->view('templates/footer');
    }
}