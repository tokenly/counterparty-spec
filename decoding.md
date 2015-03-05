# Decoding a transaction

## Preface

These instructions assume transaction data returned from the bitcoin core reference client as of version 0.9


## Process vouts

Begin by iterating over each output (vout).  When finished iterating over all the vouts, we will have 2 pieces of data:

1. An array of destination addresses called `destinations`
2. Some binary data called `counterpartydata`

For each vout, do the following:

### Step 1: Determine the type of output.

Look at the last operator in the script stack of the output.  This is found in `scriptPubKey.asm`.  This must be one of:

1. OP_RETURN
2. OP_CHECKSIG
3. OP_CHECKMULTISIG

### Step 2: Interpret the data for this output

Decode the data for this output.  See the [decoding data document](decoding-vout.md).

The decoded data will either be a destination address or a `datachunk`.

If the decoded data is a destination address, then add this destination address to `destinations`.

If the decoded data is a `datachunk`, then append the `datachunk` to the `counterpartydata`.


### Step 3: Decode the `counterpartydata`


The first 8 bytes of the `counterpartydata` must be the string CNTRPRTY.

The next 4 bytes of the contain a 4 byte integer representing the type of the transaction.  The types of transactions and ID numbers are

ID | Transaction type
---|-----------------
1  | Send
20 | Issuance
.. | (this list is incomplete)


#### Parsing a Send Transaction

A send transaction contains 2 pieces of data.  An asset name and a quantity.

The next 8 bytes contain an unsigned integer with the asset id.  The asset id is converted to an asset name.  See [converting asset names].

And the next 8 bytes contain an unsigned integer with the quantity of the send.



