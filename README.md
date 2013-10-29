helpgen-tools
=============

This system was used to generate help files for Studio's embedded Eclipse help, including Mule elements and separate pages for Mule Global Elements. 


page.php is the real workhorse, generates a formatted page with links to the sample code, the user and reference doc, etc.. 

This set of links to relevant resources like examples (and in fact all the links in this content) had to be manually curated.

Database instance is the same one used for other doc utility projects. 
Pagetoc.php provides for a generated list of all pages in all known categories, I don't think however that ou use its output in any way in the product. 


Shell scripts: buildit.sh and build-globals.sh. Each runs, kicking off wget to fetch the generated page for every output and write it to a file (using wget). Run buildit.sh and build-globals.sh to generate the desired output. You may want to edit them further. Then you will have to take the resulting collection of HTML files, and put it into the Eclipse help file directory structure. 

Open issues:

* This is really of relatively limited usefulness. A quick hack to serve an immediate need...not really meant to evolve into a good solid long term answer.

* There are a couple of tables in the database schema that aren't used for anything in the current version of the script. Table helplinks has all the meaningful information.