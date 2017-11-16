<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    // ..... other fields

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="client_map", fileNameProperty="importClient")
     * 
     * @var File
     */
    private $clientFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $clientName;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var integer
     */
    private $clientAdresse;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $clientLongitude;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $clientLatitude;





    /**
     * @return File|null
     */
    public function getClientId()
    {
        return $this->clientFile;
    }

    /**
     * @param string $clientName
     *
     * @return Client
     */
    public function setClientId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getClientFile()
    {
        return $this->clientFile;
    }

    /**
     * @param string $clientFile
     *
     * @return File
     */
    public function setClientFile($clientFile)
    {
        $this->clientFile = $clientFile;
        
        return $this;
    }

    /**
     * @return Name|null
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     *
     * @return Name
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
        
        return $this;
    }
   
    /**
     * @return Adresse|null
     */
    public function getClientAdresse()
    {
        return $this->client;
    }

    /**
     * @param string $clientAdresse
     *
     * @return Adresse
     */
    public function setClientAdresse($clientAdresse)
    {
        $this->clientAdresse = $clientAdresse;
        
        return $this;
    }

    /**
     * @return Longitude|null
     */
    public function getClientLongitude()
    {
        return $this->clientLongitude;
    }

    /**
     * @param string $clientLongitude
     *
     * @return Longitude
     */
    public function setClientLongitude($client)
    {
        $this->clientAdresse = $clientAdresse;
        
        return $this;
    }
}