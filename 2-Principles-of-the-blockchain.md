# Principles of the Blockchain

## What is a blockchain?

- A distributed ledger is an append-only store of transactions distributed across many machines.
- A blockchain is a distributed ledger that is structured into a linked list of blocks.
- A blockchain system contains 
  - A blockchain network of machines called nodes
  - A blockchain data structure replicated across the network
  - A network protocol
- A public blockchain is a blockchain system that consists of
  - An open network
  - All full nodes can verify data and transactions
  - A protocol with an incentive mechanism
- A blockchain platform is a technology that is needed to operate a blockchain.
Smart contracts are programs deployed as data in the blockchain ledger and executed in transactions on the blockchain.
- A blockchain should not be used if
  - High data throughput is required
  - Updates are centrally controlled
  - Users trust each other
- If users are anonymous a public blockchain should be used, else a private blockchain.
- If consensus is maintained by consortium a private blockchain should be used, else a public blockchain.

A Merkle tree is a data structure used to handle the ledger. The ledger contains a linked list of Merkle trees. In a Merkle tree, every leaf node is labelled with the hash of the data. Every non-leaf node is labelled with the hash of the labels of its child nodes. Each node in the linked list is connected to the previous node through the hash of the Merkle roots.

## Questions

- What is a genesis block?
  - The first block mined / commited to the blockchain
- How are blocks connected?
  - Their hash value of the entire block (header + merkletree root) is referenced in the header of the next block (prevHash / parentHash).
- What does a header consist of?
  - prevHash, time, difficulty, nonce, merkletree root hash, block version.
- What does the body of a block consist of?
  - The merkletree containing
- What is the significance of merkletrees?
  - Allows us to validate individual transactions within the block, instead of all of them combined.
- What is a public blockchain?
  - A blockchain that is open and permissionless to anyone
- What is a private blockchain?
  - A blockchain that is closed off, requiring authentication to access (permissioned).
- How are transactions validated in Proof of Work?
  - Once the correct nonce has been found, the blockchain will be validated by other nodes in the network by attempting to get the same hash.
- What is proof of work?
  - Miners attempt to solve a cryptographic puzzle, using intensive hardware resources (bruteforcing).
- What is a ledger?
  - A ledger is an append-only store of transactions distributed across many nodes.
- What nodes do the network consist of?
  - Full nodes (nodes containing a full copy of the ledger), partial (simple payment verfication) nodes, which only contains a partition of the ledger and utilises block headers to verify transactions.
- How do the nodes come to an agreement?
  - Nodes use a consensus algorithm to determine the single source of truth in the network.
- What is an incentive mechanism?
  - A mechanism used to reward miners for their participation in the network.
- How do we limit entities power when participating in the network?
  - In proof of work an identity means nothing without the processing behind it.
- What is an oracle?
  - A service that is able to leverage information from outside of the blockchain ecosystem (such as the current weather in Helsinki).