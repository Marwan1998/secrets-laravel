<x-header title="Home"/>
<x-nav-bar name="{{ $name }}"/>
<style>
body {
    background-color: #264ECA;
}
</style>
<h5 class="display-5 text-center text-info fw-bold pt-4">Secrets</h5>

@if (session('status'))
<div class="container my-4 ps-5 pe-5">
    <div class="justify-content-center alert alert-primary d-flex align-items-center alert-dismissible fade show"
    role="alert" data-bs-dismiss="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg " viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
        </svg>
        <div class="ps-2 text-center">
            {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

<div class="container my-4">
    <div class="row justify-content-center align-items-center">

        @if ($erorrs)
            <h4 class="text-center text-warning fw-bold pt-4">Error: No User ID Found</h4>
        @endif
    
        @foreach ($secrets as $secret)
        <div class="col-sm-6 col-md-4 col-lg-3 pb-4" id="{{ $secret['id'] }}">
            <div class="card bg-info text-center shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">{{ ucfirst($secret['title']) }}</h5>
                    <p class="card-text">{{ $secret['content'] }}</p>
                    <a href="/secret/delete/{{$secret['id']}}" class="card-link m-0 pe-1 text-decoration-none"
                    style="font-weight: 600;">Delete</a>
                    <a href="/secret/edit/{{$secret['id']}}" class="card-link m-0 ps-1 text-decoration-none"
                    style="font-weight: 600;">Edit</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<x-footer/>