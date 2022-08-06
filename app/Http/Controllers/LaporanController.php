<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Flash;
use Response;

class LaporanController extends AppBaseController
{
    /**
     * Display a listing of the Laporan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Laporan $laporans */
        $laporans = Laporan::all();

        return view('laporans.index')
            ->with('laporans', $laporans);
    }

    /**
     * Show the form for creating a new Laporan.
     *
     * @return Response
     */
    public function create()
    {
        return view('laporans.create');
    }

    /**
     * Store a newly created Laporan in storage.
     *
     * @param CreateLaporanRequest $request
     *
     * @return Response
     */
    public function store(CreateLaporanRequest $request)
    {
        $input = $request->all();

        /** @var Laporan $laporan */
        $laporan = Laporan::create($input);

        Flash::success('Laporan saved successfully.');

        return redirect(route('laporans.index'));
    }

    /**
     * Display the specified Laporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Laporan $laporan */
        $laporan = Laporan::find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        return view('laporans.show')->with('laporan', $laporan);
    }

    /**
     * Show the form for editing the specified Laporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Laporan $laporan */
        $laporan = Laporan::find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        return view('laporans.edit')->with('laporan', $laporan);
    }

    /**
     * Update the specified Laporan in storage.
     *
     * @param int $id
     * @param UpdateLaporanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLaporanRequest $request)
    {
        /** @var Laporan $laporan */
        $laporan = Laporan::find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        $laporan->fill($request->all());
        $laporan->save();

        Flash::success('Laporan updated successfully.');

        return redirect(route('laporans.index'));
    }

    /**
     * Remove the specified Laporan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Laporan $laporan */
        $laporan = Laporan::find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        $laporan->delete();

        Flash::success('Laporan deleted successfully.');

        return redirect(route('laporans.index'));
    }
}
