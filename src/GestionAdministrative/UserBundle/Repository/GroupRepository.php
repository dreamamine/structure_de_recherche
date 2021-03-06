<?php

namespace GestionAdministrative\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * GroupRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GroupRepository extends EntityRepository
{
    public function findOneByRoles($roles)
    {
        return $this->createQueryBuilder('groups')
            ->andWhere('groups.roles = :roles')
            ->setParameter('roles', serialize($roles))
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}