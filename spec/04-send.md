# Send Transactions

This describes the operation data for a send transaction.  Please see [encoding](03-encoding.md) and [decoding](02-decoding.md) for an explanation of where the operation data fits into the full transaction data.

### The send transaction

A send transaction contains 2 pieces of data.  An asset name and a quantity.

```
000000000004fadf|000000174876e800
       |               |
       |               └───── quantity (8 bytes)
       └────────────────── asset name (8 bytes)
```


The first 8 bytes contain an the asset id.  This asset id is a 64 bit representation of the asset name.  See [asset names](asset-names.md).

And the next 8 bytes contain an unsigned integer with the quantity of the send.

The total send transaction data length is 16 bytes.



