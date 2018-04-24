<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 *
 * @ORM\Table(name="flight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FlightRepository")
 */
class Flight
{

    /*
     * Adding personnal methods /variables
     */

    Public function __toString()
    {
        // return the Flight object with "[departure] [arrival]" format, when __toString is called.
        return $this->departure . $this->arrival;
    }


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="pilot")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pilot;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PlaneModel", inversedBy="plane")
     * @ORM\JoinColumn(nullable=false)
     */
    private $plane;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site", inversedBy="arrival")
     * @ORM\JoinColumn(nullable=false)
     */
    private $arrival;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site", inversedBy="departures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departure;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nbFreeSeats", type="smallint")
     */
    private $nbFreeSeats;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="takeOffTime", type="datetime")
     */
    private $takeOffTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="wasDone", type="boolean")
     */
    private $wasDone;





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
     * Set nbFreeSeats
     *
     * @param integer $nbFreeSeats
     *
     * @return Flight
     */
    public function setNbFreeSeats($nbFreeSeats)
    {
        $this->nbFreeSeats = $nbFreeSeats;

        return $this;
    }

    /**
     * Get nbFreeSeats
     *
     * @return int
     */
    public function getNbFreeSeats()
    {
        return $this->nbFreeSeats;
    }

    /**
     * Set takeOffTime
     *
     * @param \DateTime $takeOffTime
     *
     * @return Flight
     */
    public function setTakeOffTime($takeOffTime)
    {
        $this->takeOffTime = $takeOffTime;

        return $this;
    }

    /**
     * Get takeOffTime
     *
     * @return \DateTime
     */
    public function getTakeOffTime()
    {
        return $this->takeOffTime;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Flight
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Flight
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set wasDone
     *
     * @param boolean $wasDone
     *
     * @return Flight
     */
    public function setWasDone($wasDone)
    {
        $this->wasDone = $wasDone;

        return $this;
    }

    /**
     * Get wasDone
     *
     * @return bool
     */
    public function getWasDone()
    {
        return $this->wasDone;
    }

    /**
     * Set departure
     *
     * @param \AppBundle\Entity\Site $departure
     *
     * @return Flight
     */
    public function setDeparture(\AppBundle\Entity\Site $departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \AppBundle\Entity\Site
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set pilot
     *
     * @param \AppBundle\Entity\User $pilot
     *
     * @return Flight
     */
    public function setPilot(\AppBundle\Entity\User $pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return \AppBundle\Entity\User
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set plane
     *
     * @param \AppBundle\Entity\PlaneModel $plane
     *
     * @return Flight
     */
    public function setPlane(\AppBundle\Entity\PlaneModel $plane)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \AppBundle\Entity\PlaneModel
     */
    public function getPlane()
    {
        return $this->plane;
    }

    /**
     * Set arrival
     *
     * @param \AppBundle\Entity\Site $arrival
     *
     * @return Flight
     */
    public function setArrival(\AppBundle\Entity\Site $arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \AppBundle\Entity\Site
     */
    public function getArrival()
    {
        return $this->arrival;
    }
}
