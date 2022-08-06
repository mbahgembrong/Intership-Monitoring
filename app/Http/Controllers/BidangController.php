<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBidangRequest;
use App\Http\Requests\UpdateBidangRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Bidang;
use Illuminate\Http\Request;
use Flash;
use Response;

class BidangController extends AppBaseController
{
    /**
     * Display a listing of the Bidang.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Bidang $bidangs */
        $bidangs = Bidang::all();

        return view('bidangs.index')
            ->with('bidangs', $bidangs);
    }

    /**
     * Show the form for creating a new Bidang.
     *
     * @return Response
     */
    public function create()
    {
        return view('bidangs.create');
    }

    /**
     * Store a newly created Bidang in storage.
     *
     * @param CreateBidangRequest $request
     *
     * @return Response
     */
    public function store(CreateBidangRequest $request)
    {
        $input = $request->all();

        /** @var Bidang $bidang */
        $bidang = Bidang::create($input);

        Flash::success('Bidang saved successfully.');

        return redirect(route('bidangs.index'));
    }

    /**
     * Display the specified Bidang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Bidang $bidang */
        $bidang = Bidang::find($id);

        if (empty($bidang)) {
            Flash::error('Bidang not found');

            return redirect(route('bidangs.index'));
        }

        return view('bidangs.show')->with('bidang', $bidang);
    }

    /**
     * Show the form for editing the specified Bidang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Bidang $bidang */
        $bidang = Bidang::find($id);

        if (empty($bidang)) {
            Flash::error('Bidang not found');

            return redirect(route('bidangs.index'));
        }

        return view('bidangs.edit')->with('bidang', $bidang);
    }

    /**
     * Update the specified Bidang in storage.
     *
     * @param int $id
     * @param UpdateBidangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBidangRequest $request)
    {
        /** @var Bidang $bidang */
        $bidang = Bidang::find($id);

        if (empty($bidang)) {
            Flash::error('Bidang not found');

            return redirect(route('bidangs.index'));
        }

        $bidang->fill($request->all());
        $bidang->save();

        Flash::success('Bidang updated successfully.');

        return redirect(route('bidangs.index'));
    }

    /**
     * Remove the specified Bidang from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Bidang $bidang */
        $bidang = Bidang::find($id);

        if (empty($bidang)) {
            Flash::error('Bidang not found');

            return redirect(route('bidangs.index'));
        }

        $bidang->delete();

        Flash::success('Bidang deleted successfully.');

        return redirect(route('bidangs.index'));
    }
}
