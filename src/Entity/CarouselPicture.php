<?php

namespace App\Entity;

use App\Repository\CarouselPictureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarouselPictureRepository::class)]
class CarouselPicture
{

    #[ORM\Column(nullable: true)]
    private ?int $position = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'carouselPictures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Carousel $carousel = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'carouselPictures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Picture $picture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCarousel(): ?Carousel
    {
        return $this->carousel;
    }

    public function setCarousel(?Carousel $carousel): self
    {
        $this->carousel = $carousel;

        return $this;
    }

    public function getPicture(): ?Picture
    {
        return $this->picture;
    }

    public function setPicture(?Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}
