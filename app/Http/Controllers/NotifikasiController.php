<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNotifikasiRequest;
use App\Http\Requests\UpdateNotifikasiRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Flash;
use Response;

class NotifikasiController extends AppBaseController
{
    public function __construct()
    {
        $this->user = ["siswa", "staf", "pembimbing"];
    }
    /**
     * Display a listing of the Notifikasi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Notifikasi $notifikasis */
        $notifikasis = Notifikasi::all();

        return view('notifikasis.index')
            ->with('notifikasis', $notifikasis);
    }

    /**
     * Show the form for creating a new Notifikasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('notifikasis.create');
    }

    /**
     * Store a newly created Notifikasi in storage.
     *
     * @param CreateNotifikasiRequest $request
     *
     * @return Response
     */
    public function store(CreateNotifikasiRequest $request)
    {
        $input = $request->all();

        /** @var Notifikasi $notifikasi */
        $notifikasi = Notifikasi::create($input);

        Flash::success('Notifikasi saved successfully.');

        return redirect(route('notifikasis.index'));
    }

    /**
     * Display the specified Notifikasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Notifikasi $notifikasi */
        $notifikasi = Notifikasi::find($id);

        if (empty($notifikasi)) {
            Flash::error('Notifikasi not found');

            return redirect(route('notifikasis.index'));
        }

        return view('notifikasis.show')->with('notifikasi', $notifikasi);
    }

    /**
     * Show the form for editing the specified Notifikasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Notifikasi $notifikasi */
        $notifikasi = Notifikasi::find($id);

        if (empty($notifikasi)) {
            Flash::error('Notifikasi not found');

            return redirect(route('notifikasis.index'));
        }

        return view('notifikasis.edit')->with('notifikasi', $notifikasi);
    }

    /**
     * Update the specified Notifikasi in storage.
     *
     * @param int $id
     * @param UpdateNotifikasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNotifikasiRequest $request)
    {
        /** @var Notifikasi $notifikasi */
        $notifikasi = Notifikasi::find($id);

        if (empty($notifikasi)) {
            Flash::error('Notifikasi not found');

            return redirect(route('notifikasis.index'));
        }

        $notifikasi->fill($request->all());
        $notifikasi->save();

        Flash::success('Notifikasi updated successfully.');

        return redirect(route('notifikasis.index'));
    }

    /**
     * Remove the specified Notifikasi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Notifikasi $notifikasi */
        $notifikasi = Notifikasi::find($id);

        if (empty($notifikasi)) {
            Flash::error('Notifikasi not found');

            return redirect(route('notifikasis.index'));
        }

        $notifikasi->delete();

        Flash::success('Notifikasi deleted successfully.');

        return redirect(route('notifikasis.index'));
    }
}
