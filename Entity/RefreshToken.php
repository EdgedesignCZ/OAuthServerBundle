<?php

namespace Edge\OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Refresh token
 *
 * @ORM\MappedSuperclass
 *
 * @author VeN <vaclav.novotny@edgedesign.cz>
 */
abstract class RefreshToken extends \FOS\OAuthServerBundle\Entity\RefreshToken
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $client;

    /**
     * ORM ManyToOne(targetEntity="Your\Own\Entity\User")
     */
    protected $user;

}
