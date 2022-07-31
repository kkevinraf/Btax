<?php

namespace Cooperative\CooperativeBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Type_placeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlaceRepository extends EntityRepository
{
	public function findByCooperative($cooperative)
	{
		$query = $this->_em->createQuery("SELECT a FROM CooperativeBundle:Place a JOIN BtaxBundle:Cooperative c where a.cooperative = c.id and c.nom like '".$cooperative."'");
		return $query->getResult();
	}
}
