<?php
/**
 * Created by PhpStorm.
 * User: UC8456
 * Date: 17.01.2017
 * Time: 16:39
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tl_user")
 */
class User
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
     private $username;


}