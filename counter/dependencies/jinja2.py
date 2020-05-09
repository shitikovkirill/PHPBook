from aiohttp import web
import aiohttp_jinja2
import jinja2
from counter.constants import BASE_DIR


def setup(app: web.Application) -> None:
    """
    Initialize jinja2 template for application.
    """
    aiohttp_jinja2.setup(
        app, loader=jinja2.FileSystemLoader(str(BASE_DIR / "templates"))
    )
