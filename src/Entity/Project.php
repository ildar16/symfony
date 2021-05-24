<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\ColumnTrait\CreatedAtTrait;
use App\Entity\ColumnTrait\UpdatedAtTrait;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 * @ORM\Table(name="projects")
 * @ORM\HasLifecycleCallbacks
 */
class Project
{
    use CreatedAtTrait;
    use UpdatedAtTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", unique=true)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $program_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $short_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $long_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $benefits;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zipdcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $project_developer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $architect;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $delivery;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $floor_area;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nd_de_logements;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $brochure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $document_label;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description_label;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $film;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $visible;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $coming_soon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salesman;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link_label;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link_url_saleman_site;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgramName(): ?string
    {
        return $this->program_name;
    }

    public function setProgramName(string $program_name): self
    {
        $this->program_name = $program_name;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->short_description;
    }

    public function setShortDescription(string $short_description): self
    {
        $this->short_description = $short_description;

        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->long_description;
    }

    public function setLongDescription(string $long_description): self
    {
        $this->long_description = $long_description;

        return $this;
    }

    public function getBenefits(): ?string
    {
        return $this->benefits;
    }

    public function setBenefits(string $benefits): self
    {
        $this->benefits = $benefits;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipdcode(): ?string
    {
        return $this->zipdcode;
    }

    public function setZipdcode(string $zipdcode): self
    {
        $this->zipdcode = $zipdcode;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getProjectDeveloper(): ?string
    {
        return $this->project_developer;
    }

    public function setProjectDeveloper(string $project_developer): self
    {
        $this->project_developer = $project_developer;

        return $this;
    }

    public function getArchitect(): ?string
    {
        return $this->architect;
    }

    public function setArchitect(string $architect): self
    {
        $this->architect = $architect;

        return $this;
    }

    public function getDelivery(): ?string
    {
        return $this->delivery;
    }

    public function setDelivery(string $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getFloorArea(): ?string
    {
        return $this->floor_area;
    }

    public function setFloorArea(string $floor_area): self
    {
        $this->floor_area = $floor_area;

        return $this;
    }

    public function getNdDeLogements(): ?string
    {
        return $this->nd_de_logements;
    }

    public function setNdDeLogements(string $nd_de_logements): self
    {
        $this->nd_de_logements = $nd_de_logements;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getBrochure(): ?string
    {
        return $this->brochure;
    }

    public function setBrochure(string $brochure): self
    {
        $this->brochure = $brochure;

        return $this;
    }

    public function getDocumentLabel(): ?string
    {
        return $this->document_label;
    }

    public function setDocumentLabel(string $document_label): self
    {
        $this->document_label = $document_label;

        return $this;
    }

    public function getDescriptionLabel(): ?string
    {
        return $this->description_label;
    }

    public function setDescriptionLabel(string $description_label): self
    {
        $this->description_label = $description_label;

        return $this;
    }

    public function getFilm(): ?string
    {
        return $this->film;
    }

    public function setFilm(string $film): self
    {
        $this->film = $film;

        return $this;
    }

    public function getVisible(): ?string
    {
        return $this->visible;
    }

    public function setVisible(string $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getComingSoon(): ?string
    {
        return $this->coming_soon;
    }

    public function setComingSoon(string $coming_soon): self
    {
        $this->coming_soon = $coming_soon;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getSalesman(): ?string
    {
        return $this->salesman;
    }

    public function setSalesman(string $salesman): self
    {
        $this->salesman = $salesman;

        return $this;
    }

    public function getLinkLabel(): ?string
    {
        return $this->link_label;
    }

    public function setLinkLabel(string $link_label): self
    {
        $this->link_label = $link_label;

        return $this;
    }

    public function getLinkUrlSalemanSite(): ?string
    {
        return $this->link_url_saleman_site;
    }

    public function setLinkUrlSalemanSite(string $link_url_saleman_site): self
    {
        $this->link_url_saleman_site = $link_url_saleman_site;

        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
