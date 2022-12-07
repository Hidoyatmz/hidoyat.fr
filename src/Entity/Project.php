<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shortDesc = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $longDesc = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private array $langages = [];

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $sourceCode = null;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getShortDesc(): ?string
    {
        return $this->shortDesc;
    }

    public function setShortDesc(?string $shortDesc): self
    {
        $this->shortDesc = $shortDesc;

        return $this;
    }

    public function getLongDesc(): ?string
    {
        return !empty($this->longDesc) ? $this->longDesc : "Ce projet n'a pas encore d'article.";
    }

    public function setLongDesc(?string $longDesc): self
    {
        $this->longDesc = $longDesc;

        return $this;
    }

    public function getLangages(): array
    {
        return $this->langages;
    }

    public function setLangages(?array $langages): self
    {
        $this->langages = $langages;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLangagesAsString() : string {
        $icons = "";
        foreach($this->getLangages() as $langage){
            $icons .= "<i class='devicon-{$langage}-plain colored'></i>";
        }
        return $icons;
    }

    public function getDateAsString() : string {
        return $this->getDate()->format("d-m-Y");
    }

    public function getCard() : string {
        return <<<HTML
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="{$this->getImage()}" alt="{$this->getName()}">
                    </div>
                    <div class="card-body position-relative">
                        <h4 class="card-title fw-bold">{$this->getName()}</h4>
                        <p class="card-text">{$this->getShortDesc()}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            {$this->getLangagesAsString()}
                        </div>
                        <a class="btn btn-outline-light d-none d-sm-block" href="/project/{$this->getId()}">En savoir plus</a>
                    </div>
                </div>
            </div>
        HTML;
    }

    public function getSourceCode(): ?string
    {
        return !empty($this->sourceCode) ?
            "<i class='fa-brands fa-github'></i> <a href='{$this->sourceCode}' target='_blank'>Code source</a>"
            : "<i class='fa-solid fa-eye-slash'></i> Code source non disponible";
    }

    public function setSourceCode(?string $sourceCode): self
    {
        $this->sourceCode = $sourceCode;

        return $this;
    }
}
