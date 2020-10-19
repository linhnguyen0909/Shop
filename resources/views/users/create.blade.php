<form method="post" action="{{route('users.store')}}">
    <!-- @method('PATCH') -->
    @csrf
    <p>
        <label for="title">Name</label><br>
        <input type="text" name="name" value="">
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="email" name="email" value="">
    </p>
    <p>
        <label for="password">Password</label><br>
        <input type="password" name="password" value="">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>