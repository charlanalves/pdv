<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AcessoMigration_100
 */
class AcessoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('acesso', array(
                'columns' => array(
                    new Column(
                        'cd_acesso',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'usuario_cd_usuario',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'cd_acesso'
                        )
                    ),
                    new Column(
                        'ip',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'usuario_cd_usuario'
                        )
                    ),
                    new Column(
                        'sessao',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'ip'
                        )
                    ),
                    new Column(
                        'criado',
                        array(
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'sessao'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('cd_acesso'), 'PRIMARY'),
                    new Index('acesso_FKIndex1', array('usuario_cd_usuario'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_{FE14C813-11F1-4945-968E-2B220A7D9563}',
                        array(
                            'referencedSchema' => 'solinter',
                            'referencedTable' => 'usuario',
                            'columns' => array('usuario_cd_usuario'),
                            'referencedColumns' => array('cd_usuario'),
                            'onUpdate' => '',
                            'onDelete' => ''
                        )
                    )
                ),
                'options' => array(
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '1',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'latin1_swedish_ci'
                ),
            )
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
