# Hyperledger

- What is hyperledger and how does it differ from bitcoin and ethereum?
- How does it work?
- Blocks, consensus
- Execute-order-validate instead of order-execute

When creating a Hyperledger network we need to:
- Create the basis for the network
  - Adding Certificate Authority
  - Adding network configuration
  - Adding an organization to the network configuration
  - Adding an orderer for the network configuration to use
- Add network administrators
- Define consortium
- Create a channel
- Connecting Peers
- Install chaincode
- Add applications

## Overview

### Organizations

- These are known as the members of the blockchain network
- They are invited to join by the network provider
- They are joined by adding the organizations MSP to the network
- Can range from individual to large corporations
- A number of organizations constitutes a consortium

### Network configuration

- Contains the policies that describe the starting set of administrative capabilities for the network
- Initially only the organization has rights over the network

### Orderer

- A defined collective of nodes
- Orders transactions into a block
- Distributes blocks to connected peers
- Validates and commits
- Supports pluggable implementations

### Certificate Authorities (CA) and MSPs (Membership service provider)

- Issue certificates to administrators and network nodes
- Dispenses X509 certificates to identify components as belonging to organization
- Different components of the blockchain network use certificates to identify themselves to each other as being from a particular organization
- Usually more than one CA supporting a blockchain network
- Different organizations often use different CAs
- MSP maps certificates dispensed by the CA to member organizations
- Associates certificate holders with organization

### Certificate Authorities

A chain of trust is established between a Root CA and a set of Intermediate CAs. The important thing here is that the issuing CA for the certificates is the Root CA or has a chain of trust to the Root CA.

### Membership Service Provider

The MSP identifies which Root CAs and Intermediate CAs that are accepts to define the members of a trusted domain. This is done by listing the identities of their members or by identifying which CAs are authorised to issue valid identities for their members.

### Fabric member

The identity of the fabric member is issued by a CA that is trusted by the network. Membership is achieved by adding the member’s public key to the organization’s MSP.

## Daniel

Hyperledger is a permissioned blockchain. A permissioned blockchain, compared to a permissionless blockchain, contains only identified participants. This type of blockchain provides a secure way of interactions between participants who do not necessarily trust each other by utilising Byzantine fault tolerance. 

Hyperledger Fabric components are divided into the following:
Membership service provider, which defines rules for how identities are allowed access to the network. Here is a Certificate Authority used.
Organisations can have certain rights, as issuing certificates and endorsing transactions.

Clients are applications that can propose transactions to the blockchain. 
Peer nodes are like regular nodes. They can commit transactions, maintain the state, run chaincode, and have a copy of the ledger.
Nodes can be authorised to connect to multiple channels. Each channel works as a blockchain.

Orderer provides the consensus protocol to order the transactions submitted by the clients and peers.
Chaincode is Hyperledger Fabrics type of smart contract.

Bitcoin and Ethereum are permissionless blockchains which means that anyone can participate in their respective networks. Hyperledger Fabric, on the other hand, is permission-based, which means that each participant needs to be identified as a valid participant before they can participate. In Hyperledger, do transactions need to be endorsed to be valid. The endorsement happens between the organisations involved in the transaction.

![](assets/2022-01-16-00-33-21.png)

## Niels

### What is Hyperledger Fabric?

Hyperledger Fabric is a permissioned blockchain framework backed by many larger corporations, most notably  IBM, Xiaomi, American Express, and many more. Hyperledger caters to the industry and aims to provide a solution for companies to incorporate blockchain into their infrastructure that accounts for authentication and authorization by the different actors on the network.

The Hyperledger Fabric network contains many different nodes, called peers, that are tied to an organization. The framework also supports various programming languages (Node, GoLang, and Java), allowing developers to jump right in.

### What are the fundamental components of Hyperledger Fabric, and what are the responsibilities of the different components?

The Hyperledger Fabric network contains many different elements, such as:
Certificate Authorities are responsible for issuing certificates for organizations that are participating within the network. Organizations connecting to the network will have to provide an X.509 digital certificate to authenticate. 
Organizations are considered to be members of the network; they vary in size. Once an organization has joined a network, members of the organization can operate within the network, to the extent of the organization's certificate, by authenticating with their public key.
Channels allow different contracts to be deployed apart from each other, making it easy to separate access between members, which makes a lot of sense when you have multiple organizations, and you don't want them to access everything within the network. Each channel has its separate ledger.
Peers are essentially nodes on a given channel that hold a copy of the blockchain. Using the channel, they can communicate with participant peers and query the world state.
Orderer is a unique phenomenon within the framework. An ordering node on the network exists and, as the name suggests, orders the transaction within the different channels/ledgers.
Chaincode / Smart Contracts is the actual code executed on the peers of the network, validated and endorsed. Chaincode can consist of multiple smart contracts.
Applications are interfaces that users use to interact with the underlying blockchain.

### How does Hyperledger Fabric differ from Bitcoin and Ethereum?

Hyperledger Fabric is widely different when compared to traditional blockchains such as Bitcoin and Ethereum. The latter two are public blockchains that roam within a trustless environment, which means special consensus algorithms have to be implemented to secure the blockchain's integrity and guarantee consistency. Hyperledger Fabric being permissioned means an inherent trust between participating users on the blockchains since they need to authenticate to access the network.

The consensus algorithm found within Bitcoin and Ethereum is also responsible for ordering and creating blocks within their respective networks. 
Such an algorithm doesn't exist within Hyperledger Fabric, so it uses an ordering service, which both orders transactions within each blockchain and bundles them into a block when need be. 
Forks in the blockchain are not possible within Hyperledger Fabric, as transactions are either validated by all members and committed onto the blockchain or discarded. 

When chaincode is updated, the compiled code needs to be deployed on each peer within the blockchain. This approach is widely different from Bitcoin and Ethereum, where the actual code is part of the transaction and then run by nodes. Within Hyperledger Fabric, only the params of the methods are pushed onto the blockchain, and the participating nodes then execute the contract with the given input and endorse the transaction if it succeeds. 