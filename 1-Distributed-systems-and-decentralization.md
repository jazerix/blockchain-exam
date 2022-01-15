# Distributed systems and decentralization

Covers the subject of how the blockchain scales, how data is replicated and how consensus allows for decentralization. 

No central authority can become a bottleneck, as consensus needs to be achieved. The database is replicated across all full nodes. Since this data is immutable, the “database” will keep growing. The current structure allows for an uptime of 100%, at the cost of performance. Additionally a blockchain is a single threaded entity, where processing is done multiple times on the same logic, until consensus is reached and the blockchain moves on to finding a new block.

The same security that binds the users of the blockchain together, is also a hindering factor when trying to increase throughput, as the technology will increase the difficulty of the challenge should it be solved too fast, which in turn limits the amount of blocks that can be processed each minute.

Decentralization occurs through consensus, in a trusted network this can be some simple rules, that maintains an order of things, through the use of an ordering service, like with hyperledger fabric. Within public blockchains, nodes are currently (mostly) bound by their processing power. It is essential that the voting power within such a system is bound to a finite resource, as sybil attacks may otherwise arise.

## Questions