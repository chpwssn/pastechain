#pastechain
###blockchain-based paste bin
This project is a blockchain-based pastebin to demonstrate a use case for blockchain technologies.

A public blockchain allows text to be pasted on the chain without risk of being removed by a central authority as all
nodes in the network receive a copy of the text and removing data from the chain is extremely difficult. Anyone can 
participate in the network and run the web application, thus adding to the resilience of the data.

##Getting Started
###Pasting
To add data to the blockchain-based paste bin visit [https://pastechain.nerds.io/](https://pastechain.nerds.io/).

###Running a Node
To run your own node [download and install MultiChain](http://www.multichain.com/download-install/) and connect to the 
network by running ```multichaind pastechain@1.pastechain.nerds.io:2693``` or ```multichaind pastechain@2.pastechain.nerds.io:2693```
or point to another node in the pastechain network.


Clone this repository into your LAMP web server. Enter the directory, copy ```config-example.php``` to ```config.php```,
edit and run ```composer install```.

##Acknowledgements
The paste bin runs on a [MultiChain](http://www.multichain.com) blockchain and uses [libphp-multichain](https://github.com/Kunstmaan/libphp-multichain).