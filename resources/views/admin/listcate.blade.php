@extends("layouts.master")
@section("mainview")

<table class="table table-bordered">
    <tr class="primary">
        <th>Ma loai</th>
        <th>Ten loai</th>
    </tr>
    @foreach($ds as $n)
    <tr>
        <td class="text-center">{{$n -> cateid}}</td>
        <td class="text-center">{{$n -> catename}}</td>
    </tr>
    @endforeach
</table>
@endsection