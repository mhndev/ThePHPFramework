# ThePHPFramework
a pretty simple and educational php framework.

(it's under development and not complete yet)

By developing this php micro framework I have 2 intention:

1. educational. so it should be as simple as possible. by that I mean even an new php developer who has started learning php
in less than 2 month, should understand all concepts and code completely.

2. I want to prove how easy and beautiful it is to write well designed object oriented code.
how easy it is to write loosely coupled code.
how beautiful it is to implement all psr interfaces.

I don't know why most well known php frameworks are not implementing all psr contracts yet ??!!!!
 consider how perfect it is when you use composer to get your 
 
 http messages
 application http kernel
 router
 ioc container
 dispatcher
 logger
 ....
 
because all these services should share an interface.
which it is possible to write your php application without using a php framework.

in this framework you'll see a psr directory which absolutely should have psr interfaces.
but it hasn't already because it would make it complex which I don't want it to be complex.

other than complexity psr interfaces are not complete yet. so I chose to use my own psr interfaces for now.
maybe in future I make switch them with psr interfaces.
for now just assume they're reall psr interfaces :)
