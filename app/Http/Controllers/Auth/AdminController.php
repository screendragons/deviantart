<?php

    namespace App\Http\Controllers\Admin;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    use App\User;
    use App\Upload;
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
        // $users = User::withCount([
        //     'posts',
        //     'comments',
        //     'comments as approved_comments_count' => function ($query) {
        //         $query->where('approved', 1);
        //     }])
        //     ->get();

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

        $users = Auth::user();
        return view('/admin.admin')
            ->with('users', $users);
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
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
