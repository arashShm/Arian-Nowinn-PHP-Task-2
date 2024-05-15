<h1>Arian Nowin Php tasks </h1>
<p> Task 2 : Retrieving 3 last transactions From Banks</p>
- - - - - - - - - - - -  - - - - - - - - - - - -- - - - - - -

<h3> Description </h3>
<p>
The Bank Class controlls the Mellat and Saman bank
this class is abstract due to not being new called

it has two methods, 
<li> abstract public function setToken() </li>
<li> public function getTransaction() </li>

the first one sets token in every class which inherits Bank class
it is abstract because it needs to be override to deal with tokens from each bank and save it $token variable


the second one returns transactions from each bank
</p>