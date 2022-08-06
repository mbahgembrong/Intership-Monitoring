<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePembimbingRequest;
use App\Http\Requests\UpdatePembimbingRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Pembimbing;
use Illuminate\Http\Request;
use Flash;
use Response;

class PembimbingController extends AppBaseController
{
    /**
     * Display a listing of the Pembimbing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Pembimbing $pembimbings */
        $pembimbings = Pembimbing::all();

        return view('pembimbings.index')
            ->with('pembimbings', $pembimbings);
    }

    /**
     * Show the form for creating a new Pembimbing.
     *
     * @return Response
     */
    public function create()
    {
        return view('pembimbings.create');
    }

    /**
     * Store a newly created Pembimbing in storage.
     *
     * @param CreatePembimbingRequest $request
     *
     * @return Response
     */
    public function store(CreatePembimbingRequest $request)
    {
        $input = $request->all();

        /** @var Pembimbing $pembimbing */
        $pembimbing = Pembimbing::create($input);

        Flash::success('Pembimbing saved successfully.');

        return redirect(route('pembimbings.index'));
    }

    /**
     * Display the specified Pembimbing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pembimbing $pembimbing */
        $pembimbing = Pembimbing::find($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        return view('pembimbings.show')->with('pembimbing', $pembimbing);
    }

    /**
     * Show the form for editing the specified Pembimbing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Pembimbing $pembimbing */
        $pembimbing = Pembimbing::find($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        return view('pembimbings.edit')->with('pembimbing', $pembimbing);
    }

    /**
     * Update the specified Pembimbing in storage.
     *
     * @param int $id
     * @param UpdatePembimbingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePembimbingRequest $request)
    {
        /** @var Pembimbing $pembimbing */
        $pembimbing = Pembimbing::find($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        $pembimbing->fill($request->all());
        $pembimbing->save();

        Flash::success('Pembimbing updated successfully.');

        return redirect(route('pembimbings.index'));
    }

    /**
     * Remove the specified Pembimbing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pembimbing $pembimbing */
        $pembimbing = Pembimbing::find($id);

        if (empty($pembimbing)) {
            Flash::error('Pembimbing not found');

            return redirect(route('pembimbings.index'));
        }

        $pembimbing->delete();

        Flash::success('Pembimbing deleted successfully.');

        return redirect(route('pembimbings.index'));
    }
}
