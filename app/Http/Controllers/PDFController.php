<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class PDFController
{
    public function download(string $filename)
    {
        $filePath = 'certificates/' . $filename . '.pdf';

        if (!Storage::disk('public')->exists($filePath)) {
            abort(404, 'File not found.');
        }

        return Storage::disk('public')->download($filePath);
    }
}
