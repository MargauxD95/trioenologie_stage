<?php

namespace App\Entity;

use App\Entity\CarouselPicture;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CarouselRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: CarouselRepository::class)]
class Carousel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $page = null;

    #[ORM\OneToMany(mappedBy: 'carousel', targetEntity: CarouselPicture::class, cascade:['persist'])]
    private Collection $carouselPictures;

    public function __construct()
    {
        $this->carouselPictures = new ArrayCollection();
    }

      public function getId(): ?int
    {
        return $this->id;
    }

    public function getPage(): ?string
    {
        return $this->page;
    }

    public function setPage(?string $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return Collection<int, CarouselPicture>
     */
    public function getPicture(): Collection
    {
        return $this->picture;
    }

    /**
     * @return Collection<int, CarouselPicture>
     */
    public function getCarouselPictures(): Collection
    {
        return $this->carouselPictures;
    }

    public function addCarouselPicture(CarouselPicture $carouselPicture): self
    {
        if (!$this->carouselPictures->contains($carouselPicture)) {
            $this->carouselPictures->add($carouselPicture);
            $carouselPicture->setCarousel($this);
        }

        return $this;
    }

    public function removeCarouselPicture(CarouselPicture $carouselPicture): self
    {
        if ($this->carouselPictures->removeElement($carouselPicture)) {
            // set the owning side to null (unless already changed)
            if ($carouselPicture->getCarousel() === $this) {
                $carouselPicture->setCarousel(null);
            }
        }

        return $this;
    }
}
