<?php

/**
 * Tblcontents
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
class Tblcontents extends BaseTblcontents
{
  public function guest_content()
  {
    $query = Doctrine_Query::create()
      ->select("*")
      ->from("tblcontents as c")
      ->where("c.location = ?","guest");

    return $query->execute();
  }

  public function guest_rules()
  {
    $query = Doctrine_Query::create()
      ->select("*")
      ->from("tblcontents as c")
      ->where("c.location = ?","user_priviledges");

    return $query->execute();
  }
}