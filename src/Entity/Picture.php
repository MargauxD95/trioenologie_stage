<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PictureRepository::class)]
class Picture
{


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $altText = null;

    #[ORM\Column(length: 255)]
    private ?string $pictureFile = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $width = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $height = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $legend = null;

    #[ORM\ManyToMany(targetEntity: Article::class, mappedBy: 'pictures')]
    private Collection $articles;

    #[ORM\ManyToMany(targetEntity: Occasion::class, mappedBy: 'pictures')]
    private Collection $occasions;

    #[ORM\ManyToMany(targetEntity: Gallery::class, mappedBy: 'pictures')]
    private Collection $galleries;

    #[ORM\OneToMany(mappedBy: 'picture', targetEntity: CarouselPicture::class)]
    private Collection $carouselPictures;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pictureFileH200 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pictureFileH400 = null;



    public function __construct()
    {
        $this->articles = new ArrayCollection();

        $this->occasions = new ArrayCollection();
        $this->galleries = new ArrayCollection();
        $this->carouselPictures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAltText(): ?string
    {
        return $this->altText;
    }

    public function setAltText(?string $altText): self
    {
        $this->altText = $altText;

        return $this;
    }

    public function getPictureFile(): ?string
    {
        return $this->pictureFile;
    }

    public function setPictureFile(string $pictureFile): self
    {
        $this->pictureFile = $pictureFile;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getLegend(): ?string
    {
        return $this->legend;
    }

    public function setLegend(?string $legend): self
    {
        $this->legend = $legend;

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->addPicture($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            $article->removePicture($this);
        }

        return $this;
    }


    /**
     * @return Collection<int, Occasion>
     */
    public function getOccasions(): Collection
    {
        return $this->occasions;
    }

    public function addOccasion(Occasion $occasion): self
    {
        if (!$this->occasions->contains($occasion)) {
            $this->occasions->add($occasion);
            $occasion->addPicture($this);
        }

        return $this;
    }

    public function removeOccasion(Occasion $occasion): self
    {
        if ($this->occasions->removeElement($occasion)) {
            $occasion->removePicture($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Gallery>
     */
    public function getGalleries(): Collection
    {
        return $this->galleries;
    }

    public function addGallery(Gallery $gallery): self
    {
        if (!$this->galleries->contains($gallery)) {
            $this->galleries->add($gallery);
            $gallery->addPicture($this);
        }

        return $this;
    }

    public function removeGallery(Gallery $gallery): self
    {
        if ($this->galleries->removeElement($gallery)) {
            $gallery->removePicture($this);
        }

        return $this;
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
            $carouselPicture->setPicture($this);
        }

        return $this;
    }

    public function removeCarouselPicture(CarouselPicture $carouselPicture): self
    {
        if ($this->carouselPictures->removeElement($carouselPicture)) {
            // set the owning side to null (unless already changed)
            if ($carouselPicture->getPicture() === $this) {
                $carouselPicture->setPicture(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPictureFileH200(): ?string
    {
        return $this->pictureFileH200;
    }

    public function setPictureFileH200(?string $pictureFileH200): self
    {
        $this->pictureFileH200 = $pictureFileH200;

        return $this;
    }

    public function getPictureFileH400(): ?string
    {
        return $this->pictureFileH400;
    }

    public function setPictureFileH400(?string $pictureFileH400): self
    {
        $this->pictureFileH400 = $pictureFileH400;

        return $this;
    }
}
