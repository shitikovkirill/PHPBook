import sqlalchemy as sa
from sqlalchemy.dialects import postgresql

from counter.migrations import metadata


__all__ = [
    "view_counters",
]

view_counters = sa.Table(
    "view_counters",
    metadata,
    sa.Column("id", sa.Integer, primary_key=True, index=True),
    sa.Column('url', sa.String, unique=True),
    sa.Column("views", sa.Integer, default=1),
    sa.Column("visitors", sa.Integer, default=1),
)
