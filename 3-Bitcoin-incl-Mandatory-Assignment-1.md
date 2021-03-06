# Bitcoin incl. Mandatory Assignment 1

## Header

| Version        | Block version number                                    | Updated when                                            | Size (Bytes) |
|----------------|---------------------------------------------------------|---------------------------------------------------------|--------------|
| Version        | Block version number                                    | You upgrade the software and it specifies a new version | 4            |
| hashPrevBlock  | 256-bit hash of the previous block header               | A new block comes in                                    | 32           |
| hashMerkleRoot | 256-bit hash based on all the transactions in the block | A transaction is accepted                               | 32           |
| Time           | Current block timestamp as seconds since epoch          | Every few seconds                                       | 4            |
| Bits           | Current target in compact format                        | The difficulty is adjusted                              | 4            |
| Nonce          | 32-bit number (starts at 0)                             | A hash is tried (increments)                            | 4            |

## Daniel

The bitcoin network works as follows:
- New transactions are broadcast to all nodes
- Each node collects new transactions into a block
- Each node works on finding a difficult proof-of-work for its block
- When a node finds a proof-of-work, it broadcasts the block to all nodes
- Nodes accept the block only if all transactions in it are valid and not already spent
- Nodes express their acceptance of the block by working on creating the next block in the chain, using the hash of the accepted block as the previous hash (appending it to the ledger and working on the next block based on this)

The bitcoin network is a peer-to-peer network.
It consists of two types of nodes:
- Full nodes (wallet, miner, blockchain, networking nodes)
- Simple Payment Verification (SPV) nodes. This type of node does not contain the whole blockchain but verifies the block headers of the longest chain.

Bitcoin utilises a list of blocks as a data structure, where each block contains a hash pointer for the previous block in the list. The hash is calculated with a Merkle Tree. A Merkle Tree is a tree where the leaves contain data, which in this case is transactions. Each parent node contains the hash of its children???s values. The tree's root has a unique hash value based on its transactions. 

This Merkle root is used as a pointer to the next block in the list. Nodes mine each block by performing proof-of-work. For consensus is Nakamoto Consensus utilized. This consensus defines how nodes in the network choose the correct chain of blocks as the main chain. The longest chain of blocks defines the main chain. If two chains have equal length, it is unclear which one will be the main chain. The main chain is here decided by which of the chains mines the next block. Here will one of the chains overtakes the other in length, and the nodes will choose the longest of these chains as the main chain. 

This forking of chains can happen if two different nodes broadcast a block to the network each at the same time. The idea behind this consensus is to prevent double-spending, as honest nodes will only accept a block if all transactions in the block are valid and not already spent. Attackers can here try to overtake the network by redoing the proof-of-work. This can be done by having more computation power than the rest of the network, as the attacker needs to redo proof-of-work for blocks and append blocks faster than the current main chain is.

Blocks in bitcoin are generated every 10 minutes. If the blocks are created faster, the difficulty is increased to accommodate this. This is done by increasing the nonce.

## Niels

### What are the fundamental properties of a blockchain?

A blockchain should, at its core, be decentralized, meaning data is distributed across a multitude of nodes that agree on the truth/state. Another fundamental property of blockchains is immutability, such that data cannot be deleted or changed once the network accepts them. Lastly, blockchains also provide a vast amount of security and make it possible to transact with people you don't necessarily trust.

### What are the important elements that make up the blockchain?

A blockchain is a combination of many different technologies. Network protocols ensure we can communicate with various nodes. Cryptography and a consensus algorithm guarantee trust between participants and allow users to transact with each other in a decentralized manner. 

Transactions can take many different forms and don't necessarily have to be a transfer of value.

Mining nodes pick up each transaction and place it into a block if their transaction fee is sufficient. If the mining node succeeds in finding a solution to the current hash problem, the block is mined, and the transaction is now (somewhat) complete.

### What specific challenges do the elements address, and how do they address them?

Some of the key elements that (especially public) blockchains aim to solve are:
- communication between untrusted parties
- transfer of value
- transparency
- non-repudiation
- single point of failure

Communication between parties is secured with a consensus algorithm and a unified network protocol. 

Transfer of value is achieved using the same protocols, and mining usually determines how money is generated. 

Transparency is an inherent feature of any (fully) public blockchain, as any node participating can review the entire history of the chain.  

Cryptography and the use of public and private keys solve the non-repudiation issue, as the broadcaster of a transaction has to sign it.

Lastly, since blockchains are decentralized, there is no single point of failure; thus, the network is unaffected should one node break.

### How are Bitcoin and Blockchain related?

All blockchains are not bitcoin blockchains, but all bitcoin blockchains are built on the foundational theoretics behind blockchain technology. 

Bitcoin plays a crucial part in the success and introduction of the implementation and initial theories behind blockchains. 

### What is Nakamoto Consensus, and what issues does it solve?

The Nakamoto consensus is a way to agree on the truth in the blockchain and establish trust between parties. 

The consensus dictates that proof-of-work is used and how forks in the blockchain are handled. 

Due to the inherent "Byzantine General Problem," public blockchains are vulnerable to Sybill Attacks; for this reason, we need to have a form of consensus that tackles these issues.

Identities in a network come cheap, making it easy for an attacker to create many nodes that could lead them to gain the majority within the network and thus make decisions on behalf of everyone. The Nakamoto consensus solves this by tying identities to the amount of processing power they can provide rather than the number of identities created. An attacker now needs to acquire a massive amount of hardware to sway the network, which is much more difficult.
 
The Nakamoto consensus also states what should happen when a fork occurs. A blockchain may experience a disagreement on the current state when one or more nodes simultaneously (or at least an overlap can happen as propagation through the network is happening) solve the hash problem. Thus a fork is created, at which point we now have multiple sources of truth within our network, which is unacceptable, especially when we're talking about currencies like bitcoin. In these instances, the longest chain is chosen as the single source of truth, and the other chains will be abandoned.

## Questions

- What is non\-repudiation?
  - You cannot change your mind about an aggrement, in terms of blockchain, you can't change a transaction after it has been processed. Additionally, the identity of the user is bound to their key, making it cryptographically secure, thus a user can't claim that key wasn't used for the transaction.
- How are miners rewarded?
  - Only when the correct hash has been found / discovering blocks. If the blockchain forks and your block is not included you do not get a reward.
- How much do miners receive when they mine a block?
  -  The rewards halves after the creation of every 210,000 blocks / roughly every 4 years. The first reward was 50 and the current reward is 6.25 BTC.
- What is the block time?
  - Roughly 10 minutes. If the computation power of the network increases, the difficulty of finding a new block increases as well. This can happen from block to block based on the network protocol.
- Which consensus algorithm does bitcoin utilise?
  - Nakamoto consensus (longest chain wins)
- How does a fork occur?
  - A fork occurs when two (or more) blocks are found at roughly the same time and the miners disagree on what is the current one. This is due to the nature of a P2P network, where data is propagated throughout the network.
- How does bitcoin prevent double spending of coins?
  - A nodes contains a list of UTXO (unspent transaction outputs) which can be combined into a balance for the node. A locking script is used for every outgoing transactions with a list of conditions which needs to hold before the coins can be spent. An unlocking script is placed on the input that satisfies the locking script. This means that the transaction only can be included in the block, if the node actually has the balance defined in the transaction. 
- What happens when a fork occurs?
  - Users will have to wait for more blocks to complete to confirm the longest chain.
- What happens if a fork is abandoned?
  - It introduces latency, and transactions that were abandoned will be re-pooled.
- Who pays the transaction fee?
  - The fee will be subtracted from the amount sent, thus the sender will be paying.
- Is bitcoin turing complete?
  - No, bitcoin is unable to process anything that contains loops
- Why is it essential that bitcoin ISN'T turing complete?
  - It removes the risk of transactions running infinitely (halting problem)
- What are the flow control statements in bitcoin script?
  - NOP (does nothing), IF, NOTIF, ELSE, ENDIF, VERIFY (marks a transaction as valid or invalid) and RETURN.