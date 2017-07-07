<form type="post" action="{{route('delete')}}">
    <input type="password" name="pass">
    {{csrf_field()}}
</form>
