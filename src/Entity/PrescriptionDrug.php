<?php

namespace App\Entity;

use App\Repository\PrescriptionDrugRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PrescriptionDrugRepository::class)
 */
class PrescriptionDrug
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Prescription::class, inversedBy="prescriptionDrugs")
     * @ORM\JoinColumn(nullable=false)
     *
     *
     */
    private $prescription;

    /**
     * @ORM\ManyToOne(targetEntity=Drug::class, inversedBy="prescriptionDrugs")
     * @ORM\JoinColumn(nullable=false)
     *
     *
     */
    private $drug;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{value}} is not typed {{type}}."
     * )
     * @Assert\Positive
     *
     */
    private $frequency;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{value}} is not typed {{type}}."
     * )
     * @Assert\Positive
     */
    private $dose;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{value}} is not typed {{type}}."
     * )
     * @Assert\Positive
     */
    private $duration;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $advice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrescription(): ?Prescription
    {
        return $this->prescription;
    }

    public function setPrescription(?Prescription $prescription): self
    {
        $this->prescription = $prescription;

        return $this;
    }

    public function getDrug(): ?Drug
    {
        return $this->drug;
    }

    public function setDrug(?Drug $drug): self
    {
        $this->drug = $drug;

        return $this;
    }

    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    public function setFrequency(?int $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    public function getDose(): ?int
    {
        return $this->dose;
    }

    public function setDose(?int $dose): self
    {
        $this->dose = $dose;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getAdvice(): ?string
    {
        return $this->advice;
    }

    public function setAdvice(?string $advice): self
    {
        $this->advice = $advice;

        return $this;
    }
}
