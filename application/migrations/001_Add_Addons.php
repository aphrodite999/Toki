<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Addons extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '191',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('addons');
		$this->db->insert('addons',['name' => 'demo_addon']);
	}

	public function down()
	{
		$this->dbforge->drop_table('addons');
	}
}
