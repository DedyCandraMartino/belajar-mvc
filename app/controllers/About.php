<?php
class About extends Controller
{
  public function index($nama = "candra",$umur="17" ,$sekolah = "SMK")
  {
    $data['judul']="About";
    $data['nama']=$nama;
    $data['umur']=$umur;
    $data['sekolah']=$sekolah;
    $this->view("about/index",$data);
  }
  public function page()
  {
    $this->view("about/page");
  }
}
