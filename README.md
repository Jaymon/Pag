# Pag

A really lightweight php tag parser for quickly finding certain tags in arbitrary html.

This library is incredibly old, but the `demo.php` script runs, so I guess it still works (at least on the php 5.5.36 version installed on my Mac).

This library continues my walk down [nostalgia lane](https://github.com/Jaymon/Feedo).


## 1 Minute Getting Started

It's pretty easy:

```php
$pag = new Pag($html);
$tag_list = $pag->get('a');
```

You can look at `demo.php` to see full working code.


## Notes

Pag uses regex to parse the html, I know, end of the world, you can't parse html with regex, it just simply isn't possible. For every chunk of html that can't be parsed with regex, I can find a chunk of html that can't be parsed with php's internal DOM parser. This works for me, it doesn't work on everything, but it works on what I've needed it to work on, and most importantly, it's worked when the DOM parser failed because I didn't specify the doctype right, or because there was an error in the syntax...yada, yada, yada.

Also, because Pag lets you set the start and stop deliminators for the tags, you can use it to parse markup (eg, [tagname]body[/tagname]) and the like.

If you need a more complete solution, with CSS selectors and the all that jazz, [look here](http://stackoverflow.com/questions/260605/php-css-selector-library)

