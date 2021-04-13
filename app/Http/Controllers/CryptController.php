<?php

namespace App\Http\Controllers;

use App\Models\Crypt;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CryptController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crypt  $crypt
     * @return \Illuminate\Http\Response
     */
    public function show(Crypt $crypt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crypt  $crypt
     * @return \Illuminate\Http\Response
     */
    public function edit(Crypt $crypt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crypt  $crypt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crypt $crypt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crypt  $crypt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crypt $crypt)
    {
        //
    }
    public function encryptView()
    {
        return view('crypt.encrypt');
    }

    public function encrypt(Request $request)
    {
        $input = $request->all();
        $files = $this->doUpload($request, 'input_file','uploads/raw_files');
        foreach ($files as $file) {
            $file_name=(base_path().'/public/storage/'.$file);
            $output='storage/encrypted/'.basename($file);
            $this->encryptFile($file_name, $output, $input['encrypt_key']);
            $this->outputFile($output);
        }
        Flash::success('Crypt saved successfully.');

        return redirect(route('crypt.index'));
    }

    public function decryptView()
    {
        return view('crypt.decrypt');

    }
    public function decrypt(Request $request ){
        $input = $request->all();
        $files = $this->doUpload($request, 'input_file','uploads/tobe_decrypted');
        foreach ($files as $file) {
            $file_name=(base_path().'/public/storage/'.$file);
            $output='storage/decrypted/' . time() . basename($file);
            $this->decryptFile($file_name, $output, $input['decrypt_key']);
            $this->outputFile($output);
        }
        Flash::success('File decrypted successfully.');

        return redirect(route('crypt.index'));
    }

    private function encryptFile(string $inputFilename, string $outputFilename, string $key): bool
    {
        $iFP = fopen($inputFilename, 'rb');
        $oFP = fopen($outputFilename, 'wb');

        [$state, $header] = sodium_crypto_secretstream_xchacha20poly1305_init_push($key);

        fwrite($oFP, $header, 24); // Write the header first:
        $size = fstat($iFP)['size'];
        for ($pos = 0; $pos < $size; $pos += CUSTOM_CHUNK_SIZE) {
            $chunk = fread($iFP, CUSTOM_CHUNK_SIZE);
            $encrypted = sodium_crypto_secretstream_xchacha20poly1305_push($state, $chunk);
            fwrite($oFP, $encrypted, CUSTOM_CHUNK_SIZE + 17);
            sodium_memzero($chunk);
        }

        fclose($iFP);
        fclose($oFP);
        return true;
    }

    /**
     * @throws \SodiumException
     */
    private function decryptFile(string $inputFilename, string $outputFilename, string $key): bool
    {
        $iFP = fopen($inputFilename, 'rb');
        $oFP = fopen($outputFilename, 'wb');

        $header = fread($iFP, 24);
        $state = sodium_crypto_secretstream_xchacha20poly1305_init_pull($header, $key);
        $size = fstat($iFP)['size'];
        $readChunkSize = CUSTOM_CHUNK_SIZE + 17;
        for ($pos = 24; $pos < $size; $pos += $readChunkSize) {
            $chunk = fread($iFP, $readChunkSize);
            [$plain, $tag] = sodium_crypto_secretstream_xchacha20poly1305_pull($state, $chunk);
            fwrite($oFP, $plain, CUSTOM_CHUNK_SIZE);
            sodium_memzero($plain);
        }
        fclose($iFP);
        fclose($oFP);
        return true;
    }

    public function doUpload(Request $request, $key,$path)
    {
        if ($request->hasfile($key)) {
            $files = $request->file($key);
            $paths = [];
            foreach ($files as $file) {
                $path = $file->storeAs($path, $file->getClientOriginalName() . '_' . time() . '.' . $file->getClientOriginalExtension(), 'public');
                array_push($paths, $path);
            }
            return $paths;
        }

    }
    public function outputFile($output){
        if (file_exists($output)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($output).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($output));
            readfile($output);
            exit;
        }
    }
}
