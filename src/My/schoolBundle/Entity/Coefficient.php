<?php

namespace My\schoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coefficient
 *
 * @ORM\Table(name="coefficient")
 * @ORM\Entity(repositoryClass="My\schoolBundle\Repository\CoefficientRepository")
 */
class Coefficient
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
     * @var int
     *
     * @ORM\Column(name="coef", type="integer")
     */
    private $coef;




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coef
     *
     * @param integer $coef
     * @return Coefficient
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;

        return $this;
    }

    /**
     * Get coef
     *
     * @return integer
     */
    public function getCoef()
    {
        return $this->coef;
    }

        /**
         * @var integer
         *
         * @ORM\ManyToOne(targetEntity="Matiere")
         */
        private $matiere;
        function getMatiere() {
            return $this->matiere;
        }

        function setMatiere($matiere) {
            $this->matiere = $matiere;
        }

        /**
         * @var integer
         *
         * @ORM\ManyToOne(targetEntity="Classe")
         */
        private $classe;
        function getClasse() {
            return $this->classe;
        }

        function setClasse($classe) {
            $this->classe = $classe;
        }
}
