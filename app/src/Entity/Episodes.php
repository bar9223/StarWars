<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Episodes
 *
 * @ORM\Table(name="episodes")
 * @ORM\Entity
 */
class Episodes
{
    /**
     * @var int
     *
     * @ORM\Column(name="ep_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="episodes_ep_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ep_name", type="string", length=16, nullable=true)
     */
    protected $name;

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
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
