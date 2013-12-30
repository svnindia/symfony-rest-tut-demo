<?php
namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
	public function findAllOrderedByName()
	{
		return $this->getEntityManager()
		->createQuery(
				'SELECT p FROM AcmeBlogBundle:Page p ORDER BY p.title ASC'
		)
		->getResult();
	}

}