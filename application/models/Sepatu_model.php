<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Sepatu_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */
use GuzzleHttp\Client;
class Sepatu_model extends CI_Model {
    private $_client;

    public function __construct()
  {
    $this->_client = new Client([
      'base_uri' =>'http://localhost/restserver_sepatu/index.php/sepatu'
        
    ]);
  }
  
  public function getAllSepatu()
  {
    $response = $this->_client->request('GET','sepatu');

    $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
    //   return $this->db->get('tb_sepatu')->result_array();
  }

  public function tambahDataSepatu()
  {
      $data = [
          "merk" => $this->input->post('merk', true),
          "ukuran" => $this->input->post('ukuran', true),
          "warna" => $this->input->post('warna', true),
          "harga" => $this->input->post('harga', true),
      ];

      $response = $this->_client->request('POST','sepatu',[
        'form_params' => $data
      ]);
    //   $this->db->insert('tb_sepatu', $data);
  }

  public function hapusDataSepatu($id)
  {
    $response = $this->_client->request('DELETE','sepatu',[
        'form_params' =>[
          'id' => $id
        ]
      ]);
  
      $result = json_decode($response->getBody()->getContents(), true);
      return $result;
  
      // $this->db->where('id', $id);
    //   $this->db->delete('tb_sepatu', ['id' => $id]);
  }

  public function getSepatuById($id)
  {
      return $this->db->get_where('tb_sepatu', ['id_sepatu' => $id])->row_array();
  }

  public function ubahDataSepatu()
  {
      $data = [
          "merk" => $this->input->post('merk', true),
          "ukuran" => $this->input->post('ukuran', true),
          "warna" => $this->input->post('warna', true),
          "harga" => $this->input->post('harga', true), 
          "id_sepatu" => $this->input->post('id_sepatu', true) 
      ];

      $response = $this->_client->request('PUT','sepatu',[
        'form_params' => $data
      ]);

      $result = json_decode($response->getBody()->getContents(), true);
      return $result;

    //   $this->db->where('id', $this->input->post('id'));
    //   $this->db->update('tb_sepatu', $data);
  }
}

/* End of file Sepatu_model.php */
/* Location: ./application/models/Sepatu_model.php */