<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Models\SlipGaji;
use Illuminate\View\View;

class MailController extends Controller
{
    //berhasil kirim email,versi awal
    public function index(): View
    {
        $posts = SlipGaji::latest()->paginate(10);
        $mailData = [
            'title' => 'ini header dari konten',
            'body' =>  'harusnya ini awalan dr body'

        ];

        Mail::to('under.block22@gmail.com')->send(new DemoMail($mailData));

        //dd("Email is sent successfully.");
         //render view with posts
         return view('slipgajis.index', compact('posts'));
        //return back();



    }


    public function show(int $idxsg)
    {
        //get post by ID
        $postnya = SlipGaji::findOrFail($idxsg);

        $mailData = [
            'nama' => $postnya->nama,
            'kode' => $postnya->kode,
            'Periode' => $postnya->periode,
            'perusahaan' => $postnya->perusahaan,
            'nomorhp' => $postnya->nomorhp,
            'gapok' => $postnya->gapok



        ];
        Mail::to('under.block22@gmail.com')->send(new DemoMail($mailData));

        //render view with post
        //return view('slipgajis.index', compact('post'));
        //return view('slipgajis.index', compact('postnya'));
        return back();
    }

    public function sendEmail($nama)
    {
        $mailData = [
            'title' => 'ini header dari konten',
            'body' =>  'harusnya ini awalan dr body'

        ];
        $email = SlipGaji::find($nama)->email;
        Mail::to($email)->send(new DemoMail($mailData));
        return back();
    }

}
