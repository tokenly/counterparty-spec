# Parsing a Send Transaction

A send transaction contains 2 pieces of data.  An asset name and a quantity.

```
0xFFFFFFFF|0xFFFFFFFF
    |          |
    |          └───── this data is different for each transaction type
    └───────────── the transaction type identifier
```


The first 8 bytes contain an unsigned integer with the asset id.  This asset id is converted to an asset name.  See [decoding asset names](decoding-asset-names.md).

And the next 8 bytes contain an unsigned integer with the quantity of the send.



