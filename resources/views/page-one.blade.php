<x-app-layout>
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Page One</strong></h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item "><a href="{{ route('dashboard') }}">Admin Template</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Page One</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</x-app-layout>