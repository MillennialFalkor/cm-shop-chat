<?php

namespace App\Http\Controllers;

// Laravel
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use Log;
use Input;
use Validator;
use Session;
use View;

// Models
use App\Message;
use App\User;
use App\Product;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created message in storage.
     * Associate the message with the user that posted the message 
     * and with the appropriate product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return json 
     */
    public function postMessageToList(Request $request)
    {
        $input = Input::all();

        // Get product from product id passed in via form - a hidden input so it should be there
        $product_id = isset($input['product_id']) ? $input['product_id'] : null;
        $product = isset($product_id) ? Product::find($product_id)->first() : null;
        $messages = isset($product_id) ? Message::where('product_id', $product_id)->get() : null;
        $content = isset($input['content']) ? $input['content'] : null;

        // Define requirements for data passed via form
        $post_data_rules = [
            'username' => 'required',
            'product_id' => 'required',
            'content' => 'required'
        ];

        // Make sure all required data was entered
        $post_data_validator = Validator::make($input, $post_data_rules);
        if ($post_data_validator->fails()) {
           
            // Compile the errors from the validator
            $failed = $post_data_validator->failed();
            $failed_inputs = array_keys($failed);
            $errors = $post_data_validator->messages();

            // Store our input values that passed to the session
            Session::flashInput( Input::except( $failed_inputs ) );

            // Return the view with the errors var
            $view = View::make('entities.message.list.panel', compact('product','messages','errors'));
            return json_encode( ['view'=>$view->render()] );
        }
        
        // Get user from username passed in via form
        $user = User::where('username',$input['username'])->first();

        // If it's not an existing user, create a new one for this username
        if(!$user){
            $user = new User();
            $user->username = $input['username'];
            $user->save();
            $user_id = $user->id;
        }

        $user_id = $user->id;

        // Set up new validation rules for saving the model
        $model_save_rules = [
            'user_id' => 'required',
            'product_id' => 'required',
            'content' => 'required'
        ];

        // Prep vars for validation
        $model_save_data = compact('user_id','product_id','content');
        $model_save_validator = Validator::make($model_save_data, $model_save_rules);

        // Make sure we have all data necessary to create the message
        if ($model_save_validator->fails()) {

            // Compile the errors from the validator
            $failed = $model_save_validator->failed();
            $failed_inputs = array_keys($failed);
            $errors = $model_save_validator->messages();

            // Store our input values that passed to the session
            Session::flashInput( Input::except( $failed_inputs ) );

            // Return the view with the errors var
            $view = View::make('entities.message.list.panel', compact('product','messages','errors'));
            return json_encode( ['view'=>$view->render()] );
        }

        // Store our input values that passed to the session
        Session::flashInput( Input::all() );

        // Store the message in the DB
        $message = new Message();
        $message->user_id = $user_id;
        $message->product_id = $product_id;
        $message->content = $request->content;
        $message->save();
        
        // Re-evaluate messages now that we've added one
        $messages = isset($product_id) ? Message::where('product_id', $product_id)->get() : null;

        // Create a success message
        $success = 'Thanks, your comment has been posted!';

        // Done saving, return the updated markup
        $view = View::make('entities.message.list.panel', compact('product','messages','success'));
        return json_encode( ['view'=>$view->render()] );
    }
}
