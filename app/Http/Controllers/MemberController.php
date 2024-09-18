<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemberResource;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index()
    {
        $member = Member::all();
        return MemberResource::collection($member);
    }

    public function show(Member $member)
    {
        return new MemberResource($member);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            '*.name' => 'required',
            '*.position' => 'required',
            '*.status' => 'required',
            '*.image' => 'required'
        ]);

        foreach ($request->file('*.image') as $key => $image) {
            $path = $image->store('images/member', 'public');
            $validated[$key]['image'] = $path;
        }

        foreach ($validated as $data) {
            Member::create($data);
        }

        return response()->json(['message' => 'Data berhasil ditambahkan']);
    }

    public function update(Request $request, Member $member)
    {
        $validated = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'status' => 'required',
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/member', 'public');
            $validated['image'] = $path;
        }

        $member->update($validated);
        return new MemberResource($member);
    }

    public function delete(Member $member)
    {
        $member->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
