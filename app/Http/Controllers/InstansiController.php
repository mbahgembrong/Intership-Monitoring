<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstansiRequest;
use App\Http\Requests\UpdateInstansiRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Instansi;
use Illuminate\Http\Request;
use Flash;
use Response;

class InstansiController extends AppBaseController
{
    public function __construct()
    {
        $this->pendidikan = ["SMA", "SMK", "D1", "D2", "D3", "S1", "S2", "S3"];
    }
    /**
     * Display a listing of the Instansi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Instansi $instansis */
        $instansis = Instansi::all();

        return view('instansis.index')
            ->with('instansis', $instansis);
    }

    /**
     * Show the form for creating a new Instansi.
     *
     * @return Response
     */
    public function create()
    {
        return view('instansis.create');
    }

    /**
     * Store a newly created Instansi in storage.
     *
     * @param CreateInstansiRequest $request
     *
     * @return Response
     */
    public function store(CreateInstansiRequest $request)
    {
        $input = $request->all();

        /** @var Instansi $instansi */
        $instansi = Instansi::create($input);

        Flash::success('Instansi saved successfully.');

        return redirect(route('instansis.index'));
    }

    /**
     * Display the specified Instansi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Instansi $instansi */
        $instansi = Instansi::find($id);

        if (empty($instansi)) {
            Flash::error('Instansi not found');

            return redirect(route('instansis.index'));
        }

        return view('instansis.show')->with('instansi', $instansi);
    }

    /**
     * Show the form for editing the specified Instansi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Instansi $instansi */
        $instansi = Instansi::find($id);

        if (empty($instansi)) {
            Flash::error('Instansi not found');

            return redirect(route('instansis.index'));
        }

        return view('instansis.edit')->with('instansi', $instansi);
    }

    /**
     * Update the specified Instansi in storage.
     *
     * @param int $id
     * @param UpdateInstansiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstansiRequest $request)
    {
        /** @var Instansi $instansi */
        $instansi = Instansi::find($id);

        if (empty($instansi)) {
            Flash::error('Instansi not found');

            return redirect(route('instansis.index'));
        }

        $instansi->fill($request->all());
        $instansi->save();

        Flash::success('Instansi updated successfully.');

        return redirect(route('instansis.index'));
    }

    /**
     * Remove the specified Instansi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Instansi $instansi */
        $instansi = Instansi::find($id);

        if (empty($instansi)) {
            Flash::error('Instansi not found');

            return redirect(route('instansis.index'));
        }

        $instansi->delete();

        Flash::success('Instansi deleted successfully.');

        return redirect(route('instansis.index'));
    }
}
