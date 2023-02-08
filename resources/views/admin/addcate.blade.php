@extends("layouts.master")
@section("mainview")

<div>
    
    <p>
    them loai san pham
    </p>
    <form action="add-cate-post" method="post">
    {{ csrf_field() }}
        <div class="mb-3">
            Ten loai:
            <input type="text" name="ten" class="form-control"/>
        </div>
        <div class="mb-3">
            mo ta:
            <textarea name="mota" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Them loai san pham</button>
        </div>

    </form>
</div>
@endsection