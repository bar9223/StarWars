<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Friends
 *
 * @ORM\Table(name="friends")
 * @ORM\Entity
 */
class Friends
{
    /**
     * @var int
     *
     * @ORM\Column(name="fr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Characters
     *
     * @ORM\ManyToOne(targetEntity="Characters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="character_id", referencedColumnName="char_id")
     * })
     */
    private $character;

    /**
     * @var Characters
     *
     * @ORM\ManyToOne(targetEntity="Characters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="friend_id", referencedColumnName="char_id")
     * })
     */
    private $friend;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Characters
     */
    public function getCharacter(): Characters
    {
        return $this->character;
    }

    /**
     * @param Characters $character
     */
    public function setCharacter(Characters $character): void
    {
        $this->character = $character;
    }

    /**
     * @return Characters
     */
    public function getFriend(): Characters
    {
        return $this->friend;
    }

    /**
     * @param Characters $friend
     */
    public function setFriend(Characters $friend): void
    {
        $this->friend = $friend;
    }
}