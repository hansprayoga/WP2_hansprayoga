<?php
class review extends CI_Controller
{
 public function index()
 {
 $this->load->view('form');
 $this->load->view('footer');
 }
 public function cetak()
 {
 $data = [
 'nm' => $this->input->post('nm'),
 'no' => $this->input->post('no'),
 'mk' => $this->input->post('mk'),
 'uk' => $this->input->post('uk'),
 ];

 $this->load->view('data', $data);
 }
