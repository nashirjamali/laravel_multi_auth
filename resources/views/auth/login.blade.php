<h1>Login</h1>

<form action="{{route('login.authenticate')}}" method="post">
    @csrf

    <!-- Email -->
    <label for="email">Email</label>
    <input id="email" type="email" name="email">

    <!-- Password -->
    <label for="password">Password</label>
    <input id="password" type="password" name="password">

    <!-- Submit login -->
    <button type="submit">Masuk</button>

</form>