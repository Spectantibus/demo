<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Post;

/**
 *
 * @ORM\Entity()
 * @ORM\Table(name="symfony_demo_note")
 *
 */
class Note
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     *
     * @Assert\Range(
     *      min = 1,
     *      max = 5,
     *      minMessage = "La note ne doit pas être inférieure à {{ limit }}",
     *      maxMessage = "La note ne doit pas être supérieure à {{ limit }}",
     * )
     */
    private $value;

    /**
     * @var Post
     * @ORM\ManyToOne(targetEntity="App\Entity\Post")
     * @ORM\JoinColumn(nullable=false)
     */
    private $post;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return \App\Entity\Post
     */
    public function getPost(): \App\Entity\Post
    {
        return $this->post;
    }

    /**
     * @param \App\Entity\Post $post
     */
    public function setPost(\App\Entity\Post $post): void
    {
        $this->post = $post;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }



}