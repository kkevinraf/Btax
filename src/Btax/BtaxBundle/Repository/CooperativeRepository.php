<?php

namespace Btax\BtaxBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CooperativeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CooperativeRepository extends EntityRepository
{
	public function getIdCooperativeByName($name)
	{
		$query = $this->_em->createQuery("SELECT c FROM BtaxBundle:Cooperative c JOIN UtilisateursBundle:Utilisateurs u WHERE c.login = u.id AND u.username = '".$name."'" );
		return $entites = $query->getResult();
		
	}

}
