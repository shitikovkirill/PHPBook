import graphene as G
from counter.models.counters.tables import view_counters


class Visited(G.Mutation):
    class Arguments:
        is_visited = G.Boolean(required=True)
        url = G.String(required=True)

    ok = G.Boolean()
    views = G.Int()
    visitors = G.Int()

    async def mutate(parent, info, url, is_visited):
        app = info.context['request'].app
        async with app['db'].acquire() as conn:
            cursor = await conn.execute(
                view_counters.select().where(view_counters.c.url == url)
            )
            counter = await cursor.fetchone()
            if counter is None:
                views = 1
                visitors = 1
                stmt = view_counters\
                    .insert()\
                    .values(url=url)
                await conn.execute(stmt)
            else:
                views = counter.views + 1
                visitors = counter.visitors
                if not is_visited:
                    visitors = counter.visitors + 1
                stmt = view_counters.update() \
                    .where(view_counters.c.url == url)\
                    .values(views=views, visitors=visitors)
                await conn.execute(stmt)
        return Visited(
            ok=True,
            views=views,
            visitors=visitors
        )


class Mutations(G.ObjectType):
    visited = Visited.Field()
