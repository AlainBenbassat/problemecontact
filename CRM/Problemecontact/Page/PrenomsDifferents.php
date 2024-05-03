<?php
use CRM_Problemecontact_ExtensionUtil as E;

class CRM_Problemecontact_Page_PrenomsDifferents extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle('Prénoms differents');

    $this->getData();
    
    parent::run();
  }


  private function getData() {
    $sql = "
      select
        c.id,
        c.first_name,
        c.last_name,
        c.is_deleted,
        c2.first_name,
        c2.last_name,
        c2.is_deleted
      from
        civicrm_contact c
      inner join 
        2023cncd.2023_02_civicrm_contact c2 on c2.id = c.id
      where c.first_name <> c2.first_name;
    ";
    
    $dao = CRM_Core_DAO::executeSQL($sql);
    while ($dao->fetch()) {
		echo $dao->id . '<br>';
	}
  }

}
