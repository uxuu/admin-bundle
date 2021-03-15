<?php
namespace Ux\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="sessions", options={"collate"="ucs2_general_ci", "charset"="ucs2", "engine"="InnoDB", "comment"="sessions"})
 * @ORM\Entity(repositoryClass="Ux\Bundle\AdminBundle\Repository\SessionRepository")
 */
class Session
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $username;

    /**
     * @ORM\Column(type="binary", length=128, unique=true)
     */
    private $sess_id;

    /**
     * @ORM\Column(type="blob")
     */
    private $sess_data;

    /**
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $sess_lifetime;

    /**
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $sess_time;

    public function setUsername(string $username):self
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setSessionId(string $sess_id):self
    {
        $this->sess_id = $sess_id;
        return $this;
    }

    public function getSessionId()
    {
        return $this->sess_id;
    }

    public function setSessionData(string $sess_data):self
    {
        $this->sess_data = $sess_data;
        return $this;
    }

    public function getSessionData()
    {
        return $this->sess_data;
    }

    public function setSessionLifetime(int $sess_lifetime):self
    {
        $this->sess_lifetime = $sess_lifetime;
        return $this;
    }

    public function getSessionLifetime()
    {
        return $this->sess_lifetime;
    }

    public function setSessionTime(int $sess_time):self
    {
        $this->sess_time = $sess_time;
        return $this;
    }

    public function getSessionTime()
    {
        return $this->sess_time;
    }

}

