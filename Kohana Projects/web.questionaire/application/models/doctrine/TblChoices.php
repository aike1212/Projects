<?php

/**
 * TblChoices
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
class TblChoices extends BaseTblChoices
{
  public function get_choices($question_id)
  {
    $query = Doctrine_Query::create()
      ->from("Tblchoices c")
      ->where("c.q_id = ?", $question_id);
    return $query;
  }
}