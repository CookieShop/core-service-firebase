<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Adteam\Core\Service\Firebase;

use Zend\ServiceManager\ServiceManager;
use Doctrine\ORM\EntityManager;
use Adteam\Core\Service\Firebase\Entity\OauthUsers;
use Adteam\Core\Service\Firebase\Entity\CoreUsersDevices;
/**
 * Description of Command
 *
 * @author dev
 */
 
class Component
{
    
    /**
     *
     * @var type 
     */
    protected $services;

    /**
     * 
     * @param ServiceManager $services
     */
    public function __construct(ServiceManager $services)
    {
        $this->services = $services;
    }
    
    public function save($data)
    {
        $entity = $this->getIdentity();
        $user = $this->getUser($entity['user_id']);
        return $this->insertDevice($user, $data);
    }
    
    public function getIdentity()
    {
        return $this->services->get('authentication')->getIdentity()
                ->getAuthenticationIdentity();
    }
    
    /**
     * 
     * @return type
     */
    public function getEntityManager()
    {
        return $this->services->get(EntityManager::class);
    }

    public function getUser($username)
    {        
        try{
            $em = $this->getEntityManager();        
            $resultSet = $em->getRepository(OauthUsers::class)
                    ->fetchByOne($username);  
        } catch (\Exception $ex) {
            return null;
        }
        return isset($resultSet['id'])?$resultSet['id']:null;        
    }
    
    public function insertDevice($user,$data)
    {
        try{
            $em = $this->getEntityManager();        
            $resultSet = $em->getRepository(CoreUsersDevices::class)
                    ->insertDevice($user,$data);
            return ['id'=>$resultSet];
        } catch (\Exception $ex) {
            throw new \InvalidArgumentException(
                    'Dispositivo ya existe',422);            
        }

    }        
    
}

