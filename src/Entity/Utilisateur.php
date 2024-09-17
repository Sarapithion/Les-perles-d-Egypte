<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 50)]
    private ?string $Nom = null;

    #[ORM\Column(length: 50)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Motdepasse = null;

    #[ORM\Column(length: 50)]
    private ?string $Role = null;

    /**
     * @var Collection<int, Evenement>
     */
    #[ORM\ManyToMany(targetEntity: Evenement::class, inversedBy: 'utilisateurs')]
    private Collection $Evenement;

    /**
     * @var Collection<int, Evenement>
     */
    #[ORM\OneToMany(targetEntity: Evenement::class, mappedBy: 'utilisateurOrganisation')]
    private Collection $EvenementsOrganisation;

    /**
     * @var Collection<int, Contact>
     */
    #[ORM\OneToMany(targetEntity: Contact::class, mappedBy: 'utilisateur')]
    private Collection $Contact;

    /**
     * @var Collection<int, Article>
     */
    #[ORM\OneToMany(targetEntity: Article::class, mappedBy: 'utilisateur')]
    private Collection $Article;

    public function __construct()
    {
        $this->Evenement = new ArrayCollection();
        $this->EvenementsOrganisation = new ArrayCollection();
        $this->Contact = new ArrayCollection();
        $this->Article = new ArrayCollection();
    }


    public function getid(): ?int
    {
        return $this->id;
    }

    public function setid(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->Motdepasse;
    }

    public function setMotdepasse(string $Motdepasse): static
    {
        $this->Motdepasse = $Motdepasse;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    public function setRole(string $Role): static
    {
        $this->Role = $Role;

        return $this;
    }

    /**
     * @return Collection<int, Evenement>
     */
    public function getEvenement(): Collection
    {
        return $this->Evenement;
    }

    public function addEvNement(Evenement $evNement): static
    {
        if (!$this->Evenement->contains($evNement)) {
            $this->Evenement->add($evNement);
        }

        return $this;
    }

    public function removeEvNement(Evenement $evNement): static
    {
        $this->Evenement->removeElement($evNement);

        return $this;
    }

    /**
     * @return Collection<int, Evenement>
     */
    public function getEvenementsOrganisation(): Collection
    {
        return $this->EvenementsOrganisation;
    }

    public function addEvenementsOrganisation(Evenement $evenementsOrganisation): static
    {
        if (!$this->EvenementsOrganisation->contains($evenementsOrganisation)) {
            $this->EvenementsOrganisation->add($evenementsOrganisation);
            $evenementsOrganisation->setUtilisateurOrganisation($this);
        }

        return $this;
    }

    public function removeEvenementsOrganisation(Evenement $evenementsOrganisation): static
    {
        if ($this->EvenementsOrganisation->removeElement($evenementsOrganisation)) {
            // set the owning side to null (unless already changed)
            if ($evenementsOrganisation->getUtilisateurOrganisation() === $this) {
                $evenementsOrganisation->setUtilisateurOrganisation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contact>
     */
    public function getContact(): Collection
    {
        return $this->Contact;
    }

    public function addContact(Contact $contact): static
    {
        if (!$this->Contact->contains($contact)) {
            $this->Contact->add($contact);
            $contact->setUtilisateur($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): static
    {
        if ($this->Contact->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getUtilisateur() === $this) {
                $contact->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getArticle(): Collection
    {
        return $this->Article;
    }

    public function addArticle(Article $article): static
    {
        if (!$this->Article->contains($article)) {
            $this->Article->add($article);
            $article->setUtilisateur($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): static
    {
        if ($this->Article->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getUtilisateur() === $this) {
                $article->setUtilisateur(null);
            }
        }

        return $this;
    }
}
