import graphene
from counter.graphql.mutations.counters import Mutations as CounterMutations

__all__ = ['Mutation']


class Mutation(CounterMutations, graphene.ObjectType):
    pass

