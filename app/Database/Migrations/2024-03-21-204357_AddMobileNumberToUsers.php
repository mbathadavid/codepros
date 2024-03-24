<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Forge;
use CodeIgniter\Database\Migration;

class AddMobileNumberToUsers extends Migration
{
     /**
     * @var string[]
     */
    private array $tables;

    public function __construct(?Forge $forge = null)
    {
        parent::__construct($forge);

        /** @var \Config\Auth $authConfig */
        $authConfig   = config('Auth');
        $this->tables = $authConfig->tables;
    }

    public function up()
    {
        //
        $fields = [
            'first_name' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'last_name' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'phone' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true],
            'email' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
        ];
        $this->forge->addColumn($this->tables['users'], $fields);
        
    }

    public function down()
    {
        //
        $fields = [
            'first_name',
            'last_name',
            'phone',
            'email'
        ];
        $this->forge->dropColumn($this->tables['users'], $fields);
    }
}
