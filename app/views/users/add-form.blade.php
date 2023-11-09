<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Gender</label>
        <select name="gender" class="form-control">
            @foreach (GENDER_LIST as $key => $val)
                <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Avatar</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div>
        <button type="submit">Tạo user</button>
    </div>
</form>