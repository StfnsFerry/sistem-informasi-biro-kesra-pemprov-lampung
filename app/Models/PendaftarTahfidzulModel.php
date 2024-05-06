<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarTahfidzulModel extends Model
{
    protected $table            = 'pendaftar_tahfidzul';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','kategori_juz','telepon', 'alamat',
    'nomor_rekening', 'nama_pemilik_rekening','id_provinsi', 'id_kabupaten_kota','id_kecamatan','id_kelurahan','verifikasi_data','status_pendaftaran','dokumen_persyaratan','jumlah_rekomendasi','nota_dinas'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveBiodata($data)
    {
        $this->insert($data);
    }

    public function getBiodata($id = NULL)
    {
        if($id != null){
            return $this->select('pendaftar_tahfidzul.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tahfidzul.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tahfidzul.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tahfidzul.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tahfidzul.id_kelurahan')
            ->where('id_user', $id)->find();
        }
        return $this->select('pendaftar_tahfidzul.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tahfidzul.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tahfidzul.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tahfidzul.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tahfidzul.id_kelurahan')
            ->findAll();
    }

    public function getDetailBiodata($id){
        return $this->select('pendaftar_tahfidzul.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tahfidzul.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tahfidzul.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tahfidzul.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tahfidzul.id_kelurahan')
            ->find($id);
    }

    public function updateBiodata($data, $id){
        return $this->update($id,$data);
    }

    public function deleteBiodata($id){
        return $this->delete($id);
    }

    public function countPendaftar(){
        return $this->where('status_pendaftaran', 'Sedang Diverifikasi')->countAllResults();
    }

    public function countLimaJuz(){
        return $this->where('verifikasi_data', 'Data Lengkap')->where('kategori_juz','5 Juz')->countAllResults();
    }

    public function countSepuluhJuz(){
        return $this->where('verifikasi_data', 'Data Lengkap')->where('kategori_juz','10 Juz')->countAllResults();
    }

    public function countDuaPuluhJuz(){
        return $this->where('verifikasi_data', 'Data Lengkap')->where('kategori_juz','20 Juz')->countAllResults();
    }

    public function countTigaPuluhJuz(){
        return $this->where('verifikasi_data', 'Data Lengkap')->where('kategori_juz','30 Juz')->countAllResults();
    }

    public function getPendaftarLimaJuz(){
        return $this->select('pendaftar_tahfidzul.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tahfidzul.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tahfidzul.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tahfidzul.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tahfidzul.id_kelurahan')
            ->where('kategori_juz', '5 Juz')
            ->findAll();
    }

    public function getPendaftarSepuluhJuz(){
        return $this->select('pendaftar_tahfidzul.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tahfidzul.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tahfidzul.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tahfidzul.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tahfidzul.id_kelurahan')
            ->where('kategori_juz', '10 Juz')
            ->findAll();
    }
    public function getPendaftarDuaPuluhJuz(){
        return $this->select('pendaftar_tahfidzul.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tahfidzul.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tahfidzul.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tahfidzul.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tahfidzul.id_kelurahan')
            ->where('kategori_juz', '20 Juz')
            ->findAll();
    }
    public function getPendaftarTigaPuluhJuz(){
        return $this->select('pendaftar_tahfidzul.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tahfidzul.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tahfidzul.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tahfidzul.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tahfidzul.id_kelurahan')
            ->where('kategori_juz', '30 Juz')
            ->findAll();
    }

    public function getJumlahPendaftarperKotaKabupaten(){
        return $this->db->table('kabupaten_kota')
        ->select('kabupaten_kota.kabupaten_kota, IFNULL(COUNT(pendaftar_tahfidzul.id),0) as jumlah')
        ->join('pendaftar_tahfidzul', 'pendaftar_tahfidzul.id_kabupaten_kota = kabupaten_kota.id', 'left')
        ->where('pendaftar_tahfidzul.status_pendaftaran', 'Dana Berhasil Ditransfer')
        ->groupBy('kabupaten_kota.id, kabupaten_kota.kabupaten_kota')
        ->get()
        ->getResultArray();
    }

}
