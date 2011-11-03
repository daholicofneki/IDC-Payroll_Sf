<?php
namespace ZK\EmployeeBundle\Entity;

use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert
;

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_pegawai")
 */
class Pegawai
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
     * @ORM\Column(type="string" , length=6, unique=true)
     *
     * @var string $pi_no
    */
    protected $pi_no;

    /**
     * @ORM\Column(type="string", length=64)
     *
     * @var string $pi_nama_lengkap
    */
    protected $pi_nama_lengkap;

    /**
     * @ORM\Column(type="string", length=16)
     *
     * @var string $pi_nama_kecil
    */
    protected $pi_nama_kecil;

    /**
     * @ORM\Column(type="string", length=1)
     *
     * @var string $pi_jenis_kelamin
    */
    protected $pi_jenis_kelamin;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     *
     * @var string $pi_tempat_lahir
    */
    protected $pi_tempat_lahir;

    /**
     * @ORM\Column(type="date", nullable=true)
     *
     * @var date $pi_tanggal_lahir
    */
    protected $pi_tanggal_lahir;

    /**
     * @ORM\Column(type="string", length=16)
     *
     * @var string $pi_no_telepon1
    */
    protected $pi_no_telepon1;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     *
     * @var string $pi_no_telepon2
    */
    protected $pi_no_telepon2;

    /**
     * @ORM\Column(type="string", length=24, nullable=true)
     *
     * @var string $pi_email
    */
    protected $pi_email;

    /**
     * @ORM\Column(type="text")
     *
     * @var string $pi_alamat
    */
    protected $pi_alamat;

    /**
     * @ORM\Column(type="string", length=1)
     *
     * @var string $pi_status_nikah
    */
    protected $pi_status_nikah;

    /**
     * @ORM\Column(type="smallint")
     *
     * @var smallint $pi_jumlah_anak
    */
    protected $pi_jumlah_anak;

    /**
     * @ORM\Column(type="string", length=16)
     *
     * @var string $pi_kewarganegaraan
    */
    protected $pi_kewarganegaraan;

    /**
     * @ORM\Column(type="string", length=16)
     *
     * @var string $pi_suku
    */
    protected $pi_suku;

    /**
     * @ORM\Column(type="string", length=24)
     *
     * @var string $pi_no_ktp
    */
    protected $pi_no_ktp;

    /**
     * @ORM\Column(type="string", length=24, nullable=true)
     *
     * @var string $pi_no_sim
    */
    protected $pi_no_sim;

    /**
     * @ORM\Column(type="string", length=24, nullable=true)
     *
     * @var string $pi_no_jamsostek
    */
    protected $pi_no_jamsostek;

    /**
     * @ORM\Column(type="string", length=3)
     *
     * @var string $pi_status_pajak
    */
    protected $pi_status_pajak;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     *
     * @var string $pi_npwp
    */
    protected $pi_npwp;

    /**
     * @ORM\Column(type="string", length=32)
     *
     * @var string $pi_foto
    */
    protected $pi_foto;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var text $pi_keluarga
    */
    protected $pi_keluarga;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var text $pi_pendidikan_formal
    */
    protected $pi_pendidikan_formal;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var text $pi_pendidikan_informal
    */
    protected $pi_pendidikan_informal;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var text $pi_bahasa
    */
    protected $pi_bahasa;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var text $pi_riwayat_pekerjaan
    */
    protected $pi_riwayat_pekerjaan;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string $pi_lastupdated_by_account
    */
    protected $pi_lastupdated_by_account;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var datetime $pi_lastupdated_timestamp
    */
    protected $pi_lastupdated_timestamp;

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
     * Set pi_no
     *
     * @param string $piNo
     */
    public function setPiNo($piNo)
    {
        $this->pi_no = $piNo;
    }

    /**
     * Get pi_no
     *
     * @return string 
     */
    public function getPiNo()
    {
        return $this->pi_no;
    }

    /**
     * Set pi_nama_lengkap
     *
     * @param string $piNamaLengkap
     */
    public function setPiNamaLengkap($piNamaLengkap)
    {
        $this->pi_nama_lengkap = $piNamaLengkap;
    }

    /**
     * Get pi_nama_lengkap
     *
     * @return string 
     */
    public function getPiNamaLengkap()
    {
        return $this->pi_nama_lengkap;
    }

    /**
     * Set pi_nama_kecil
     *
     * @param string $piNamaKecil
     */
    public function setPiNamaKecil($piNamaKecil)
    {
        $this->pi_nama_kecil = $piNamaKecil;
    }

    /**
     * Get pi_nama_kecil
     *
     * @return string 
     */
    public function getPiNamaKecil()
    {
        return $this->pi_nama_kecil;
    }

    /**
     * Set pi_jenis_kelamin
     *
     * @param string $piJenisKelamin
     */
    public function setPiJenisKelamin($piJenisKelamin)
    {
        $this->pi_jenis_kelamin = $piJenisKelamin;
    }

    /**
     * Get pi_jenis_kelamin
     *
     * @return string 
     */
    public function getPiJenisKelamin()
    {
        return $this->pi_jenis_kelamin;
    }

    /**
     * Set pi_tempat_lahir
     *
     * @param string $piTempatLahir
     */
    public function setPiTempatLahir($piTempatLahir)
    {
        $this->pi_tempat_lahir = $piTempatLahir;
    }

    /**
     * Get pi_tempat_lahir
     *
     * @return string 
     */
    public function getPiTempatLahir()
    {
        return $this->pi_tempat_lahir;
    }

    /**
     * Set pi_tanggal_lahir
     *
     * @param date $piTanggalLahir
     */
    public function setPiTanggalLahir($piTanggalLahir)
    {
        $this->pi_tanggal_lahir = $piTanggalLahir;
    }

    /**
     * Get pi_tanggal_lahir
     *
     * @return date 
     */
    public function getPiTanggalLahir()
    {
        return $this->pi_tanggal_lahir;
    }

    /**
     * Set pi_no_telepon1
     *
     * @param string $piNoTelepon1
     */
    public function setPiNoTelepon1($piNoTelepon1)
    {
        $this->pi_no_telepon1 = $piNoTelepon1;
    }

    /**
     * Get pi_no_telepon1
     *
     * @return string 
     */
    public function getPiNoTelepon1()
    {
        return $this->pi_no_telepon1;
    }

    /**
     * Set pi_no_telepon2
     *
     * @param string $piNoTelepon2
     */
    public function setPiNoTelepon2($piNoTelepon2)
    {
        $this->pi_no_telepon2 = $piNoTelepon2;
    }

    /**
     * Get pi_no_telepon2
     *
     * @return string 
     */
    public function getPiNoTelepon2()
    {
        return $this->pi_no_telepon2;
    }

    /**
     * Set pi_email
     *
     * @param string $piEmail
     */
    public function setPiEmail($piEmail)
    {
        $this->pi_email = $piEmail;
    }

    /**
     * Get pi_email
     *
     * @return string 
     */
    public function getPiEmail()
    {
        return $this->pi_email;
    }

    /**
     * Set pi_alamat
     *
     * @param text $piAlamat
     */
    public function setPiAlamat($piAlamat)
    {
        $this->pi_alamat = $piAlamat;
    }

    /**
     * Get pi_alamat
     *
     * @return text 
     */
    public function getPiAlamat()
    {
        return $this->pi_alamat;
    }

    /**
     * Set pi_status_nikah
     *
     * @param string $piStatusNikah
     */
    public function setPiStatusNikah($piStatusNikah)
    {
        $this->pi_status_nikah = $piStatusNikah;
    }

    /**
     * Get pi_status_nikah
     *
     * @return string 
     */
    public function getPiStatusNikah()
    {
        return $this->pi_status_nikah;
    }

    /**
     * Set pi_jumlah_anak
     *
     * @param string $piJumlahAnak
     */
    public function setPiJumlahAnak($piJumlahAnak)
    {
        $this->pi_jumlah_anak = $piJumlahAnak;
    }

    /**
     * Get pi_jumlah_anak
     *
     * @return smallint 
     */
    public function getPiJumlahAnak()
    {
        return $this->pi_jumlah_anak;
    }

    /**
     * Set pi_kewarganegaraan
     *
     * @param string $piKewarganegaraan
     */
    public function setPiKewarganegaraan($piKewarganegaraan)
    {
        $this->pi_kewarganegaraan = $piKewarganegaraan;
    }

    /**
     * Get pi_kewarganegaraan
     *
     * @return string 
     */
    public function getPiKewarganegaraan()
    {
        return $this->pi_kewarganegaraan;
    }

    /**
     * Set pi_suku
     *
     * @param string $piSuku
     */
    public function setPiSuku($piSuku)
    {
        $this->pi_suku = $piSuku;
    }

    /**
     * Get pi_suku
     *
     * @return string 
     */
    public function getPiSuku()
    {
        return $this->pi_suku;
    }

    /**
     * Set pi_no_ktp
     *
     * @param string $piNoKtp
     */
    public function setPiNoKtp($piNoKtp)
    {
        $this->pi_no_ktp = $piNoKtp;
    }

    /**
     * Get pi_no_ktp
     *
     * @return string 
     */
    public function getPiNoKtp()
    {
        return $this->pi_no_ktp;
    }

    /**
     * Set pi_no_sim
     *
     * @param string $piNoSim
     */
    public function setPiNoSim($piNoSim)
    {
        $this->pi_no_sim = $piNoSim;
    }

    /**
     * Get pi_no_sim
     *
     * @return string 
     */
    public function getPiNoSim()
    {
        return $this->pi_no_sim;
    }

    /**
     * Set pi_no_jamsostek
     *
     * @param string $piNoJamsostek
     */
    public function setPiNoJamsostek($piNoJamsostek)
    {
        $this->pi_no_Jamsostek = $piNoJamsostek;
    }

    /**
     * Get pi_no_jamsostek
     *
     * @return string 
     */
    public function getPiNoJamsostek()
    {
        return $this->pi_no_jamsostek;
    }

    /**
     * Set pi_status_pajak
     *
     * @param string $piStatusPajak
     */
    public function setPiStatusPajak($piStatusPajak)
    {
        $this->pi_status_pajak = $piStatusPajak;
    }

    /**
     * Get pi_status_pajak
     *
     * @return string 
     */
    public function getPiStatusPajak()
    {
        return $this->pi_status_pajak;
    }

    /**
     * Set pi_npwp
     *
     * @param string $piNpwp
     */
    public function setPiNpwp($piNpwp)
    {
        $this->pi_npwp = $piNpwp;
    }

    /**
     * Get pi_npwp
     *
     * @return string 
     */
    public function getPiNpwp()
    {
        return $this->pi_npwp;
    }

    /**
     * Set pi_foto
     *
     * @param string $piFoto
     */
    public function setPiFoto($piFoto)
    {
        $this->pi_foto = $piFoto;
    }

    /**
     * Get pi_foto
     *
     * @return string 
     */
    public function getPiFoto()
    {
        return $this->pi_foto;
    }

    /**
     * Set pi_keluarga
     *
     * @param text $piKeluarga
     */
    public function setPiKeluarga($piKeluarga)
    {
        $this->pi_keluarga = $piKeluarga;
    }

    /**
     * Get pi_keluarga
     *
     * @return text 
     */
    public function getPiKeluarga()
    {
        return $this->pi_keluarga;
    }

    /**
     * Set pi_pendidikan_formal
     *
     * @param text $piPendidikanFormal
     */
    public function setPiPendidikanFormal($piPendidikanFormal)
    {
        $this->pi_pendidikan_formal = $piPendidikanFormal;
    }

    /**
     * Get pi_pendidikan_formal
     *
     * @return text 
     */
    public function getPiPendidikanFormal()
    {
        return $this->pi_pendidikan_formal;
    }

    /**
     * Set pi_pendidikan_informal
     *
     * @param text $piPendidikanInformal
     */
    public function setPiPendidikanInformal($piPendidikanInformal)
    {
        $this->pi_pendidikan_informal = $piPendidikanInformal;
    }

    /**
     * Get pi_pendidikan_informal
     *
     * @return text 
     */
    public function getPiPendidikanInformal()
    {
        return $this->pi_pendidikan_informal;
    }

    /**
     * Set pi_bahasa
     *
     * @param text $piBahasa
     */
    public function setPiBahasa($piBahasa)
    {
        $this->pi_bahasa = $piBahasa;
    }

    /**
     * Get pi_bahasa
     *
     * @return text 
     */
    public function getPiBahasa()
    {
        return $this->pi_bahasa;
    }

    /**
     * Set pi_riwayat_pekerjaan
     *
     * @param text $piRiwayatPekerjaan
     */
    public function setPiRiwayatPekerjaan($piRiwayatPekerjaan)
    {
        $this->pi_riwayat_pekerjaan = $piRiwayatPekerjaan;
    }

    /**
     * Get pi_riwayat_pekerjaan
     *
     * @return text 
     */
    public function getPiRiwayatPekerjaan()
    {
        return $this->pi_riwayat_pekerjaan;
    }

    /**
     * Set pi_lastupdated_by_account
     *
     * @param text $piLastupdatedByAccount
     */
    public function setPiLastupdatedByAccount($piLastupdatedByAccount)
    {
        $this->pi_lastupdated_by_account = $piLastupdatedByAccount;
    }

    /**
     * Get pi_lastupdated_by_account
     *
     * @return text 
     */
    public function getPiLastupdatedByAccount()
    {
        return $this->pi_lastupdated_by_account;
    }

    /**
     * Set pi_lastupdated_timestamp
     *
     * @param datetime $piLastupdatedTimestamp
     */
    public function setPiLastupdatedTimestamp($piLastupdatedTimestamp)
    {
        $this->pi_lastupdated_timestamp = $piLastupdatedTimestamp;
    }

    /**
     * Get pi_lastupdated_timestamp
     *
     * @return datetime 
     */
    public function getPiLastupdatedTimestamp()
    {
        return $this->pi_lastupdated_timestamp;
    }

    public function __construct()
    {
        $this->piLastupdatedTimestamp = new \DateTime();
        $this->piLastupdatedByAccount= 'neki';
    }

}