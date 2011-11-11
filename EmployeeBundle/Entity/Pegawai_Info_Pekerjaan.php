<?php
namespace ZK\EmployeeBundle\Entity;

use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert
;

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_pegawai_info_pekerjaan")
 */
class Pegawai_Info_Pekerjaan
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     * @var integer
     */
    protected $id;

    /**
     * @var $pegawai
     * 
     * @ORM\ManyToOne(targetEntity="Pegawai")
     */
    protected $pegawai;

    /**
     * @ORM\Column(type="string", length="24")
     *
     * @var string $pi5_nama_perusahaan
    */
    protected $pi5_nama_perusahaan;

    /**
     * @ORM\Column(type="string", length="12", nullable=true)
     *
     * @var string $pi5_dari
    */
    protected $pi5_dari;

    /**
     * @ORM\Column(type="string", length="12", nullable=true)
     *
     * @var string $pi5_sampai
    */
    protected $pi5_sampai;

    /**
     * @ORM\Column(type="string", length="24", nullable=true)
     *
     * @var string $pi5_jabatan
    */
    protected $pi5_jabatan;

    /**
     * @ORM\Column(type="string", length="24", nullable=true)
     *
     * @var string $pi5_pekerjaan
    */
    protected $pi5_pekerjaan;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     * 
     * @var float $pi5_gaji
    */
    protected $pi5_gaji;

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * Set pi5_nama_perusahaan
     *
     * @param string $pi5NamaPerusahaan
     */
    public function setPi5NamaPerusahaan($pi5NamaPerusahaan)
    {
        $this->pi5_nama_perusahaan = $pi5NamaPerusahaan;
    }

    /**
     * Get pi5_nama_perusahaan
     *
     * @return string 
     */
    public function getPi5NamaPerusahaan()
    {
        return $this->pi5_nama_perusahaan;
    }

    /**
     * Set pi5_dari
     *
     * @param string $pi5Dari
     */
    public function setPi5Dari($pi5Dari)
    {
        $this->pi5_dari = $pi5Dari;
    }

    /**
     * Get pi5_dari
     *
     * @return string 
     */
    public function getPi5Dari()
    {
        return $this->pi5_dari;
    }

    /**
     * Set pi5_sampai
     *
     * @param string $pi5Sampai
     */
    public function setPi5Sampai($pi5Sampai)
    {
        $this->pi5_sampai = $pi5Sampai;
    }

    /**
     * Get pi5_sampai
     *
     * @return string 
     */
    public function getPi5Sampai()
    {
        return $this->pi5_sampai;
    }

    /**
     * Set pi5_jabatan
     *
     * @param string $pi5Jabatan
     */
    public function setPi5Jabatan($pi5Jabatan)
    {
        $this->pi5_jabatan = $pi5Jabatan;
    }

    /**
     * Get pi5_jabatan
     *
     * @return string 
     */
    public function getPi5Jabatan()
    {
        return $this->pi5_jabatan;
    }

    /**
     * Set pi5_pekerjaan
     *
     * @param string $pi5Pekerjaan
     */
    public function setPi5Pekerjaan($pi5Pekerjaan)
    {
        $this->pi5_pekerjaan = $pi5Pekerjaan;
    }

    /**
     * Get pi5_pekerjaan
     *
     * @return string 
     */
    public function getPi5Pekerjaan()
    {
        return $this->pi5_pekerjaan;
    }

    /**
     * Set pi5_gaji
     *
     * @param float $pi5Gaji
     */
    public function setPi5Gaji($pi5Gaji)
    {
        $this->pi5_gaji = $pi5Gaji;
    }

    /**
     * Get pi5_gaji
     *
     * @return float 
     */
    public function getPi5Gaji()
    {
        return $this->pi5_gaji;
    }

    public function __construct()
    {
        //$this->pegawai = new ArrayCollection();
    }

}