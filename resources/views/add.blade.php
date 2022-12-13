<x-header title="Home"/>
<x-nav-bar name="{{ session('name') }}"/>
<style>
body {
    background-color: #264ECA;
}
</style>

<h5 class="display-6 text-center text-info fw-bold pt-4">Add a secret</h5>

<x-secret-form type='add'/>

<x-footer/>