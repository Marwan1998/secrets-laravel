<div class="container-lg">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form action="/secret/{{$type}}" method="POST">
                @csrf
                <input type="hidden" name="secretID" value="{{ $secretID }}">
                <label for="name" class="form-label text-info fw-bold border-info border-bottom">Title</label>
                <div class="mb-4 input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                    </span>
                    <input type="text" id="title" name="title" class="form-control" placeholder="e.g. Secret-1" required value="{{ $title }}"/>
                </div>
                <label for="name" class="text-info fw-bold border-info border-bottom">Description</label>
                <div class="mb-4 mt-2 form-floating">
                    <textarea class="form-control" id="content" name="content" style="height: 110px"
                    placeholder="story" required>{{ $content }}</textarea>
                    <label for="story">secret story...</label>
                </div>
                <div class="mb-4 text-center">
                    <button type="submit" class="btn btn-outline-info me-4">{{ ucfirst($type) }}</button>
                    <a href="/home" class="btn btn-outline-info ms-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>