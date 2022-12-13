<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand border-bottom" href="#">MG45</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active border border-1 rounded-3" aria-current="page" href="/home">Home</a>
          </li>
        </ul>
        <span class="btn btn-primary me-3 fw-bold border border-1" id="accountName" >{{ ucfirst($name) }}</span>
        <a class="btn btn-primary fw-bold me-3 border border-1" href="/secret/add">Add Secret</a>
        <a class="btn btn-primary fw-bold me-3 border border-1" href="/settings">Setting</a>
        <a class="btn btn-primary fw-bold border border-1" href="/logout">Logut</a>
      </div>
    </div>
  </nav>

  {{-- TODO: make Add buttom dynamic (add/edit)  --}}