#!/usr/bin/env swipl

:- use_module(library(http/thread_httpd)).
:- use_module(library(http/http_dispatch)).
:- initialization main.
:- http_handler(/, say_hi, []).

say_hi(_Request) :-
	format('Content-type: text/plain~n~n'),
	format('Hello World!~n').

main :-
	http_server(http_dispatch, [port(3000)]),
	thread_get_message(quit).
