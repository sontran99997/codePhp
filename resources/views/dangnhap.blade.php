<form action="/test3" method="post">
    {{ csrf_field() }}
    <div>
        username:
        <input type="text" name="user" placeholder="nhap user"/>
        <input type="submit" value="dang nhap"/>
    </div>
</form>