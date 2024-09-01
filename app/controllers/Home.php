<?php
class Home extends Controller
{
  public function index()
  {
    $data["judul"] = "Home";
    $this->view("Home/index",$data);
  }
}
