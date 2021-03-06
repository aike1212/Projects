<?php

/**
 * BaseTblQuestions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $q_id
 * @property string $question
 * @property timestamp $date_created
 * @property string $location
 * @property string $questionnaire
 * @property string $type
 * @property Doctrine_Collection $TblAnswers
 * @property Doctrine_Collection $TblChoices
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseTblQuestions extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('tbl_questions');
        $this->hasColumn('q_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('question', 'string', null, array(
             'type' => 'string',
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
        $this->hasColumn('location', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('questionnaire', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasMany('TblAnswers', array(
             'local' => 'q_id',
             'foreign' => 'q_id'));

        $this->hasMany('TblChoices', array(
             'local' => 'q_id',
             'foreign' => 'q_id'));
    }
}