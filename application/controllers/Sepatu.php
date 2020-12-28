<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Sepatu
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Sepatu extends CI_Controller
{
    
  public function __construct()
  {
      parent::__construct();

      $this->load->model('Sepatu_model');
  }

  public function index()
  {
      $this->load->view('beranda_v');
  }
  public function data_sepatu()
  {
      $data['Sepatu'] = $this->Sepatu_model->getAllSepatu();
      $this->load->view('datasepatu_v', $data);
  }
  public function tambah()
  {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('merk','Merk','required');
        $this->form_validation->set_rules('ukuran','Ukuran','required');
        $this->form_validation->set_rules('warna','Warna','required');
        $this->form_validation->set_rules('harga','Harga','required');
        if($this->form_validation->run()== false)
        {
          $this->load->view('tambahsepatu_v');
        }
        else
        {
            $this->Sepatu_model->tambahDataSepatu();
            $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
            Data Berhasil Ditambahkan
          </div>');
            redirect('Sepatu/data_sepatu');
        }
    }

    public function ubah($id)
    {
          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->library('session');
  
          
          $data['sepatu'] = $this->Sepatu_model->getSepatuById($id);

          $this->form_validation->set_rules('merk','Merk','required');
          $this->form_validation->set_rules('ukuran','Ukuran','required');
          $this->form_validation->set_rules('warna','Warna','required');
          $this->form_validation->set_rules('harga','Harga','required');
          
      if ($this->form_validation->run() == false) {
        $this->load->view('ubahsepatu_v', $data);

    } else {
        $this->Sepatu_model->ubahDataSepatu();
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('Sepatu/data_sepatu');
    }
      }

      public function hapus($id)
      {
          $this->load->library('session');
          $this->Sepatu_model->hapusDataSepatu($id);
          $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
          Data Berhasil Dihapus
        </div>');
          redirect('Sepatu/data_sepatu');
      }
}


