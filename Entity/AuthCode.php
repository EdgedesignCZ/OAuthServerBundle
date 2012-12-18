<?php

namespace Edge\OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auth code
 *
 * @ORM\MappedSuperclass
 *
 * @author VeN <vaclav.novotny@edgedesign.cz>
 */
abstract class AuthCode extends \FOS\OAuthServerBundle\Entity\AuthCode
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Client", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $client;

    /**
     * ORM ManyToOne(targetEntity="Your\Own\Entity\User")
     */
    protected $user;

}
