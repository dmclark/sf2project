<?php 

namespace JRI\CatsBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ProgramRepository extends EntityRepository
{
	public function getPrograms()
	{
		return $this->getEntityManager()
			->createQuery('SELECT p, k FROM  JRICatsBundle:Program p
							JOIN p.package k 
							ORDER BY p.name ASC')
			->getResult();
	}
}