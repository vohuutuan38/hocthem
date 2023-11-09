<?php
namespace App\Controllers;
use App\Models\User;

class HomeController extends BaseController{
    public function index(){
        $users = User::all();
        $this->render('home.index', compact('users'));
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