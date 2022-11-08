<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('myprofile.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $my_profile)
    {
        if (auth()->id() !== $my_profile->id) abort(403, 'Anda tidak memiliki akses!');

        return view('myprofile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountRequest $request, User $my_profile)
    {
        $data = $request->validated();

        if ($request->file('foto')) {
            if ($my_profile->foto) {
                $data['foto'] = $request->file('foto')->store('user-image');

                Storage::delete($my_profile->foto);
            }

            $data['foto'] = $request->file('foto')->store('user-image');
        }

        $my_profile->update($data);

        return redirect()->route('my-profile.index')->with('message', 'Update Profil Berhasil!');
    }
}
