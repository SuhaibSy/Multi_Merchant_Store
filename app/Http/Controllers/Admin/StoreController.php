<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __construct() {
        $this->middleware('auth.admin');
    }

    public function index() {
        $users = User::with('store')->where('role', 'store')->get();

        return view('pages.admin.store.index', ['users' => $users]);
    }

    public function create() {
        return view('pages.admin.store.create');
    }

    public function save(StoreRequest $request) {
        $user = User::create(array_merge(
            $request->only(['first_name', 'last_name', 'email', 'phone_number']),
            [
                'role' => 'store',
                'password' => Hash::make($request->password)
            ]
        ));

        Store::create([
            'user_id' => $user->id,
            'store_name' => $request->store_name,
            'description' => $request->description,
            'address' => $request->address,
            'x' => 0,
            'y' => 0
        ]);

        return redirect()->route('admin.store.index')->with('msg', 'Account successfully created');
    }

    public function edit($id) {
        $user = User::with('store')->find($id);

        return view('pages.admin.store.edit', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        // $id => belong to user

        $user = User::with(['store' => function($q) use($request) {
            $q->update([
                'store_name' => $request->store_name,
                'description' => $request->description,
                'address' => $request->address,
                'x' => 0,
                'y' => 0
            ]);
        }])->find($id)->update([
            'store_name' => $request->store_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('admin.store.edit', $id);
    }

    public function destroy($id) {
        // $id => belong to user
        // what is here on delete cascade
        User::find($id)->delete();

        return redirect()->route('admin.store.index', $id);
    }
}
