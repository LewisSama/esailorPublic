<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"username"}, message="Ce nom d'entreprise existe déjà")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_open;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_alwaysOpen;

    /**
     * @ORM\Column(type="json")
     */
    private $keyWord = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lifeInvader;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $corpNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ceoName;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ceoNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ceoMail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $webSite;

    /**
     * @ORM\Column(type="integer")
     */
    private $secret_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_superAdmin;

    /**
     * @ORM\Column(type="integer")
     */
    private $RIB;

    /**
     * @ORM\Column(type="integer")
     */
    private $entrepriseCategory;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localisation_img;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIsOpen(): ?bool
    {
        return $this->is_open;
    }

    public function setIsOpen(bool $is_open): self
    {
        $this->is_open = $is_open;
        return $this;
    }

    public function getIsAlwaysOpen(): ?bool
    {
        return $this->is_alwaysOpen;
    }

    public function setIsAlwaysOpen(bool $is_alwaysOpen): self
    {
        $this->is_alwaysOpen = $is_alwaysOpen;

        return $this;
    }

    public function getKeyWord(): ?array
    {
        return $this->keyWord;
    }

    public function setKeyWord(array $keyWord): self
    {
        $this->keyWord = $keyWord;

        return $this;
    }

    public function getLifeInvader(): ?string
    {
        return $this->lifeInvader;
    }

    public function setLifeInvader(string $lifeInvader): self
    {
        $this->lifeInvader = $lifeInvader;

        return $this;
    }

    public function getCorpNumber(): ?string
    {
        return $this->corpNumber;
    }

    public function setCorpNumber(string $corpNumber): self
    {
        $this->corpNumber = $corpNumber;

        return $this;
    }

    public function getCeoName(): ?string
    {
        return $this->ceoName;
    }

    public function setCeoName(?string $ceoName): self
    {
        $this->ceoName = $ceoName;

        return $this;
    }

    public function getCeoNumber(): ?string
    {
        return $this->ceoNumber;
    }

    public function setCeoNumber(?string $ceoNumber): self
    {
        $this->ceoNumber = $ceoNumber;

        return $this;
    }

    public function getCeoMail(): ?string
    {
        return $this->ceoMail;
    }

    public function setCeoMail(?string $ceoMail): self
    {
        $this->ceoMail = $ceoMail;

        return $this;
    }

    public function getWebSite(): ?string
    {
        return $this->webSite;
    }

    public function setWebSite(?string $webSite): self
    {
        $this->webSite = $webSite;

        return $this;
    }

    public function getSecretId(): ?int
    {
        return $this->secret_id;
    }

    public function setSecretId(int $secret_id): self
    {
        $this->secret_id = $secret_id;

        return $this;
    }

    public function getIsSuperAdmin(): ?bool
    {
        return $this->is_superAdmin;
    }

    public function setIsSuperAdmin(bool $is_superAdmin): self
    {
        $this->is_superAdmin = $is_superAdmin;

        return $this;
    }

    public function getRIB(): ?int
    {
        return $this->RIB;
    }

    public function setRIB(int $RIB): self
    {
        $this->RIB = $RIB;

        return $this;
    }

    public function getEntrepriseCategory(): ?int
    {
        return $this->entrepriseCategory;
    }

    public function setEntrepriseCategory(int $entrepriseCategory): self
    {
        $this->entrepriseCategory = $entrepriseCategory;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getLocalisationImg(): ?string
    {
        return $this->localisation_img;
    }

    public function setLocalisationImg(string $localisation_img): self
    {
        $this->localisation_img = $localisation_img;

        return $this;
    }
}
