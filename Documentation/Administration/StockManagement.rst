
.. _administration-simple-stock-management:

Simple Stock Management
-----------------------

The field :sql:`inStock` can be used for stock management. If `in stock` is set to `0`,
the article will not longer be visible for users. After each order the number of ordered
articles will be reduced from `in stock`. When a new article is created, it value is
by default set to `1`.
If you have set :typoscript:`alwaysInStock=1` the articles will always be available and
visible. Otherwise the number of articles is reduced with each order, even down to
negative values. A negative value means that a product needs to be ordered immediately
at the provider.
You can use the corresponding checkbox to have single articles always on stock.
That applies however only for the particular articles.
You can set the units of the goods on stock by  :typoscript:`inStockPieces`,
e.g. `Pieces`  or `bundles`. This unit can however be set only once and is valid
for all products.
