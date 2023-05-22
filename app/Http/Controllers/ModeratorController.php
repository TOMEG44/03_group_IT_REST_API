<?php

namespace App\Http\Controllers;

use App\Models\Moderator;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\PeopleResource;
use App\Http\Resources\PeopleCollection;
use App\Http\Requests\PeopleRequest;

class ModeratorController extends Controller
{
    public function index()
    {
        $people = Moderator::all();
        return response()->json($people);
    }

    public function show($id)
    {
        $person = Moderator::findOrFail($id);
        return response()->json($person);
    }

    public function store(PeopleRequest $request)
    {
        $people = new Moderator;
        $people->name = $request->input('name');
        $people->surname = $request->input('surname');
        $people->age = $request->input('age');
        $people->country = $request->input('country');
        $people->street = $request->input('street');
        $people->city = $request->input('city');
        $people->phone = $request->input('phone');
        $people->save();

        return response()->json($people, 201);
    }

    public function update(PeopleRequest $request, $id)
    {
        $people = Moderator::findOrFail($id);
        $people->name = $request->input('name');
        $people->surname = $request->input('surname');
        $people->age = $request->input('age');
        $people->country = $request->input('country');
        $people->street = $request->input('street');
        $people->city = $request->input('city');
        $people->phone = $request->input('phone');
        $people->save();

        return response()->json($people);
    }

    public function delete($id)
    {
        $people = Moderator::findOrFail($id);
        $people->delete();

        return response()->json(null, 204);
    }
    /*
    public function index()
    {
        $people = Moderator::all();
        return response()->json($people);
    }

    public function show($id)
    {
        $people = Moderator::findOrFail($id);
        return response()->json($people);
    }

    public function store(Request $request)
    {
        $person = new Person;
        $person->name = $request->input('name');
        $person->age = $request->input('age');
        $person->save();

        return response()->json($person, 201);
    }

    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);
        $person->name = $request->input('name');
        $person->age = $request->input('age');
        $person->save();

        return response()->json($person);
    }

    public function delete($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return response()->json(null, 204);
    }

    /*
    public function show(Moderator $moderator)
    {
        return $moderator; 
    } 
    public function index()
    {
       return new PeopleCollection(Moderator::all());
    }   
    /*
    public function store(PeopleRequest $request)
    {
        return new PeopleResource(Moderator::create($request->all()));
    } 
    /*
  public function index(): JsonResponse{
        return response()->json(Moderator::all(), 200);
    }

    public function show(Moderator $moderator): JsonResponse{
        return response()->json($moderator, 200);
    }

    public function create(PeopleRequest $request): JsonResponse{
        $moderator = Moderator::create($request->all());

        return response()->json($moderator, 201);
    }

    public function update(PeopleRequest $request, Moderator $moderator): JsonResponse{
        $moderator->update($request->all());

        return response()->json($moderator, 200);
    }

    public function delete(Moderator $moderator): JsonResponse{
        $moderator->delete();

        return response()->json(null, 204);
    } */
}
