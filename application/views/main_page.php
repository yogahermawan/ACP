<?php
$this->load->view('partials/header');

if (isset($page)) {
    $this->load->view($page);
}

$this->load->view('partials/footer');