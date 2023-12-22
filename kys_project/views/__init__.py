from pyramid.view import view_config

def includeme(config):
    config.add_route('register', '/register')
    config.add_route('login', '/login')
    config.add_route('admin','/admin')
    config.scan()


@view_config(route_name='register', renderer='../templates/register.pt')
def register_view(request):
    # Add any logic needed for your register view here
    return {}

@view_config(route_name='login', renderer='../templates/log.pt')
def log_view(request):
    # Add any logic needed for your register view here
    return {}

@view_config(route_name='admin', renderer='../templates/admin.pt')
def admin_view(request):
    return {}
