<?php

namespace Btax\BtaxBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LocalisationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LocalisationRepository extends EntityRepository
{
	public function findLocalisation($localisation)
	{	
		$id = 0;
		$query = $this->_em->createQuery("SELECT a FROM BtaxBundle:Localisation a WHERE a.localisation = '".$localisation."'");
		$entites = $query->getResult();

		foreach ($entites as $e)
		{
			$id = $e->getId();
			break;
		}
		return $id;
	}
}
