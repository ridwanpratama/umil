<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShortenController extends Controller
{
    private function generateShortCode($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($characters);
        $shortCode = '';

        for ($i = 0; $i < $length; $i++) {
            $shortCode .= $characters[rand(0, $charLength - 1)];
        }

        return $shortCode;
    }

    private function isShortCodeUnique($shortCode)
    {
        return DB::table('urls')->where('short_url', $shortCode)->doesntExist();
    }

    private function insertURL($url)
    {
        do {
            $shortCode = $this->generateShortCode();
        } while (!$this->isShortCodeUnique($shortCode));

        DB::table('urls')->insert([
            'url' => $url,
            'short_url' => $shortCode,
            'created_at' => now()
        ]);

        return $shortCode;
    }

    public function shorten(Request $request)
    {
        $validatedData = $request->validate([
            'url' => 'required|url'
        ]);
    
        $url = $validatedData['url'];
    
        $shortUrl = $this->insertURL($url);
        return redirect()->route('redirect', ['code' => $shortUrl]);
    }
    
    public function redirect($code)
    {
        $url = DB::table('urls')->where('short_url', $code)->first();
        if ($url) {
            return view('result', ['url' => $url]);
        } else {
            abort(404);
        }
    }

    public function result($code)
    {
        $url = DB::table('urls')->where('short_url', $code)->first();
        if ($url) {
            return view('code', ['url' => $url]);
        } else {
            abort(404);
        }
    }
}
