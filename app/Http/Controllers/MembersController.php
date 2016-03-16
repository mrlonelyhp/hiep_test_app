<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Requests;
use Request;

class MembersController extends Controller
{
    public function index()
    {
        return view('pages.members.index');
    }

    public function getMemberList()
    {
        return Member::all()->toArray();
    }

    public function store(Request $request)
    {
        $member = new Member();
        $member->name = $request->input('name');
        $member->address = $request->textarea('address');
        $member->age = $request->input('age');
        $member->joined_at = $request->input('joined_at');
        $member->photo = $request->img('photo');
        $member->save();
        return 'Member record successfully created with id ' . $member->id;
    }

    public function show($id)
    {
        return Member::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $member = Member::find($id);
        $member->name = $request->input('name');
        $member->address = $request->textarea('address');
        $member->age = $request->input('age');
        $member->photo = $request->img('photo');
        $member->joined_at = $request->input('joined_at');
        $member->save();
        return "Sucess updating user #" . $member->id;
    }

    public function destroy(Request $request) {
        $member = Member::find($request->input('id'));
        $member->delete();
        return "Member record successfully deleted #" . $request->input('id');
    }
}
