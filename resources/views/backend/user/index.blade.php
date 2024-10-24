<!-- Breadcrumb -->
<div class="row wrapper border-bottom page-heading white-bg">
    <div class="col-lg-12">
        <h2 class="">{{ config('apps.user.title') }}</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ config('apps.user.title') }}</li>
            </ol>
        </nav>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="ibox-content">
        @include('backend.user.component.filter')
        @include('backend.user.component.table')
    </div>
</div>