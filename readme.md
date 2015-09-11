# Slim 3 ADR Concept

Concept code exploring the Action, Domain, Responder pattern proposed by P M Jones (see link below).
The pattern maps more closely to a web based process then MVC but it's conceptually very similar.
It's DRY and has good separation of concerns.

This is my first attempt at a Slim project so I'm still getting up to speed.

With thanks to geggleto and all the guys who make Slim Framework happen.

### A couple of points:
+ Use the Container foundHandler to inject the app instance into the Action (Todo)
+ Using the Action constructor should probably be reworked
+ It would be great to use the __invoke method on the Responders


### Required reading:

The ADR pattern
<https://github.com/pmjones/adr>

An alternative version by geggleto
<https://github.com/geggleto/blog>

Handle Psr-7 responses nicely
<http://akrabat.com/logging-errors-in-slim-3/>
