<?php

/**
 * BaseTblimages
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $image_src
 * @property integer $user_id
 * @property string $status
 * @property timestamp $date_created
 * @property Tblusers $Tblusers
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseTblimages extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('tblimages');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('image_src', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('status', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => false,
             'default' => 'active',
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('date_created', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('Tblusers', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}