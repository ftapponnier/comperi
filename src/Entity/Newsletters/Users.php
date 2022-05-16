<?php

namespace App\Entity\Newsletters;

use Symfony\Component\Validator\Constraints as Assert;
use Monolog\DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\Newsletters\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[UniqueEntity('email',     errorPath: 'Email', message:'Email déjà enregistrer, veuillez essayez avec un autre.')]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true, unique: true)]
    #[Assert\NotBlank]
    private $email;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Assert\NotBlank]
    #[Assert\Type(\DateTimeImmutable::class)]
    private $created_at;

    #[ORM\Column(type: 'boolean')]
     /**
     * @Assert\NotBlank
     */
    private $is_rgpd = false;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $validation_token;

    #[ORM\Column(type: 'boolean')]
    private $is_valid= false;

    #[ORM\ManyToMany(targetEntity: Newsletters::class, mappedBy: 'users')]
    private $newsletters;

    #[ORM\ManyToMany(targetEntity: Categories::class, inversedBy: 'users')]
     /**
     * @Assert\NotBlank
     */
    private $categories;

    public function __construct()
    {
        $this-> created_at = new \DateTimeImmutable();
        $this->newsletters = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getIsRgpd(): ?bool
    {
        return $this->is_rgpd;
    }

    public function setIsRgpd(bool $is_rgpd): self
    {
        $this->is_rgpd = $is_rgpd;

        return $this;
    }

    public function getValidationToken(): ?string
    {
        return $this->validation_token;
    }

    public function setValidationToken(?string $validation_token): self
    {
        $this->validation_token = $validation_token;

        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->is_valid;
    }

    public function setIsValid(bool $is_valid): self
    {
        $this->is_valid = $is_valid;

        return $this;
    }

    /**
     * @return Collection<int, Newsletters>
     */
    public function getNewsletters(): Collection
    {
        return $this->newsletters;
    }

    public function addNewsletter(Newsletters $newsletter): self
    {
        if (!$this->newsletters->contains($newsletter)) {
            $this->newsletters[] = $newsletter;
            $newsletter->addUser($this);
        }

        return $this;
    }

    public function removeNewsletter(Newsletters $newsletter): self
    {
        if ($this->newsletters->removeElement($newsletter)) {
            $newsletter->removeUser($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            // $category->addUser($this);
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }
}
