# Cost, performance and security

A blockchain is inherently more:
- More costly
- Less performant

Decentralized blockchains are getting expensive, due to their low amount of throughput and a high demand for transaction; this creates a situation where there simply isn't enough time to process all transactions, and thus users have to increase the fee to ensure their transaction will be picked for mining/processing.

Decentralized blockchains are costly because:
  - High demand for transactions on them
  - The blockchain has a low throughput.

Additionally, functions submitted to the network need to executed multiple times along with a replication factor the size of the amount of full nodes in the network, makes blockchain both have a large volume that is ever increasing, and slow. 

## Maintainable

While the blockchain is "just" code that runs on a number of machines, updating it is an extremely tedious process, due to the nature of the system. Each node on the network need to agree to the latest version, if a disagreement happens, a blockchain can be split into two versions, as seen with bitcoin and bitcoin cash, and ethereum and ethereum classic. 

Transactions leveraged on the network can always be validated by other users, by checking the hash.

## Availability

As long as one node is theoretically available, the entirety of the system is available, thus decentralization has a high availability due to its redundant storage.

## Security

A permissionless blockchain uses it's consensus algorithm along with cryptography to ensure integrity when transacting. Due to the nature of decentralization, the system is inherently secure, as a hacker would need to have access to a majority of nodes to be able to alter the thruthiness of the blockchain. Additionally since the blockchain transactions are signed using a private key, a hacker would need it to impersonate someone.

## Questions

- What happens if your fee doesn't cover the computing resources required to finish (ethereum)?
  - The fee will be taken, the code that affected the state of the blockchain will be rolled back.
- Will basic performance requirements be met by the design of a blockchainbased system?
  - Not currently, as it's unable to keep up with demand
- What is a public key?
  - A public key is derived from your private key and can used to make sure that things you sign with your private key match the public one. In blockchain this is used to ensure that you are actually the sender of the transaction.
- How do blockchains address security?
  - The public key is basically the address (or a derivative thereof). When a user broadcasts a transaction they sign the transaction, this allows receiver to validate the signature against the address (public key). Should the address change, the signature will no longer match and the transaction is now invalid.
- What happens if you only have one node in the system?
  - It defeats the purpose :)
- Are permissioned (hyperledger) blockchains maintainable?
  - Yes, way easier than public ones. You only need to update the peers in the same channel.
- Are public blockchains maintainable?
  - Yes, but the majority needs to accept it and update. Additionally a blockchain can be split, if some participants don't want to update.