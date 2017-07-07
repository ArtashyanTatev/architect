<center>
    <h1>
        Hi, Admin
    </h1>
</center>

<div style="font-size: 14px;">
    @if($name)
        <b>{{$name}} </b>
        want to ask some questions.
    @endif


    <br>
        <b>Text:</b>
        {{$text}}

    <hr>

    <br>
    <b>User Email:</b>
    {{$email}}

    <br>
    <b>User Phone:</b>
    {{$number}}

</div>

