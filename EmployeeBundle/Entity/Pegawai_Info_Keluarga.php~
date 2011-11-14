<?php
namespace ZK\EmployeeBundle\Entity;

use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert
;

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_pegawai_info_keluarga")
 */
class Pegawai_Info_Keluarga
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
     * @ORM\Column(type="string" , length="32")
     *
     * @var string $pi1_nama
    */
    protected $pi1_nama;

    /**
     * @ORM\Column(type="string", length="1")
     *
     * @var string $pi1_jenis_kelamin
    */
    protected $pi1_jenis_kelamin;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     *
     * @var string $pi1_umur
    */
    protected $pi1_umur;

    /**
     * @ORM\Column(type="string", length="12", nullable=true)
     *
     * @var string $pi1_hubungan_keluarga
    */
    protected $pi1_hubungan_keluarga;

    /**
     * @ORM\Column(type="string", length="8", nullable=true)
     *
     * @var string $pi1_pendidikan
    */
    protected $pi1_pendidikan;

    /**
     * @ORM\Column(type="string", length="12" , nullable=true)
     *
     * @var date $pi1_pekerjaan
    */
    protected $pi1_pekerjaan;

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
     * Set pi1_nama
     *
     * @param string $pi1Nama
     */
    public function setPi1Nama($pi1Nama)
    {
        $this->pi1_nama = $pi1Nama;
    }

    /**
     * Get pi1_nama
     *
     * @return string 
     */
    public function getPi1Nama()
    {
        return $this->pi1_nama;
    }

    /**
     * Set pi1_jenis_kelamin
     *
     * @param string $pi1JenisKelamin
     */
    public function setPi1JenisKelamin($pi1JenisKelamin)
    {
        $this->pi1_jenis_kelamin = $pi1JenisKelamin;
    }

    /**
     * Get pi1_jenis_kelamin
     *
     * @return string 
     */
    public function getPi1JenisKelamin()
    {
        return $this->pi1_jenis_kelamin;
    }

    /**
     * Set pi1_umur
     *
     * @param smallint $pi1Umur
     */
    public function setPi1Umur($pi1Umur)
    {
        $this->pi1_umur = $pi1Umur;
    }

    /**
     * Get pi1_umur
     *
     * @return smallint 
     */
    public function getPi1Umur()
    {
        return $this->pi1_umur;
    }

    /**
     * Set pi1_hubungan_keluarga
     *
     * @param string $pi1HubunganKeluarga
     */
    public function setPi1HubunganKeluarga($pi1HubunganKeluarga)
    {
        $this->pi1_hubungan_keluarga = $pi1HubunganKeluarga;
    }

    /**
     * Get pi1_hubungan_keluarga
     *
     * @return string 
     */
    public function getPi1HubunganKeluarga()
    {
        return $this->pi1_hubungan_keluarga;
    }

    /**
     * Set pi1_pendidikan
     *
     * @param string $pi1Pendidikan
     */
    public function setPi1Pendidikan($pi1Pendidikan)
    {
        $this->pi1_pendidikan = $pi1Pendidikan;
    }

    /**
     * Get pi1_pendidikan
     *
     * @return string 
     */
    public function getPi1Pendidikan()
    {
        return $this->pi1_pendidikan;
    }

    /**
     * Set pi1_pekerjaan
     *
     * @param string $pi1Pekerjaan
     */
    public function setPi1Pekerjaan($pi1Pekerjaan)
    {
        $this->pi1_pekerjaan = $pi1Pekerjaan;
    }

    /**
     * Get pi1_pekerjaan
     *
     * @return string 
     */
    public function getPi1Pekerjaan()
    {
        return $this->pi1_pekerjaan;
    }

    public function __construct()
    {
        //$this->pegawai = new ArrayCollection();
    }

    /**
     * Set pegawai
     *
     * @param ZK\EmployeeBundle\Entity\Pegawai $pegawai
     */
    public function setPegawai(\ZK\EmployeeBundle\Entity\Pegawai $pegawai)
    {
        $this->pegawai = $pegawai;
    }

    /**
     * Get pegawai
     *
     * @return ZK\EmployeeBundle\Entity\Pegawai 
     */
    public function getPegawai()
    {
        return $this->pegawai;
    }
}