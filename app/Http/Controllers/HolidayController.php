<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use App\Models\Note;
use App\Http\Requests\StoreHolidayRequest;
use App\Http\Requests\UpdateHolidayRequest;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function viewList() {
        $holidays = Holiday::all();
        return view('product', compact('holidays'));
    }

    public function viewDetail($id) {
        $holiday = Holiday::findOrFail($id);
        return view('product_detail', compact('holiday'));
    }

    public function holidayPlanner(){
        return view('holiday_form');
    }

    public function viewPlanner(){
        $holidays = Holiday::all();
        $notes = Note::all();
        return view('holiday_planner')->with(compact('holidays','notes'));
    }

    public function updatePlanner($id){
        $holiday = Holiday::findOrFail($id);

        if($holiday != NULL){
            $holiday->is_picked = true;

            $holiday->save();
        }

        return redirect()->route('holiday.plan');
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
     * @param  \App\Http\Requests\StoreHolidayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHolidayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function show(Holiday $holiday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit(Holiday $holiday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHolidayRequest  $request
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHolidayRequest $request, Holiday $holiday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holiday $holiday)
    {
        //
    }
}
