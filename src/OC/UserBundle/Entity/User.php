<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OC\UserBundle\Entity\UserRepository")
 */

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="username", type="string", length=255, unique=true)
   */
  private $username;

  /**
   * @ORM\Column(name="password", type="string", length=255)
   */
  private $password;

  /**
   * @ORM\Column(name="salt", type="string", length=255)
   */
  private $salt;

  /**
   * @ORM\Column(name="roles", type="array")
   */
  private $roles = array();

  // Les getters et setters

  public function getRoles()
  {
    return $this->roles;
  }

  public function setRoles($roles)
  {
    $this->roles = $roles;
    return $this;
  }

  public function getSalt()
  {
    return $this->salt;
  }

  public function setSalt($salt)
  {
    $this->salt = $salt;
    return $this;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }

  public function eraseCredentials()
  {
  }
}