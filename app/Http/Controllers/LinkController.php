<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        return view('links.index', [
            'userLinks' => Link::where('user_id', $request->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'url' => 'required|string|max:255',
            'text' => 'required|string|max:255',
        ]);

        $request->user()->links()->create($validated);

        return redirect(route('links.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(String $username): View
    {
        $user = User::where('username', $username)
                    ->take(1)
                    ->get();
        $user_id = $user[0]->id;
        $name = $user[0]->name;

        return view('links.show', [
            'userLinks' => Link::where('user_id', $user_id)->get(),
            'username' => $username,
            'name' => $name,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link): View
    {
        Gate::authorize('update', $link);

        return view('links.edit', [
            'link' => $link,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link): RedirectResponse
    {
        Gate::authorize('update', $link);

        $validated = $request->validate([
            'url' => 'required|string|max:255',
            'text' => 'required|string|max:255',
        ]);

        $link->update($validated);

        return redirect(route('links.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }
}
