<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Indek_model extends CI_Model

{
	public function get_data()
	{
		$scars = array (
			array('volvo', 22, 18, 22)
			,array('BMW', 15, 13, 15)
			,array('Saab', 5, 2, 6)
			,array('Land Rover',17, 15, 20)
			,array('Honda',3,15, 16 )
			);

		return $scars;
	}
}