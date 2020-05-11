from graphene import Schema

from counter.graphql.mutations import Mutation
from counter.graphql.queries import Query


schema = Schema(
    query=Query,
    mutation=Mutation,
)
