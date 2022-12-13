<x-header title="Home"/>
<x-nav-bar name="{{ $name }}"/>
<style>
body {
    background-color: #264ECA;
}
</style>

<h5 class="display-5 text-center text-info fw-bold pt-4">Secrets</h5>

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