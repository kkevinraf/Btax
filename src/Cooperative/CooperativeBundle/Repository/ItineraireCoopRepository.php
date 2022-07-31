<?php

namespace Cooperative\CooperativeBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ItineraireCoopRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ItineraireCoopRepository extends EntityRepository
{

	public function findByDepartDestination($depart, $destination)
	{
		$query = $this->_em->createQuery("SELECT a FROM CooperativeBundle:ItineraireCoop a INNER JOIN CooperativeBundle:Itineraire i WHERE a.itineraire = i.id and i.depart = ".$depart." and i.destination = ".$destination);
		return $query->getResult();
	}

	public function getIfExistItineraireCoop($itineraire, $place)
	{
		$id = 0;
		$query = $this->_em->createQuery("SELECT a FROM CooperativeBundle:ItineraireCoop a WHERE a.itineraire = '".$itineraire."' and a.place = ".$place);
		$entites = $query->getResult();

		foreach ($entites as $e)
		{
			$id = $e->getId();
			break;
		}
		return $id;
	}

	public function getItineraire()
	{
		return $i = $this->getDoctrine()
								->getManager()
								->getRepository('CooperativeBundle:ItineraireCoop')
								->getArticleAvecCommentaires();
	}


	public function getArticleAvecCommentaires()
	{
		$qb = $this->createQueryBuilder('a')
			->leftJoin('a.depart', 'l')
			->addSelect('c');

		return $qb->getQuery()->getResult();
	}

	public function getAllItineraireCoop($cooperative)
	{
		$query = $this->_em->createQuery("SELECT a FROM CooperativeBundle:ItineraireCoop a WHERE a.cooperative = ".$cooperative);
		return $query->getResult();
	}

}
