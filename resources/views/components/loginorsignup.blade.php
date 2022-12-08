<div class="container border border-1 rounded-4 border-info w-50" style="background-color: #2148C0;">
    <div class="row">
        <div class="col-12 text-center ">
            <h5 class="display-6 text-info pb-2 fw-bold">{{ ucfirst($type) }}</h5>
            <div class="w-50 justify-content-center">
                <form action="{{ $type }}" method="POST" class="form-signup">
                    @csrf
                    <input type="name" class="form-control" id="name" placeholder="Username">
                    <br>
                    <input type="password" class="form-control" id="password" placeholder="Username">
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