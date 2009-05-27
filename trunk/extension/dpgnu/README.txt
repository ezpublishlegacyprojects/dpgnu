dP Google News URL extension
===================================
The dP Google News URL extension makes Google able to index your articles in Google News.

Google News can index your site if the URL for each article contains an unique number
consisting of at least three digits (http://www.google.com/support/news_pub/bin/answer.py?hl=en&answer=68323).
This extension uses eZURLAliasFilter to add the Id of the node in URL.
URL Translation feature must be enabled (see your site.ini).

Releases
=====
2.0.3
	- class check more PHP5 compliant
2.0.2
	- change case of ezinfo attributes
2.0.1
    - fixed Strict standards: Only variables should be assigned by reference in [...]/extension/dpgnu/urlfilters/dpgnu.php on line 13

2.0.0
    - PHP5/eZP4-ready
1.1.0
    - allow to ignore chidren of a node in ini file
1.0.0
    - first release

TO DO
=====