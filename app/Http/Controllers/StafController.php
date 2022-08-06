<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStafRequest;
use App\Http\Requests\UpdateStafRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Staf;
use Illuminate\Http\Request;
use Flash;
use Response;

class StafController extends AppBaseController
{
    /**
     * Display a listing of the Staf.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Staf $stafs */
        $stafs = Staf::all();

        return view('stafs.index')
            ->with('stafs', $stafs);
    }

    /**
     * Show the form for creating a new Staf.
     *
     * @return Response
     */
    public function create()
    {
        return view('stafs.create');
    }

    /**
     * Store a newly created Staf in storage.
     *
     * @param CreateStafRequest $request
     *
     * @return Response
     */
    public function store(CreateStafRequest $request)
    {
        $input = $request->all();

        /** @var Staf $staf */
        $staf = Staf::create($input);

        Flash::success('Staf saved successfully.');

        return redirect(route('stafs.index'));
    }

    /**
     * Display the specified Staf.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Staf $staf */
        $staf = Staf::find($id);

        if (empty($staf)) {
            Flash::error('Staf not found');

            return redirect(route('stafs.index'));
        }

        return view('stafs.show')->with('staf', $staf);
    }

    /**
     * Show the form for editing the specified Staf.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Staf $staf */
        $staf = Staf::find($id);

        if (empty($staf)) {
            Flash::error('Staf not found');

            return redirect(route('stafs.index'));
        }

        return view('stafs.edit')->with('staf', $staf);
    }

    /**
     * Update the specified Staf in storage.
     *
     * @param int $id
     * @param UpdateStafRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStafRequest $request)
    {
        /** @var Staf $staf */
        $staf = Staf::find($id);

        if (empty($staf)) {
            Flash::error('Staf not found');

            return redirect(route('stafs.index'));
        }

        $staf->fill($request->all());
        $staf->save();

        Flash::success('Staf updated successfully.');

        return redirect(route('stafs.index'));
    }

    /**
     * Remove the specified Staf from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Staf $staf */
        $staf = Staf::find($id);

        if (empty($staf)) {
            Flash::error('Staf not found');

            return redirect(route('stafs.index'));
        }

        $staf->delete();

        Flash::success('Staf deleted successfully.');

        return redirect(route('stafs.index'));
    }
}
