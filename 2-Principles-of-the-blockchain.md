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
- A blockchain platform is a technology that is needed to operate a blockchain
Smart contracts are programs deployed as data in the blockchain ledger and executed in transactions on the blockchain.
- A blockchain should not be used if
  - High data throughput is required
  - Updates are centrally controlled
  - Users trust each other
- If users are anonymous a public blockchain should be used, else a private blockchain.
- If consensus is maintained by consortium a private blockchain should be used, else a public blockchain.

A Merkle tree is a data structure used to handle the ledger. The ledger contains a linked list of Merkle trees. In a Merkle tree, every leaf node is labelled with the hash of the data. Every non-leaf node is labelled with the hash of the labels of its child nodes. Each node in the linked list is connected to the previous node through the hash of the Merkle roots.

## Questions