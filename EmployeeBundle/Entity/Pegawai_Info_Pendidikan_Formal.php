<?php
namespace ZK\EmployeeBundle\Entity;

use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert
;

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_pegawai_info_pendidikan_formal")
 */
class Pegawai_Info_Pendidikan_Formal
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
     * @ORM\Column(type="string" , length="6")
     *
     * @var string $pi2_tingkat
    */
    protected $pi2_tingkat;

    /**
     * @ORM\Column(type="string", length="24")
     *
     * @var string $pi2_nama_sekolah
    */
    protected $pi2_nama_sekolah;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     * @var string $pi2_tahun_lulus
    */
    protected $pi2_tahun_lulus;

    /**
     * @ORM\Column(type="string", length="12", nullable=true)
     *
     * @var string $pi2_jurusan
    */
    protected $pi2_jurusan;

    /**
     * @ORM\Column(type="string", length="12", nullable=true)
     *
     * @var string $pi2_sertifikat
    */
    protected $pi2_sertifikat;

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
     * Set pi2_tingkat
     *
     * @param string $pi2Tingkat
     */
    public function setPi2Tingkat($pi2Tingkat)
    {
        $this->pi2_tingkat = $pi2Tingkat;
    }

    /**
     * Get pi2_tingkat
     *
     * @return string 
     */
    public function getPi2Tingkat()
    {
        return $this->pi2_tingkat;
    }

    /**
     * Set pi2_nama_sekolah
     *
     * @param string $pi2NamaSekolah
     */
    public function setPi2NamaSekolah($pi2NamaSekolah)
    {
        $this->pi2_nama_sekolah = $pi2NamaSekolah;
    }

    /**
     * Get pi2_nama_sekolah
     *
     * @return string 
     */
    public function getPi2NamaSekolah()
    {
        return $this->pi2_nama_sekolah;
    }

    /**
     * Set pi2_tahun_lulus
     *
     * @param string $pi2TahunLulus
     */
    public function setPi2TahunLulus($pi2TahunLulus)
    {
        $this->pi2_tahun_lulus = $pi2TahunLulus;
    }

    /**
     * Get pi2_tahun_lulus
     *
     * @return string 
     */
    public function getPi2TahunLulus()
    {
        return $this->pi2_tahun_lulus;
    }

    /**
     * Set pi2_jurusan
     *
     * @param string $pi2Jurusan
     */
    public function setPi2Jurusan($pi2Jurusan)
    {
        $this->pi2_jurusan = $pi2Jurusan;
    }

    /**
     * Get pi2_jurusan
     *
     * @return string 
     */
    public function getPi2Jurusan()
    {
        return $this->pi2_jurusan;
    }

    /**
     * Set pi2_sertifikat
     *
     * @param string $pi2Sertifikat
     */
    public function setPi2Sertifikat($pi2Sertifikat)
    {
        $this->pi2_sertifikat = $pi2Sertifikat;
    }

    /**
     * Get pi2_sertifikat
     *
     * @return string 
     */
    public function getPi2Sertifikat()
    {
        return $this->pi2_sertifikat;
    }

    public function __construct()
    {
        //$this->pegawai = new ArrayCollection();
    }

}