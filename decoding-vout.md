# Decoding a vout

## Preface

This describes how to decode a vout.

The decoded data will either be a destination address or a `datachunk`.

Look at the last operator in the script stack of the output.  This is found in `scriptPubKey.asm`.

### Decoding OP_RETURN


### Decoding OP_CHECKSIG


### Decoding OP_CHECKMULTISIG

An OP_CHECKMULTISIG transaction contains either 2 or 3 pubkeys in its script.  The first 1 or 2 pubkeys hold the encoded transaction data.  The last pubkey is a destination pubkey and does not contain counterparty data.

To decode the data, do the following

1. Make a combined data chunk.  Combine the 1 or 2 data pubkeys by strippping the first and last bytes of each and appending them together as binary data.
2. Deobfuscate this combined data chunk using the ARC4 cipher.
3. Strip the first byte from the combined data chunk
4. Verify that combined data chunk, begins with CNTRPRTY

The combined data chunk beginning with the 9th byte (after CNTRPRTY) is the decoded data.


