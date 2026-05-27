<x-header></x-header>

<h1>Dashboard Admin</h1>
<br>

<h1>Selamat Datang, {{ Auth::user()->name }}</h1>
<br>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

<x-footer></x-footer>
