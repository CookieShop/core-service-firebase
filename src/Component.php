<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Adteam\Core\Service\Firebase;

use Zend\ServiceManager\ServiceManager;
use Doctrine\ORM\EntityManager;

/**
 * Description of Command
 *
 * @author dev
 */
 
class Command
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
    
    public function save($device)
    {
        var_dump($device);
        exit;
    }        
}

