<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Adteam\Core\Service\Firebase\Repository;
/**
 * Description of OauthUsersRepository
 *
 * @author dev
 */
use Doctrine\ORM\EntityRepository;

class OauthUsersRepository extends EntityRepository
{
    /**
     * 
     * @param type $username
     * @return type
     */
    public function fetchByOne($username)
    {
        return $this
                ->createQueryBuilder('U')->select('R.role,U.id')
                ->join('U.role', 'R')
                ->where('U.username = :username')->setParameter('username', $username)
                ->getQuery()->getSingleResult();
    }
}
