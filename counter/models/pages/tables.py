import sqlalchemy as sa
from sqlalchemy.dialects import postgresql

from counter.migrations import metadata


__all__ = [
    "pages",
]


pages = sa.Table(
    "pages",
    metadata,
    sa.Column("id", sa.Integer, primary_key=True, index=True),
    sa.Column("title", sa.String(200), unique=True, nullable=False),
    sa.Column("description", sa.Text),
)