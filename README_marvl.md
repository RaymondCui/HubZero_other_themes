# IELab2015

Joomla extensions (template and module) to customise HubZero, so it can be used as part of the IELab Virtual laboratory.

These extensions apply to HubZero version 1.3, which in turn is based on Joomla version 2.5.

## Template

This template is used for the entrance and other pages of the HubZero instance used by IELab.
The style (colour palette and fonts) follow the existing IELab web site appearance at http://ielab.edu.au/.
The default HubZero template was copied and modified by adding an over-ride style sheet (ielab.css).

To use this template, git export the contents into a directory called IELab2015, or whatever, 
and then zip the directory and its contents into the file IELab2015.zip.

Use the Joomla administrator interface for extension management to upload and install the zip file.
Any previous versions need to be deleted first.
Then use the template manager to ensure the template is used as the default for the site.

See the instructions located in the docs folder to  modify this template for additional HubZero sites.

## Module - Welcome

The IELab welcome module is used to show the site introduction and splash image.

To use this module, git export the contents into a directory called mod_ielabwelcome 
and then zip the directory and its contents into the file mod_ielabwelcome.

Use the Joomla administrator interface for extension management to upload and install the zip file.
Any previous versions need to be deleted first.
Then use the module manager to publish the ielabwelcome module in the welcome block of the page at position 2.

## Module - Footer

The IELab footer module is used to show the project sponsor (NeCTAR) 
and collaborators (a number of Australian Universities).

To use this module, git export the contents into a directory called mod_ielabfooter 
and then zip the directory and its contents into the file mod_ielabfooter.

Use the Joomla administrator interface for extension management to upload and install the zip file.
Any previous versions need to be deleted first.
Then use the module manager to publish the ielabfooter in the footer block of the page at position 3.

## Distribution

Packaged versions of the template and module
can be downloaded from the distribution directory.

## Known Problems

### 1.

The IELab Footer module does not display well on the error web page as the the base template for the error page does not load modules properly. Specifically it does not load module style sheets or respect the modules settings such as title display. 

The workaround is to NOT show the IELab Footer module on the error page, and this can be accomplished by using the Module Assignment with the option "Only on the pages selected" and then selecting all relevant pages.