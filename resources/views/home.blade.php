<x-header title="Home"/>
<style>
body {
    background-color: #264ECA;
}
</style>
<a href="logout">Logout</a>
<p class="text-secondary d-inline">{{ ucfirst(session('name')) }}</p>

<h5 class="display-5 text-center text-info fw-bold pt-4">Secrets</h5>


<div class="container my-4">
    <div class="row justify-content-center align-items-center">
    
        {{-- Here render the follwing cards --}}
        <div class="col-sm-6 col-md-4 col-lg-3" id="id-1">
            <div class="card bg-info text-center shadow-lg">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
                  <a href="#" class="card-link">Delete</a>
                  <a href="#" class="card-link">Edit</a>
                </div>
            </div>
        </div>


        

    </div>
</div>

<x-footer/>