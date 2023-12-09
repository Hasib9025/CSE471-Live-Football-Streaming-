<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Response;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class UserController extends Controller
{
    public function signup (Request $req){
        $pass = md5( $req->password );

        $data = array( 'name' => $req->name, 'email' => $req->email, 'password' => $pass, 'number' => $req->number,'image' => "" );
        DB::table( 'users' )->insert( $data );

        return redirect( 'loginSignup' );


    }
    public function login (Request $req){
        $pass = md5( $req->password );

        $users = DB::select( "SELECT * FROM `users` WHERE `email`='$req->email' AND `password`='$pass'" );
        foreach ( $users as $user ) {

            Session::put( '$uid', $user->id );
            Session::put( '$uname', $user->name );
            Session::put( '$uemail', $user->email );



            return redirect( 'home' );
        }
        if ( $users == false ) {


            return redirect( 'loginSignup' );
        }

    }

    public function profile(){
        $uid = Session::get( '$uid' );
        $data = DB::select( "SELECT * FROM `users` WHERE id='$uid'" );

        return view( 'profile', [ 'data' => $data ] );
    }

    public function livescore()
    {
        // Logic for matches page
        return view('livescore'); // Assuming your subscription view is named 'livescore.blade.php'
    }

    public function matches()
    {
        // Logic for matches page
        return view('matches'); // Assuming your subscription view is named 'subscription.blade.php'
    }
    public function subscription()
    {
        // Logic for subscription page
        return view('subscription'); // Assuming your subscription view is named 'subscription.blade.php'
    }
    public function editprofile(Request $req){
        $uid = Session::get( '$uid' );
        $img_name = $_FILES[ 'file' ][ 'name' ];
        $img_size = $_FILES[ 'file' ][ 'size' ];
        $tmp_name = $_FILES[ 'file' ][ 'tmp_name' ];
        $error = $_FILES[ 'file' ][ 'error' ];
        if ( $error === 0 ) {
            $img_ex = pathinfo( $img_name, PATHINFO_EXTENSION );
            $img_ex_lc = strtolower( $img_ex );

            $allowed_exs = array( 'jpg', 'jpeg', 'png', 'webp' );
            if ( in_array( $img_ex_lc, $allowed_exs ) ) {
                $new_img_name = uniqid( $req->name, true ) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file( $tmp_name, $img_upload_path );

                // Update into Database
                DB::UPDATE( "UPDATE `users` SET `image`='$new_img_name' WHERE id='$uid'" );

                return redirect( 'profile' );
            }
        }
    }
    public function editprofileinfo(){
        $uid = Session::get( '$uid' );
        $data = DB::select( "SELECT * FROM `users` WHERE id='$uid'" );

        return view( 'editprofileinfo', [ 'data' => $data ] );
    }
    public function editinfo(Request $req){
        $uid = Session::get('$uid');
        $name = $req->name;
        $number = $req->number;

        // Use parameter binding to prevent SQL injection
        DB::update("UPDATE `users` SET `name` = ?, `number` = ? WHERE id = ?", [$name, $number, $uid]);

        return redirect('profile');
    }


    public function logout (){
        Session::flush();
        return redirect( 'loginSignup' );


    }
    public function forgetpassword (Request $req){
        $email = $req->email;

        $users = DB::select( "SELECT * FROM `users` WHERE `email`='$email'" );
        foreach ( $users as $user ) {


            $name=$user->name;

            $code=rand(100000,999999);
            Session::put( '$fcode', $code);
            Session::put( '$femail', $email);


            try {
                $mail = new PHPMailer(true);
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'kactusjack399@gmail.com';                     //SMTP username
                $mail->Password   = 'lirdoroekyfutbnb';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('kactusjack399@gmail.com', 'Football');
                $mail->addAddress($email, $name);     //Add a recipient




                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Forget password';
                $mail->Body    = "Your forget password code is  ".$code;


                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            return redirect( 'fcode' );



        }




    }
    public function fcode (Request $req) {

        $code = $req->code;
        $vcode=Session::get( '$fcode');
        if ( $code==$vcode ){
            return redirect('newpassword');
        }
        else{
            return redirect('fcode');
        }


    }
    public function newpassword (Request $request){
        $password = md5($request->password);
        $email=Session::get( '$femail');
        DB::update("UPDATE `users` SET `password`='$password' WHERE email='$email'");
        return redirect("loginSignup");


    }
    public function subscribe(){

       $uid =Session::get( '$uid' );
       $uname=Session::get( '$uname' );
       $uemail =Session::get( '$uemail' );

        $data = array( 'uname' => $uname, 'uemail' => $uemail, 'uid' =>$uid );
        DB::table( 'subscribe' )->insert( $data );

        return redirect( 'live' );


    }
    public function live(){
        $uid =Session::get( '$uid' );
        $users = DB::select( "SELECT * FROM `subscribe` WHERE uid='$uid'" );

        if ( $users == false ) {


            return redirect( 'subscription' );
        }
        else{
            return view( 'live' );

        }
    }
    public function updateReaction(Request $request)
    {
        // Handle the logic to update reactions in the database
        // Validate the request data
        $request->validate([
            'emoji' => 'required',
        ]);

        // Check if the user has already reacted, update if yes, insert if no
        $reaction = Reaction::updateOrCreate(
            ['user_id' => auth()->id()],
            ['emoji' => $request->emoji]
        );

        // You can also increment a counter in the reactions table for each reaction type if needed
        Reaction::where('user_id', auth()->id())->where('emoji', $request->emoji)->increment('count');

        return response()->json(['message' => 'Reaction updated successfully']);

    }

    public function updateRating(Request $request)
    {
        // Handle the logic to update ratings in the database
                // Validate the request data
        $request->validate([
            'rating' => 'required|integer|between:1,5',
        ]);

        // Check if the user has already rated, update if yes, insert if no
        $rating = Rating::updateOrCreate(
            ['user_id' => auth()->id()],
            ['rating' => $request->rating]
        );

        return response()->json(['message' => 'Rating updated successfully']);

    }



}
