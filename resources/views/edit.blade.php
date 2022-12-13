<x-header title="Home"/>
<x-nav-bar name="{{ session('name') }}"/>
<style>
body {
    background-color: #264ECA;
}
</style>

<h5 class="display-6 text-center text-info fw-bold pt-4">Edit Secret</h5>

<x-secret-form
type='edit'
secretID="{{ $secretData['id'] }}"
title="{{ $secretData['title'] }}"
content="{{ $secretData['content'] }}"
/>

<x-footer/>