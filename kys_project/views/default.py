from pyramid.view import view_config

from ..models import MyModel


@view_config(context=MyModel, renderer='kys_project:templates/log.pt')
def my_view(request):
    return {'project': 'kys project'}
