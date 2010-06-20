
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

  /*
  * Description of mvotes
  *
  * @author             Roberto Rubio · Quart de Poblet (Valencia) SPAIN
  * @package		Geonio
  * @author		ExpressionEngine Dev Team
  * @copyright          Copyright (c) 2010 Roberto Rubio
  * @license		http://www.geonio.com
  * @link		http://www.geonio.com
  * @since		Version 0.0
  * @filesource
  */

//------------------------------------------------------------------------------

  /*
   *  This file is used when the application need to get data table message
   *
   */

class Mmessage extends Model {

    function Mmessage()
    {
        parent::Model();
    }

    function get_message($message_id){

        $this->db->where('message_id', $message_id);
        return $this->db->get('message');
    }

    function get_message_all_to($begin,$user_id){

        $this->db->where('message_visible_to', '1');
        $this->db->where('message_user_to', $user_id);
        return $this->db->get('message',$begin);

    }

    function get_message_all_from($begin,$user_id){

        $this->db->where('message_visible_from', '1');
        $this->db->where('message_user_from', $user_id);
        return $this->db->get('message',$begin);

    }

    function insert($data){

        $this->db->insert('message', $data);

    }

    function update($id,$data){

        $this->db->where('message_id', $id);
        return $this->db->update('message', $data);

    }



}
?>
