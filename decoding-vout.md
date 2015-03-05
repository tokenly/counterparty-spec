# Decoding a vout

## Preface

This describes how to decode a vout.

The decoded data will either be a destination address or a `datachunk`.

Look at the last operator in the script stack of the output.  This is found in `scriptPubKey.asm`.  This must be one of:

### Decoding OP_RETURN


### Decoding OP_CHECKSIG


### Decoding OP_CHECKMULTISIG


