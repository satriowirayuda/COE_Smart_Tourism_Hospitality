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

    public function store(Request $request)
    {

        $validated = $request->validate([
            '*.name' => 'required',
            '*.position' => 'required',
            '*.status' => 'required',
            '*.image' => 'required'
        ]);

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

        $member->update($validated);
        return new MemberResource($member);
    }

    public function delete(Member $member)
    {
        $member->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
