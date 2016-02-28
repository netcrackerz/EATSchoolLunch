<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nitmedia\Wkhtml2pdf\Facades\Wkhtml2pdf;
//use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Application;
use App\Adult;
use App\Child;
use App\HouseHold;
use App\SsnDigit;
use App\User;
use App\Applicant;
use App\ChildIncome;

class HomeController extends Controller
{
     public function __construct()
     {
        
      
            $this->middleware('auth',['index','newpplication']);
           
        
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home.index');
    }
    public function newapplication()
    {
            $user =  \Auth::user();
            $application = new Application;
            $application->application_status = 0;
            $household = new HouseHold;
      //     
            $application = $user->application()->save($application);
            $household = $application->household()->save($household);
        
            $user->push();
            session(['application' => $application]);
            session(['household' => $household ]);

         //  dd( $application->application_status);
         return view('home.newpplication',compact('user'));
    }
   

     public function submitchild(Request $request)
    { 
                    $input = $request->input();
        //              dd( $input);
                    $user =     User::with([
                                                'application' => function($query)
                                                {
                                                    $query->where('application_status', '=',0);
                                                  
                                                },
                                                'application.household'
                                            ])->find(\Auth::user()->id);
         
                    $first_name     = $input['first_name'];
                    $middle_init    = $input['middle_init'];
                    $last_name      = $input['last_name'];
                    $student_flag       = ( $request->has('student_flag'))  ? '1' : '0';
                    $foster_flag        = ( $request->has('foster_flag'))   ? '1' : '0';
                    $migrant_flag       = ( $request->has('migrant_flag'))  ? '1' : '0'; 
                    $runaway_flag       = ( $request->has('runaway_flag'))  ? '1' : '0';
                    $homeless_flag      = ( $request->has('homeless_flag')) ? '1' : '0';
                    $headstart_flag     = ( $request->has('headstart_flag'))? '1' : '0';
              
                 //      dd( $migrant_flag[0] );
                    $child = [];
                    for ($i = 0; $i <  count($first_name); $i++) {

                        $child[] =   new Child
                                        ( [
                                            'first_name'  => $first_name[$i],
                                            'middle_init'    => $middle_init[$i],
                                            'last_name'       => $last_name[$i],
                               //             'student_flag'  =>   $student_flag[$i],
                               //             'foster_flag'   =>   $foster_flag[$i],
                               //             'runaway_flag'  =>   $runaway_flag[$i],
                          //                  'homeless_flag' =>   $homeless_flag[$i],                                           
                            //                'migrant_flag'  =>   $migrant_flag[$i],
                            //                'headstart_flag' =>   $headstart_flag[$i]
                                        ]);
                                

                    } 

                             
        

                  //  $application = $user->application->first();// Application::with('household')->find(1);
                       $application =               session('application');
                 /*  $application = */     $application->household->children()->saveMany($child);
                           session(['application' =>   $application]);
                   return "200";
               //    $this->assertResponseOk();
    }

    public function submitadult(Request $request)
    { 
     //   dd($request);

                    $input = $request->input();
                     $user =     User::with([
                                                'application' => function($query)
                                                {
                                                    $query->where('application_status', '=',0);
                                                  
                                                },
                                                'application.household'
                                            ])->find(\Auth::user()->id);
                    
                   $first_name = $input['first_name'];
                   $middle_init = $input['middle_init'];
                   $last_name = $input['last_name'];

                    $adult = [];
                   for ($i = 0; $i <  count($first_name); $i++) {

                        $adult[] =   new Adult( [
                                            'first_name'  => $first_name[$i],
                                            'middle_init'    => $middle_init[$i],
                                            'last_name'       => $last_name[$i],
                                        ]);

                    } 

        
 //echo "ddd<pre>";print_r($firstChild);exit;
                 $application = session('application');
            //     dd($application);
         //           $application = $user->application->first();//  Application::with('household')->find(1);

                 /*  $application = */   $application->household->adults()->saveMany($adult);
                      session(['application' =>   $application]);
                   return "200";
    }
     public function submitaddress(Request $request)
    {
                $input = $request->input();
                $user =  \Auth::user();// User::with('application')->find($input['user_id']);

               
                $user->street_address                = $input['street_address'];
                $user->city                          = $input['city'];
                $user->state                         = $input['state'];
                $user->zip                           = $input['zip'];
                $user->phone                         = $input['phone'];
                $user->email                         = $input['email'];

           //     $application                         = $user->application()->first();
                  $application = session('application');
          
                 $application->submitted_at             = Carbon::createFromFormat('m/d/Y', $input['submitted_at']);
        

                  $user->application()->save($application);
                $user->push();
        

                  session(['application' =>   $application]);
     
         return "200";
    }
    
    public function profileset(Request $request)
    {
            $input = $request->input();
            \Auth::user()->street_address =  $input['street_address'];
            \Auth::user()->city =  $input['city'];
            \Auth::user()->state =  $input['state'];
            \Auth::user()->zip =  $input['zip'];
            \Auth::user()->phone =  $input['phone'];
             \Auth::user()->save();

        return redirect('/');
    }

    public function childfield()
    {
     
         return view('partials._childfield');
    }

 public function adultfield()
    {
     
         return view('partials._adultfield');
    }
     public function addressfield()
    {
     
         return view('partials._addressfield');
    }
    
     public function profile()
    {
   $user = \Auth::user();
         return view('home.profile',compact('user'));
    }
    public function review()
    {
$application = session('application');
        $application =     Application::with([
                                                'household' => function($query)
                                                {
                                               //     $query->where('application_status', '=',0);
                                                  
                                                },
                                                'household.children','household.adults'
                                            ])->find($application->id);

    //    $application = session('application');
    //   dd($application->household->children);
         return view('home.review',compact('application'));
    }
      /**
     * to test a resource.
     *
     * @return void
     */


     public function edit()
    {
        return view('home.edit');
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
    public function test()
    {/*

        $oneArrayChild =                            [ 'first_name'  => 'adnan',
                                                        'middle_init'    => 'j',
                                                        'last_name'       => 'moghal',
                                                    ];

                       $adult = [
                                         new Adult  ([ 'first_name'  => 'adnan',
                                                        'middle_init'    => 'j',
                                                        'last_name'       => 'moghal',
                                                    ]),
                                       new Adult  ([ 'first_name'  => 'ejaz',
                                                        'middle_init'    => 'ur',
                                                        'last_name'       => 'Rehman',
                                                    ])
                                    ];
                                      $children = [
                                    [ 'first_name'  => 'adnan',
                                                        'middle_init'    => 'j',
                                                        'last_name'       => 'moghal',
                                                    ],
                                      [ 'first_name'  => 'ejaz',
                                                        'middle_init'    => 'ur',
                                                        'last_name'       => 'Rehman',
                                                    ]
                                    ];
                          $bacha = new Child;

                           $bacha->fill( [ 'first_name'  => 'adnan',
                                                        'middle_init'    => 'j',
                                                        'last_name'       => 'moghal',
                                                    ]);
                        //    dd( $bacha);
                        $application = Application::find(1);
                                               

                        $application->household->adults()->saveMany($adult);
                     
                        dd($application);
                         //   $family = new Child;
                         //   $family->fill($children);
                      //      $application->household->children()->save( $family);
                              //     dd($application);
                         /*
                         saveMany works with array of child objects
                                   $application->household->children()->saveMany($child);


                         */
                                    /*
                         create works with array of one child 
                                  $application->household->children()->create($oneArrayChild);


                         */
                                                /*
                         create does not work with array of many child 
                                  $application->household->children()->create($children);

                                    result:: empty row inserted
                         */
                                      /*
                         saveMany does not work with with array of many child 
                                   $application->household->children()->saveMany($children);


                         */
                      return \PDF::html('home.test'); // hello is naw of blade template             
                return view('home.test');
    }
}
