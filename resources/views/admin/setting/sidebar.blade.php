<div class="col-12 col-md-3 border-end">
    <div class="card-body">
        <h4 class="subheader">Business settings</h4>
        <div class="list-group list-group-transparent">
            <a href="{{ route('admin.settings.index') }}"
                class="list-group-item list-group-item-action d-flex align-items-center active">General Settings</a>

            <a href="{{ route('admin.logo-settings.index') }}"
                class="list-group-item list-group-item-action d-flex align-items-center">Logo & Favicon Settings</a>

            <a href="{{ route('admin.commission-settings.index') }}"
                class="list-group-item list-group-item-action d-flex align-items-center">Commission Settings</a>

            <a href="{{ route('admin.smtp-settings.index') }}"
                class="list-group-item list-group-item-action d-flex align-items-center">SMTP Settings</a>
        </div>
        
    </div>
</div>
