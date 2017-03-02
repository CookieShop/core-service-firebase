<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Adteam\Core\Service\Firebase\Repository;

/**
 * Description of CoreUsersDevicesRepository
 *
 * @author dev
 */
use Doctrine\ORM\EntityRepository;
use Adteam\Core\Service\Firebase\Entity\CoreUsersDevices;
use Adteam\Core\Service\Firebase\Entity\OauthUsers;

class CoreUsersDevicesRepository extends EntityRepository
{
    //put your code here
    public function insertDevice($user,$data)
    {
        $device = new CoreUsersDevices();
        $data = (array)$data;
        $userId = $this->_em->getReference(OauthUsers::class, $user);
        $device->setUser($userId);
        $device->setDevice($data['device']);
        $device->setPayload($data['payload']);
        $this->_em->persist($device); 
        $this->_em->flush();
        return $device->getId();
    }        
}
