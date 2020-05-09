from aiohttp import web
import aiopg.sa
from typing import AsyncGenerator


async def setup(app: web.Application) -> AsyncGenerator[None, None]:
    """
    A function that, when the server is started, connects to postgresql,
    and after stopping it breaks the connection (after yield)
    """
    config = app["config"]["postgres"]

    engine = await aiopg.sa.create_engine(**config)
    app["db"] = engine

    yield

    app["db"].close()
    await app["db"].wait_closed()
