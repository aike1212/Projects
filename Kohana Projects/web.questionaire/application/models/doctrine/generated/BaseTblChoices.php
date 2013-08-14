<?php

/**
 * BaseTblChoices
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $c_id
 * @property string $choice
 * @property timestamp $date_created
 * @property integer $q_id
 * @property TblQuestions $TblQuestions
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseTblChoices extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('tbl_choices');
        $this->hasColumn('c_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('choice', 'string', 1024, array(
             'type' => 'string',
             'length' => 1024,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('date_created', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('q_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('TblQuestions', array(
             'local' => 'q_id',
             'foreign' => 'q_id'));
    }
}