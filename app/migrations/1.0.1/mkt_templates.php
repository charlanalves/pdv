<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class MktTemplatesMigration_101
 */
class MktTemplatesMigration_101 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mkt_templates', array(
                'columns' => array(
                    new Column(
                        'cd_template',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'nome',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'cd_template'
                        )
                    ),
                    new Column(
                        'cd_empresa',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'nome'
                        )
                    ),
                    new Column(
                        'responderPara',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'cd_empresa'
                        )
                    ),
                    new Column(
                        'enviadoPor',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'responderPara'
                        )
                    ),
                    new Column(
                        'assunto',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 50,
                            'after' => 'enviadoPor'
                        )
                    ),
                    new Column(
                        'conteudo',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'assunto'
                        )
                    ),
                    new Column(
                        'criado',
                        array(
                            'type' => Column::TYPE_DATETIME,
                            'default' => "CURRENT_TIMESTAMP",
                            'size' => 1,
                            'after' => 'conteudo'
                        )
                    ),
                    new Column(
                        'modificado',
                        array(
                            'type' => Column::TYPE_DATETIME,
                            'default' => "CURRENT_TIMESTAMP",
                            'size' => 1,
                            'after' => 'criado'
                        )
                    ),
                    new Column(
                        'deletado',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'default' => "0",
                            'size' => 1,
                            'after' => 'modificado'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('cd_template'), 'PRIMARY'),
                    new Index('fk_mkt_templates_empresa_idx', array('cd_empresa'), null)
                ),
                'references' => array(
                    new Reference(
                        'fk_mkt_templates_empresa_cd_empresa',
                        array(
                            'referencedSchema' => 'solinter',
                            'referencedTable' => 'empresa',
                            'columns' => array('cd_empresa'),
                            'referencedColumns' => array('cd_empresa'),
                            'onUpdate' => '',
                            'onDelete' => ''
                        )
                    )
                ),
                'options' => array(
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '6',
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
