# Configuring the IELab HubZero Instance via the Administrator Console

Login to the Administrator Dashboard at https://130.56.249.170/administrator/ then execute the following process:

## Set the Web Site Name

1. Select Global Configuration from the Site menu.
2. Edit the fields in the details panel as follows:
   a) Site Name: Industrial Ecology
3. Close the details page using the "Save and Close" button in the button group at the top left corner of the page.

## Creating A New HubZero Home Page

1. Duplicate the existing home page in the list of Articles via the Article Manager.
  a) Click on the Home article name to navigate to the details page for the Home article.
  b) Click on the "Save as Copy" button in the button group at the top left corner of the page.
  c) Adjust the fields in the new details page as follows:
    i/ Title: IELab Home
    ii/ Alias: ielab-home
    iii/ Category: 
    iv/ Status: Published
    v/ Modify the article text removing all content below the HTML block with id "Features".
    vi/ Save the page using the "Save" button in the button group at the top left corner of the page.
    vii/ Close the details page using the "Close" button in the button group at the top left corner of the page.
2. Create a replacement default menu item for IELab Home. 
  a) Select the Menu Manager option from the Menus Menu. Then navigate to the Menu Items panel.
  b) Create a new menu item by clicking the "New" button. This will closely match the existing Home menu item .
  b) Edit the fields in the new menu's details page as follows:
    i/ Select a menu item type of "Single Article".
    i/ Menu Title: IELab Home
    ii/ Alias: ielab-home
    iii/ Default Page: yes
    iv/ Select Article: IELab Home
    v/ Article Options: Show Title: Hide
    
At this point refesh the user home page should show the new IELab home page.

     