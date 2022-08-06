<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePklRequest;
use App\Http\Requests\UpdatePklRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Pkl;
use Illuminate\Http\Request;
use Flash;
use Response;

class PklController extends AppBaseController
{
    public function __construct()
    {
        $this->status = ["pendaftaran", "diterma", "ditolak", "pertimbangan", "berjalan", "selesai"];
    }
    /**
     * Display a listing of the Pkl.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Pkl $pkls */
        $pkls = Pkl::all();

        return view('pkls.index')
            ->with('pkls', $pkls);
    }

    /**
     * Show the form for creating a new Pkl.
     *
     * @return Response
     */
    public function create()
    {
        return view('pkls.create');
    }

    /**
     * Store a newly created Pkl in storage.
     *
     * @param CreatePklRequest $request
     *
     * @return Response
     */
    public function store(CreatePklRequest $request)
    {
        $input = $request->all();

        /** @var Pkl $pkl */
        $pkl = Pkl::create($input);

        Flash::success('Pkl saved successfully.');

        return redirect(route('pkls.index'));
    }

    /**
     * Display the specified Pkl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pkl $pkl */
        $pkl = Pkl::find($id);

        if (empty($pkl)) {
            Flash::error('Pkl not found');

            return redirect(route('pkls.index'));
        }

        return view('pkls.show')->with('pkl', $pkl);
    }

    /**
     * Show the form for editing the specified Pkl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Pkl $pkl */
        $pkl = Pkl::find($id);

        if (empty($pkl)) {
            Flash::error('Pkl not found');

            return redirect(route('pkls.index'));
        }

        return view('pkls.edit')->with('pkl', $pkl);
    }

    /**
     * Update the specified Pkl in storage.
     *
     * @param int $id
     * @param UpdatePklRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePklRequest $request)
    {
        /** @var Pkl $pkl */
        $pkl = Pkl::find($id);

        if (empty($pkl)) {
            Flash::error('Pkl not found');

            return redirect(route('pkls.index'));
        }

        $pkl->fill($request->all());
        $pkl->save();

        Flash::success('Pkl updated successfully.');

        return redirect(route('pkls.index'));
    }

    /**
     * Remove the specified Pkl from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pkl $pkl */
        $pkl = Pkl::find($id);

        if (empty($pkl)) {
            Flash::error('Pkl not found');

            return redirect(route('pkls.index'));
        }

        $pkl->delete();

        Flash::success('Pkl deleted successfully.');

        return redirect(route('pkls.index'));
    }
}
