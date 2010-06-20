
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
   *  This file is used when the application need to get data table votes
   *
   */

class Mvotes extends Model {

    function Mvotes()
    {
        parent::Model();
    }

     //Insert votes
    function insert($data){

        $this->db->insert('votes', $data);
    }

    function get_votes($news_id){

        $this->db->where('news_id', $id);
        return $this->db->get('votes');
    }
    
}
?>
