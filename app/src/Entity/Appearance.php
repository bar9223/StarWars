<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Appearance
 *
 * @ORM\Table(name="appearance")
 * @ORM\Entity
 */
class Appearance
{
    /**
     * @var int
     *
     * @ORM\Column(name="app_id", type="integer", nullable=false)
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
     * @var Episodes
     *
     * @ORM\ManyToOne(targetEntity="Episodes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="episode_id", referencedColumnName="ep_id")
     * })
     */
    private $episode;

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
     * @return Episodes
     */
    public function getEpisode(): Episodes
    {
        return $this->episode;
    }

    /**
     * @param Episodes $episode
     */
    public function setEpisode(Episodes $episode): void
    {
        $this->episode = $episode;
    }
}