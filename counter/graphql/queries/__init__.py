import graphene as G
from counter.graphql.queries.pages import PageRoot

__all__ = ['Query']


class Query(PageRoot, G.ObjectType):
    """
    The main GraphQL query point.
    """
    check = G.Field(G.String)

    async def resolve_check(self, info):
        return 'ok'
