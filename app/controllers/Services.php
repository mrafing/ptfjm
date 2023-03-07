<?php 

class Services extends Controller {
    public function index()
    {
        $data['judul'] = 'Services';
        $this->view('templates/header', $data);
        $this->view('templates/footer');
    }
}