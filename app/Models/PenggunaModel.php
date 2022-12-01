<?php

namespace App\Models;
use CodeIgniter\Model;

class PenggunaModel extends Model {
  protected $table            = 'pengguna';
  protected $primaryKey       = 'id_pengguna';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $allowedFields    = ['nama_lengkap', 'username', 'password'];

  protected $validationRules  = [
    'nama_lengkap' => 'required|min_length[2]',
    'username' => 'required|alpha_numeric_space|min_length[3]',
    'password' => 'required|min_length[8]'
  ];
  protected $skipValidation   = false;

  public function buat($nama_lengkap = '', $username = '', $password = '', $password_ulang = '') {
    $session = session();

    if ($password_ulang != $password) {
      $session->setTempdata('status', ['ok' => false, 'message' => 'Password konfirmasi tidak sama, ulangi kembali!']);
      return false;
    }

    $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);
    $data = [
      'nama_lengkap' => $nama_lengkap,
      'username' => $username,
      'password' => $hashedPassword
    ];

    if (!$this->insert($data)) {
      $session->setTempdata('status', ['ok' => false, 'message' => 'Username telah dipakai atau terjadi galat!']);
      return false;
    }

    $session->setTempdata('status', ['ok' => true, 'message' => 'Akun baru berhasil dibuat.']);
    return true;
  }

  public function ubah($nama_lengkap = '', $password = '', $password_baru='', $password_ulang = '') {
    $session = session();
    $id_pengguna = $session->get('idPengguna');

    if ($password_baru && $password_ulang != $password_baru) {
      $session->setTempdata('status', ['ok' => false, 'message' => 'Password konfirmasi tidak sama, ulangi kembali!']);
      return false;
    }

    $query = $this->db->table($this->table)->getWhere(['id_pengguna' => $id_pengguna]);
    
    $rows = $query->getResult();
    if (!count($rows)){
      $session->setTempdata('status', ['ok' => false, 'message' => 'Indek pengguna tidak ditemukan!']);
      return false;
    }
    
    $pengguna = $rows[0];
    if (!password_verify($password, $pengguna->password)) {
      $session->setTempdata('status', ['ok' => false, 'message' => 'Password salah!']);
      return false;
    }

    $data = [
      'nama_lengkap' => $nama_lengkap
    ];

    if ($password_baru) {
      $passwordBaruHashed = password_hash($password_baru, PASSWORD_ARGON2ID);
      $data['password'] = $passwordBaruHashed;
    }

    $this->update($id_pengguna, $data);

    $session->setTempdata('namaLengkap', $nama_lengkap);
    $session->setTempdata('status', ['ok' => true, 'message' => 'Data akun berhasil diperbarui.']);
    return true;
  }

  public function login($username = '', $password = '') {
    $session = session();

    if ($session->get('loggedIn')) {
      $session->setTempdata('status', ['ok' => false, 'message' => 'Anda sudah login!']);
      return false;
    }

    $query = $this->db->table($this->table)->getWhere(['username' => $username]);
    $rows = $query->getResult();

    if (!count($rows)){
      $session->setTempdata('status', ['ok' => false, 'message' => 'Username tidak ditemukan!']);
      return false;
    }
    
    $pengguna = $rows[0];
    if (!password_verify($password, $pengguna->password)) {
      $session->setTempdata('status', ['ok' => false, 'message' => 'Password salah!']);
      return false;
    }

    $session->setTempdata('loggedIn', true);
    $session->setTempdata('idPengguna', (int)$pengguna->id_pengguna);
    $session->setTempdata('namaLengkap', $pengguna->nama_lengkap);

    return true;
  }

  public function logout() {
    $session = session();
    $session->destroy();
  }

  public function sudahLogin() {
    $session = session();
    if (!$session->get('loggedIn')) return false;

    return true;
  }

  public function refreshSesi() {
    $session = session();
    if (!$session->get('loggedIn')) return false;

    $session->setTempdata('loggedIn', true);
    $session->setTempdata('idPengguna', $session->get('idPengguna'));
    $session->setTempdata('namaLengkap', $session->get('namaLengkap'));

    return true;
  }
}

?>