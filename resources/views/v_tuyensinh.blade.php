<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tuyen-sinh-post" method="post">
    {{ csrf_field() }}
        <div>diem toan
            <input type="text" name="toan"/>
        </div>
        <div>diem ly
            <input type="text" name="ly"/>
        </div>
        <div>diem hoa
            <input type="text" name="hoa"/>
        </div>
        <div>
            khu vuc
            <select name="kv" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Tinh diem">
        </div>

        @if(isset($toan) && isset($ly) && isset($hoa))
            <div><h1>
                Ket qua xep loai
            </h1></div>
            <div>Tong diem: {{ $tong }}</div>
            <div>Xep loai: </div>
            <div>Diem uu tien: 
                
                @if($kv == 1)
                    5
                    $pri=5;
                @elseif($kv == 2)
                    4
                    $pri=4;
                @else
                    2
                    $pri=2;
                @endif
            </div>
        @endif

    </form>
</body>
</html>