Hello World !

<form action="{{ url('/Logout') }}" method="post">
    @csrf
    <button type="submit"> Logout </button>
</form>
