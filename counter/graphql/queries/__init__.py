import graphene

__all__ = ['Query']


class Query(graphene.ObjectType):
    """
    The main GraphQL query point.
    """
    check = graphene.Field(graphene.String)

    async def resolve_check(self, info):
        return 'ok'
