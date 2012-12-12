<?php

namespace Edge\OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\MappedSuperclass
 *
 * @author VeN <vaclav.novotny@edgedesign.cz>
 */
class Client extends \FOS\OAuthServerBundle\Entity\Client
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

}
