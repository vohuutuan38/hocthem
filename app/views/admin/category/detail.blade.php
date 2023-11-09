<p>Tên danh mục: {{$category->name}}</p>
<p>Số lượng sản phẩm: {{count($category->products)}}</p>
<h4>Danh sách sản phẩm</h4>
<ul>
    @foreach ($category->products as $item)
        <li>{{$item->id}} - {{$item->name}}</li>
    @endforeach
</ul>