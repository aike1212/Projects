<?php

/**
 * Tblusers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
class Tblusers extends BaseTblusers
{
    public function get_user_by_login($username, $password){
      $query = Doctrine_Query::create()
        ->select("u.*")
        ->from("Tblusers u")
        ->where("u.username = :username AND u.password = :password",
          array(
              ":username" => $username,
              ":password" => $password
          ));

      $result = $query->execute();

      if(count($result) > 0){
        $result = $result->getFirst();
        // since this user logged in, we add his logins and record his last
        // login to the database
        $result->logins ++;
        $result->last_login = strtotime("now");
        $result->save();

        return $result;
      }
      else 
      {
        return null;
      }
    }

    public function list_of_users($keyword, $page) {
      $limit = 33;

      if($page < 1)
        $offset = 0;
      else
        $offset = ($page - 1) * $limit;

      $query = Doctrine_Query::create()
        ->from("Tblusers u")
        ->limit($limit)
        ->offset($offset);

      return $query;
    }
}