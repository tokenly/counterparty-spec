# Broadcasts



```

Raw example of decoding transaction cb90b267711165167a9ac82fa4ca1e561ae7d740b244bee98589523b04112241




Decoded data from multisig output

2a|434e545250525459|0000001e|552161c8403e000000000000000000000d584350454c454354494f4e203100000000000000000000000000000000000000 
|         |             |       |
|         |             |       └───── All of this is the transaction data (49 bytes)
|         |             └─────────────── This is the transaction type identifier (4 bytes)
|         └───────────────────────────────── the string CNTRPRTY in hexadecimal (8 bytes)
└─────────────────────────────────────────────── The length of the message (42?) (1 bytes)



Transaction Data that makes up the broadcast

552161c8|403e000000000000|00000000|0d|584350454c454354494f4e203100000000000000000000000000000000000000 
   |            |           |      |       |
   |            |           |      |       |
   |            |           |      |       |
   |            |           |      |       |
   |            |           |      |       |
   |            |           |      |       └─── Message text "XCPELECTION 1" (32 bytes)
   |            |           |      └───────────── Length of the message.  This is 13. (1 byte)
   |            |           └───────────────────────  Fee fraction information (4 bytes)
   |            └────────────────────────────────────── Value Data as a floating point number.  This is 30.0 (8 bytes)
   └────────────────────────────────────────────────────── Timestamp of 2015-04-05 11:24:40. (4 bytes)

```

