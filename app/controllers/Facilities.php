<?php 

class Facilities extends Controller {
    public function index()
    {
        $data['judul'] = 'Facilities';
        $this->view('templates/header', $data);
        $this->view('templates/footer');
    }
}