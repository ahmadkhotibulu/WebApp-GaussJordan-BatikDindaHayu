<?php 

namespace App\Controllers;

use \App\Models\PenggunaModel;
use \App\Models\PenghitunganModel;

class PenggunaController extends BaseController {
  public function loginPage() {
    $pengguna = new PenggunaModel();
    if ($pengguna->sudahLogin()) return redirect()->to('/beranda-page');

    $pengguna->refreshSesi();
    echo view('view_login');
  }

  public function registerPage() {
    $pengguna = new PenggunaModel();
    if ($pengguna->sudahLogin()) return redirect()->to('/beranda-page');

    $pengguna->refreshSesi();
    echo view('view_register');
  }

  public function berandaPage() {
    $pengguna = new PenggunaModel();
    if (!$pengguna->sudahLogin()) return redirect()->to('/login-page');
    
    $pengguna->refreshSesi();
    echo view('view_beranda');
  }

  public function penghitunganPage() {
    $pengguna = new PenggunaModel();
    if (!$pengguna->sudahLogin()) return redirect()->to('/login-page');

    $hitungModel = new PenghitunganModel();
    $data = [
      'matrikDefaultA' => $hitungModel->nilaiMatrikDefault()['matrikDefaultA'],
      'matrikDefaultB' => $hitungModel->nilaiMatrikDefault()['matrikDefaultB']
    ];

    $pengguna->refreshSesi();
    echo view('view_penghitungan', $data);
  }

  public function akunPage() {
    $pengguna = new PenggunaModel();
    if (!$pengguna->sudahLogin()) return redirect()->to('/login-page');

    $pengguna->refreshSesi();
    echo view('view_akun');
  }

  public function petunjukPage() {
    echo view('view_petunjuk');
  }

  public function pengembangPage() {
    echo view('view_pengembang');
  }

  public function login() {
    $pengguna = new PenggunaModel();
    if ($pengguna->sudahLogin()) return redirect()->to('/beranda-page');

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    if ($pengguna->login($username, $password)) return redirect()->to('/beranda-page');
    else return redirect()->to('/login-page');
  }

  public function register() {
    $pengguna = new PenggunaModel();
    if ($pengguna->sudahLogin()) return redirect()->to('/beranda-page');

    $nama_lengkap = $this->request->getPost('nama_lengkap');
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $password_ulang = $this->request->getPost('password_ulang');

    $pengguna->refreshSesi();
    if ($pengguna->buat($nama_lengkap, $username, $password, $password_ulang)) return redirect()->to('/login-page');
    else return redirect()->to('/register-page');
  }

  public function logout() {
    $pengguna = new PenggunaModel();
    $pengguna->logout();
    return redirect()->to('/login-page');
  }

  public function ubahAkun() {
    $pengguna = new PenggunaModel();
    if (!$pengguna->sudahLogin()) return redirect()->to('/login-page');

    $nama_lengkap = $this->request->getPost('nama_lengkap');
    $password = $this->request->getPost('password');
    $password_baru = $this->request->getPost('password_baru');
    $password_ulang = $this->request->getPost('password_ulang');

    $pengguna->ubah($nama_lengkap, $password, $password_baru, $password_ulang);
    return redirect()->to('/akun-page');
  }

  public function hitung() {
    $pengguna = new PenggunaModel();
    if (!$pengguna->sudahLogin()) return redirect()->to('/login-page');

    $A = [[]];

    $A[0][0] = $this->request->getPost('a11');
    $A[0][1] = $this->request->getPost('a12');
    $A[0][2] = $this->request->getPost('a13');

    $A[1][0] = $this->request->getPost('a21');
    $A[1][1] = $this->request->getPost('a22');
    $A[1][2] = $this->request->getPost('a23');

    $A[2][0] = $this->request->getPost('a31');
    $A[2][1] = $this->request->getPost('a32');
    $A[2][2] = $this->request->getPost('a33');

    $b = [];

    $b[0] = $this->request->getPost('b1');
    $b[1] = $this->request->getPost('b2');
    $b[2] = $this->request->getPost('b3');
    
    $hitungModel = new PenghitunganModel();
    $hasil = $hitungModel->gaussjordan($A, $b);

    $pengguna->refreshSesi();
    $data = ['matrikA' => $A, 'matrikB' => $b, 'hasil' => $hasil];
    echo view('view_hasil', $data);
  }

  public function back() {
    return redirect()->back();
  }
}

?>