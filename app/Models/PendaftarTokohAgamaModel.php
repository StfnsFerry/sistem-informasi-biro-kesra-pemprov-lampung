<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarTokohAgamaModel extends Model
{
    protected $table            = 'pendaftar_tokoh_agama';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','pekerjaan','jumlah_murid','telepon', 'alamat',
                                    'nomor_rekening', 'nama_pemilik_rekening','profesi','nama_tempat_bertugas', 'telepon_tempat_bertugas','alamat_tempat_bertugas',
                                    'id_provinsi', 'id_kabupaten_kota','id_kecamatan','id_kelurahan','foto','verifikasi_data','status_pendaftaran','dokumen_persyaratan','jumlah_rekomendasi','nota_dinas'
                                    ];

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
            return $this->select('pendaftar_tokoh_agama.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tokoh_agama.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tokoh_agama.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tokoh_agama.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tokoh_agama.id_kelurahan')
            ->where('id_user', $id)->find();
        }
        return $this->select('pendaftar_tokoh_agama.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tokoh_agama.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tokoh_agama.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tokoh_agama.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tokoh_agama.id_kelurahan')
            ->findAll();
    }

    public function getDetailBiodata($id){
        return $this->select('pendaftar_tokoh_agama.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tokoh_agama.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tokoh_agama.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tokoh_agama.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tokoh_agama.id_kelurahan')
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

    public function countGuruNgaji(){
        return $this->where('verifikasi_data', 'Data Lengkap')->where('profesi','Guru Ngaji')->countAllResults();
    }

    public function countImamMasjid(){
        return $this->where('verifikasi_data', 'Data Lengkap')->where('profesi','Imam Masjid')->countAllResults();
    }

    public function countMarbot(){
        return $this->where('verifikasi_data', 'Data Lengkap')->where('profesi','Marbot')->countAllResults();
    }

    public function getPendaftarGuruNgaji(){
        return $this->select('pendaftar_tokoh_agama.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tokoh_agama.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tokoh_agama.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tokoh_agama.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tokoh_agama.id_kelurahan')
            ->where('profesi', 'Guru Ngaji')
            ->findAll();
    }

    public function getPendaftarImamMasjid(){
        return $this->select('pendaftar_tokoh_agama.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tokoh_agama.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tokoh_agama.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tokoh_agama.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tokoh_agama.id_kelurahan')
            ->where('profesi', 'Imam Masjid')
            ->findAll();
    }

    public function getPendaftarMarbot(){
        return $this->select('pendaftar_tokoh_agama.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tokoh_agama.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tokoh_agama.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tokoh_agama.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tokoh_agama.id_kelurahan')
            ->where('profesi', 'Marbot')
            ->findAll();
    }

    public function getJumlahPendaftarperKotaKabupaten(){
        return $this->db->table('kabupaten_kota')
        ->select('kabupaten_kota.kabupaten_kota, IFNULL(COUNT(pendaftar_tokoh_agama.id),0) as jumlah')
        ->join('pendaftar_tokoh_agama', 'pendaftar_tokoh_agama.id_kabupaten_kota = kabupaten_kota.id', 'left')
        ->where('pendaftar_tokoh_agama.status_pendaftaran', 'Dana Berhasil Ditransfer')
        ->groupBy('kabupaten_kota.id, kabupaten_kota.kabupaten_kota')
        ->get()
        ->getResultArray();
    }
}
