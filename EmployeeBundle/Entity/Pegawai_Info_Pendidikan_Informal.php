<?php
namespace ZK\EmployeeBundle\Entity;

use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert
;

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_pegawai_info_pendidikan_informal")
 */
class Pegawai_Info_Pendidikan_Informal
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
     * @ORM\Column(type="string" , length="24")
     *
     * @var string $pi3_jenis_kursus
    */
    protected $pi3_jenis_kursus;

    /**
     * @ORM\Column(type="string", length="24")
     *
     * @var string $pi3_lembaga
    */
    protected $pi3_lembaga;

    /**
     * @ORM\Column(type="string", length="24", nullable=true)
     *
     * @var string $pi3_kualifikasi
    */
    protected $pi3_kualifikasi;

    /**
     * @ORM\Column(type="string", length="12", nullable=true)
     *
     * @var string $pi3_tahun
    */
    protected $pi3_tahun;

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
     * Set pi3_jenis_kursus
     *
     * @param string $pi3JenisKursus
     */
    public function setPi3JenisKursus($pi3JenisKursus)
    {
        $this->pi3_jenis_kursus = $pi3JenisKursus;
    }

    /**
     * Get pi3_jenis_kursus
     *
     * @return string 
     */
    public function getPi3JenisKursus()
    {
        return $this->pi3_jenis_kursus;
    }

    /**
     * Set pi3_lembaga
     *
     * @param string $pi3Lembaga
     */
    public function setPi3Lembaga($pi3Lembaga)
    {
        $this->pi3_lembaga = $pi3Lembaga;
    }

    /**
     * Get pi3_lembaga
     *
     * @return string 
     */
    public function getPi3Lembaga()
    {
        return $this->pi3_lembaga;
    }

    /**
     * Set pi3_kualifikasi
     *
     * @param string $pi3Kualifikasi
     */
    public function setPi3Kualifikasi($pi3Kualifikasi)
    {
        $this->pi3_kualifikasi = $pi3Kualifikasi;
    }

    /**
     * Get pi3_kualifikasi
     *
     * @return string 
     */
    public function getPi3Kualifikasi()
    {
        return $this->pi3_kualifikasi;
    }

    /**
     * Set pi3_tahun
     *
     * @param integer $pi3Tahun
     */
    public function setPi3Tahun($pi3KTahun)
    {
        $this->pi3_tahun = $pi3Tahun;
    }

    /**
     * Get pi3_tahun
     *
     * @return integer 
     */
    public function getPi3Tahun()
    {
        return $this->pi3_tahun;
    }

    public function __construct()
    {
        //$this->pegawai = new ArrayCollection();
    }

}