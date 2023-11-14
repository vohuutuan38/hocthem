<?php
namespace App\Controllers;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Request;
use mysqli;

class HomeController extends BaseController{
    public function index(Request $request){

        // $name = $request->name; // $_GET['name'];
        // if ($name = "oi") {
        //     return ['name' => $name];
        // } else {
        //     return ['name' => "Ko bieets"];
        // }
         
        // // $users = User::all();
        // // return $this->render('home.index', compact('users')); // tra ve view

        // return [ // tre ve api
        //     'product' => [
        //         'name' => "ổi"
        //     ]
        //     ];

        // cach code thuan ------------------
        // $target_dir = "uploads/";
        // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        // $uploadOk = 1;
        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // // Check if image file is a actual image or fake image
        // if(isset($_POST["submit"])) {
        // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        // if($check !== false) {
        //     echo "File is an image - " . $check["mime"] . ".";
        //     $uploadOk = 1;
        // } else {
        //     echo "File is not an image.";
        //     $uploadOk = 0;
        // }
        // }

        // -- cach code dung thu vien
        // $pathFile = $request->file('image')->store('uploads');


        // validate data

        // // dạng validate code thuần
        // $params = ['name' => 'TUaans', 'age' => 20, 'gender' => 'male'] ;

        //     if (!isset($params['name'])) {
        //         echo "name không tồn tại";
        //     }

            
        //     if (!isset($params['age'])) {
        //         echo "name không tồn tại";
        //     }

            
        //     if ($params['age'] <= 0) {
        //         echo "age không phù hợp";
        //     }

            
        //     if (!isset($params['name'])) {
        //         echo "name không tồn tại";
        //     }

        // validate bằng laravel

        // $a = Validator::make($params, [
        //     'name' => 'required',
        //     'age' => 'required|min:0',
        //     'gender' => 'required|in("male","female")',
        //     'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
        // ], [
        //     'name.required' => 'name khoong dduoc de trong',
        //     'age.requỉed' => 'age khoong dduoc de trong',
        //     'age.min' => 'age phải lớn hơn 0',
        // ]);

        // if ($a->getMesage()) {
        //     return $a;
        //     // name khoong dduoc de trong
        //     // age is required
        //     // age not validated
        //     // gender is required

        // }

        // // to do

        // cách code thuần
        // $connection = new mysqli('localhost', 'name', ''.....);
        //*
        // *
        // $data = $connection->query('select * from users where id = 1 and status = 'one'');
            // mysql => tables 

            $data = User::where('id', 1)->where('status', 'on')->get();

            // $data = User::where('id', 1)->get();
            $data = User::where('id', 1)->get();

            // select * from user order by id desc; | select * from user order by id asc; User::orderByDesc()

            // controller | Model | ?View?
            // API
            // Vaidate
            // upload file
            // ---- 
            // buổi sau nói về View (Laravel Blade);
            // middleware laravel 
            // -- Về đoc thêm: resfulapi | API | Vaidate | Eloquent Laravel (tầng Model)
    }

    public function about(){
        $this->render('home.about');
    }

    public function addUserForm(){
        $this->render('users.add-form');
    }

    public function editUserForm($id){
        $model = User::find($id);
        $this->render('users.edit-form', compact('model'));
    }

    public function saveEditUser($id){
        $model = User::find($id);
        $model->fill($_POST);
        $uploadFile = $_FILES['image'];
        if($uploadFile['size'] > 0){
            $filename = uniqid() . '-' .$uploadFile['name'];
            move_uploaded_file($uploadFile['tmp_name'], './public/uploads/' . $filename);
            $model->avatar = 'uploads/' . $filename;
        }
        $model->save();
        header('location: ' . BASE_URL);
        die;
    }

    public function saveAddUser(){
        $model = new User();
        $model->fill($_POST); // check $fillable trong model
        $model->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // lưu ảnh
        $uploadFile = $_FILES['image'];
        if($uploadFile['size'] > 0){
            $filename = uniqid() . '-' .$uploadFile['name'];
            move_uploaded_file($uploadFile['tmp_name'], './public/uploads/' . $filename);
            $model->avatar = 'uploads/' . $filename;
        }
        $model->save();
        header('location: ' . BASE_URL);
        die;
    }

    public function removeUser($id){
        User::destroy($id);
        // $user = User::find($id);
        // if($user){
        //     $user->delete();
        // }
        header('location: ' . BASE_URL);
        die;
    }
}


?>