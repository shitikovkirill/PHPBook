from typing import (
    Optional,
    List,
)

from aiohttp import web

from counter.routes import init_routes
from counter.utils.common import init_config
from counter import dependencies as inj


def init_app(config: Optional[List[str]] = None) -> web.Application:
    app = web.Application()

    init_config(app, config=config)
    init_routes(app)

    app.on_startup.extend([
        inj.graphql.setup,
        inj.jinja2.setup,
    ])
    app.cleanup_ctx.extend(
        [inj.database.setup]
    )

    return app
