---
title: doing scheme the right way
description: An overview of the math behind power sets, and three algorithms used to generate them.
code: true
math: true
date: 2015-02-04 21:00:00
tags:
  - scheme
  - racket
  - recursion
---

# what is scheme
Scheme is a powerful functional programming language. At its core it is a very minimal language and very easy to impliment when
compared to other languages. This is good and bad at the same time. It is easy to get started programming in scheme but often times
programmers that are experienced in an OOP language can have trouble getting started. It requires a diffrent way of appoaching problems
when programming in scheme. This is a quick guide to give a short introduction to scheme programming as well as scheme best practices that should be used.

## scheme IDEs
There are several good options when looking for an enviroment for scheme developnment. The best by far would be Dr.Racket, easy to use with some pretty powerful features. The debugger of Dr.Racket is also easy to use but can make scheme programming so much easier. Second to Dr.Racket is Emacs. Compared to Dr.Racket Emacs has a steeper learning curve but it has some features that are not present in Dr.Racket. So for the advanced scheme programmer Emacs might be a good option, but for most scheme programmers Dr.Racket is the better choice.

---

<span id="note1">[1](#link1)</span>: (completely tangentially) whenever I mention set theory I can't help but think of
the infamous [Principia Mathematica](http://en.wikipedia.org/wiki/Principia_Mathematica): a staggering, three-volume
attempt to axiomatize all of mathematics, published by [Bertrand
Russell](http://en.wikipedia.org/wiki/Bertrand_Russell) and [Alfred North
Whitehead](http://en.wikipedia.org/wiki/Alfred_North_Whitehead) in 1910-'13, that relied heavily on sets. It's
notorious, amongst other things, for proving $$1 + 1 = 2$$ in no less than 379 pages. Check it out.
