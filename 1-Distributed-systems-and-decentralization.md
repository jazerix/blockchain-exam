# Distributed systems and decentralization

Covers the subject of how the blockchain scales, how data is replicated and how consensus allows for decentralization. 

No central authority can become a bottleneck, as consensus needs to be achieved. The database is replicated across all full nodes. Since this data is immutable, the “database” will keep growing. The current structure allows for an uptime of 100%, at the cost of performance. Additionally a blockchain is a single threaded entity, where processing is done multiple times on the same logic, until consensus is reached and the blockchain moves on to finding a new block.

The same security that binds the users of the blockchain together, is also a hindering factor when trying to increase throughput, as the technology will increase the difficulty of the challenge should it be solved too fast, which in turn limits the amount of blocks that can be processed each minute.

Decentralization occurs through consensus, in a trusted network this can be some simple rules, that maintains an order of things, through the use of an ordering service, like with hyperledger fabric. Within public blockchains, nodes are currently (mostly) bound by their processing power. It is essential that the voting power within such a system is bound to a finite resource, as sybil attacks may otherwise arise.

Decentralization also makes the entire network resilient, if one node goes down, the network is largely unaffacted, whereas a central authority would cause the entire network to fault and become a single point of failure.

## Comparison overview

| Design Decision          | Option                                                                                                                         | Fundamental Properties | Cost efficiency | Performance    | Failure points                 |
|--------------------------|--------------------------------------------------------------------------------------------------------------------------------|------------------------|-----------------|----------------|--------------------------------|
| Fully centralized        | Services with a single provider (governments, courts...)                                                                       | Less favorable         | More favorable  | More favorable | 1                              |
| Fully centralized        | Services with alternate providers (banking, online payments...)                                                                | Less favorable         | More favorable  | More favorable | 1                              |
| Partially de/centralized | Permissioned blockchain with permissions for fine-grained operations on the transaction level (permission to create assets fx) | Neutral                | Neutral         | Neutral        | *                              |
| Partially de/centralized | Permissioned blockchain with permissioned miners (write), but permission-less normal nodes (read)                              | Neutral                | Neutral         | Neutral        | *                              |
| Partially de/centralized | Off-chain transaction protocols                                                                                                | Neutral                | Neutral         | Neutral        | *                              |
| Fully decentralized      | Permission-less blockchain                                                                                                     | More favorable         | Less favorable  | Less favorable | Majority (nodes, power, stake) |

## Questions

- What characterizes a centralized system?
  - It has a central authority that mediates transactions
- What is the problem with a central authority (apart from single point of failure)?
  - They can manipulate the contents of the database
- How many nodes participate in the bitcoin blockchain?
  - Roughly 15k
- What does permission-less mean?
  - No one has more power than anyone else, the only thing that separates them are the processing power they deliver (PoW)
- What is a sybil attack?
  - Being able to create identities "cheaply" and thus can flood a system to get majority say
- What is a 51% attack?
  - The fact that if one user holds 51% of the processing power, they essentially control consensus. In reality an attacker would need much less than 51% to get majority, as not all nodes would be able to band together.
- Why do we want our system to be decentralized?
  - Redudancy, concurrency, decreased latency and versatility (No single point of failure).
- What is the downsides of decentralization?
  - Data needs to be synchronized across nodes. It's more costly.
- How is the blockchain concurrent?
  - Transactions are executed multiple times by nodes participating in network, however they are ordered, thus actual concurrency is debatable.
- Are centralized systems faster than decentralized?
  - Almost always - centralized systems can concurrently split tasks. There isn't any inherent need for synchronization.
- Do all transactions need to be executed in a permissioned blockchain (Hyperledger)?
  - No, you can specify an endorsement policy (the lower the higher the throughput)