<?php
/**
 * Created by PhpStorm.
 * User: suresh
 * Date: 18/4/15
 * Time: 1:06 PM
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser{

    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
} 