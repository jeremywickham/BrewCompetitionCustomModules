BrewCompetitionCustomModules
============================

Brewer Scoresheets
==================
About
-
This will show a link on the page for the entrant to download a zip file of their entry's score sheet for the competition. The zip file will be named <Competition Name>_<First Name>_<Last Name>.zip and will contain all of the score sheets for that entrant. The score sheet type must be a PDF. 

Installation and Configruation
-

Create directory on your webserver in the brew competition directory called 'scoresheets'

Add the .htaccess file to disable anyone from browsing the directory

Upload score sheets to the directory with the file name of the four digit entry number.pdf (e.g. 0001.pdf)

Upload brewer_scoresheets.php and generate_brewer_scoresheets.php to <brewcomp directory>/mods directory

Within the Brew Competition GUI
  - Turn on Use Custom Modules on the Site Preference Page
  - Add a custom module
    - Custom Module Name: <Whatever you wish>
    - Description: <Describe this thing>
    - Filename: brewer_scoresheets.php
    - Type: PHP Code or Function
    - Permission: Note: I set to top level admin until after the competition is over, then set to all users, so the link doesn't show up
    - Extends Core Function: User's My Info and Entries
    - Rank: 1
    - Display Order: N/A (Stand Alone)
    - Enable? Yes (unless you wish to disable until after the competition is over)

I could do some "smart" functions to show the link after the competition is over and once all of the entries have scores posted. This is on my todo list for the near future. 

Cheers!
