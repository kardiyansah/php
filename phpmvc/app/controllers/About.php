<?php 

class About extends Controller {
    public function index($name = 'Kardiyansah', $job = '?', $age = 19)
    {
        $data['title'] = 'About/index';
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'About/page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }

}