<?php
use Migrations\AbstractMigration;

class MAR15 extends AbstractMigration
{
    public function up()
    {

        // $this->table('inquiries')
        //     ->addColumn('desired_area', 'string', [
        //         'after' => 'contact_kind',
        //         'comment' => '希望エリア',
        //         'default' => null,
        //         'limit' => 5,
        //         'null' => true,
        //     ])
        //     ->update();

        $this->table('desiredareainfo')
        ->addColumn('desired_area', 'string', [
            'comment' => '希望エリア',
            'default' => null,
            'limit' => 5,
            'null' => false,
        ])
        ->addColumn('desired_area_name', 'string', [
            'comment' => '希望エリア名',
            'default' => null,
            'limit' => 50,
            'null' => false,
        ])
        ->addColumn('wedding', 'integer', [
            'comment' => 'ウェディング',
            'default' => null,
            'limit' => 1,
            'null' => false,
        ])
        ->addColumn('photo', 'integer', [
            'comment' => 'フォト',
            'default' => null,
            'limit' => 1,
            'null' => false,
        ])
        ->addColumn('email', 'string', [
            'comment' => '送信先',
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('sort_index', 'integer', [
            'comment' => '表示順',
            'default' => null,
            'limit' => 11,
            'null' => true,
        ])
        ->addColumn('display_flag', 'boolean', [
            'comment' => '表示フラグ',
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('created', 'datetime', [
            'comment' => '登録日時',
            'default' => null,
            'limit' => null,
            'null' => true,
        ])
        ->addColumn('created_by', 'integer', [
            'comment' => '登録者ID',
            'default' => null,
            'limit' => 10,
            'null' => true,
            'signed' => false,
        ])
        ->addColumn('modified', 'datetime', [
            'comment' => '更新日時',
            'default' => null,
            'limit' => null,
            'null' => true,
        ])
        ->addColumn('modified_by', 'integer', [
            'comment' => '更新者ID',
            'default' => null,
            'limit' => 10,
            'null' => true,
            'signed' => false,
        ])
        ->addIndex(
            [
                'desired_area',
            ]
        )
        ->create();

    }

    public function down()
    {

        // $this->table('inquiries')
        //     ->removeColumn('desired_area')
        //     ->update();
        $this->table('desiredareainfo')->drop()->save();
    }

}
