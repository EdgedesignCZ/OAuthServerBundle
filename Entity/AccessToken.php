<?php

namespace Edge\OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access token
 *
 * @ORM\MappedSuperclass
 *
 * @author VeN <vaclav.novotny@edgedesign.cz>
 */
abstract class AccessToken extends \FOS\OAuthServerBundle\Entity\AccessToken
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
