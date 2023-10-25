<?php

namespace App\Http\Controllers;

use App\Http\Requests\Todos\StoreTodosRequest;
use App\Models\Todos;
use App\Services\TodoService;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    protected $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function create(StoreTodosRequest $request)
    {
        // $todoData = $request->only(['task']);
        $todo = $this->todoService->create($request->all());
        return response()->json($todo, 201);
    }
    public function getAll(Request $request)
    {
        // $todoData = $request->only(['task']);
        $todo = $this->todoService->getAll();
        return response()->json($todo, 201);
        // return "aa";
    }
    public function getOne(Request $request, String $id)
    {
        // $id = $request->route('id');
        $todo = $this->todoService->getOne($id);
        return response()->json([
            'data' => $todo,
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
    public function delete(Request $request)
    {
        $id = $request->route('id');
        $todo = $this->todoService->delete($id);
        return response()->json($todo, 201);
    }

    public function index(Request $request)
    {
        $todo = $this->todoService->getAll($request->all());
        return response()->json($todo, 201);
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
    public function show(Todos $todo)
    {
        //
        return $todo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTodosRequest $request)
    {
        // $tododata = $request->all();
        $id = $request->route('id');
        $res = $this->todoService->update($request->all(), $id);
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
        $res = $this->todoService->delete($id);
        return $res;
    }
}
