# Asset Names


### Decoding Asset Names

An asset ID is a 64 bit number.  

There are 2 special asset IDs.  Asset id `0` is BTC and asset id `1` is XCP.

Asset IDs greater than 1 and less than 17576 (0x44A8) are invalid.

To convert an asset ID into a name, repeatedly divide the asset ID by 26, round down and convert each remainder into a character until the result of the division is 0.  The name is built from the last letter to the first letter.

```
Example of converting 000000000004fadf (326367) into a name

ABCDEFGHIJKLMNOPQRSTUVWXYZ
||||                    |└── 25
|||└───── 3             └─ 24
||└──── 2
|└─── 1
└── 0

326367 / 26 = 12552 remainder 15. 15 translates to P. The Asset is P.
12552 / 26  = 482   remainder 20. 20 translates to U. The Asset is UP.
482 / 26    = 18    remainder 14. 14 translates to O. The Asset is OUP.
18 / 26     = 0     remainder 18. 18 translates to S. The Asset is SOUP.
```
See [Javascript Example](https://gist.github.com/loon3/a714c7a85abe48d587bd)
