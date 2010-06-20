<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 /**
  * Description of muser
  *
  * @author              Roberto Rubio · Quart de Poblet (Valencia) SPAIN
  * @package		Geonio
  * @author		ExpressionEngine Dev Team
  * @copyright           Copyright (c) 2010 Roberto Rubio
  * @license		http://www.geonio.com
  * @link		http://www.geonio.com
  * @since		Version 0.0
  * @filesource
  */

//------------------------------------------------------------------------------

  /*
   *  This file is used when the application need to get data table User
   *
   */

class Muser extends Model {

    function Muser()
    {
        parent::Model();
    }
   //get user with param $id -> primary key
    function get_user($id){

        $this->db->where('user_id', $id);
        $query = $this->db->get('user');
        return $query;
    }
   //Update user param $id primary key and $data -> array data
    function update($id,$data){

        $this->db->where('user_id', $id);
        return $this->db->update('user', $data);
    }

    //Insert User
    function insert($data){

        $this->db->insert('user', $data);
    }
    //delete user $param id_user
    function delete($id){

        $this->db->where('user_id', $id);
        return $this->db->delete('user');

    }

}
?>
