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

view_counters = sa.Table(
    "view_counters",
    metadata,
    sa.Column('page_id', sa.Integer, sa.ForeignKey('pages.id'), primary_key=True),
    sa.Column("unique_views", sa.String(200), unique=True, nullable=False),
    sa.Column("all_views", sa.Text),
)