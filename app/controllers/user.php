<?php
class User extends Controller { 
    public function index() { 
        $this->view("user/index", $data); 
    } 
    public function profile($nama = "Indah Kirana", $pekerjaan = "Pelajar") { 
        $data["nama"] = $nama; 
        $data["pekerjaan"] = $pekerjaan; 
        $this->view("user/profile", $data); 
    } 
  }