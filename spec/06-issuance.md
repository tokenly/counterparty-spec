# Issuance

This describes the operation data for an issuance transaction.  Please see [encoding](03-encoding.md) and [decoding](02-decoding.md) for an explanation of where the operation data fits into the full transaction data.

                 
00000000d806c1d5|000080321c637440|01|00|00000000|00000000|29|43727970746f2d526577617264732050726f6772616d20687474703a2f2f6c7462636f696e2e636f6d
       |               |           |  |     |        |     |   |
       |               |           |  |     |        |     |   |
       |               |           |  |     |        |     |   └─── Description.
       |               |           |  |     |        |     └─── Length of the description (up to 255 characters)
       |               |           |  |     |        └─── call price (4 bytes)
       |               |           |  |     └─── call date (4 bytes)
       |               |           |  └─── callable (1 byte)
       |               |           └─── divisible (1 byte)
       |               └───── quantity (8 bytes)
       └────────────────── asset name (8 bytes)


The example above decodes to:

asset name 00000000d806c1d5 = LTBCOIN (see [asset names](asset-names.md))
quantity 00000000d806c1d5 = 1,409,527.13000000
divisible 01 = true 
callable 00 = false
call date 00000000 = none
call price 00000000 = none
Length of the description 29 = 41 
Description 2943727970746f2d526577617264732050726f6772616d20687474703a2f2f6c7462636f696e2e636f6d = Crypto-Rewards Program http://ltbcoin.com


