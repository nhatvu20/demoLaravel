<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use App\Services\CarService;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\Cars\StoreRequest;

class CarsController extends Controller
{
    //
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function create(StoreRequest $request)
    {
        // $car = Cars::create($request->all());
        // return
        $carData = $request->only(['name', 'brand']);
        $car = $this->carService->createCar($carData);
        return response()->json($car, 201);
    }
    public function getAllCar(Request $request)
    {
        $carData = $request->only(['name', 'brand']);
        $car = $this->carService->getAllCar($carData);
        return response()->json($car, 201);
    }
    public function getOneCar(Request $request)
    {
        $id = $request->route('id');
        $car = $this->carService->getOneCar($id);
        return response()->json([
            'data' => $car,
            'status' => true
        ], 201);
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|alpha|min:6|max:10',
    //         'brand' => 'required|alpha|min:6|max:10',
    //     ]);
    // }
    public function deleteCar(Request $request)
    {
        $id = $request->route('id');
        $car = $this->carService->delete($id);
        return response()->json($car, 201);
    }

    public function index()
    {
        $car = Cars::all();
        return $car;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cars $car)
    {
        //
        return $car;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $cardata = $request->all();
        $id = $request->route('id');
        $res = $this->carService->update($request->all(), $id);
        return $res;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {
        $res = $this->carService->delete($id);
        return $res;
    }
}
