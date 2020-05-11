import graphene as G
from counter.models.pages.tables import pages as page_table


__all__ = ['PageRoot', 'Page', ]


class Pages(G.ObjectType):
    """
    A user is an individual's account on current clinic that can have
    conversations.
    """
    id = G.Int(
        required=True,
        description='Id',
    )
    title = G.String(
        required=True,
        description='Title of page',
    )
    description = G.String(
        required=True,
        description='Description of page',
    )


class Page(Pages):
    pass


class PageRoot(G.ObjectType):
    pages = G.NonNull(G.List(Pages))
    page = G.Field(Page, id=G.Int(),)

    async def resolve_pages(self, info):
        app = info.context['request'].app
        async with app['db'].acquire() as conn:
            cursor = await conn.execute(page_table.select())
            pages = await cursor.fetchall()
        return [
            Page(id=page.id, title=page.title, description=page.description)
            for page in pages
        ]

    async def resolve_page(self, info, id):
        app = info.context['request'].app
        async with app['db'].acquire() as conn:
            cursor = await conn.execute(
                page_table.select().where(page_table.c.id == id)
            )
            page = await cursor.fetchone()
        if page:
            return Page(id=page.id, title=page.title, description=page.description)
