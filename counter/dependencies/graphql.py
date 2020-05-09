from aiohttp import web
from aiohttp_graphql import GraphQLView
from graphql.execution.executors.asyncio import AsyncioExecutor
from counter.graphql.schema import schema


async def setup(app: web.Application) -> None:
    GraphQLView.attach(
        app,
        schema=schema,
        graphiql=True,
        executor=AsyncioExecutor(),
        enable_async=True
    )
