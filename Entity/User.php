<?php
namespace Ux\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * @ORM\Table(name="admin_users", options={"collate"="ucs2_general_ci", "charset"="ucs2", "engine"="InnoDB", "comment"="users"})
 * @ORM\Entity(repositoryClass="Ux\Bundle\AdminBundle\Repository\UserRepository")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=254, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getUserIdentifier(): string
    {
        return $this->id;
    }
    public function setUsername(string $username):self
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername():string
    {
        return $this->username;
    }

    public function getSalt():?string
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email):self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password):self
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword():?string
    {
        return $this->password;
    }

    public function getRoles():array
    {
        return ['ROLE_ADMIN'];
    }

    public function eraseCredentials()
    {
    }

    public function getLocale()
    {
        return 'zh_CN';
    }
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ]);
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}

