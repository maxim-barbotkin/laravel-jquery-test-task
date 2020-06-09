<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\EventsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Models\Event;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param EventsDataTable $dataTable
     * @return Response
     */
    public function index(EventsDataTable $dataTable)
    {
        return $dataTable->render('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.event.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventStoreRequest $request
     * @return Response
     */
    public function store(EventStoreRequest $request)
    {
        $event = Event::create($request->except(['_token', 'image']));

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('events'), $imageName);
            $event->image = $imageName;
            $event->save();
        }
        return redirect()->route('events.index')->with([
            'message' => 'Event successfully created.',
            'class' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.form', compact(['event']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventStoreRequest $request
     * @param Event $event
     * @return Response
     */
    public function update(EventStoreRequest $request, Event $event)
    {
        $event->update($request->except(['_token', '_method', 'image']));
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('events'), $imageName);
            if($event->image){
                $image_path = public_path().'/events/'.$event->image;
                unlink($image_path);
            }
            $event->image = $imageName;
            $event->save();
        }
        return redirect()->route('events.index')->with([
            'message' => 'Event successfully updated.',
            'class' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return Response
     * @throws Exception
     */
    public function destroy(Event $event)
    {
        try {
            $image_path = public_path().'/events/'.$event->image;
            unlink($image_path);
            $event->delete();
            return response()->json(['message' => 'success'], 200);
        } catch (Exception $exception) {
            return response()->json(['message' => 'fail'], 422);
        }
    }
}
