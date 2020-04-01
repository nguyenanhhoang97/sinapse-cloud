<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 *
 * @ORM\Table(name="subscriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriptionRepository")
 */
class Subscription
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=20)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="organization_name", type="string", length=255)
     */
    private $organizationName;

    /**
     * @var string
     *
     * @ORM\Column(name="organization_address", type="string", length=255)
     */
    private $organizationAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="proposal", type="string", length=255)
     */
    private $proposal;

    /**
     * @var bool
     *
     * @ORM\Column(name="increase_teleworking", type="boolean")
     */
    private $increaseTeleworking;

    /**
     * @var bool
     *
     * @ORM\Column(name="distance_learning", type="boolean")
     */
    private $distanceLearning;

    /**
     * @var bool
     *
     * @ORM\Column(name="corona_virus", type="boolean")
     */
    private $coronaVirus;

    /**
     * @var bool
     *
     * @ORM\Column(name="verifiedFlag", type="boolean")
     */
    private $verifiedFlag = false;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;


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
     * Set email
     *
     * @param string $email
     *
     * @return Subscription
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Subscription
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Subscription
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Subscription
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set organizationName
     *
     * @param string $organizationName
     *
     * @return Subscription
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    /**
     * Get organizationName
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Set organizationAddress
     *
     * @param string $organizationAddress
     *
     * @return Subscription
     */
    public function setOrganizationAddress($organizationAddress)
    {
        $this->organizationAddress = $organizationAddress;

        return $this;
    }

    /**
     * Get organizationAddress
     *
     * @return string
     */
    public function getOrganizationAddress()
    {
        return $this->organizationAddress;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Subscription
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Subscription
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set proposal
     *
     * @param string $proposal
     *
     * @return Subscription
     */
    public function setProposal($proposal)
    {
        $this->proposal = $proposal;

        return $this;
    }

    /**
     * Get proposal
     *
     * @return string
     */
    public function getProposal()
    {
        return $this->proposal;
    }

    /**
     * Set increaseTeleworking
     *
     * @param boolean $increaseTeleworking
     *
     * @return Subscription
     */
    public function setIncreaseTeleworking($increaseTeleworking)
    {
        $this->increaseTeleworking = $increaseTeleworking;

        return $this;
    }

    /**
     * Get increaseTeleworking
     *
     * @return bool
     */
    public function getIncreaseTeleworking()
    {
        return $this->increaseTeleworking;
    }

    /**
     * Set distanceLearning
     *
     * @param boolean $distanceLearning
     *
     * @return Subscription
     */
    public function setDistanceLearning($distanceLearning)
    {
        $this->distanceLearning = $distanceLearning;

        return $this;
    }

    /**
     * Get distanceLearning
     *
     * @return bool
     */
    public function getDistanceLearning()
    {
        return $this->distanceLearning;
    }

    /**
     * Set coronaVirus
     *
     * @param boolean $coronaVirus
     *
     * @return Subscription
     */
    public function setCoronaVirus($coronaVirus)
    {
        $this->coronaVirus = $coronaVirus;

        return $this;
    }

    /**
     * Get coronaVirus
     *
     * @return bool
     */
    public function getCoronaVirus()
    {
        return $this->coronaVirus;
    }

    /**
     * Set verifiedFlag
     *
     * @param boolean $verifiedFlag
     *
     * @return Subscription
     */
    public function setVerifiedFlag($verifiedFlag)
    {
        $this->verifiedFlag = $verifiedFlag;

        return $this;
    }

    /**
     * Get verifiedFlag
     *
     * @return bool
     */
    public function getVerifiedFlag()
    {
        return $this->verifiedFlag;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Subscription
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Subscription
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}

