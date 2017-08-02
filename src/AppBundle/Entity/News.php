<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 */
class News
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="NewsWebsite", type="integer")
     */
    private $newsWebsite;

    /**
     * @var int
     *
     * @ORM\Column(name="NewsStylo", type="integer")
     */
    private $newsStylo;

    /**
     * @var int
     *
     * @ORM\Column(name="NewsCrayon", type="integer")
     */
    private $newsCrayon;

    /**
     * @var int
     *
     * @ORM\Column(name="NewsFeutre", type="integer")
     */
    private $newsFeutre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return News
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return News
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set newsWebsite
     *
     * @param integer $newsWebsite
     *
     * @return News
     */
    public function setNewsWebsite($newsWebsite)
    {
        $this->newsWebsite = $newsWebsite;

        return $this;
    }

    /**
     * Get newsWebsite
     *
     * @return int
     */
    public function getNewsWebsite()
    {
        return $this->newsWebsite;
    }

    /**
     * Set newsStylo
     *
     * @param integer $newsStylo
     *
     * @return News
     */
    public function setNewsStylo($newsStylo)
    {
        $this->newsStylo = $newsStylo;

        return $this;
    }

    /**
     * Get newsStylo
     *
     * @return int
     */
    public function getNewsStylo()
    {
        return $this->newsStylo;
    }

    /**
     * Set newsCrayon
     *
     * @param integer $newsCrayon
     *
     * @return News
     */
    public function setNewsCrayon($newsCrayon)
    {
        $this->newsCrayon = $newsCrayon;

        return $this;
    }

    /**
     * Get newsCrayon
     *
     * @return int
     */
    public function getNewsCrayon()
    {
        return $this->newsCrayon;
    }

    /**
     * Set newsFeutre
     *
     * @param integer $newsFeutre
     *
     * @return News
     */
    public function setNewsFeutre($newsFeutre)
    {
        $this->newsFeutre = $newsFeutre;

        return $this;
    }

    /**
     * Get newsFeutre
     *
     * @return int
     */
    public function getNewsFeutre()
    {
        return $this->newsFeutre;
    }
}

