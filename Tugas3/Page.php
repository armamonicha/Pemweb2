<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "Faqs page";
    }

    public function tos()
    {
        echo "Halaman Terms of Service";
    }

    public function biodata()
    {
        echo "NAMA:ARMA MONICHA</br>";
        echo "NIM:4122039</br>";
        echo "KELAS:4B</br>";
        echo "TTL:09 MARET 2004</br>";
        echo "HOBBY:MAKAN DAN MINUM</br>";
        echo "PEKERJAAN:SAFETY";
    }
}
