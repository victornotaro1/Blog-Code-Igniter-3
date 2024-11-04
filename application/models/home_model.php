<?php

	class Home_model extends CI_model
	{
		public function index()
		{
			$this->db->order_by("name", "ASC");
			return $this->db->get("tb_games")->result_array();
		}

		
	}