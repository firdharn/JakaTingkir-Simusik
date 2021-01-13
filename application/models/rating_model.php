<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rating_model extends CI_Model {

    public $table = 'rating';
    public $id = 'id_rating';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_data_rating()
    {
        return $this->db->order_by('id_rating', 'desc')
                        ->join('rating', 'rating.id_acara = acara.id_acara')
                        ->get('acara')
                        ->result();
    }

    public function fetch($id){
        $this->db->select('*')->where('id_rating',$id);

        $query = $this->db->get('rating');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function delete($id) {
    return $this->db->delete('rating', array('id_rating'=>$id));
  }
    

    public function add(){
        $data = array(
            //nama kolom    //nama form input
            'id_rating' => NULL,
            'id_acara' => $this->input->post('id_acara'),
            'rating'      => $this->input->post('rating'),
            'email'      => $this->input->post('email'),
            'komentar'      => $this->input->post('komentar'),
        );

        //proses input data
        $this->db->insert('rating', $data);

        //cek apakah berhasil
        if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
   

//     public function update_rating(){
//         $connect = mysqli_connect("localhost", "root", "", "db_jember");
// $rating = $_POST["rating"];
// $index = $_POST["index"];
// // if(isset($index) && isset($id)&& isset($rating)){
//  $query = "UPDATE `rating` SET `rating` = '".$index."' WHERE `id_rating` = '".$rating."';";
 
//  $result = mysqli_query($connect,$query);
//     if (mysqli_affected_rows($connect) > 0) {
//     }else { 
//         return "dumb";
//     }

//     }

//    public function insert_rating(){
//      $connect = mysqli_connect("localhost", "root", "", "db_jember");
// $rating = $_POST["rating"];
// $index = $_POST["index"];
// // if(isset($index) && isset($id)&& isset($rating)){
//  $query = "UPDATE `rating` SET `rating` = '".$index."' WHERE `id_rating` = '".$rating."';";
 
//  $result = mysqli_query($connect,$query);
//     if (mysqli_affected_rows($connect) > 0) {
//     }else { 
//         return "dumb";
//     }
//    } 

//    public function update($id_comment, $rating){
    

//     if(isset($index) && isset($rating)){
//      $query = "UPDATE `comment` SET `rating` = '".$index."' WHERE `id_comment` = '".$rating."';";
     
//      $result = mysqli_query($connect,$query);
//      if (mysqli_affected_rows($connect) > 0) {
//         return "hey";
//       }else { 
//         return "dumb";
//      }
//    }


 }