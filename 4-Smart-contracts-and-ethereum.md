
# Smart Contracts & Ethereum incl. Mandatory 2

## Daniel

A smart contract is a secure and unstoppable computer program that automatically executes and is enforceable. A smart contract consists of the following properties:
- Automatically executable
- Enforceable
- Semantically sound
- Secure and unstoppable

Ethereum utilises GHOST (Greedy Heaviest Observed SubTree) protocol as a consensus algorithm. As the block times are much faster than bitcoin’s, Nakamoto consensus should not be used as it would create a considerable overhead of blocks and fewer incentive rewards for the miners. GHOST allows miners to reference competing mined blocks (uncles) to add weight to their chain to calculate the longest chain or the chain with the greatest cumulative difficulty. Uncles add weight to the chain, which is important as the heaviest chain wins in Ethereum. 

GHOST is a chain selection rule that makes use of orphaned blocks and incorporates them into the main chain and partially rewarding the miner. This is important as the inclusion of orphaned blocks increases the difficulty of an attack on the network. Miners that did not win the block are also a part of the total computing power for the block validation. 

A smart contract is an executable program, which can run on a blockchain. This type of program is secure, unstoppable, and represents an agreement between parties, which is enforceable. The program cannot access external data, hence why oracles can feed data into the program. A contract is a legally binding agreement between two or more parties. A smart contract contains a set of rules which defines how parties can interact with each other. When the predefined rules are met, the agreement between the parties is enforced. When a smart contract is used, less processing time will be needed compared to a regular contract.
Ethereum supports smart contracts as its blockchain has a built-in Turing-complete programming language. This enables anyone to create their smart contracts on the platform. These contracts can be run by anyone but have a price for the processing used. 
Smart contracts could be used for voting to avoid voter fraud. Each vote will be recorded for each person on the blockchain, and a person will only be allowed to vote once.
Uniswap is decentralized and used to exchange cryptocurrency tokens on the Ethereum blockchain with the help of smart contracts. 

## Niels

### What are the fundamental properties of a smart contract?

- They are secure, as they need each participant to use their own cryptographically signed key to transact. 
- They are autonomous and can be event-driven.
- Enforceability - They don't require trust between participants

### What are smart contracts in relation to "normal" (legal) contracts?

"Normal" contracts are enforceable by our judiciary system; if a party fails to uphold their end, they can be dragged into court and until parties have settled on a solution. A "normal" contract also allows vagueness, sometimes giving parties more freedom to roam the legal space of the contract. This vagueness is both an upside and downside, as it allows contracts to be drafted without being too explicit, making contracts (at times) easier to comprehend. At the same time, they often rely on case law, making it hard for the layman to understand what they may be agreeing to.

Smart contracts are enforceable by the network instead, which requires much less overhead than traditional contracts. However, at times, the drafter of the smart contract also needs to be excruciating explicit, making sure to capture all pitfalls as the contract may otherwise result in something incorrect or being exploited. 

### What are the important elements that make up a smart contract?

They can be executed much faster and cheaper than ordinary contracts, removing the possible need for a middleman. Additionally, smart contracts are "self-documenting", as users on the network can always view the outcome of a smart contract.

### How does Ethereum address smart contracts?

Ethereum supports smart contracts at its core; not only does this allow for alternative coins to be created on the same chain as the Ethereum network, but it also allows developers to create advanced logic. Since Ethereum is Turing complete, developers can use control flow statements such as while loops. The loops are great for developers, but they come with a significant downside: we can no longer guarantee that the smart contract will come to a halt. Ethereum solves this problem by tying CPU time to a networking fee. The developer specifies an upper bound in GAS, and the contract can then run until it automatically halts or the GAS is depleted. Should the latter occur, changes made by the contract will be rolled back and never get committed onto the blockchain.

### Give some examples of smart contracts or areas that could benefit from smart contracts.

Escrow is a big topic within smart contracts. Sites like Den Blå Avis could utilize a smart contract to ensure the buyer has the funds to cover the transaction and that money is only transferred once the buyer has received the package (this would require an oracle that could pull data from tracking sites). Betting sites can also use smart contracts to show how their randomness is calculated, making it more transparent.

## Questions

- What are uncle blocks?
  - Blocks that would otherwise be orphaned and abandoned.
- How long can uncle blocks get?
  - Infinitely (however unlikely), the uncle reward however has diminishing returns as the lineage increases
- How does nakamoto consensus differ from GHOST?
  - Nakamoto consensus picks the longest chain whereas GHOST picks the heaviest one.
- What are nephew block?
  - Child blocks added to an uncle block
- Why is not feasible to continue mining uncle blocks?
  - Nephew blocks will diminish in reward to discourage miners from going down that path
- How does Ethereum get away with a turing complete language?
  - Processing time is bound to a fee. A transaction can keep processing until its fee (GAS) is depleted
- What does enforceability mean?
  - It means that the contract is guaranteed to output a given value, given the input is valid and you pay enough to cover the fees.
- What is the programming language of smart contracts in ethereum?
  - The programming language used is called Solidity.
- How many times are smart contracts executed on the blockchain?
  - The smart contract is executed for every miner trying to mine the transaction. When the smart contract is picked up by a miner, the contract is run in EVM to test the validity of the contract before it is broadcasted to the whole network.
- How do smart contracts differ from normal contracts?
  - Verbosity, you need to specify everything and leave nothing to interpretatio
- What is GHOST?
  - The consensus algorithm utilised by ethereum. As blocks happen at approximately 15 seconds in the blockchain, the length of the chain is not used to determine the source of truth, but the weight of the chain is. This is useful as forks can happen at any given time due to the fast generation of blocks. Here is the abandoned (uncle) blocks included and these add to the weight of the chain.
- What is a state machine?
  - A machine that keeps track of state, allows ethereum to be more than just a money store and keep track of the "current" value of a variable.
- Why is the state significant?
  - Ethereum use states to determine the truth in the blockchain.
- What is the ethereum virtual machine EVM?
  - Is a virtual machine that is deeply connected to the ethereum network and allows contracts to be run in an isolated manner. 
- How are smart contracts unstoppable?
  - Contracts can't be stopped, their actions against the blockchain (state) is immutable - the state can only be altered with a new transaction.
- What is web3?
  - Websites published on the blockchain
- What types are supported in ethereum?
  - Boolean, int, address, enums, functions, arrays, structs & mappings