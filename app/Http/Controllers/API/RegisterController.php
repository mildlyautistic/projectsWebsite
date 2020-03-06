<?php



namespace App\Http\Controllers\API;



use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;

use App\User;

use Illuminate\Support\Facades\Auth;

use Validator;



class RegisterController extends BaseController

{

    /**
 * Register api
 *

     * @return \Illuminate\Http\Response
 */

    public function register(Request $request)

    {

       $validator = Validator::make($request->all(), [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|min:6',

            'c_password' => 'required|same:password',

        ]);



        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());

        }



        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);
        //$user -> profile() -> save($profile);
        $success['token'] =  $user->createToken('MyApp')->accessToken;

        $success['name'] =  $user->name;



        return $this->sendResponse($success, 'User register successfully.');
       /* $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return response()->json(['user' => $user]);*/

    }



    /**

     * Login api

     *

     * @return \Illuminate\Http\Response

     */

    public function login(Request $request)

    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            $user = Auth::user();

            $success['token'] =  $user->createToken('MyApp')-> accessToken;

            $success['name'] =  $user->name;



            return $this->sendResponse($success, 'User login successfully.');

        }

        else{

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);

        }

    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

}
