<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RequestsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestStoreRequest;
use App\Models\Request;

class RequestController extends Controller
{
    public function index(RequestsDataTable $dataTable){
        return $dataTable->render('admin.event.index');
    }

    public function create(RequestStoreRequest $request){
        Request::create($request->except(['_token']));
        return redirect()->route('welcome')->with([
            'message' => 'Successfully attended',
            'class' => 'success'
        ]);
    }
}
