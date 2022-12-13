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

<div class="container-lg">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 border border-1 rounded-4 border-info p-5">
            <div class="text-center justity-content-center">
                <h5 class="display-6 text-info pb-2 fw-bold">{{ ucfirst($type) }}</h5>
                <p class="text-light bg-success">{{ session('status') }}</p>
            </div>
            <form action="{{ $type }}" method="POST" class="form-signup">
                @csrf
                <p class="form-label text-danger fw-bold">@error('name'){{ '*'.$message }}@enderror</p>
                <div class="mb-4 input-group">
                    <input type="name" class="form-control" name="name" placeholder="Username" value="{{ old('name') }}">
                </div>
                <p class="form-label text-danger fw-bold">@error('password'){{ '*'.$message }}@enderror</p>
                <div class="mb-4 mt-2 input-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <p class="form-label text-danger fw-bold">@error('approve'){{ $message }}@enderror</p>
                <div class="mb-4 text-center">
                    <button type="submit" class="btn btn-primary">{{ ucfirst($type) }}</button>
                </div>
            </form>
            <div class="text-center justity-content-center">
                @if ($type == 'login')
                <p class="text-info">don't have account? <a href="/signup" class="text-info text-decoration-none fw-bold">signup</a></p>
                @else
                <p class="text-info">Already have an account? <a href="/login" class="text-info text-decoration-none fw-bold">login</a></p>
                @endif
            </div>
        </div>
    </div>
</div>