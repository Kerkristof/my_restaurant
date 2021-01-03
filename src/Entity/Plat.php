<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlatRepository::class)
 */
class Plat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\OneToMany(targetEntity=PlatImage::class, mappedBy="plat", orphanRemoval=true)
     */
    private $platImages;

    public function __construct()
    {
        $this->platImages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Collection|PlatImage[]
     */
    public function getPlatImages(): Collection
    {
        return $this->platImages;
    }

    public function addPlatImage(PlatImage $platImage): self
    {
        if (!$this->platImages->contains($platImage)) {
            $this->platImages[] = $platImage;
            $platImage->setPlat($this);
        }

        return $this;
    }

    public function removePlatImage(PlatImage $platImage): self
    {
        if ($this->platImages->removeElement($platImage)) {
            // set the owning side to null (unless already changed)
            if ($platImage->getPlat() === $this) {
                $platImage->setPlat(null);
            }
        }

        return $this;
    }
}
