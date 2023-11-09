<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" value="{{$model->name}}" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" value="{{$model->email}}" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <div class="form-group">
        <label for="">Gender</label>
        <select name="gender" class="form-control">
            @foreach (GENDER_LIST as $key => $val)
                <option 
                @if($model->gender == $val)
                selected
                @endif
                value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <img src="{{PUBLIC_PATH . $model->avatar}}" width="100">
        <br>
        <label for="">Avatar</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div>
        <button type="submit">Cập nhật user</button>
    </div>
</form>