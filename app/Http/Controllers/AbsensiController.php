<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbsensiRequest;
use App\Http\Requests\UpdateAbsensiRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Absensi;
use Illuminate\Http\Request;
use Flash;
use Response;

class AbsensiController extends AppBaseController
{
    public function __construct()
    {
        $this->absensi = ["Alpha", "Hadir", "Izin", "Sakit"];
    }
    /**
     * Display a listing of the Absensi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Absensi $absensis */
        $absensis = Absensi::all();

        return view('absensis.index')
            ->with('absensis', $absensis);
    }

    /**
     * Show the form for creating a new Absensi.
     *
     * @return Response
     */
    public function create()
    {
        return view('absensis.create');
    }

    /**
     * Store a newly created Absensi in storage.
     *
     * @param CreateAbsensiRequest $request
     *
     * @return Response
     */
    public function store(CreateAbsensiRequest $request)
    {
        $input = $request->all();

        /** @var Absensi $absensi */
        $absensi = Absensi::create($input);

        Flash::success('Absensi saved successfully.');

        return redirect(route('absensis.index'));
    }

    /**
     * Display the specified Absensi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Absensi $absensi */
        $absensi = Absensi::find($id);

        if (empty($absensi)) {
            Flash::error('Absensi not found');

            return redirect(route('absensis.index'));
        }

        return view('absensis.show')->with('absensi', $absensi);
    }

    /**
     * Show the form for editing the specified Absensi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Absensi $absensi */
        $absensi = Absensi::find($id);

        if (empty($absensi)) {
            Flash::error('Absensi not found');

            return redirect(route('absensis.index'));
        }

        return view('absensis.edit')->with('absensi', $absensi);
    }

    /**
     * Update the specified Absensi in storage.
     *
     * @param int $id
     * @param UpdateAbsensiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbsensiRequest $request)
    {
        /** @var Absensi $absensi */
        $absensi = Absensi::find($id);

        if (empty($absensi)) {
            Flash::error('Absensi not found');

            return redirect(route('absensis.index'));
        }

        $absensi->fill($request->all());
        $absensi->save();

        Flash::success('Absensi updated successfully.');

        return redirect(route('absensis.index'));
    }

    /**
     * Remove the specified Absensi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Absensi $absensi */
        $absensi = Absensi::find($id);

        if (empty($absensi)) {
            Flash::error('Absensi not found');

            return redirect(route('absensis.index'));
        }

        $absensi->delete();

        Flash::success('Absensi deleted successfully.');

        return redirect(route('absensis.index'));
    }
}
