<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class InfoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		// $user = User::find(1);
		// return response()->json($user)
// 		$appsecret_proof= hash_hmac('sha256', env ( 'FACEBOOK_APP_TOKEN' ),env ( 'FACEBOOK_APP_SECRET' ) );
		
		$fb = new \Facebook\Facebook ( [ 
				'app_id' => env ( 'FACEBOOK_APP_ID' ),
				'app_secret' => env ( 'FACEBOOK_APP_SECRET' ),
				'default_graph_version' => 'v2.8',
				'default_access_token' => env ( 'FACEBOOK_APP_TOKEN' ) ,
// 				'appsecret_proof' => $appsecret_proof,
		] // optional
 );
		
// 		$appsecret_proof= hash_hmac('sha256', env ( 'FACEBOOK_APP_TOKEN' ),env ( 'FACEBOOK_APP_SECRET' ) );
		try {
// 			Get the \Facebook\GraphNodes\GraphUser object for the current user.
// 			If you provided a 'default_access_token', the '{access-token}' is optional.
			$response = $fb->get ( '/358496450338/posts' , env ( 'FACEBOOK_APP_TOKEN' ) );
		} catch ( \Facebook\Exceptions\FacebookResponseException $e ) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage ();
			exit ();
		} catch ( \Facebook\Exceptions\FacebookSDKException $e ) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage ();
			exit ();
		}
		
		$me = $response->getGraphEdge();
// 		$me = json_decode($me);
// 		$me = $me[0];
		return response($me);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
