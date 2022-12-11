<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand border-bottom" href="#">MG45</a>
      @if ($type == 'login')
      <a class="btn btn-primary fw-bold border border-1" href="/signup">Signup</a>
      @else
      <a class="btn btn-primary fw-bold border border-1" href="/login">Login</a>
      @endif
    </div>
</nav>
<div class="container border border-1 rounded-4 border-info w-50" style="background-color: #2148C0;">
    <div class="row">
        <div class="col-12 text-center ">
            <h5 class="display-6 text-info pb-2 fw-bold">{{ ucfirst($type) }}</h5>
            <p class="text-light bg-success">{{ session('status') }}</p>
            <div class="w-50 justify-content-center">
                <form action="{{ $type }}" method="POST" class="form-signup">
                    @csrf
                    <input type="name" class="form-control" name="name" placeholder="Username" value="{{ old('name')}}">
                    <p class="text-danger d-inline">@error('name'){{ $message }}@enderror</p>
                    <br>
                    <input type="password" class="form-control" name="password" placeholder="Username">
                    <p class="text-danger d-inline">@error('password'){{ $message }}@enderror</p>
                    <p class="text-danger d-inline">@error('approve'){{ $message }}@enderror</p>
                    <br>
                    <button type="submit" class="btn btn-primary">{{ ucfirst($type) }}</button>
                </form>
            </div>
            <br>
                @if ($type == 'login')
                <p class="text-info">don't have account? <a href="/signup" class="text-info text-decoration-none fw-bold">signup</a></p>
                @else
                <p class="text-info">Already have an account? <a href="/login" class="text-info text-decoration-none fw-bold">login</a></p>
                @endif
        </div>
    </div>
</div>