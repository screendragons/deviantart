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
    public function index(User $users)
    {

         if( Auth::check() ){
            $users = User::where('id', '!=', Auth::id())->get();
            return view('admin.admin', ['users'=> $users]);
         }
         return view('auth.login');

        // $users = User::All();
        // $users = User::find($users->id);
        // return view('admin.admin', ['users'=>$users]);
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
            $uploads = count($users['uploads']);
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
        $user = User::where('id', $id)->first();

        return view('admin.adminedit')->with('user', $user);
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

        $user = User::where('id', $id)->first();
        $user->name = request('name');
        $user->email = request('email');
        $user->save();

        return redirect()->route('admin.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
