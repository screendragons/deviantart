<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    use App\User;
    use App\Upload;
    use DB;
    use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // $users = User::all();
          // return view('admin.admin', ['users' => $users]);
        // $uploads = Upload::get();
        // if(count($uploads)){
        //     return view('admin.admin', ['uploads' => $uploads]);
        // }

        // $users = User::withCount(['uploads'])->get();
        // return view('users', compact('users'));
        // $users = Upload::with('user')->get();
        // return view('/admin.admin')
        //     ->with('users', $users);

        // $users = User::withCount([
        //     'uploads',
        //     'uploads as approved_comments_count' => function ($query) {
        //         $query->where('approved', 1);
        //     }])
        //     ->get();

        // $users = Auth::user();
        // return view('/admin.admin')
        //     ->with('users', $users);


        // $users = User::All();
        // return view('admin.admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(User $users)
    {
        $users = User::with('uploads')->get();

        foreach ($users as $key => $user) {
            $uploads = count($user['uploads']);
            $users[$key]['uploads'] = $uploads;
        }
        return view('admin.admin', ['users' => $users]);


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->get();

        return view('admin.adminedit')->with('user', $user[0]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($Request);
        $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->save();
        return view('admin.admin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
